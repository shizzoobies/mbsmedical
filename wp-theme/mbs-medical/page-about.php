<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- ====================================================
     PAGE HERO
     ==================================================== -->
<section class="page-hero" aria-labelledby="about-hero-heading">
  <div class="container">
    <span class="eyebrow">About Us</span>
    <h1 id="about-hero-heading">About MBS Medical</h1>
    <p>A modern telehealth practice designed to make care feel more accessible, more consistent, and easier to fit into real life.</p>
  </div>
</section>

<!-- ====================================================
     TEAM SECTION
     ==================================================== -->
<section class="section section--tinted" aria-labelledby="team-heading">
  <div class="container">
    <div class="section-header section-header--center">
      <span class="eyebrow">Meet the Team</span>
      <h2 id="team-heading">The people behind your care</h2>
      <p class="lead">A licensed PA supported by board-certified supervising physicians with decades of clinical experience.</p>
    </div>
    <div class="team-grid">

      <!-- David Hervig PA-C -->
      <div class="team-card">
        <div class="team-avatar">
          <img src="<?php echo esc_url( $img ); ?>/david.png" alt="David Hervig PA-C, Physician Assistant" />
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
        <div class="team-avatar-ph" aria-label="Dr. Eric Folkens initials">EF</div>
        <h3>Eric Folkens, MD</h3>
        <p class="team-role">Supervising Physician</p>
        <p>Dr. Folkens is a board-certified family medicine physician with over 34 years of clinical experience in Florida. He founded urgent care centers across Bradenton, Sarasota, and Lakewood Ranch, and currently serves as Medical Director of the Bradenton Research Center, where he has overseen more than 150 clinical trials.</p>
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
        <div class="team-avatar-ph" aria-label="Dr. Mark Dawson initials">MD</div>
        <h3>Mark Dawson, MD</h3>
        <p class="team-role">Supervising Physician</p>
        <p>Dr. Dawson is a gastroenterologist whose clinical career spans more than three decades, including 31 years in private practice in Bradenton before joining Lee Health full-time. He values collaborative, patient-centered care and brings that same commitment to his role as a supervising physician at MBS Medical.</p>
        <p>He found his calling in a specialty where precise diagnostics and timely intervention can be genuinely life-saving -- and he brings that belief that good medicine is built on trust to every role he takes on.</p>
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

<!-- ====================================================
     ABOUT THE PRACTICE
     ==================================================== -->
<section class="section" aria-labelledby="practice-heading">
  <div class="container">
    <div class="about-grid">

      <div>
        <span class="eyebrow">Our Approach</span>
        <h2 id="practice-heading">Built for today, designed to grow with you</h2>
        <p>MBS Medical was created for patients who want more from their healthcare: more consistency, more clarity, and more convenience. We started with telehealth because it removes the friction that keeps most people from getting the care they need.</p>
        <p>No waiting rooms, no scheduling gaps, no having to repeat yourself to a new provider every visit. Our current focus is primary care, medically supervised weight loss, and TRT evaluation and monitoring.</p>
        <div class="features-grid" style="margin-top:1.75rem">
          <div class="feature-item">
            <h3>Continuity of care</h3>
            <p>Your provider builds familiarity with your history over time. Each visit builds on the last.</p>
          </div>
          <div class="feature-item">
            <h3>Clear next steps</h3>
            <p>You leave every visit knowing exactly what comes next. No confusion, no ambiguity.</p>
          </div>
          <div class="feature-item">
            <h3>Cash pay model</h3>
            <p>No insurance required. Your visit fee is confirmed before you book, every time.</p>
          </div>
          <div class="feature-item">
            <h3>Built to grow</h3>
            <p>We are building a broader practice with in-person care and additional services over time.</p>
          </div>
        </div>
      </div>

      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="30" height="30"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
        </div>
        <h3>Book an appointment</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span>Encrypted &amp; secure</span>
          <span>HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request an appointment.</p>
      </div>

    </div>
  </div>
</section>

<!-- ====================================================
     CTA STRIP
     ==================================================== -->
<section class="cta-strip" aria-labelledby="about-cta-heading">
  <div class="container">
    <span class="eyebrow eyebrow--light">Ready to Get Started?</span>
    <h2 id="about-cta-heading">Ready to get started?</h2>
    <p>Same-week telehealth appointments available. Complete a short intake and connect with a provider.</p>
    <div class="btn-row">
      <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn--inverse">Our Services</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
