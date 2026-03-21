<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<section class="page-hero">
  <div class="container">
    <div class="label">TRT Evaluation</div>
    <h1>Testosterone evaluation and ongoing care</h1>
    <p class="lead">Talk with a licensed provider about your symptoms, get a proper lab-based evaluation, and understand your options &mdash; without the guesswork.</p>
  </div>
</section>

<div style="overflow:hidden;max-height:460px;">
  <img src="<?php echo $img; ?>/trt.png" alt="Testosterone evaluation and care" style="width:100%;object-fit:cover;display:block;" />
</div>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">Clinical approach</div>
        <h2>Evaluation before treatment, always</h2>
        <p>If you have been experiencing fatigue, low energy, mood changes, reduced libido, or difficulty recovering the way you used to &mdash; these are worth discussing with a provider. Symptoms like these can have multiple causes, and the right starting point is a proper evaluation, not assumptions.</p>
        <p>MBS Medical approaches TRT with a clinical-first mindset. Your provider will review your symptoms, health history, and lab results before any treatment recommendation is made. Monitoring continues throughout your care so adjustments can be made based on how you are responding.</p>
        <div class="features-grid">
          <div class="feature-item">
            <h4>Lab-driven decisions</h4>
            <p>Bloodwork is core to the evaluation. Treatment recommendations are based on your clinical picture.</p>
          </div>
          <div class="feature-item">
            <h4>Discreet care</h4>
            <p>Telehealth means you can have this conversation from home, on your schedule, with full privacy.</p>
          </div>
          <div class="feature-item">
            <h4>Ongoing monitoring</h4>
            <p>Regular follow-up visits ensure your care stays on track and adjustments are made as needed.</p>
          </div>
          <div class="feature-item">
            <h4>Cash pay</h4>
            <p>No insurance required. Your visit fee is clear and confirmed before you book.</p>
          </div>
        </div>
      </div>
      <div class="portal-card">
        <div class="portal-icon">📅</div>
        <h3>Book a TRT evaluation</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better &rarr;</a>
        <div class="portal-trust">
          <span>🔐 Encrypted &amp; secure</span>
          <span>🛡️ HIPAA-compliant</span>
          <span>&#10003; No patient data collected here</span>
        </div>
        <hr class="portal-divider">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request an evaluation. All clinical decisions are made after provider review.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container">
    <div class="label">Common questions</div>
    <h2 class="title">TRT at MBS Medical</h2>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Does insurance cover TRT visits?</h3>
        <p>MBS Medical is a cash-pay practice. We do not accept or bill insurance. Visit fees are transparent and confirmed before you book. Lab costs, when applicable, are separate and disclosed upfront.</p>
      </div>
      <div class="faq-item">
        <h3>Who is a good candidate for evaluation?</h3>
        <p>Men experiencing symptoms that may be related to low testosterone &mdash; fatigue, low libido, mood changes, decreased muscle mass, or brain fog &mdash; who want a medical evaluation and honest guidance on their options.</p>
      </div>
      <div class="faq-item">
        <h3>How does the evaluation process work?</h3>
        <p>You complete a short intake and meet with a provider via telehealth to discuss your symptoms and health history. Lab work is a standard part of the process, and your provider will walk you through what the results mean before making any recommendations.</p>
      </div>
      <div class="faq-item">
        <h3>Is TRT automatically prescribed?</h3>
        <p>No. Whether TRT is appropriate depends entirely on your labs, medical history, and your provider&rsquo;s clinical judgment. Your provider will be direct and honest about the outcome regardless of what the evaluation shows.</p>
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

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner">
      <h2>Start with a proper evaluation</h2>
      <p>Same-week telehealth appointments available. Complete a short intake and connect with a licensed provider who will take your concerns seriously.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">All Services</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
