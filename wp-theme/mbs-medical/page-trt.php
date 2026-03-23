<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- ====================================================
     PAGE HERO SPLIT (with image)
     ==================================================== -->
<section class="page-hero-split" aria-labelledby="trt-hero-heading">
  <div class="container">
    <div class="page-hero-grid">
      <div class="page-hero-text">
        <span class="eyebrow">TRT Evaluation</span>
        <h1 id="trt-hero-heading">Testosterone evaluation and ongoing care</h1>
        <p>Talk with a licensed provider about your symptoms, get a proper lab-based evaluation, and understand your options without the guesswork.</p>
        <ul class="page-hero-badges" aria-label="Program highlights">
          <li><span aria-hidden="true">&#10003;</span> Lab-driven evaluation</li>
          <li><span aria-hidden="true">&#10003;</span> Discreet telehealth</li>
          <li><span aria-hidden="true">&#10003;</span> Cash pay, no insurance</li>
        </ul>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo esc_url( $img ); ?>/trt.png"
             alt="TRT testosterone evaluation and monitoring care" />
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
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
        </div>
        <div>
          <h4>Lab-driven</h4>
          <p>Bloodwork is central to every evaluation and every clinical decision</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
        </div>
        <div>
          <h4>Discreet care</h4>
          <p>Private telehealth appointments from home, fully on your schedule</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/></svg>
        </div>
        <div>
          <h4>Monitored ongoing</h4>
          <p>Regular follow-up visits to review labs and adjust care as needed</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/></svg>
        </div>
        <div>
          <h4>Cash pay</h4>
          <p>Clear fee before you book. No insurance required, no surprises</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ====================================================
     MAIN CONTENT + PORTAL CARD
     ==================================================== -->
<section class="section" aria-labelledby="trt-approach-heading">
  <div class="container">
    <div class="about-grid">

      <div>
        <span class="eyebrow">Clinical Approach</span>
        <h2 id="trt-approach-heading">Evaluation before treatment, always</h2>
        <p>If you have been experiencing fatigue, low energy, mood changes, reduced libido, or difficulty recovering the way you used to, these are worth discussing with a provider. Symptoms like these can have multiple causes, and the right starting point is a proper evaluation, not assumptions.</p>
        <p>MBS Medical approaches TRT with a clinical-first mindset. Your provider will review your symptoms, health history, and lab results before any treatment recommendation is made. Monitoring continues throughout your care so adjustments can be made based on how you are responding.</p>
        <div class="features-grid" style="margin-top:1.75rem">
          <div class="feature-item">
            <h3>Lab-driven decisions</h3>
            <p>Bloodwork is core to the evaluation. Treatment recommendations are based on your clinical picture.</p>
          </div>
          <div class="feature-item">
            <h3>Discreet care</h3>
            <p>Telehealth means you can have this conversation from home, on your schedule, with full privacy.</p>
          </div>
          <div class="feature-item">
            <h3>Ongoing monitoring</h3>
            <p>Regular follow-up visits ensure your care stays on track and adjustments are made as needed.</p>
          </div>
          <div class="feature-item">
            <h3>Cash pay</h3>
            <p>No insurance required. Your visit fee is clear and confirmed before you book.</p>
          </div>
        </div>
      </div>

      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="30" height="30"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
        </div>
        <h3>Book a TRT evaluation</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span>Encrypted &amp; secure</span>
          <span>HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request an evaluation. All clinical decisions are made after provider review.</p>
      </div>

    </div>
  </div>
</section>

<!-- ====================================================
     FAQ
     ==================================================== -->
<section class="section section--tinted" aria-labelledby="trt-faq-heading">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Common Questions</span>
      <h2 id="trt-faq-heading">TRT at MBS Medical</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Does insurance cover TRT visits?</h3>
        <p>MBS Medical is a cash-pay practice. We do not accept or bill insurance. Visit fees are transparent and confirmed before you book. Lab costs, when applicable, are separate and disclosed upfront.</p>
      </div>
      <div class="faq-item">
        <h3>Who is a good candidate for evaluation?</h3>
        <p>Men experiencing symptoms that may be related to low testosterone (fatigue, low libido, mood changes, decreased muscle mass, or brain fog) who want a medical evaluation and honest guidance on their options.</p>
      </div>
      <div class="faq-item">
        <h3>How does the evaluation process work?</h3>
        <p>You complete a short intake and meet with a provider via telehealth to discuss your symptoms and health history. Lab work is a standard part of the process, and your provider will walk you through what the results mean before making any recommendations.</p>
      </div>
      <div class="faq-item">
        <h3>Is TRT automatically prescribed?</h3>
        <p>No. Whether TRT is appropriate depends entirely on your labs, medical history, and your provider&#8217;s clinical judgment. Your provider will be direct and honest about the outcome regardless of what the evaluation shows.</p>
      </div>
      <div class="faq-item">
        <h3>What does ongoing monitoring look like?</h3>
        <p>Patients receiving TRT support are scheduled for regular follow-up visits to review labs, assess how they are responding, and make any needed adjustments. Ongoing monitoring is part of responsible care.</p>
      </div>
      <div class="faq-item">
        <h3>Can I discuss TRT and primary care in the same practice?</h3>
        <p>Yes. MBS Medical offers primary care alongside TRT evaluation, which means your provider can see the full picture of your health when making clinical decisions.</p>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     CTA STRIP
     ==================================================== -->
<section class="cta-strip" aria-labelledby="trt-cta-heading">
  <div class="container">
    <span class="eyebrow eyebrow--light">Ready to Get Started?</span>
    <h2 id="trt-cta-heading">Start with a proper evaluation</h2>
    <p>Same-week telehealth appointments available. Complete a short intake and connect with a licensed provider who will take your concerns seriously.</p>
    <div class="btn-row">
      <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn--inverse">All Services</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
