<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<main id="main-content">

<!-- Hero with image -->
<section class="page-hero page-hero-split" aria-labelledby="wl-hero-heading">
  <div class="container">
    <div class="page-hero-grid">
      <div class="page-hero-text">
        <div class="label" aria-hidden="true">Weight Loss</div>
        <h1 id="wl-hero-heading">Medical weight loss support built around you</h1>
        <p class="lead">Telehealth weight management with a licensed provider, personalized care planning, and scheduled follow-ups to keep you on track.</p>
        <ul class="page-hero-badges" aria-label="Program highlights">
          <li><span aria-hidden="true">&#10003;</span> Cash pay, no insurance</li>
          <li><span aria-hidden="true">&#10003;</span> Same-week appointments</li>
          <li><span aria-hidden="true">&#10003;</span> Personalized care plan</li>
        </ul>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo $img; ?>/weight-loss.png" alt="Medical weight loss support consultation" />
      </div>
    </div>
  </div>
</section>

<!-- Highlights bar -->
<div class="highlights-bar" role="region" aria-label="Program features">
  <div class="container">
    <div class="highlights-grid">
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">📋</div>
        <h4>Clinical evaluation</h4>
        <p>Provider reviews your full health picture before any plan is made</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">🎯</div>
        <h4>Personalized plan</h4>
        <p>Built around your history and goals, not a template program</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">📅</div>
        <h4>Regular check-ins</h4>
        <p>Structured follow-ups to track progress and adjust your plan</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">💳</div>
        <h4>Cash pay</h4>
        <p>Transparent fee, no insurance needed, no surprise billing</p>
      </div>
    </div>
  </div>
</div>

<!-- Who this is for -->
<section class="section section-alt" aria-labelledby="wl-who-heading">
  <div class="container">
    <div style="text-align:center;max-width:640px;margin:0 auto 3rem">
      <div class="label" aria-hidden="true">Is this right for you?</div>
      <h2 class="title" id="wl-who-heading">This program is built for people who are done guessing</h2>
      <p class="lead" style="margin-bottom:0">Not a quick fix. A medically grounded plan that treats weight as a clinical issue, not a willpower problem.</p>
    </div>
    <div class="features-grid" style="max-width:860px;margin:0 auto;grid-template-columns:repeat(3,1fr)">
      <div class="feature-item">
        <h4>You have tried before</h4>
        <p>Diet and exercise haven't produced lasting results, and you suspect there may be underlying factors your provider hasn't looked at.</p>
      </div>
      <div class="feature-item">
        <h4>You want clinical oversight</h4>
        <p>You want a licensed provider reviewing your full health picture before any recommendation is made, not an app or a template.</p>
      </div>
      <div class="feature-item">
        <h4>You want ongoing support</h4>
        <p>You want follow-ups built in, not an initial consult that leaves you on your own to figure out the rest.</p>
      </div>
    </div>
  </div>
</section>

<!-- How the program works -->
<section class="section section-navy" aria-labelledby="wl-process-heading">
  <div class="container">
    <div style="text-align:center;margin-bottom:3.5rem">
      <div class="label label-light" aria-hidden="true">What to expect</div>
      <h2 class="title light" id="wl-process-heading">How the program works</h2>
    </div>
    <div class="steps-grid">
      <div class="step">
        <div class="step-number" aria-hidden="true">1</div>
        <h3>Complete a short intake</h3>
        <p>Share your health history and goals online. Your provider reviews everything before your first appointment so you can hit the ground running.</p>
      </div>
      <div class="step">
        <div class="step-number" aria-hidden="true">2</div>
        <h3>Meet with your provider</h3>
        <p>A real clinical conversation about what has and hasn't worked, what may be contributing, and what options actually fit your situation.</p>
      </div>
      <div class="step">
        <div class="step-number" aria-hidden="true">3</div>
        <h3>Follow your personalized plan</h3>
        <p>Your plan is built after your visit. Follow-ups are scheduled from the start so your progress is tracked and your approach stays on course.</p>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="section" aria-labelledby="wl-approach-heading">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label" aria-hidden="true">The approach</div>
        <h2 id="wl-approach-heading">A structured approach to lasting results</h2>
        <p>Losing weight isn&rsquo;t just about willpower. For many people, underlying factors (hormones, metabolism, medication, lifestyle) play a significant role. MBS Medical takes a clinical approach: evaluate first, then build a plan that fits your health history and your goals.</p>
        <p>You work directly with a licensed provider who reviews your full picture before making any recommendations. Progress is tracked at follow-up visits, and your plan can be adjusted as you move forward.</p>
        <div class="features-grid">
          <div class="feature-item">
            <h4>Personalized planning</h4>
            <p>Your plan is built around your health history and goals, not a one-size-fits-all program.</p>
          </div>
          <div class="feature-item">
            <h4>Ongoing accountability</h4>
            <p>Scheduled follow-ups track progress and give your provider data to refine your approach.</p>
          </div>
          <div class="feature-item">
            <h4>Clinical oversight</h4>
            <p>Every recommendation comes after a proper medical review by a licensed clinician.</p>
          </div>
          <div class="feature-item">
            <h4>Cash pay</h4>
            <p>No insurance needed. Fee confirmed before you book. No surprise billing.</p>
          </div>
        </div>
      </div>
      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">📅</div>
        <h3>Book a weight loss consult</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span><span aria-hidden="true">🔐</span> Encrypted &amp; secure</span>
          <span><span aria-hidden="true">🛡️</span> HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request a consultation. All clinical decisions are made after provider review.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt" aria-labelledby="wl-faq-heading">
  <div class="container">
    <div class="label" aria-hidden="true">Common questions</div>
    <h2 class="title" id="wl-faq-heading">Weight loss at MBS Medical</h2>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Does insurance cover this program?</h3>
        <p>MBS Medical is a cash-pay practice. We do not bill insurance. You pay a transparent, fixed fee per visit. No claims, no denials, no unexpected bills. Your fee is confirmed before you book.</p>
      </div>
      <div class="faq-item">
        <h3>Who is a good fit for this program?</h3>
        <p>Adults who want a medically supervised approach to weight management. Especially those who have tried diet and exercise without lasting results and want a provider to evaluate what else may be contributing.</p>
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
        <p>After your initial visit, follow-up appointments are scheduled to review progress, adjust your plan as needed, and keep your care on track. You are not left on your own after the first visit.</p>
      </div>
      <div class="faq-item">
        <h3>Are lab costs included in the visit fee?</h3>
        <p>Lab costs, when applicable, are separate from the visit fee and will be communicated at the time of ordering. There are no hidden charges. Your provider will explain everything upfront.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="wl-cta-heading">
  <div class="container">
    <div class="cta-inner">
      <h2 id="wl-cta-heading">Ready to get started?</h2>
      <p>Same-week telehealth appointments available. Start with a short online intake and connect with a provider.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">All Services</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
