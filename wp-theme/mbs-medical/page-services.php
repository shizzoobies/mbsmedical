<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<section class="page-hero">
  <div class="container">
    <div class="label">What we offer</div>
    <h1>What we treat at MBS Medical</h1>
    <p class="lead">Focused telehealth services designed to make it easier to get care, understand your options, and stay consistent with your health goals.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="services-grid">
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/primary-care.png" alt="Primary Care" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-t">🩺</div>
          <h3>Primary Care</h3>
          <p>Routine visits, medication management, wellness planning, and ongoing care from a provider who builds familiarity with your health over time.</p>
          <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="service-link">Learn more →</a>
        </div>
      </div>
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/weight-loss.png" alt="Weight Loss" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-p">📉</div>
          <h3>Weight Loss</h3>
          <p>Medically supervised weight management with a personalized care plan, structured follow-ups, and clinical oversight at every step.</p>
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-link">Explore weight loss →</a>
        </div>
      </div>
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/trt.png" alt="TRT" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-pk">🔬</div>
          <h3>TRT Evaluation</h3>
          <p>Evaluation and ongoing care for men experiencing symptoms that may be related to low testosterone &mdash; labs, clinical review, and monitoring included.</p>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-link">See TRT details →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How it works steps -->
<section class="section section-navy">
  <div class="container">
    <div style="text-align:center;margin-bottom:3.5rem">
      <div class="label label-light">Simple. Honest. Effective.</div>
      <h2 class="title light">How every service works</h2>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-number">1</div>
        <h3>Complete a short intake</h3>
        <p>Start online on your schedule. Your provider reviews everything before your first visit.</p>
      </div>
      <div class="step">
        <div class="step-number">2</div>
        <h3>Meet your provider virtually</h3>
        <p>A real conversation about your history, your goals, and your options &mdash; no rushed 7-minute slot.</p>
      </div>
      <div class="step">
        <div class="step-number">3</div>
        <h3>Follow a clear care plan</h3>
        <p>You leave knowing exactly what comes next. Follow-up and monitoring are built in.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner">
      <h2>Not sure where to start?</h2>
      <p>Book a general visit and tell a provider what you are dealing with. They will help you figure out the right next step.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-white">Meet Your Provider</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
