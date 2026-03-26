<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- ====================================================
     PAGE HERO SPLIT (with image)
     ==================================================== -->
<section class="page-hero-split" aria-labelledby="wl-hero-heading">
  <div class="container">
    <div class="page-hero-grid">
      <div class="page-hero-text">
        <span class="eyebrow">Weight Loss</span>
        <h1 id="wl-hero-heading">Medical weight loss support built around you</h1>
        <p>Clinically supervised weight management with a licensed provider, a personalized care plan, and regular follow-ups to keep your progress on track.</p>
        <ul class="page-hero-badges" aria-label="Program highlights">
          <li><span aria-hidden="true">&#10003;</span> Personalized care plan</li>
          <li><span aria-hidden="true">&#10003;</span> Same-week appointments</li>
          <li><span aria-hidden="true">&#10003;</span> Cash pay, no insurance</li>
        </ul>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo esc_url( $img ); ?>/weight-loss.png"
             alt="Medical weight loss support and telehealth consultation" />
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     HIGHLIGHTS BAR
     ==================================================== -->
<div class="highlights-bar" role="region" aria-label="Program features">
  <div class="container">
    <div class="highlights-grid">
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"/></svg>
        </div>
        <div>
          <h4>Clinical evaluation</h4>
          <p>Provider reviews your full health picture before any plan is made</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/></svg>
        </div>
        <div>
          <h4>Personalized plan</h4>
          <p>Built around your history and goals, not a template program</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
        </div>
        <div>
          <h4>Regular check-ins</h4>
          <p>Structured follow-ups to track progress and adjust your plan</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/></svg>
        </div>
        <div>
          <h4>Cash pay</h4>
          <p>Transparent fee confirmed before you book. No insurance required</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ====================================================
     MAIN CONTENT + PORTAL CARD
     ==================================================== -->
<section class="section" aria-labelledby="wl-approach-heading">
  <div class="container">
    <div class="about-grid">

      <div>
        <span class="eyebrow">The Approach</span>
        <h2 id="wl-approach-heading">A structured approach to lasting results</h2>
        <p>Losing weight isn&#8217;t just about willpower. For many people, underlying factors -- hormones, metabolism, medication, and lifestyle -- play a significant role. MBS Medical takes a clinical-first approach: evaluate first, then build a plan that fits your health history and your goals.</p>
        <p>You work directly with a licensed provider who reviews your full picture before making any recommendations. Progress is tracked at scheduled follow-up visits, and your plan can be adjusted as you move forward. No templates, no guesswork, no being left on your own after the first visit.</p>
        <div class="features-grid" style="margin-top:1.75rem">
          <div class="feature-item">
            <h3>Personalized planning</h3>
            <p>Your plan is built around your health history and goals, not a one-size-fits-all program.</p>
          </div>
          <div class="feature-item">
            <h3>Ongoing accountability</h3>
            <p>Scheduled follow-ups track your progress and give your provider data to refine your approach.</p>
          </div>
          <div class="feature-item">
            <h3>Clinical oversight</h3>
            <p>Every recommendation comes after a proper medical review by a licensed clinician.</p>
          </div>
          <div class="feature-item">
            <h3>Cash pay</h3>
            <p>No insurance needed. Fee confirmed before you book. No surprise billing, ever.</p>
          </div>
        </div>
      </div>

      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="30" height="30"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
        </div>
        <h3>Book a weight loss consult</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span>Encrypted &amp; secure</span>
          <span>HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request a consultation. All clinical decisions are made after provider review.</p>
      </div>

    </div>
  </div>
</section>

<!-- ====================================================
     FAQ
     ==================================================== -->
<section class="section section--tinted" aria-labelledby="wl-faq-heading">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Common Questions</span>
      <h2 id="wl-faq-heading">Weight loss at MBS Medical</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Does insurance cover this program?</h3>
        <p>MBS Medical is a cash-pay practice. We do not bill insurance. You pay a transparent, fixed fee per visit. No claims, no denials, no unexpected bills. Your fee is confirmed before you book.</p>
      </div>
      <div class="faq-item">
        <h3>Who is a good fit for this program?</h3>
        <p>Adults who want a medically supervised approach to weight management, especially those who have tried diet and exercise without lasting results and want a provider to evaluate what else may be contributing.</p>
      </div>
      <div class="faq-item">
        <h3>How does the process work?</h3>
        <p>You start with a short online intake. A provider reviews your information and meets with you via telehealth to discuss your history, goals, and options. Your care plan is built after that visit, not before.</p>
      </div>
      <div class="faq-item">
        <h3>Is medication automatically part of the program?</h3>
        <p>No. All treatment decisions, including whether medication is appropriate, are made by a licensed clinician after a full medical review. Your provider will be straightforward about what fits your situation.</p>
      </div>
      <div class="faq-item">
        <h3>What does follow-up care look like?</h3>
        <p>After your initial visit, follow-up appointments are scheduled to review your progress, adjust your plan as needed, and keep your care on track. You are not left on your own after the first visit.</p>
      </div>
      <div class="faq-item">
        <h3>Are lab costs included in the visit fee?</h3>
        <p>Lab costs, when applicable, are separate from the visit fee and will be communicated at the time of ordering. There are no hidden charges. Your provider will explain everything upfront.</p>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     CTA STRIP
     ==================================================== -->
<section class="cta-strip" aria-labelledby="wl-cta-heading">
  <div class="container">
    <span class="eyebrow eyebrow--light">Ready to Get Started?</span>
    <h2 id="wl-cta-heading">Ready to get started?</h2>
    <p>Same-week telehealth appointments available. Complete a short intake and connect with a provider who will look at the full picture before making any recommendations.</p>
    <div class="btn-row">
      <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn--inverse">All Services</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
