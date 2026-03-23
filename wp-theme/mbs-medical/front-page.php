<?php get_header(); ?>

<?php
$img   = get_template_directory_uri() . '/assets/img';
$video = get_template_directory_uri() . '/assets/video';
?>

<main id="main-content">

<!-- ══ Split Hero ═══════════════════════════════════════════ -->
<section class="hero hero-split" aria-labelledby="hero-heading">

  <!-- Left: dark content panel -->
  <div class="hero-panel-dark">
    <div class="hero-panel-content">
      <span class="eyebrow eyebrow-light">Bradenton &amp; Sarasota area &middot; Telehealth statewide</span>
      <h1 id="hero-heading">Primary care, weight loss, and TRT from one modern practice</h1>
      <p class="hero-lead">MBS Medical makes getting quality care simpler. Start online, meet with a licensed provider who knows your history, and follow a plan built around your goals.</p>
      <div class="hero-actions btn-row">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-inverse" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Explore Services</a>
      </div>
      <div class="hero-stats" aria-label="Practice highlights">
        <div>
          <span class="hero-stat-val">Cash Pay</span>
          <span class="hero-stat-lbl">No insurance required</span>
        </div>
        <div>
          <span class="hero-stat-val">3</span>
          <span class="hero-stat-lbl">Focused services</span>
        </div>
        <div>
          <span class="hero-stat-val">Same-Week</span>
          <span class="hero-stat-lbl">Appointments available</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Right: intro video -->
  <div class="hero-panel-image">
    <video autoplay muted playsinline loop
           class="hero-panel-video"
           aria-label="MBS Medical intro video"
           poster="<?php echo $img; ?>/hero.png">
      <source src="<?php echo $video; ?>/intro.mp4" type="video/mp4">
    </video>
  </div>

</section>

<!-- ══ Services ═════════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-heading">
  <div class="container">
    <div class="section-header">
      <hr class="section-rule" aria-hidden="true">
      <span class="eyebrow">What We Treat</span>
      <h2 id="services-heading">Three focused services,<br>one dedicated provider</h2>
      <p class="lead">Everything at MBS Medical is built around a direct, ongoing relationship between you and your provider. Not a rotating roster of strangers.</p>
    </div>
    <div class="services-grid">

      <article class="service-card" aria-labelledby="home-svc-pc">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
        </div>
        <h3 id="home-svc-pc">Primary Care</h3>
        <p>Routine visits, medication management, and ongoing care from a provider who actually knows your history. No rushed appointments, no revolving door.</p>
        <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="service-card-link">Learn more about Primary Care <span aria-hidden="true">&rarr;</span></a>
      </article>

      <article class="service-card" aria-labelledby="home-svc-wl">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"/></svg>
        </div>
        <h3 id="home-svc-wl">Weight Loss</h3>
        <p>Medically supervised weight management built around your health history, your goals, and real clinical oversight. Progress check-ins built in.</p>
        <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-card-link">Explore Weight Loss <span aria-hidden="true">&rarr;</span></a>
      </article>

      <article class="service-card" aria-labelledby="home-svc-trt">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
        </div>
        <h3 id="home-svc-trt">TRT Evaluation</h3>
        <p>Lab-driven evaluation and ongoing care for men dealing with low energy, mood changes, or reduced vitality. Discreet, thorough, and clinically sound.</p>
        <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-card-link">See TRT Details <span aria-hidden="true">&rarr;</span></a>
      </article>

    </div>
    <div style="margin-top:2.5rem;text-align:center">
      <a class="btn-secondary" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">View All Services</a>
    </div>
  </div>
</section>

<!-- ══ How it works ══════════════════════════════════════════ -->
<section class="section section-alt" aria-labelledby="steps-heading">
  <div class="container">
    <div class="section-header">
      <hr class="section-rule" aria-hidden="true">
      <span class="eyebrow">Simple. Honest. Effective.</span>
      <h2 id="steps-heading">Three steps to better care</h2>
      <p class="lead">From first contact to ongoing treatment in one straightforward process.</p>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-number" aria-hidden="true">1</div>
        <h3>Complete a short intake</h3>
        <p>Start online on your schedule. No waiting room, no paperwork. Your provider reviews everything before your visit.</p>
      </div>
      <div class="step">
        <div class="step-number" aria-hidden="true">2</div>
        <h3>Meet your provider virtually</h3>
        <p>A real conversation about your history, your goals, and your options. No rushed 7-minute appointments.</p>
      </div>
      <div class="step">
        <div class="step-number" aria-hidden="true">3</div>
        <h3>Follow a clear care plan</h3>
        <p>You leave knowing exactly what comes next. Follow-up and monitoring are built in, not an afterthought.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ Testimonials (dark) ════════════════════════════════════ -->
<section class="section section-dark" aria-labelledby="testimonials-heading">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow eyebrow-light">Patient Experiences</span>
      <h2 id="testimonials-heading" style="color:white">What patients are saying</h2>
      <p class="lead" style="color:rgba(255,255,255,.55)">Real feedback from real patients.</p>
    </div>
    <div class="testimonials-grid">

      <article class="quote-card">
        <blockquote>
          "I finally have a provider who knows my history. The intake was quick, I had an appointment booked same week, and I actually left the visit with a plan I understood."
        </blockquote>
        <div class="quote-author">
          <div class="quote-avatar-ph" aria-hidden="true">PC</div>
          <div>
            <p class="quote-author-name">Primary Care Patient</p>
            <p class="quote-author-loc">MBS Medical</p>
          </div>
        </div>
      </article>

      <article class="quote-card">
        <blockquote>
          "The process was completely clear from the first visit. I knew exactly what the next step was and felt supported throughout. Not like any other practice I've been to."
        </blockquote>
        <div class="quote-author">
          <div class="quote-avatar-ph" aria-hidden="true">WL</div>
          <div>
            <p class="quote-author-name">Weight Loss Program Patient</p>
            <p class="quote-author-loc">MBS Medical</p>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ══ Provider ══════════════════════════════════════════════ -->
<section class="section" aria-labelledby="provider-heading">
  <div class="container">
    <div class="split">
      <div>
        <img src="<?php echo $img; ?>/david.png" alt="David Hervig PA-C, Physician Assistant and US Army Veteran" style="width:100%;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg)" />
      </div>
      <div class="split-text">
        <span class="eyebrow">Your Provider</span>
        <h2 id="provider-heading">David Hervig, PA-C</h2>
        <p>David is a Physician Assistant and a man of many hats. Always a medical provider first, he also serves as one of our office managers and currently leads marketing for the practice.</p>
        <p>David is a US Army Veteran with 12 years of service. He learned medicine from the ground up in some of the most demanding environments imaginable, and that background shapes how he practices today: direct, thorough, and genuinely invested in the people he works with.</p>
        <ul class="cred-list">
          <li><div class="cred-pip" aria-hidden="true"></div> Physician Assistant (PA-C)</li>
          <li><div class="cred-pip" aria-hidden="true"></div> US Army Veteran, 12 years of service</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Primary care, weight loss &amp; TRT</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Cash-pay, direct-care model</li>
        </ul>
        <div class="btn-row" style="margin-top:2rem">
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-outline">Meet the Team</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ Pricing ════════════════════════════════════════════════ -->
<section class="section section-alt" id="pricing" aria-labelledby="pricing-heading">
  <div class="container">
    <div class="section-header">
      <hr class="section-rule" aria-hidden="true">
      <span class="eyebrow">Transparent Pricing</span>
      <h2 id="pricing-heading">You know the cost before you book</h2>
      <p class="lead">No claims. No denials. No surprise bills. MBS Medical is a cash-pay practice. Your fee is clear, confirmed, and fair.</p>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="price-accent" aria-hidden="true"></div>
        <div class="price-icon" aria-hidden="true">&#129682;</div>
        <h3>Primary Care</h3>
        <p class="price-sub">New and established patient visits</p>
        <hr class="price-divider" aria-hidden="true">
        <div class="price-amount"><sup aria-hidden="true">$</sup><span class="sr-only">$</span>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Telehealth visit with your provider</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Care notes and follow-up plan</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Lab orders and referrals as needed</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="btn btn-outline" style="width:100%;justify-content:center">Learn More</a></div>
      </div>
      <div class="price-card featured">
        <div class="price-accent" aria-hidden="true"></div>
        <div class="price-icon" aria-hidden="true">&#128201;</div>
        <h3>Weight Loss</h3>
        <p class="price-sub">Initial consultation and ongoing care</p>
        <hr class="price-divider" aria-hidden="true">
        <div class="price-amount"><sup aria-hidden="true">$</sup><span class="sr-only">$</span>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Provider-built care plan</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Structured progress check-ins</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Plan adjustments over time</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="btn btn-primary" style="width:100%;justify-content:center">Explore Weight Loss</a></div>
      </div>
      <div class="price-card">
        <div class="price-accent" aria-hidden="true"></div>
        <div class="price-icon" aria-hidden="true">&#128300;</div>
        <h3>TRT Evaluation</h3>
        <p class="price-sub">Initial evaluation and monitoring visits</p>
        <hr class="price-divider" aria-hidden="true">
        <div class="price-amount"><sup aria-hidden="true">$</sup><span class="sr-only">$</span>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Symptom review and health history</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Lab-guided clinical decisions</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Regular follow-up monitoring</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="btn btn-outline" style="width:100%;justify-content:center">See TRT Details</a></div>
      </div>
    </div>
    <p style="text-align:center;margin-top:1.25rem;font-size:.85rem;color:var(--muted)">Fees shown are placeholders. Replace with actual visit pricing before launch. Lab costs are separate and disclosed at time of ordering.</p>
  </div>
</section>

<!-- ══ CTA ═══════════════════════════════════════════════════ -->
<section class="cta-strip" aria-labelledby="cta-heading">
  <div class="container">
    <span class="eyebrow">Ready to Get Started?</span>
    <h2 id="cta-heading">Take control of your health today</h2>
    <p>Same-week telehealth appointments available. Complete a short intake online and a provider will follow up within one business day.</p>
    <div class="btn-row">
      <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-inverse" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Learn About Services</a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
