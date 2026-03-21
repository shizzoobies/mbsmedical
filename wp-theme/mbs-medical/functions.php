<?php
/**
 * MBS Medical Theme Functions — v2.0.0
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
        '2.0.0'
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
        '2.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mbs_enqueue_assets' );

// Helper: active nav class
function mbs_nav_class( $check ) {
    if ( $check === 'home' && is_front_page() ) return ' style="color:var(--teal)"';
    if ( $check !== 'home' && is_page( $check ) ) return ' style="color:var(--teal)"';
    return '';
}
