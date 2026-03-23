</main><!-- #main-content -->

<footer class="site-footer" aria-label="Site footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Col 1: Brand -->
      <div>
        <a class="footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mbs-logo.png"
               class="site-logo"
               alt="MBS Medical" />
        </a>
        <p class="footer-tagline">Modern telehealth care built around you. Primary care, weight loss, and TRT from one dedicated practice.</p>
      </div>

      <!-- Col 2: Navigation -->
      <div>
        <p class="footer-col-label">Navigation</p>
        <ul class="footer-nav-list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>">Primary Care</a></li>
          <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>">Medical Weight Loss</a></li>
          <li><a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>">TRT Evaluation</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
          <li><a href="#PRACTICE-BETTER-PORTAL-URL" target="_blank" rel="noopener noreferrer">Book a Visit</a></li>
        </ul>
      </div>

      <!-- Col 3: Contact -->
      <div>
        <p class="footer-col-label">Contact Us</p>

        <div class="footer-contact-item">
          <!-- Phone icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M22 16.92v3a2 2 0 01-2.18 2
                     19.79 19.79 0 01-8.63-3.07
                     19.5 19.5 0 01-6-6
                     19.79 19.79 0 01-3.07-8.67
                     A2 2 0 014.11 2h3a2 2 0 012 1.72
                     12.84 12.84 0 00.7 2.81
                     2 2 0 01-.45 2.11L8.09 9.91
                     a16 16 0 006 6l1.27-1.27
                     a2 2 0 012.11-.45
                     12.84 12.84 0 002.81.7
                     A2 2 0 0122 16.92z"/>
          </svg>
          <a href="tel:5555550199">(555) 555-0199</a>
        </div>

        <div class="footer-contact-item">
          <!-- Email icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12
                     c0 1.1-.9 2-2 2H4
                     c-1.1 0-2-.9-2-2V6
                     c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
          </svg>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Send a message</a>
        </div>

        <div class="footer-contact-item">
          <!-- Globe icon (telehealth) -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <line x1="2" y1="12" x2="22" y2="12"/>
            <path d="M12 2a15.3 15.3 0 014 10
                     15.3 15.3 0 01-4 10
                     15.3 15.3 0 01-4-10
                     15.3 15.3 0 014-10z"/>
          </svg>
          <span>Telehealth statewide via secure video</span>
        </div>

        <div class="footer-contact-item">
          <!-- Clock icon (hours) -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
          <span>Mon&ndash;Fri, 8am&ndash;6pm ET</span>
        </div>
      </div>

    </div><!-- .footer-grid -->

    <div class="footer-bottom">
      <p class="footer-copy">&copy; <span id="year"><?php echo esc_html( date( 'Y' ) ); ?></span> MBS Medical. All rights reserved.</p>
      <p class="footer-copy">Mind Body and Spirit Medicine</p>
    </div>

  </div><!-- .container -->
</footer>

<!-- Chat widget -->
<?php get_template_part( 'template-parts/chat' ); ?>

<?php wp_footer(); ?>
</body>
</html>
