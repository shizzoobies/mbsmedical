<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Splash screen -->
<div id="splash" aria-hidden="true">
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mbs-logo.png"
       class="splash-logo"
       alt="MBS Medical" />
  <p class="splash-tagline">Modern Telehealth Care</p>
</div>

<a class="skip-link" href="#main-content">Skip to main content</a>

<!-- Site header -->
<header class="site-header">
  <div class="container header-inner">

    <!-- Brand / logo -->
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mbs-logo.png"
           class="site-logo"
           alt="MBS Medical" />
    </a>

    <!-- Desktop navigation -->
    <nav class="primary-nav" aria-label="Primary navigation">
      <ul class="nav-list">
        <li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
             <?php echo ( is_front_page() ? 'aria-current="page"' : '' ); ?>>
            Home
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
             <?php echo ( is_page( 'services' ) ? 'aria-current="page"' : '' ); ?>>
            Services
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>"
             <?php echo ( is_page( 'primary-care' ) ? 'aria-current="page"' : '' ); ?>>
            Primary Care
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"
             <?php echo ( is_page( 'weight-loss' ) ? 'aria-current="page"' : '' ); ?>>
            Weight Loss
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>"
             <?php echo ( is_page( 'trt' ) ? 'aria-current="page"' : '' ); ?>>
            TRT
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
             <?php echo ( is_page( 'about' ) ? 'aria-current="page"' : '' ); ?>>
            About
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             <?php echo ( is_page( 'contact' ) ? 'aria-current="page"' : '' ); ?>>
            Contact
          </a>
        </li>
      </ul>
    </nav>

    <!-- Desktop CTA button -->
    <a class="btn nav-cta"
       href="#PRACTICE-BETTER-PORTAL-URL"
       target="_blank"
       rel="noopener noreferrer">
      Book a Visit
    </a>

    <!-- Hamburger (mobile only) -->
    <button class="hamburger"
            id="hamburger"
            aria-expanded="false"
            aria-controls="mobile-nav"
            aria-label="Open navigation menu">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </button>

  </div>
</header>

<!-- Mobile navigation drawer -->
<div class="mobile-nav"
     id="mobile-nav"
     role="dialog"
     aria-modal="true"
     aria-label="Navigation menu">
  <div class="mobile-nav-panel">

    <div class="mobile-nav-header">
      <span class="brand" style="pointer-events:none;">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mbs-logo.png"
             class="site-logo"
             aria-hidden="true"
             alt="" />
      </span>
      <button class="mobile-nav-close"
              id="mobile-nav-close"
              aria-label="Close navigation menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2.5"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <nav aria-label="Mobile primary navigation">
      <ul class="mobile-nav-list">
        <li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
             <?php echo ( is_front_page() ? 'aria-current="page"' : '' ); ?>>
            Home
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
             <?php echo ( is_page( 'services' ) ? 'aria-current="page"' : '' ); ?>>
            Services
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>"
             <?php echo ( is_page( 'primary-care' ) ? 'aria-current="page"' : '' ); ?>>
            Primary Care
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>"
             <?php echo ( is_page( 'weight-loss' ) ? 'aria-current="page"' : '' ); ?>>
            Weight Loss
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>"
             <?php echo ( is_page( 'trt' ) ? 'aria-current="page"' : '' ); ?>>
            TRT
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
             <?php echo ( is_page( 'about' ) ? 'aria-current="page"' : '' ); ?>>
            About
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             <?php echo ( is_page( 'contact' ) ? 'aria-current="page"' : '' ); ?>>
            Contact
          </a>
        </li>
      </ul>
    </nav>

    <a class="btn"
       href="#PRACTICE-BETTER-PORTAL-URL"
       target="_blank"
       rel="noopener noreferrer">
      Book a Visit
    </a>

  </div>
</div>

<main id="main-content">
