<footer aria-label="Site footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="MBS Medical home">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mbs-logo.png" alt="MBS Medical: Mind Body and Spirit Medicine" class="footer-logo" />
        </a>
        <p class="footer-tagline">Modern telehealth care built around you. Primary care, weight loss, and TRT from one dedicated provider.</p>
      </div>

      <!-- Navigation -->
      <div>
        <span class="footer-col-label">Navigation</span>
        <nav aria-label="Footer navigation">
          <ul class="footer-nav-list">
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
            <li><a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>">Primary Care</a></li>
            <li><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>">Weight Loss</a></li>
            <li><a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>">TRT</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Contact -->
      <div>
        <span class="footer-col-label">Contact Us</span>

        <div class="footer-contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75z"/>
          </svg>
          <a href="tel:5555550199">(555) 555-0199</a>
        </div>

        <div class="footer-contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
          </svg>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Send us a message</a>
        </div>

        <div class="footer-contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253"/>
          </svg>
          <span>Telehealth, available statewide</span>
        </div>

        <div class="footer-contact-item">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
          </svg>
          <span>Mon to Fri, 8:00 AM to 6:00 PM</span>
        </div>
      </div>

    </div>
    <div class="footer-bottom">
      <p class="footer-copy">&copy; <?php echo date( 'Y' ); ?> MBS Medical. All rights reserved.</p>
      <p class="footer-copy">Mind Body and Spirit Medicine</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
