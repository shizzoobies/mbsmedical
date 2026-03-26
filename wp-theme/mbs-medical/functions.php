<?php
/**
 * MBS Medical Theme Functions -- v3.2.0
 */

function mbs_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'mbs_setup' );

function mbs_enqueue_assets() {
    wp_enqueue_style( 'mbs-style', get_stylesheet_uri(), array(), '3.2.0' );
    wp_enqueue_style( 'mbs-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', array(), null );
    wp_enqueue_script( 'mbs-main', get_template_directory_uri() . '/assets/js/main.js', array(), '3.2.0', true );
    wp_enqueue_script( 'mbs-chat', get_template_directory_uri() . '/assets/js/chat.js', array(), '3.2.0', true );
    wp_localize_script( 'mbs-chat', 'mbsChatData', array(
        'assistantImg' => get_template_directory_uri() . '/assets/img/chat-assistant.png',
        'ajaxUrl'      => admin_url( 'admin-ajax.php' ),
        'nonce'        => wp_create_nonce( 'mbs_chat_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'mbs_enqueue_assets' );

// Helper: active nav aria-current
function mbs_nav_class( $check ) {
    if ( $check === 'home' && is_front_page() ) {
        echo 'aria-current="page"';
    } elseif ( $check !== 'home' && is_page( $check ) ) {
        echo 'aria-current="page"';
    }
}

// -- Claude API Chat Handler --------------------------------------------------
add_action( 'wp_ajax_mbs_chat_message',        'mbs_handle_chat_message' );
add_action( 'wp_ajax_nopriv_mbs_chat_message', 'mbs_handle_chat_message' );

function mbs_handle_chat_message() {
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'mbs_chat_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed.' ), 403 );
        return;
    }

    $ip       = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
    $rate_key = 'mbs_chat_rate_' . md5( $ip );
    $count    = (int) get_transient( $rate_key );
    if ( $count >= 15 ) {
        wp_send_json_error( array( 'message' => 'Too many messages. Please use our contact form.' ), 429 );
        return;
    }
    set_transient( $rate_key, $count + 1, HOUR_IN_SECONDS );

    $user_message = isset( $_POST['message'] ) ? sanitize_text_field( wp_unslash( $_POST['message'] ) ) : '';
    if ( empty( $user_message ) ) {
        wp_send_json_error( array( 'message' => 'No message provided.' ), 400 );
        return;
    }
    if ( strlen( $user_message ) > 500 ) {
        wp_send_json_error( array( 'message' => 'Message too long. Please keep it under 500 characters.' ), 400 );
        return;
    }

    $api_key = defined( 'MBS_CLAUDE_API_KEY' ) ? MBS_CLAUDE_API_KEY : get_option( 'mbs_claude_api_key', '' );
    if ( empty( $api_key ) ) {
        wp_send_json_error( array( 'message' => 'Chat is temporarily unavailable. Please use our contact form.' ), 503 );
        return;
    }

    $prompt  = 'You are the MBS Medical chat assistant. Give short, friendly answers and point patients to the right page.';
    $prompt .= ' EMERGENCY: If anyone describes a medical emergency respond only with: If this is a medical emergency please call 911 or go to your nearest emergency room.';
    $prompt .= ' ABOUT MBS: Cash-pay telehealth. Services: Primary Care, Weight Loss, TRT Evaluation. No insurance. Telehealth statewide. Same-week appointments Mon-Fri 8am-6pm.';
    $prompt .= ' PAGES: / (home), /services/, /primary-care/, /weight-loss/, /trt/, /about/, /contact/, /#pricing (pricing).';
    $prompt .= ' FORMAT: Respond with JSON only: {"message":"1-2 sentences","links":[{"label":"text","url":"/page/","external":false}]}';
    $prompt .= ' RULES: 1-2 sentence answer. Include 1-3 links. No clinical advice. No made-up prices. Unknown topics: link to /contact/.';

    $response = wp_remote_post( 'https://api.anthropic.com/v1/messages', array(
        'timeout' => 25,
        'headers' => array(
            'Content-Type'      => 'application/json',
            'x-api-key'         => $api_key,
            'anthropic-version' => '2023-06-01',
        ),
        'body' => wp_json_encode( array(
            'model'      => 'claude-haiku-4-5-20251001',
            'max_tokens' => 300,
            'system'     => $prompt,
            'messages'   => array(
                array( 'role' => 'user', 'content' => $user_message ),
            ),
        ) ),
    ) );

    if ( is_wp_error( $response ) ) {
        wp_send_json_error( array( 'message' => 'Chat unavailable. Please use our contact form.' ), 503 );
        return;
    }

    $status   = (int) wp_remote_retrieve_response_code( $response );
    $api_body = json_decode( wp_remote_retrieve_body( $response ), true );

    if ( 200 !== $status || empty( $api_body['content'][0]['text'] ) ) {
        wp_send_json_error( array( 'message' => 'Chat unavailable. Please use our contact form.' ), 503 );
        return;
    }

    $raw    = trim( $api_body['content'][0]['text'] );
    $raw    = preg_replace( '/^```(?:json)?\s*/i', '', $raw );
    $raw    = preg_replace( '/\s*```$/',            '', $raw );
    $parsed = json_decode( $raw, true );

    if ( ! $parsed || empty( $parsed['message'] ) ) {
        wp_send_json_success( array( 'message' => sanitize_text_field( $raw ), 'links' => array() ) );
        return;
    }

    $links = array();
    if ( ! empty( $parsed['links'] ) && is_array( $parsed['links'] ) ) {
        foreach ( $parsed['links'] as $link ) {
            if ( empty( $link['label'] ) || empty( $link['url'] ) ) {
                continue;
            }
            $links[] = array(
                'label'    => sanitize_text_field( $link['label'] ),
                'url'      => esc_url_raw( $link['url'] ),
                'external' => ! empty( $link['external'] ),
            );
        }
    }

    wp_send_json_success( array( 'message' => sanitize_text_field( $parsed['message'] ), 'links' => $links ) );
}

// -- Contact Form Handler -----------------------------------------------------
add_action( 'wp_ajax_mbs_contact_form',        'mbs_handle_contact_form' );
add_action( 'wp_ajax_nopriv_mbs_contact_form', 'mbs_handle_contact_form' );

function mbs_handle_contact_form() {
    $nonce = isset( $_POST['mbs_contact_nonce_field'] ) ? sanitize_text_field( wp_unslash( $_POST['mbs_contact_nonce_field'] ) ) : '';
    if ( ! wp_verify_nonce( $nonce, 'mbs_contact_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh and try again.' ), 403 );
        return;
    }

    if ( ! empty( $_POST['website'] ) ) {
        wp_send_json_success();
        return;
    }

    $ip       = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
    $rate_key = 'mbs_contact_rate_' . md5( $ip );
    $count    = (int) get_transient( $rate_key );
    if ( $count >= 3 ) {
        wp_send_json_error( array( 'message' => 'Too many submissions. Please try again in an hour.' ), 429 );
        return;
    }
    set_transient( $rate_key, $count + 1, HOUR_IN_SECONDS );

    $name    = isset( $_POST['name'] )    ? sanitize_text_field( wp_unslash( $_POST['name'] ) )        : '';
    $email   = isset( $_POST['email'] )   ? sanitize_email( wp_unslash( $_POST['email'] ) )             : '';
    $phone   = isset( $_POST['phone'] )   ? sanitize_text_field( wp_unslash( $_POST['phone'] ) )       : '';
    $topic   = isset( $_POST['topic'] )   ? sanitize_text_field( wp_unslash( $_POST['topic'] ) )       : 'General Question';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ), 400 );
        return;
    }
    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ), 400 );
        return;
    }
    if ( strlen( $message ) > 2000 ) {
        wp_send_json_error( array( 'message' => 'Message too long. Please keep it under 2000 characters.' ), 400 );
        return;
    }

    $email1     = get_option( 'mbs_partner_email_1', '' );
    $email2     = get_option( 'mbs_partner_email_2', '' );
    $recipients = array_filter( array( $email1, $email2 ), 'is_email' );

    if ( empty( $recipients ) ) {
        wp_send_json_error( array( 'message' => 'Unable to send right now. Please try again shortly.' ), 503 );
        return;
    }

    $subject = '[MBS Medical] ' . $topic . ' from ' . $name;
    $body    = "Name:    " . $name . "\n"
             . "Email:   " . $email . "\n"
             . "Phone:   " . ( $phone ? $phone : 'Not provided' ) . "\n"
             . "Topic:   " . $topic . "\n\n"
             . "Message:\n" . $message . "\n\n"
             . "Submitted: " . current_time( 'F j, Y \a\t g:i a T' );

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    if ( wp_mail( $recipients, $subject, $body, $headers ) ) {
        wp_send_json_success( array( 'message' => 'Message sent. We will get back to you within one business day.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Could not send your message. Please try again.' ), 503 );
    }
}

// -- Admin Settings Page ------------------------------------------------------
add_action( 'admin_menu', 'mbs_add_settings_page' );

function mbs_add_settings_page() {
    add_options_page( 'MBS Chat Settings', 'MBS Chat', 'manage_options', 'mbs-chat-settings', 'mbs_render_settings_page' );
}

add_action( 'admin_init', 'mbs_register_settings' );

function mbs_register_settings() {
    register_setting( 'mbs_chat_settings_group', 'mbs_claude_api_key',  array( 'sanitize_callback' => 'sanitize_text_field' ) );
    register_setting( 'mbs_chat_settings_group', 'mbs_partner_email_1', array( 'sanitize_callback' => 'sanitize_email' ) );
    register_setting( 'mbs_chat_settings_group', 'mbs_partner_email_2', array( 'sanitize_callback' => 'sanitize_email' ) );
}

function mbs_render_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    $api_key = get_option( 'mbs_claude_api_key', '' );
    $masked  = $api_key ? substr( $api_key, 0, 18 ) . '...' : '';
    $email1  = get_option( 'mbs_partner_email_1', '' );
    $email2  = get_option( 'mbs_partner_email_2', '' );

    echo '<div class="wrap"><h1>MBS Medical Settings</h1>';
    echo '<form method="post" action="options.php">';
    settings_fields( 'mbs_chat_settings_group' );

    echo '<h2>Contact Form Emails</h2>';
    echo '<table class="form-table"><tbody>';
    echo '<tr><th><label for="e1">Partner 1 Email</label></th>';
    echo '<td><input type="email" id="e1" name="mbs_partner_email_1" value="' . esc_attr( $email1 ) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="e2">Partner 2 Email</label></th>';
    echo '<td><input type="email" id="e2" name="mbs_partner_email_2" value="' . esc_attr( $email2 ) . '" class="regular-text" /></td></tr>';
    echo '</tbody></table>';

    echo '<h2>Claude API Key</h2>';
    echo '<table class="form-table"><tbody>';
    echo '<tr><th><label for="ak">API Key</label></th>';
    echo '<td><input type="password" id="ak" name="mbs_claude_api_key" value="' . esc_attr( $api_key ) . '" class="regular-text" autocomplete="off" />';
    echo $masked ? '<p class="description">Saved: ' . esc_html( $masked ) . '</p>' : '<p class="description">No key saved yet.</p>';
    echo '</td></tr>';
    echo '</tbody></table>';

    submit_button( 'Save Settings' );
    echo '</form></div>';
}
