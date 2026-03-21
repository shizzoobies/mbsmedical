<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- Hero with image -->
<section class="page-hero page-hero-split">
  <div class="container">
    <div class="page-hero-grid">
      <div class="page-hero-text">
        <div class="label">Primary Care</div>
        <h1>Primary care you can actually rely on</h1>
        <p class="lead">Routine visits, medication management, wellness planning, and ongoing care from a provider who knows your history. All via telehealth, on your schedule.</p>
        <div class="page-hero-badges">
          <span>&#10003; Same provider every visit</span>
          <span>&#10003; Same-week appointments</span>
          <span>&#10003; Cash pay, no insurance</span>
        </div>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo $img; ?>/primary-care.png" alt="Telehealth primary care" />
      </div>
    </div>
  </div>
</section>

<!-- Highlights bar -->
<div class="highlights-bar">
  <div class="container">
    <div class="highlights-grid">
      <div class="highlight-item">
        <div class="highlight-icon">🩺</div>
        <h4>Your provider</h4>
        <p>Same provider every visit, building real familiarity with your history</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon">📋</div>
        <h4>Ongoing care</h4>
        <p>Follow-up, medication management, and continuity built in from day one</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon">⚡</div>
        <h4>Same-week</h4>
        <p>Appointments available quickly, without long waits or referral chains</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon">💳</div>
        <h4>Cash pay</h4>
        <p>Transparent, no-insurance pricing confirmed before you book, every time</p>
      </div>
    </div>
  </div>
</div>

<!-- Main content -->
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">The foundation</div>
        <h2>A home base for your health</h2>
        <p>Most people don&rsquo;t struggle to find healthcare. They struggle to find care that sticks. MBS Medical is built for patients who want a consistent provider relationship, not a different face every time they have a question or need a refill.</p>
        <p>Your provider builds familiarity with your history, goals, and concerns over time. That continuity changes how care feels and how effective it is. From routine wellness visits to medication reviews and follow-up care, MBS Medical is designed to be the provider you actually keep coming back to.</p>
        <div class="features-grid">
          <div class="feature-item">
            <h4>Continuity of care</h4>
            <p>Your provider knows your history. Each visit builds on the last.</p>
          </div>
          <div class="feature-item">
            <h4>No friction</h4>
            <p>Book online, meet via telehealth, leave with a clear plan. Routine visits should not be complicated.</p>
          </div>
          <div class="feature-item">
            <h4>Cash pay</h4>
            <p>No insurance required. Your fee is confirmed before you book, every time.</p>
          </div>
          <div class="feature-item">
            <h4>Same-week</h4>
            <p>Same-week telehealth appointments available for new and established patients.</p>
          </div>
        </div>
      </div>
      <div class="portal-card">
        <div class="portal-icon">📅</div>
        <h3>Book a primary care visit</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better &rarr;</a>
        <div class="portal-trust">
          <span>🔐 Encrypted &amp; secure</span>
          <span>🛡️ HIPAA-compliant</span>
          <span>&#10003; No patient data collected here</span>
        </div>
        <hr class="portal-divider">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and book your visit. All clinical recommendations are made after provider review.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container">
    <div class="label">Common questions</div>
    <h2 class="title">Primary care at MBS Medical</h2>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Do you accept insurance?</h3>
        <p>No. MBS Medical is a direct-pay practice. We do not accept or bill insurance. This keeps visits simple, fast, and free of claim delays. Your visit fee is clear and confirmed before you book. Many patients find the direct-pay model saves both time and money compared to using insurance for routine care.</p>
      </div>
      <div class="faq-item">
        <h3>Who is this for?</h3>
        <p>Adults looking for a consistent telehealth provider for routine visits, preventive care, medication management, and general health concerns. Especially those who want ongoing care rather than one-off appointments.</p>
      </div>
      <div class="faq-item">
        <h3>What types of concerns can be addressed?</h3>
        <p>General wellness, preventive care, chronic condition monitoring, medication review, lab review, referrals, and health goal planning. For emergencies, always call 911 or go to your nearest emergency room.</p>
      </div>
      <div class="faq-item">
        <h3>How does a visit work?</h3>
        <p>Complete a short online intake, then meet with your provider via telehealth. Your provider reviews your concerns, documents your history, and outlines clear next steps, including any follow-up care, labs, or referrals needed.</p>
      </div>
      <div class="faq-item">
        <h3>Can MBS Medical be my regular doctor?</h3>
        <p>Yes. The practice is designed for ongoing care relationships, not one-time visits. Your history, medications, and care notes carry forward with each appointment so your provider is always working from a full picture.</p>
      </div>
      <div class="faq-item">
        <h3>Are lab costs included in the visit fee?</h3>
        <p>Lab costs, when applicable, are separate from the visit fee and will be communicated at the time of ordering. There are no hidden charges.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner">
      <h2>Book your first visit today</h2>
      <p>Same-week telehealth appointments available. Complete a short intake and connect with a provider who will actually know your name next time.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">All Services</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
