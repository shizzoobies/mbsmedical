<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Splash Screen -->
<div class="mbs-splash" id="mbsSplash">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="MBS Medical" class="mbs-splash-logo" />
</div>

<!-- Topbar -->
<div class="topbar">
  <div class="container">
    <span>Cash-pay telehealth &nbsp;&middot;&nbsp; No insurance required &nbsp;&middot;&nbsp; Primary care, weight loss &amp; TRT</span>
    <span>Book online, same-week appointments available</span>
  </div>
</div>

<!-- Nav -->
<header>
  <div class="container nav">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <span class="brand-mark">MBS</span>
      <span>Medical</span>
    </a>
    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <nav class="menu">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo mbs_nav_class('home'); ?>>Home</a>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"<?php echo mbs_nav_class('about'); ?>>About</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"<?php echo mbs_nav_class('services'); ?>>Services</a>
      <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"<?php echo mbs_nav_class('weight-loss'); ?>>Weight Loss</a>
      <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>"<?php echo mbs_nav_class('trt'); ?>>TRT</a>
      <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>"<?php echo mbs_nav_class('primary-care'); ?>>Primary Care</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo mbs_nav_class('contact'); ?>>Contact</a>
      <a class="btn" href="#PRACTICE-BETTER-PORTAL-URL" target="_blank" rel="noopener noreferrer">Book a Visit</a>
    </nav>
  </div>
</header>
