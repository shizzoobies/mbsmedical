<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<main id="main-content">

<section class="page-hero" aria-labelledby="services-hero-heading">
  <div class="container">
    <div class="label" aria-hidden="true">Our services</div>
    <h1 id="services-hero-heading">Three focused services,<br>one dedicated provider</h1>
    <p class="lead">Primary care, medically supervised weight loss, and TRT evaluation. Each built around a real provider relationship, a clear plan, and ongoing follow-up.</p>
  </div>
</section>

<div class="service-rows">
  <div class="container">

    <!-- Primary Care -->
    <div class="service-row">
      <div class="service-row-img">
        <img src="<?php echo $img; ?>/primary-care.png" alt="Telehealth primary care consultation" />
      </div>
      <div class="service-row-text">
        <div class="svc-icon-lg icon-t" aria-hidden="true">🩺</div>
        <h2>Primary Care</h2>
        <p>A consistent telehealth provider for routine visits, medication management, wellness planning, and ongoing care. Your provider builds real familiarity with your history over time.</p>
        <ul class="svc-bullets">
          <li>Routine and preventive care visits</li>
          <li>Medication and lab management</li>
          <li>Continuity with the same provider</li>
          <li>Same-week appointments available</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="btn btn-primary">Learn More about Primary Care</a>
      </div>
    </div>

    <!-- Weight Loss -->
    <div class="service-row">
      <div class="service-row-text">
        <div class="svc-icon-lg icon-p" aria-hidden="true">📉</div>
        <h2>Medical Weight Loss</h2>
        <p>Medically supervised weight management built around your health history and goals. Your provider evaluates your full picture first, then builds a plan that can be adjusted as you move forward.</p>
        <ul class="svc-bullets">
          <li>Personalized, provider-built care plan</li>
          <li>Structured progress check-ins</li>
          <li>Clinical oversight at every step</li>
          <li>No one-size-fits-all programs</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="btn btn-primary">Explore Weight Loss</a>
      </div>
      <div class="service-row-img">
        <img src="<?php echo $img; ?>/weight-loss.png" alt="Medical weight loss support and monitoring" />
      </div>
    </div>

    <!-- TRT -->
    <div class="service-row">
      <div class="service-row-img">
        <img src="<?php echo $img; ?>/trt.png" alt="TRT testosterone evaluation and care" />
      </div>
      <div class="service-row-text">
        <div class="svc-icon-lg icon-pk" aria-hidden="true">🔬</div>
        <h2>TRT Evaluation</h2>
        <p>Lab-driven evaluation and ongoing care for men experiencing fatigue, low energy, mood changes, or reduced vitality. Symptoms first, labs second, recommendations only after a full clinical review.</p>
        <ul class="svc-bullets">
          <li>Symptom review and health history</li>
          <li>Bloodwork-guided clinical decisions</li>
          <li>Discreet telehealth from home</li>
          <li>Regular monitoring and follow-up</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="btn btn-primary">See TRT Details</a>
      </div>
    </div>

  </div>
</div>

<!-- How it works -->
<section class="section section-navy" aria-labelledby="how-it-works-heading">
  <div class="container">
    <div style="text-align:center;margin-bottom:3.5rem">
      <div class="label label-light" aria-hidden="true">Simple. Honest. Effective.</div>
      <h2 class="title light" id="how-it-works-heading">How every service works</h2>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-number" aria-hidden="true">1</div>
        <h3>Complete a short intake</h3>
        <p>Start online on your schedule. Your provider reviews everything before your first visit.</p>
      </div>
      <div class="step">
        <div class="step-number" aria-hidden="true">2</div>
        <h3>Meet your provider virtually</h3>
        <p>A real conversation about your history, your goals, and your options. No rushed 7-minute slots.</p>
      </div>
      <div class="step">
        <div class="step-number" aria-hidden="true">3</div>
        <h3>Follow a clear care plan</h3>
        <p>You leave knowing exactly what comes next. Follow-up and monitoring are built in.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="services-cta-heading">
  <div class="container">
    <div class="cta-inner">
      <h2 id="services-cta-heading">Not sure where to start?</h2>
      <p>Book a general visit and tell a provider what you are dealing with. They will help you figure out the right next step.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-white">Meet Your Provider</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
