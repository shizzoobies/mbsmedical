<footer aria-label="Site footer">
  <div class="container">
    <div class="footer-grad-line" aria-hidden="true"></div>
    <div class="footer-grid">
      <div>
        <div class="footer-brand">
          <div class="footer-mark" aria-hidden="true">MBS</div>
          <span class="footer-brand-name">MBS Medical</span>
        </div>
        <p>Modern telehealth care built around convenience, continuity, and clear treatment plans. Mind. Body. Spirit.</p>
        <p style="margin-top:.65rem;opacity:.45;font-size:.8rem">Telehealth appointments available statewide, subject to provider availability and state licensing.</p>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <nav aria-label="Footer navigation">
          <div class="footer-links">
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
            <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>">Weight Loss</a>
            <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>">TRT</a>
            <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>">Primary Care</a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
          </div>
        </nav>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <div class="footer-links">
          <a href="mailto:hello@mbsmedical.com">hello@mbsmedical.com</a>
          <span>Telehealth, available statewide</span>
          <span>Mon to Fri, 8:00 AM to 6:00 PM</span>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo date( 'Y' ); ?> MBS Medical. All rights reserved.</span>
      <span>Mind Body and Spirit Medicine</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
