<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- ====================================================
     PAGE HERO
     ==================================================== -->
<section class="page-hero" aria-labelledby="services-hero-heading">
  <div class="container">
    <span class="eyebrow">Our Services</span>
    <h1 id="services-hero-heading">Three focused services,<br>one dedicated provider</h1>
    <p>Primary care, medically supervised weight loss, and TRT evaluation. Each built around a real provider relationship, a clear plan, and ongoing follow-up.</p>
  </div>
</section>

<!-- ====================================================
     SERVICE CARDS OVERVIEW
     ==================================================== -->
<section class="section" aria-labelledby="services-overview-heading">
  <div class="container">
    <div class="section-header">
      <hr class="section-rule" aria-hidden="true">
      <span class="eyebrow">What We Offer</span>
      <h2 id="services-overview-heading">Care built around your goals</h2>
      <p class="lead">Every service at MBS Medical is delivered by the same licensed provider, with continuity of care built in from the start.</p>
    </div>
    <div class="services-grid">

      <article class="service-card" aria-labelledby="svc-pc">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
        </div>
        <h3 id="svc-pc">Primary Care</h3>
        <p>A consistent telehealth provider for routine visits, medication management, wellness planning, and ongoing care. Your provider builds real familiarity with your history over time.</p>
        <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="service-card-link">Learn more about Primary Care <span aria-hidden="true">&rarr;</span></a>
      </article>

      <article class="service-card" aria-labelledby="svc-wl">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"/></svg>
        </div>
        <h3 id="svc-wl">Medical Weight Loss</h3>
        <p>Medically supervised weight management built around your health history and goals. Your provider evaluates your full picture first, then builds a plan that can be adjusted as you move forward.</p>
        <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-card-link">Explore Weight Loss <span aria-hidden="true">&rarr;</span></a>
      </article>

      <article class="service-card" aria-labelledby="svc-trt">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
        </div>
        <h3 id="svc-trt">TRT Evaluation</h3>
        <p>Lab-driven evaluation and ongoing care for men experiencing fatigue, low energy, mood changes, or reduced vitality. Symptoms first, labs second, recommendations only after a full clinical review.</p>
        <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-card-link">See TRT Details <span aria-hidden="true">&rarr;</span></a>
      </article>

    </div>
  </div>
</section>

<!-- ====================================================
     HOW IT WORKS
     ==================================================== -->
<section class="section section--dark" aria-labelledby="how-it-works-heading">
  <div class="container">
    <div class="section-header section-header--center">
      <span class="eyebrow eyebrow--light">Simple. Honest. Effective.</span>
      <h2 id="how-it-works-heading">How every service works</h2>
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

<!-- ====================================================
     CTA STRIP
     ==================================================== -->
<section class="cta-strip" aria-labelledby="services-cta-heading">
  <div class="container">
    <span class="eyebrow eyebrow--light">Ready to Get Started?</span>
    <h2 id="services-cta-heading">Not sure where to start?</h2>
    <p>Book a general visit and tell a provider what you are dealing with. They will help you figure out the right next step.</p>
    <div class="btn-row">
      <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn--inverse">Meet Your Provider</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
