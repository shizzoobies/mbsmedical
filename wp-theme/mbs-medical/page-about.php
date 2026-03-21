<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<section class="page-hero">
  <div class="container">
    <div class="label">About us</div>
    <h1>About MBS Medical</h1>
    <p class="lead">A modern telehealth practice designed to make care feel more accessible, more consistent, and easier to fit into real life.</p>
  </div>
</section>

<!-- Provider bio -->
<section class="section section-alt">
  <div class="container">
    <div class="split">
      <div>
        <img src="<?php echo $img; ?>/david.png" alt="David Hervig, PA-C" style="width:100%;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);display:block;" />
      </div>
      <div class="split-text">
        <div class="label">Your provider</div>
        <h2>David Hervig, PA-C</h2>
        <p>David is a Physician Assistant and a man of many hats. Always a medical provider first, he also serves as one of our office managers and currently leads marketing for the practice.</p>
        <p>Trained in the US Army, David spent 12 years in service &mdash; learning medicine from the ground up in some of the most demanding environments imaginable. That background shapes how he practices today: direct, thorough, and genuinely invested in the people he works with.</p>
        <p>He built MBS Medical around the belief that good care should be accessible, honest, and uncomplicated by insurance bureaucracy.</p>
        <ul class="cred-list">
          <li><div class="cred-pip"></div> Physician Assistant (PA-C)</li>
          <li><div class="cred-pip"></div> US Army trained &mdash; 12 years of service</li>
          <li><div class="cred-pip"></div> Primary care, weight loss &amp; TRT</li>
          <li><div class="cred-pip"></div> Cash-pay, direct-care model</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- About the practice -->
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">Our approach</div>
        <h2>Built for today, designed to grow with you</h2>
        <p>MBS Medical was created for patients who want more from their healthcare &mdash; more consistency, more clarity, and more convenience. We started with telehealth because it removes the friction that keeps most people from getting the care they need.</p>
        <p>No waiting rooms, no scheduling gaps, no having to repeat yourself to a new provider every visit. Our current focus is primary care, medically supervised weight loss, and TRT evaluation and monitoring.</p>
        <div class="features-grid">
          <div class="feature-item">
            <h4>Continuity of care</h4>
            <p>Your provider builds familiarity with your history over time. Each visit builds on the last.</p>
          </div>
          <div class="feature-item">
            <h4>Clear next steps</h4>
            <p>You leave every visit knowing exactly what comes next. No confusion, no ambiguity.</p>
          </div>
          <div class="feature-item">
            <h4>Cash pay model</h4>
            <p>No insurance required. Your visit fee is confirmed before you book &mdash; every time.</p>
          </div>
          <div class="feature-item">
            <h4>Built to grow</h4>
            <p>We are building a broader practice with in-person care and additional services over time.</p>
          </div>
        </div>
      </div>
      <div class="portal-card">
        <div class="portal-icon">📅</div>
        <h3>Book an appointment</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better &rarr;</a>
        <div class="portal-trust">
          <span>🔐 Encrypted &amp; secure</span>
          <span>🛡️ HIPAA-compliant</span>
          <span>&#10003; No patient data collected here</span>
        </div>
        <hr class="portal-divider">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request an appointment.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner">
      <h2>Ready to get started?</h2>
      <p>Same-week telehealth appointments available. Complete a short intake and connect with a provider.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">Our Services</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
