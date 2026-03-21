<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<!-- Hero -->
<section class="hero">
  <div class="container hero-grid">
    <div>
      <div class="hero-kicker">Telehealth &middot; Cash Pay &middot; No Insurance Needed</div>
      <h1>Healthcare built around you,<br>not your insurer</h1>
      <p class="hero-lead">Primary care, medically supervised weight loss, and TRT. From a licensed provider who actually knows your history.</p>
      <div class="hero-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-ghost">Explore Services</a>
      </div>
      <div class="hero-trust">
        <div class="hero-trust-item"><span class="trust-pip"></span> No insurance required</div>
        <div class="hero-trust-item"><span class="trust-pip"></span> Transparent visit fees</div>
        <div class="hero-trust-item"><span class="trust-pip"></span> Same-week appointments</div>
        <div class="hero-trust-item"><span class="trust-pip"></span> Veteran provider</div>
      </div>
    </div>
    <div class="hero-img-col">
      <img src="<?php echo $img; ?>/hero.png" alt="Telehealth provider consultation" />
      <div class="hero-float-card">
        <div class="fc-label">Services offered</div>
        <div class="fc-row"><div class="fc-dot t"></div><span>Primary Care</span></div>
        <div class="fc-row"><div class="fc-dot p"></div><span>Weight Loss</span></div>
        <div class="fc-row"><div class="fc-dot pk"></div><span>TRT Evaluation</span></div>
      </div>
    </div>
  </div>
</section>

<!-- Trust bar -->
<div class="trust-bar">
  <div class="trust-bar-inner">
    <div class="trust-item">🎖️ Veteran provider</div>
    <div class="trust-item">💳 Cash pay, no insurance</div>
    <div class="trust-item">📅 Same-week appointments</div>
    <div class="trust-item">🔒 Secure patient portal</div>
    <div class="trust-item">📋 No surprise billing</div>
  </div>
</div>

<!-- Cinematic lifestyle image -->
<div style="width:100%;overflow:hidden;max-height:420px;">
  <img src="<?php echo $img; ?>/cinematic.png" alt="MBS Medical telehealth care" style="width:100%;object-fit:cover;display:block;" />
</div>

<!-- Services -->
<section class="section">
  <div class="container">
    <div class="label">What we treat</div>
    <h2 class="title">Three focused services,<br>one dedicated provider</h2>
    <p class="lead">Everything at MBS Medical is built around a direct, ongoing relationship between you and your provider. Not a rotating roster of strangers.</p>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-card-img">
          <img src="<?php echo $img; ?>/primary-care.png" alt="Primary Care" />
        </div>
        <div class="service-card-body">
          <div class="service-icon icon-t">🩺</div>
          <h3>Primary Care</h3>
          <p>Routine visits, medication management, and ongoing care from a provider who actually knows your history.</p>
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
          <p>Medically supervised weight management built around your health history, your goals, and real clinical oversight.</p>
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
          <p>Lab-driven evaluation and ongoing care for men dealing with low energy, mood changes, or reduced vitality.</p>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-link">See TRT details →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video explainer placeholder -->
<section class="video-section">
  <div class="container">
    <div class="video-label-row">
      <div class="label">The process</div>
      <h2 class="title" style="text-align:center">See how it works</h2>
      <p class="lead center">From first visit to ongoing care in three simple steps. Watch the 60-second overview.</p>
    </div>
    <div class="ph ph-wide" style="max-width:860px;margin:0 auto;cursor:pointer">
      <div class="ph-play">
        <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
      </div>
      <div class="ph-label" style="margin-top:.75rem">How MBS Medical Works, 60 sec Explainer</div>
      <div class="ph-sublabel">ElevenLabs video render &middot; 16:9 &middot; autoplay muted loop option</div>
    </div>
  </div>
</section>

<!-- How it works steps -->
<section class="section section-navy">
  <div class="container">
    <div style="text-align:center;margin-bottom:3.5rem">
      <div class="label label-light">Simple. Honest. Effective.</div>
      <h2 class="title light">Three steps to better care</h2>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-number">1</div>
        <h3>Complete a short intake</h3>
        <p>No waiting room. Start online, on your schedule. Your provider reviews everything before your visit.</p>
      </div>
      <div class="step">
        <div class="step-number">2</div>
        <h3>Meet your provider virtually</h3>
        <p>A real conversation about your history, your goals, and your options. No rushed 7-minute appointments.</p>
      </div>
      <div class="step">
        <div class="step-number">3</div>
        <h3>Follow a clear care plan</h3>
        <p>You leave knowing exactly what comes next. Follow-up and monitoring are built in, not an afterthought.</p>
      </div>
    </div>
  </div>
</section>

<!-- Provider -->
<section class="section section-alt">
  <div class="container">
    <div class="split">
      <div>
        <img src="<?php echo $img; ?>/david.png" alt="David Hervig PA-C" style="width:100%;border-radius:var(--radius-lg);box-shadow:var(--shadow-lg)" />
      </div>
      <div class="split-text">
        <div class="label">Your provider</div>
        <h2>David Hervig, PA-C</h2>
        <p>David is a Physician Assistant and a man of many hats. Always a medical provider first, he also serves as one of our office managers and currently leads marketing for the practice.</p>
        <p>David is a US Army Veteran with 12 years of service. He learned medicine from the ground up in some of the most demanding environments imaginable, and that background shapes how he practices today: direct, thorough, and genuinely invested in the people he works with.</p>
        <ul class="cred-list">
          <li><div class="cred-pip"></div> Physician Assistant (PA-C)</li>
          <li><div class="cred-pip"></div> US Army Veteran, 12 years of service</li>
          <li><div class="cred-pip"></div> Primary care, weight loss &amp; TRT</li>
          <li><div class="cred-pip"></div> Cash-pay, direct-care model</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Pricing -->
<section class="section">
  <div class="container">
    <div class="label">Transparent pricing</div>
    <h2 class="title">You know the cost before you book</h2>
    <p class="lead">No claims. No denials. No surprise bills. MBS Medical is a cash-pay practice. Your fee is clear, confirmed, and fair.</p>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="price-accent"></div>
        <div class="price-icon">🩺</div>
        <h3>Primary Care</h3>
        <p class="price-sub">New and established patient visits</p>
        <hr class="price-divider">
        <div class="price-amount"><sup>$</sup>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check">&#10003;</div> Telehealth visit with your provider</li>
          <li><div class="price-check">&#10003;</div> Care notes and follow-up plan</li>
          <li><div class="price-check">&#10003;</div> Lab orders and referrals as needed</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="btn btn-outline" style="width:100%">Learn More</a></div>
      </div>
      <div class="price-card featured">
        <div class="price-accent"></div>
        <div class="price-icon">📉</div>
        <h3>Weight Loss</h3>
        <p class="price-sub">Initial consultation and ongoing care</p>
        <hr class="price-divider">
        <div class="price-amount"><sup>$</sup>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check">&#10003;</div> Provider-built care plan</li>
          <li><div class="price-check">&#10003;</div> Structured progress check-ins</li>
          <li><div class="price-check">&#10003;</div> Plan adjustments over time</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="btn btn-primary" style="width:100%">Explore Weight Loss</a></div>
      </div>
      <div class="price-card">
        <div class="price-accent"></div>
        <div class="price-icon">🔬</div>
        <h3>TRT Evaluation</h3>
        <p class="price-sub">Initial evaluation and monitoring visits</p>
        <hr class="price-divider">
        <div class="price-amount"><sup>$</sup>XX<span class="per">&nbsp;/ visit</span></div>
        <ul class="price-list">
          <li><div class="price-check">&#10003;</div> Symptom review and health history</li>
          <li><div class="price-check">&#10003;</div> Lab-guided clinical decisions</li>
          <li><div class="price-check">&#10003;</div> Regular follow-up monitoring</li>
        </ul>
        <div class="price-cta"><a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="btn btn-outline" style="width:100%">See TRT Details</a></div>
      </div>
    </div>
  </div>
</section>

<!-- Book / Portal split -->
<section class="section section-lavender">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">Ready to start</div>
        <h2>Care that fits around your life</h2>
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
        <div class="portal-icon">📅</div>
        <h3>Book an appointment</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better &rarr;</a>
        <div class="portal-trust">
          <span>🔐 Encrypted &amp; secure</span>
          <span>🛡️ HIPAA-compliant</span>
          <span>&#10003; No patient data collected here</span>
        </div>
        <hr class="portal-divider">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request an appointment.</p>
      </div>
    </div>
  </div>
</section>

<!-- Patient testimonials -->
<section class="section">
  <div class="container">
    <div class="label">Patient experiences</div>
    <h2 class="title">What patients are saying</h2>
    <p class="lead">Real feedback from real patients.</p>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="ph ph-card" style="border-radius:var(--radius) var(--radius) 0 0">
          <div class="ph-img-icon">
            <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <div class="ph-label">Patient Photo: Primary Care</div>
          <div class="ph-sublabel">Replace with real photo</div>
        </div>
        <div class="testi-body">
          <p class="testi-text">&ldquo;I finally have a provider who knows my history. Same-week appointment, no waiting room.&rdquo;</p>
          <div class="testi-person">Primary Care Patient</div>
        </div>
      </div>
      <div class="testi-card">
        <div class="ph ph-card" style="border-radius:var(--radius) var(--radius) 0 0">
          <div class="ph-img-icon">
            <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <div class="ph-label">Patient Photo: Weight Loss</div>
          <div class="ph-sublabel">Replace with real photo</div>
        </div>
        <div class="testi-body">
          <p class="testi-text">&ldquo;The process was completely clear from the first visit. I knew exactly what the next step was.&rdquo;</p>
          <div class="testi-person">Weight Loss Program Patient</div>
        </div>
      </div>
      <div class="testi-card">
        <div class="ph ph-card" style="border-radius:var(--radius) var(--radius) 0 0">
          <div class="ph-img-icon">
            <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <div class="ph-label">Patient Photo: TRT</div>
          <div class="ph-sublabel">Replace with real photo</div>
        </div>
        <div class="testi-body">
          <p class="testi-text">&ldquo;I&rsquo;d been putting off addressing my symptoms for years. Getting evaluated was easier than I expected.&rdquo;</p>
          <div class="testi-person">TRT Evaluation Patient</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner">
      <h2>Ready to take control of your health?</h2>
      <p>Same-week telehealth appointments available. Complete a short intake and a provider will follow up within one business day.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">Learn About Services</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
