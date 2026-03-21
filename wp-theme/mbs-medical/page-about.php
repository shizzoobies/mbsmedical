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
        <div class="label">Meet the team</div>
        <h2>David Hervig, PA-C</h2>
        <p>David is a Physician Assistant and a man of many hats. Always a medical provider first, he also serves as one of our office managers and currently leads marketing for the practice.</p>
        <p>David is a US Army Veteran with 12 years of service. He learned medicine from the ground up in some of the most demanding environments imaginable, and that background shapes how he practices today: direct, thorough, and genuinely invested in the people he works with.</p>
        <p>He built MBS Medical around the belief that good care should be accessible, honest, and uncomplicated by insurance bureaucracy.</p>
        <ul class="cred-list">
          <li><div class="cred-pip"></div> Physician Assistant (PA-C)</li>
          <li><div class="cred-pip"></div> US Army Veteran, 12 years of service</li>
          <li><div class="cred-pip"></div> Primary care, weight loss &amp; TRT</li>
          <li><div class="cred-pip"></div> Cash-pay, direct-care model</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- MD provider bio -->
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">Collaborating physician</div>
        <h2>[First Name] [Last Name], MD</h2>
        <p>[Physician first name] brings [X] years of clinical medicine to the MBS Medical team. Board-certified in [specialty], [he/she/they] provide the physician oversight and collaborative medical direction that supports the practice across all three service lines.</p>
        <p>[Add 1 to 2 sentences about their background, training, or philosophy here. What makes them a good fit for a cash-pay, direct-care model? What do they care about clinically?]</p>
        <ul class="cred-list">
          <li><div class="cred-pip"></div> Medical Doctor (MD)</li>
          <li><div class="cred-pip"></div> Board-certified, [specialty]</li>
          <li><div class="cred-pip"></div> [X] years of clinical experience</li>
          <li><div class="cred-pip"></div> Collaborating physician, MBS Medical</li>
        </ul>
      </div>
      <div>
        <img src="<?php echo $img; ?>/doctor.png" alt="[Doctor Name], MD" style="width:100%;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);display:block;" />
      </div>
    </div>
  </div>
</section>

<!-- About the practice -->
<section class="section section-alt">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">Our approach</div>
        <h2>Built for today, designed to grow with you</h2>
        <p>MBS Medical was created for patients who want more from their healthcare: more consistency, more clarity, and more convenience. We started with telehealth because it removes the friction that keeps most people from getting the care they need.</p>
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
            <p>No insurance required. Your visit fee is confirmed before you book, every time.</p>
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
