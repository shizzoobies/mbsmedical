<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<a class="skip-link" href="#main-content">Skip to main content</a>

<!-- Splash -->
<div class="mbs-splash" id="mbsSplash" aria-hidden="true">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mbs-logo.png" alt="" class="mbs-splash-logo" />
</div>

<!-- Header -->
<header role="banner">
  <div class="container nav">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="MBS Medical: Mind Body and Spirit Medicine home">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mbs-logo.png" alt="MBS Medical: Mind Body and Spirit Medicine" class="brand-logo" />
    </a>
    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="main-menu">
      <span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>
    </button>
    <nav class="menu" id="main-menu" aria-label="Primary navigation">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo mbs_nav_class('home'); ?>>Home</a>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"<?php echo mbs_nav_class('about'); ?>>About</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"<?php echo mbs_nav_class('services'); ?>>Services</a>
      <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"<?php echo mbs_nav_class('weight-loss'); ?>>Weight Loss</a>
      <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>"<?php echo mbs_nav_class('trt'); ?>>TRT</a>
      <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>"<?php echo mbs_nav_class('primary-care'); ?>>Primary Care</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo mbs_nav_class('contact'); ?>>Contact</a>
      <a class="nav-cta" href="#PRACTICE-BETTER-PORTAL-URL" target="_blank" rel="noopener noreferrer">Book a Visit</a>
    </nav>
  </div>
</header>
