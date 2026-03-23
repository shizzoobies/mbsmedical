<?php
/**
 * MBS Medical Theme Functions -- v3.0.0
 */

// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );

// Enqueue styles and scripts
function mbs_enqueue_assets() {
    wp_enqueue_style(
        'mbs-style',
        get_stylesheet_uri(),
        [],
        '3.0.0'
    );
    wp_enqueue_style(
        'mbs-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );
    wp_enqueue_script(
        'mbs-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '3.0.0',
        true
    );
    wp_enqueue_script(
        'mbs-chat',
        get_template_directory_uri() . '/assets/js/chat.js',
        [],
        '3.0.0',
        true
    );
    wp_localize_script( 'mbs-chat', 'mbsChatData', [
        'assistantImg' => get_template_directory_uri() . '/assets/img/chat-assistant.png',
        'ajaxUrl'      => admin_url( 'admin-ajax.php' ),
        'nonce'        => wp_create_nonce( 'mbs_chat_nonce' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'mbs_enqueue_assets' );

// Helper: active nav aria-current attribute
// Returns aria-current="page" on the active nav item.
// Usage: <a href="..." <?php mbs_nav_class( 'services' ); ?>>Services</a>
function mbs_nav_class( $check ) {
    if ( $check === 'home' && is_front_page() ) {
        echo 'aria-current="page"';
        return;
    }
    if ( $check !== 'home' && is_page( $check ) ) {
        echo 'aria-current="page"';
        return;
    }
}

// -- Claude API Chat Handler --------------------------------------------------
add_action( 'wp_ajax_mbs_chat_message',        'mbs_handle_chat_message' );
add_action( 'wp_ajax_nopriv_mbs_chat_message', 'mbs_handle_chat_message' );

function mbs_handle_chat_message() {

    // 1. Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'mbs_chat_nonce' ) ) {
        wp_send_json_error( [ 'message' => 'Security check failed.' ], 403 );
        return;
    }

    // 2. Rate limiting -- 15 messages per IP per hour
    $ip       = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
    $rate_key = 'mbs_chat_rate_' . md5( $ip );
    $count    = (int) get_transient( $rate_key );
    if ( $count >= 15 ) {
        wp_send_json_error( [ 'message' => 'You\'ve sent a lot of messages! Please use our contact form and we\'ll get back to you within one business day.' ], 429 );
        return;
    }
    set_transient( $rate_key, $count + 1, HOUR_IN_SECONDS );

    // 3. Sanitize and validate input
    $user_message = isset( $_POST['message'] ) ? sanitize_text_field( wp_unslash( $_POST['message'] ) ) : '';
    if ( empty( $user_message ) ) {
        wp_send_json_error( [ 'message' => 'No message provided.' ], 400 );
        return;
    }
    if ( mb_strlen( $user_message ) > 500 ) {
        wp_send_json_error( [ 'message' => 'Message is too long. Please keep questions under 500 characters.' ], 400 );
        return;
    }

    // 4. Get API key -- from wp-config.php constant or admin settings
    $api_key = defined( 'MBS_CLAUDE_API_KEY' ) ? MBS_CLAUDE_API_KEY : get_option( 'mbs_claude_api_key', '' );
    if ( empty( $api_key ) ) {
        wp_send_json_error( [ 'message' => 'Chat is temporarily unavailable. Please use our contact form and we\'ll get back to you.' ], 500 );
        return;
    }

    // 5. System prompt -- short answers + page links as structured JSON
    $system_prompt = 'You are the MBS Medical chat assistant. Your job is to give a short, friendly answer and point the patient to the right page on the site for full details.

EMERGENCY RULE: If anyone describes a medical emergency (chest pain, trouble breathing, severe pain, crisis, self-harm), respond with this exact message field: "If this is a medical emergency, please call 911 or go to your nearest emergency room right away." Include no links. Stop there.

ABOUT MBS MEDICAL:
Cash-pay telehealth practice. Three services: Primary Care, Medical Weight Loss, TRT Evaluation. No insurance accepted. All visits via secure video call. Same-week appointments typically available Mon-Fri 8am-6pm.

SITE PAGES -- use these URLs in your links array:
- Homepage: /
- Pricing section: /#pricing
- All Services: /services/
- Primary Care: /primary-care/
- Medical Weight Loss: /weight-loss/
- TRT Evaluation: /trt/
- About / Team: /about/
- Contact / General questions: /contact/
- Book an appointment (external): #PRACTICE-BETTER-PORTAL-URL

OUTPUT FORMAT -- you must always respond with valid JSON only. No markdown, no code fences, just raw JSON:
{
  "message": "One or two sentence answer that gives the key point and tells them the page below has the full details.",
  "links": [
    { "label": "Button label", "url": "/page/", "external": false }
  ]
}

RULES:
- "message" must be 1-2 sentences maximum. Be warm and direct.
- Always include 1-3 relevant links so the patient can go read the full details.
- For booking links use external: true since it opens the portal.
- Never give clinical advice, diagnoses, or treatment recommendations.
- Never make up pricing numbers -- say fees are confirmed at booking.
- If something is outside your knowledge, link to /contact/ with label "Send Us a Message".';

    // 6. Call Anthropic API
    $response = wp_remote_post( 'https://api.anthropic.com/v1/messages', [
        'timeout' => 25,
        'headers' => [
            'Content-Type'      => 'application/json',
            'x-api-key'         => $api_key,
            'anthropic-version' => '2023-06-01',
        ],
        'body' => wp_json_encode( [
            'model'      => 'claude-haiku-4-5',
            'max_tokens' => 300,
            'system'     => $system_prompt,
            'messages'   => [
                [ 'role' => 'user', 'content' => $user_message ],
            ],
        ] ),
    ] );

    // 7. Handle API errors
    if ( is_wp_error( $response ) ) {
        wp_send_json_error( [ 'message' => 'Chat is temporarily unavailable. Please use our contact form and we\'ll get back to you within one business day.' ], 500 );
        return;
    }

    $status   = wp_remote_retrieve_response_code( $response );
    $api_body = json_decode( wp_remote_retrieve_body( $response ), true );

    if ( (int) $status !== 200 || empty( $api_body['content'][0]['text'] ) ) {
        wp_send_json_error( [ 'message' => 'Chat is temporarily unavailable. Please use our contact form and we\'ll get back to you within one business day.' ], 500 );
        return;
    }

    // 8. Parse Claude's JSON response
    $raw = trim( $api_body['content'][0]['text'] );

    // Strip markdown code fences if Claude wrapped the JSON (safety net)
    $raw = preg_replace( '/^```(?:json)?\s*/i', '', $raw );
    $raw = preg_replace( '/\s*```$/', '', $raw );

    $parsed = json_decode( $raw, true );

    if ( ! $parsed || empty( $parsed['message'] ) ) {
        // Fallback: return raw text with no links if JSON parse fails
        wp_send_json_success( [
            'message' => sanitize_text_field( $raw ),
            'links'   => [],
        ] );
        return;
    }

    // Sanitize message
    $message = sanitize_text_field( $parsed['message'] );

    // Sanitize links
    $links = [];
    if ( ! empty( $parsed['links'] ) && is_array( $parsed['links'] ) ) {
        foreach ( $parsed['links'] as $link ) {
            if ( empty( $link['label'] ) || empty( $link['url'] ) ) continue;
            $links[] = [
                'label'    => sanitize_text_field( $link['label'] ),
                'url'      => esc_url_raw( $link['url'] ),
                'external' => ! empty( $link['external'] ),
            ];
        }
    }

    wp_send_json_success( [ 'message' => $message, 'links' => $links ] );
}

// -- Admin Settings Page -- MBS Chat API Key ----------------------------------
add_action( 'admin_menu', 'mbs_add_settings_page' );

function mbs_add_settings_page() {
    add_options_page(
        'MBS Chat Settings',
        'MBS Chat',
        'manage_options',
        'mbs-chat-settings',
        'mbs_render_settings_page'
    );
}

add_action( 'admin_init', 'mbs_register_settings' );

function mbs_register_settings() {
    register_setting( 'mbs_chat_settings_group', 'mbs_claude_api_key',  [ 'sanitize_callback' => 'sanitize_text_field' ] );
    register_setting( 'mbs_chat_settings_group', 'mbs_partner_email_1', [ 'sanitize_callback' => 'sanitize_email' ] );
    register_setting( 'mbs_chat_settings_group', 'mbs_partner_email_2', [ 'sanitize_callback' => 'sanitize_email' ] );
}

function mbs_render_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) return;
    $saved_key = get_option( 'mbs_claude_api_key', '' );
    $masked    = $saved_key ? substr( $saved_key, 0, 18 ) . str_repeat( '.', 20 ) : '';
    $email1    = get_option( 'mbs_partner_email_1', '' );
    $email2    = get_option( 'mbs_partner_email_2', '' );
    ?>
    <div class="wrap">
        <h1>MBS Medical -- Site Settings</h1>

        <form method="post" action="options.php">
            <?php settings_fields( 'mbs_chat_settings_group' ); ?>

            <h2>Contact Form -- Partner Emails</h2>
            <p>All contact form submissions will be emailed to both addresses below.</p>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="mbs_partner_email_1">Partner 1 Email</label></th>
                    <td>
                        <input type="email" id="mbs_partner_email_1" name="mbs_partner_email_1"
                            value="<?php echo esc_attr( $email1 ); ?>" class="regular-text" placeholder="partner1@mbsmedical.com" />
                        <?php if ( $email1 ) : ?>
                            <p class="description"><?php echo esc_html( $email1 ); ?></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="mbs_partner_email_2">Partner 2 Email</label></th>
                    <td>
                        <input type="email" id="mbs_partner_email_2" name="mbs_partner_email_2"
                            value="<?php echo esc_attr( $email2 ); ?>" class="regular-text" placeholder="partner2@mbsmedical.com" />
                        <?php if ( $email2 ) : ?>
                            <p class="description"><?php echo esc_html( $email2 ); ?></p>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>

            <h2 style="margin-top:2rem">Chat Widget -- Claude API Key</h2>
            <p>Enter your Anthropic API key. Get one at <a href="https://console.anthropic.com" target="_blank">console.anthropic.com</a>.</p>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="mbs_claude_api_key">Claude API Key</label></th>
                    <td>
                        <input type="password" id="mbs_claude_api_key" name="mbs_claude_api_key"
                            value="<?php echo esc_attr( $saved_key ); ?>" class="regular-text"
                            placeholder="sk-ant-api03-..." autocomplete="off" />
                        <?php if ( $saved_key ) : ?>
                            <p class="description">Key saved: <code><?php echo esc_html( $masked ); ?></code></p>
                        <?php else : ?>
                            <p class="description">No key saved yet. The chat widget will show an error until a key is added.</p>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>

            <?php submit_button( 'Save Settings' ); ?>
        </form>
    </div>
    <?php
}

// -- Contact Form Handler -----------------------------------------------------
add_action( 'wp_ajax_mbs_contact_form',        'mbs_handle_contact_form' );
add_action( 'wp_ajax_nopriv_mbs_contact_form', 'mbs_handle_contact_form' );

function mbs_handle_contact_form() {

    // 1. Verify nonce
    $nonce = isset( $_POST['mbs_contact_nonce_field'] ) ? sanitize_text_field( wp_unslash( $_POST['mbs_contact_nonce_field'] ) ) : '';
    if ( ! wp_verify_nonce( $nonce, 'mbs_contact_nonce' ) ) {
        wp_send_json_error( [ 'message' => 'Security check failed. Please refresh the page and try again.' ], 403 );
        return;
    }

    // 2. Honeypot check -- bots fill this field, real users don't
    $honeypot = isset( $_POST['website'] ) ? sanitize_text_field( wp_unslash( $_POST['website'] ) ) : '';
    if ( ! empty( $honeypot ) ) {
        wp_send_json_success(); // Silently succeed so bots don't know they were caught
        return;
    }

    // 3. Rate limit -- 3 submissions per IP per hour
    $ip       = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
    $rate_key = 'mbs_contact_rate_' . md5( $ip );
    $count    = (int) get_transient( $rate_key );
    if ( $count >= 3 ) {
        wp_send_json_error( [ 'message' => 'Too many submissions. Please try again in an hour.' ], 429 );
        return;
    }
    set_transient( $rate_key, $count + 1, HOUR_IN_SECONDS );

    // 4. Validate and sanitize fields
    $name    = isset( $_POST['name'] )    ? sanitize_text_field( wp_unslash( $_POST['name'] ) )    : '';
    $email   = isset( $_POST['email'] )   ? sanitize_email( wp_unslash( $_POST['email'] ) )         : '';
    $phone   = isset( $_POST['phone'] )   ? sanitize_text_field( wp_unslash( $_POST['phone'] ) )   : '';
    $topic   = isset( $_POST['topic'] )   ? sanitize_text_field( wp_unslash( $_POST['topic'] ) )   : 'General Question';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ], 400 );
        return;
    }
    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ], 400 );
        return;
    }
    if ( mb_strlen( $message ) > 2000 ) {
        wp_send_json_error( [ 'message' => 'Message is too long. Please keep it under 2000 characters.' ], 400 );
        return;
    }

    // 5. Build recipients list
    $email1 = get_option( 'mbs_partner_email_1', '' );
    $email2 = get_option( 'mbs_partner_email_2', '' );

    $recipients = array_filter( [ $email1, $email2 ], 'is_email' );

    if ( empty( $recipients ) ) {
        wp_send_json_error( [ 'message' => 'We\'re having trouble receiving messages right now. Please try again shortly.' ], 500 );
        return;
    }

    // 6. Compose email
    $subject = '[MBS Medical] New message: ' . $topic . ' from ' . $name;

    $body  = "You have a new contact form submission from the MBS Medical website.\n\n";
    $body .= "-------------------------------------------\n";
    $body .= "Name:    " . $name  . "\n";
    $body .= "Email:   " . $email . "\n";
    $body .= "Phone:   " . ( $phone ?: 'Not provided' ) . "\n";
    $body .= "Topic:   " . $topic . "\n";
    $body .= "-------------------------------------------\n\n";
    $body .= "Message:\n" . $message . "\n\n";
    $body .= "-------------------------------------------\n";
    $body .= "Submitted: " . current_time( 'F j, Y \a\t g:i a T' ) . "\n";
    $body .= "Reply directly to this email to respond to " . $name . ".\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    // 7. Send to both partners
    $sent = wp_mail( $recipients, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Message sent successfully.' ] );
    } else {
        wp_send_json_error( [ 'message' => 'We couldn\'t send your message right now. Please try again.' ], 500 );
    }
}
