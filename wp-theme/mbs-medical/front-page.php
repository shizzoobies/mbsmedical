<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<main id="main-content">

<!-- Hero -->
<section class="hero" aria-labelledby="hero-heading">
  <div class="container hero-grid">
    <div>
      <div class="hero-kicker" aria-hidden="true">Telehealth &middot; Cash Pay &middot; No Insurance Needed</div>
      <h1 id="hero-heading">Healthcare built around you,<br>not your insurer</h1>
      <p class="hero-lead">Primary care, medically supervised weight loss, and TRT. From a licensed provider who actually knows your history.</p>
      <div class="hero-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Explore Services</a>
      </div>
      <ul class="hero-trust" aria-label="Why choose MBS Medical">
        <li class="hero-trust-item"><span class="trust-pip" aria-hidden="true"></span> No insurance required</li>
        <li class="hero-trust-item"><span class="trust-pip" aria-hidden="true"></span> Transparent visit fees</li>
        <li class="hero-trust-item"><span class="trust-pip" aria-hidden="true"></span> Same-week appointments</li>
        <li class="hero-trust-item"><span class="trust-pip" aria-hidden="true"></span> Veteran provider</li>
      </ul>
    </div>
    <div class="hero-img-col">
      <img src="<?php echo $img; ?>/hero.png" alt="Physician Assistant consulting with a patient via telehealth video call" />
      <div class="hero-float-card" aria-label="Services offered">
        <div class="fc-label">Services offered</div>
        <div class="fc-row"><div class="fc-dot t" aria-hidden="true"></div><span>Primary Care</span></div>
        <div class="fc-row"><div class="fc-dot p" aria-hidden="true"></div><span>Weight Loss</span></div>
        <div class="fc-row"><div class="fc-dot pk" aria-hidden="true"></div><span>TRT Evaluation</span></div>
      </div>
    </div>
  </div>
</section>

<!-- Trust bar -->
<div class="trust-bar" role="region" aria-label="Practice highlights">
  <div class="trust-bar-inner">
    <div class="trust-item"><span aria-hidden="true">🎖️</span> Veteran provider</div>
    <div class="trust-item"><span aria-hidden="true">💳</span> Cash pay, no insurance</div>
    <div class="trust-item"><span aria-hidden="true">📅</span> Same-week appointments</div>
    <div class="trust-item"><span aria-hidden="true">🔒</span> Secure patient portal</div>
    <div class="trust-item"><span aria-hidden="true">📋</span> No surprise billing</div>
  </div>
</div>

<!-- Cinematic lifestyle image -->
<div class="cinematic-wrap">
  <img src="<?php echo $img; ?>/cinematic.png" alt="A person enjoying an active, healthy lifestyle outdoors" />
</div>

<!-- Services -->
<section class="section" aria-labelledby="services-heading">
  <div class="container">
    <div class="label" aria-hidden="true">What we treat</div>
    <h2 class="title" id="services-heading">Three focused services,<br>one dedicated provider</h2>
    <p class="lead">Everything at MBS Medical is built around a direct, ongoing relationship between you and your provider. Not a rotating roster of strangers.</p>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/primary-care.png" alt="Telehealth primary care consultation" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-t" aria-hidden="true">🩺</div>
          <h3>Primary Care</h3>
          <p>Routine visits, medication management, and ongoing care from a provider who actually knows your history.</p>
          <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="service-link">Learn more about Primary Care <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/weight-loss.png" alt="Medical weight loss program support" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-p" aria-hidden="true">📉</div>
          <h3>Weight Loss</h3>
          <p>Medically supervised weight management built around your health history, your goals, and real clinical oversight.</p>
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-link">Explore Weight Loss <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/trt.png" alt="TRT testosterone evaluation and monitoring" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-pk" aria-hidden="true">🔬</div>
          <h3>TRT Evaluation</h3>
          <p>Lab-driven evaluation and ongoing care for men dealing with low energy, mood changes, or reduced vitality.</p>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-link">See TRT Details <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video explainer placeholder -->
<section class="video-section" aria-labelledby="video-heading">
  <div class="container">
    <div class="video-label-row">
      <div class="label" aria-hidden="true">The process</div>
      <h2 class="title" id="video-heading" style="text-align:center">See how it works</h2>
      <p class="lead center">From first visit to ongoing care in three simple steps. Watch the 60-second overview.</p>
    </div>
    <div class="ph ph-wide" style="max-width:860px;margin:0 auto;cursor:pointer" role="button" aria-label="Play video: How MBS Medical Works, 60 second explainer" tabindex="0">
      <div class="ph-play" aria-hidden="true">
        <svg viewBox="0 0 24 24" focusable="false"><polygon points="5 3 19 12 5 21 5 3"/></svg>
      </div>
      <div class="ph-label" style="margin-top:.75rem" aria-hidden="true">How MBS Medical Works, 60 sec Explainer</div>
      <div class="ph-sublabel" aria-hidden="true">ElevenLabs video render &middot; 16:9 &middot; autoplay muted loop option</div>
    </div>
  </div>
</section>

<!-- How it works steps -->
<section class="section section-navy" aria-labelledby="steps-heading">
  <div class="container">
    <div style="text-align:center;margin-bottom:3.5rem">
      <div class="label label-light" aria-hidden="true">Simple. Honest. Effective.</div>
      <h2 class="title light" id="steps-heading">Three steps to better care</h2>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-number" aria-hidden="true">1</div>
        <h3>Complete a short intake</h3>
        <p>No waiting room. Start online, on your schedule. Your provider reviews everything before your visit.</p>
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

<!-- Provider -->
<section class="section section-alt" aria-labelledby="provider-heading">
  <div class="container">
    <div class="split">
      <div>
        <img src="<?php echo $img; ?>/david.png" alt="David Hervig PA-C, Physician Assistant and US Army Veteran" style="width:100%;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg)" />
      </div>
      <div class="split-text">
        <div class="label" aria-hidden="true">Your provider</div>
        <h2 id="provider-heading">David Hervig, PA-C</h2>
        <p>David is a Physician Assistant and a man of many hats. Always a medical provider first, he also serves as one of our office managers and currently leads marketing for the practice.</p>
        <p>David is a US Army Veteran with 12 years of service. He learned medicine from the ground up in some of the most demanding environments imaginable, and that background shapes how he practices today: direct, thorough, and genuinely invested in the people he works with.</p>
        <ul class="cred-list">
          <li><div class="cred-pip" aria-hidden="true"></div> Physician Assistant (PA-C)</li>
          <li><div class="cred-pip" aria-hidden="true"></div> US Army Veteran, 12 years of service</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Primary care, weight loss &amp; TRT</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Cash-pay, direct-care model</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Pricing -->
<section class="section" id="pricing" aria-labelledby="pricing-heading">
  <div class="container">
    <div class="label" aria-hidden="true">Transparent pricing</div>
    <h2 class="title" id="pricing-heading">You know the cost before you book</h2>
    <p class="lead">No claims. No denials. No surprise bills. MBS Medical is a cash-pay practice. Your fee is clear, confirmed, and fair.</p>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="price-accent" aria-hidden="true"></div>
        <div class="price-icon" aria-hidden="true">🩺</div>
        <h3>Primary Care</h3>
        <p class="price-sub">New and established patient visits</p>
        <hr class="price-divider" aria-hidden="true">
        <div class="price-amount"><sup aria-hidden="true">$</sup><span class="sr-only">$</span>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Telehealth visit with your provider</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Care notes and follow-up plan</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Lab orders and referrals as needed</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="btn btn-outline" style="width:100%">Learn More about Primary Care</a></div>
      </div>
      <div class="price-card featured">
        <div class="price-accent" aria-hidden="true"></div>
        <div class="price-icon" aria-hidden="true">📉</div>
        <h3>Weight Loss</h3>
        <p class="price-sub">Initial consultation and ongoing care</p>
        <hr class="price-divider" aria-hidden="true">
        <div class="price-amount"><sup aria-hidden="true">$</sup><span class="sr-only">$</span>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Provider-built care plan</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Structured progress check-ins</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Plan adjustments over time</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="btn btn-primary" style="width:100%">Explore Weight Loss</a></div>
      </div>
      <div class="price-card">
        <div class="price-accent" aria-hidden="true"></div>
        <div class="price-icon" aria-hidden="true">🔬</div>
        <h3>TRT Evaluation</h3>
        <p class="price-sub">Initial evaluation and monitoring visits</p>
        <hr class="price-divider" aria-hidden="true">
        <div class="price-amount"><sup aria-hidden="true">$</sup><span class="sr-only">$</span>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Symptom review and health history</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Lab-guided clinical decisions</li>
          <li><div class="price-check" aria-hidden="true">&#10003;</div> Regular follow-up monitoring</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="btn btn-outline" style="width:100%">See TRT Details</a></div>
      </div>
    </div>
  </div>
</section>

<!-- Book / Portal split -->
<section class="section section-lavender" aria-labelledby="booking-heading">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label" aria-hidden="true">Ready to start</div>
        <h2 id="booking-heading">Care that fits around your life</h2>
        <p>MBS Medical is designed to make getting and staying healthy less complicated. Start online, meet with a provider who actually listens, and follow a plan that fits your schedule.</p>
        <div class="features-grid">
          <div class="feature-item">
            <h4>No friction</h4>
            <p>Complete intake, book, and get care without long waits or confusing next steps.</p>
          </div>
          <div class="feature-item">
            <h4>Ongoing care</h4>
            <p>Follow-ups and plan adjustments are built in. Not add-ons you have to ask for.</p>
          </div>
          <div class="feature-item">
            <h4>Cash pay</h4>
            <p>No insurance card needed. The fee is clear before you book, every time.</p>
          </div>
          <div class="feature-item">
            <h4>Same-week</h4>
            <p>Same-week telehealth appointments available for all three services.</p>
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

<!-- Patient testimonials -->
<section class="section" aria-labelledby="testimonials-heading">
  <div class="container">
    <div class="label" aria-hidden="true">Patient experiences</div>
    <h2 class="title" id="testimonials-heading">What patients are saying</h2>
    <p class="lead">Real feedback from real patients.</p>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="testi-img" aria-hidden="true">
          <img src="<?php echo $img; ?>/testi-primary-care.png" alt="" />
        </div>
        <div class="testi-body">
          <figure>
            <blockquote class="testi-text">
              <p>&ldquo;I finally have a provider who knows my history. Same-week appointment, no waiting room.&rdquo;</p>
            </blockquote>
            <figcaption class="testi-person"><cite>Primary Care Patient</cite></figcaption>
          </figure>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-img" aria-hidden="true">
          <img src="<?php echo $img; ?>/testi-weight-loss.png" alt="" />
        </div>
        <div class="testi-body">
          <figure>
            <blockquote class="testi-text">
              <p>&ldquo;The process was completely clear from the first visit. I knew exactly what the next step was.&rdquo;</p>
            </blockquote>
            <figcaption class="testi-person"><cite>Weight Loss Program Patient</cite></figcaption>
          </figure>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-img" aria-hidden="true">
          <img src="<?php echo $img; ?>/testi-trt.png" alt="" />
        </div>
        <div class="testi-body">
          <figure>
            <blockquote class="testi-text">
              <p>&ldquo;I&rsquo;d been putting off addressing my symptoms for years. Getting evaluated was easier than I expected.&rdquo;</p>
            </blockquote>
            <figcaption class="testi-person"><cite>TRT Evaluation Patient</cite></figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="cta-heading">
  <div class="container">
    <div class="cta-inner">
      <h2 id="cta-heading">Ready to take control of your health?</h2>
      <p>Same-week telehealth appointments available. Complete a short intake and a provider will follow up within one business day.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">Learn About Services</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
