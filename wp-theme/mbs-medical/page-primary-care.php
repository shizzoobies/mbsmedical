<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- ====================================================
     PAGE HERO SPLIT (with image)
     ==================================================== -->
<section class="page-hero-split" aria-labelledby="pc-hero-heading">
  <div class="container">
    <div class="page-hero-grid">
      <div class="page-hero-text">
        <span class="eyebrow">Primary Care</span>
        <h1 id="pc-hero-heading">Primary care you can actually rely on</h1>
        <p>Routine visits, medication management, wellness planning, and ongoing care from a provider who knows your history. All via telehealth, on your schedule.</p>
        <ul class="page-hero-badges" aria-label="Service highlights">
          <li><span aria-hidden="true">&#10003;</span> Same provider every visit</li>
          <li><span aria-hidden="true">&#10003;</span> Same-week appointments</li>
          <li><span aria-hidden="true">&#10003;</span> Cash pay, no insurance</li>
        </ul>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo esc_url( $img ); ?>/primary-care.png"
             alt="Telehealth primary care consultation with licensed provider" />
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     HIGHLIGHTS BAR
     ==================================================== -->
<div class="highlights-bar" role="region" aria-label="Service features">
  <div class="container">
    <div class="highlights-grid">
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
        </div>
        <div>
          <h4>Your provider</h4>
          <p>Same provider every visit, building real familiarity with your history</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"/></svg>
        </div>
        <div>
          <h4>Ongoing care</h4>
          <p>Follow-up, medication management, and continuity built in from day one</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
        </div>
        <div>
          <h4>Same-week</h4>
          <p>Appointments available quickly, without long waits or referral chains</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/></svg>
        </div>
        <div>
          <h4>Cash pay</h4>
          <p>Transparent, no-insurance pricing confirmed before you book, every time</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ====================================================
     MAIN CONTENT + PORTAL CARD
     ==================================================== -->
<section class="section" aria-labelledby="pc-approach-heading">
  <div class="container">
    <div class="about-grid">

      <div>
        <span class="eyebrow">The Foundation</span>
        <h2 id="pc-approach-heading">A home base for your health</h2>
        <p>Most people don&#8217;t struggle to find healthcare. They struggle to find care that sticks. MBS Medical is built for patients who want a consistent provider relationship, not a different face every time they have a question or need a refill.</p>
        <p>Your provider builds familiarity with your history, goals, and concerns over time. That continuity changes how care feels and how effective it is. From routine wellness visits to medication reviews and follow-up care, MBS Medical is designed to be the provider you actually keep coming back to.</p>
        <div class="features-grid" style="margin-top:1.75rem">
          <div class="feature-item">
            <h3>Continuity of care</h3>
            <p>Your provider knows your history. Each visit builds on the last.</p>
          </div>
          <div class="feature-item">
            <h3>No friction</h3>
            <p>Book online, meet via telehealth, leave with a clear plan. Routine visits should not be complicated.</p>
          </div>
          <div class="feature-item">
            <h3>Cash pay</h3>
            <p>No insurance required. Your fee is confirmed before you book, every time.</p>
          </div>
          <div class="feature-item">
            <h3>Same-week</h3>
            <p>Same-week telehealth appointments available for new and established patients.</p>
          </div>
        </div>
      </div>

      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="30" height="30"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
        </div>
        <h3>Book a primary care visit</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span>Encrypted &amp; secure</span>
          <span>HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and book your visit. All clinical recommendations are made after provider review.</p>
      </div>

    </div>
  </div>
</section>

<!-- ====================================================
     FAQ
     ==================================================== -->
<section class="section section--tinted" aria-labelledby="pc-faq-heading">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Common Questions</span>
      <h2 id="pc-faq-heading">Primary care at MBS Medical</h2>
    </div>
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

<!-- ====================================================
     CTA STRIP
     ==================================================== -->
<section class="cta-strip" aria-labelledby="pc-cta-heading">
  <div class="container">
    <span class="eyebrow eyebrow--light">Ready to Get Started?</span>
    <h2 id="pc-cta-heading">Book your first visit today</h2>
    <p>Same-week telehealth appointments available. Complete a short intake and connect with a provider who will actually know your name next time.</p>
    <div class="btn-row">
      <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn--inverse">All Services</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
