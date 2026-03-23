<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<main id="main-content">

<section class="page-hero" aria-labelledby="about-hero-heading">
  <div class="container">
    <div class="label" aria-hidden="true">About us</div>
    <h1 id="about-hero-heading">About MBS Medical</h1>
    <p class="lead">A modern telehealth practice designed to make care feel more accessible, more consistent, and easier to fit into real life.</p>
  </div>
</section>

<!-- Team gallery -->
<section class="section section-alt" aria-labelledby="team-heading">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem">
      <div class="label" aria-hidden="true">Meet the team</div>
      <h2 class="title" id="team-heading">The people behind your care</h2>
      <p class="lead center">A licensed PA supported by board-certified supervising physicians with decades of clinical experience.</p>
    </div>
    <div class="team-grid">

      <!-- David Hervig PA-C -->
      <div class="team-card">
        <div class="team-avatar">
          <img src="<?php echo $img; ?>/david.png" alt="David Hervig PA-C, Physician Assistant" />
        </div>
        <h3>David Hervig, PA-C</h3>
        <p class="team-role">Physician Assistant, Primary Provider</p>
        <p>David is a Physician Assistant and US Army Veteran with 12 years of service. He learned medicine in some of the most demanding environments imaginable, and that background shapes how he practices today: direct, thorough, and genuinely invested in each patient.</p>
        <p>He built MBS Medical around the belief that good care should be accessible, honest, and uncomplicated by insurance bureaucracy.</p>
        <ul class="cred-list">
          <li><div class="cred-pip" aria-hidden="true"></div> Physician Assistant (PA-C)</li>
          <li><div class="cred-pip" aria-hidden="true"></div> US Army Veteran, 12 years</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Primary care, weight loss &amp; TRT</li>
        </ul>
      </div>

      <!-- Dr. Eric Folkens -->
      <div class="team-card">
        <div class="team-avatar team-avatar-ph" aria-hidden="true">EF</div>
        <h3>Eric Folkens, MD</h3>
        <p class="team-role">Supervising Physician</p>
        <p>Dr. Folkens is a board-certified family medicine physician with over 34 years of clinical experience in Florida. He founded urgent care centers across Bradenton, Sarasota, and Lakewood Ranch, and currently serves as Medical Director of the Bradenton Research Center, where he has overseen more than 150 clinical trials spanning conditions from Alzheimer&rsquo;s disease and multiple sclerosis to COVID-19.</p>
        <p>A Chief Resident alumnus and ABFM Diplomate, Dr. Folkens brings deep primary care expertise and a research-driven perspective to his supervising role at MBS Medical.</p>
        <ul class="cred-list">
          <li><div class="cred-pip" aria-hidden="true"></div> Medical Doctor (MD)</li>
          <li><div class="cred-pip" aria-hidden="true"></div> ABFM Board-Certified, Family Medicine</li>
          <li><div class="cred-pip" aria-hidden="true"></div> 34+ years of clinical experience</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Supervising physician, MBS Medical</li>
        </ul>
      </div>

      <!-- Dr. Mark Dawson -->
      <div class="team-card">
        <div class="team-avatar team-avatar-ph" aria-hidden="true">MD</div>
        <h3>Mark Dawson, MD</h3>
        <p class="team-role">Supervising Physician</p>
        <p>Dr. Dawson is a gastroenterologist whose clinical career spans more than three decades, including 31 years in private practice in Bradenton before joining Lee Health full-time. Mentored early in his career by Dr. Bashar Attar, he found his calling in a specialty where precise diagnostics and timely intervention can be genuinely life-saving.</p>
        <p>He values collaborative, patient-centered care and brings that same commitment and belief that good medicine is built on trust to his role as a supervising physician at MBS Medical.</p>
        <ul class="cred-list">
          <li><div class="cred-pip" aria-hidden="true"></div> Medical Doctor (MD)</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Gastroenterology</li>
          <li><div class="cred-pip" aria-hidden="true"></div> 30+ years of clinical experience</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Supervising physician, MBS Medical</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- About the practice -->
<section class="section" aria-labelledby="practice-heading">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label" aria-hidden="true">Our approach</div>
        <h2 id="practice-heading">Built for today, designed to grow with you</h2>
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
        <div class="portal-icon" aria-hidden="true">📅</div>
        <h3>Book an appointment</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span><span aria-hidden="true">🔐</span> Encrypted &amp; secure</span>
          <span><span aria-hidden="true">🛡️</span> HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request an appointment.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="about-cta-heading">
  <div class="container">
    <div class="cta-inner">
      <h2 id="about-cta-heading">Ready to get started?</h2>
      <p>Same-week telehealth appointments available. Complete a short intake and connect with a provider.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">Our Services</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
