<?php get_header(); ?>

<?php $img = get_template_directory_uri() . '/assets/img'; ?>

<section class="page-hero">
  <div class="container">
    <div class="label">Weight Loss</div>
    <h1>Medical weight loss support built around you</h1>
    <p class="lead">Telehealth weight management with a licensed provider, personalized care planning, and scheduled follow-ups to keep you on track.</p>
  </div>
</section>

<div style="overflow:hidden;max-height:460px;">
  <img src="<?php echo $img; ?>/weight-loss.png" alt="Medical weight loss support" style="width:100%;object-fit:cover;display:block;" />
</div>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="split-text">
        <div class="label">The approach</div>
        <h2>A structured approach to lasting results</h2>
        <p>Losing weight isn&rsquo;t just about willpower. For many people, underlying factors &mdash; hormones, metabolism, medication, lifestyle &mdash; play a significant role. MBS Medical takes a clinical approach: evaluate first, then build a plan that fits your health history and your goals.</p>
        <p>You work directly with a licensed provider who reviews your full picture before making any recommendations. Progress is tracked at follow-up visits, and your plan can be adjusted as you move forward.</p>
        <div class="features-grid">
          <div class="feature-item">
            <h4>Personalized planning</h4>
            <p>Your plan is built around your health history and goals &mdash; not a one-size-fits-all program.</p>
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
            <p>No insurance needed. Fee confirmed before you book &mdash; no surprise billing.</p>
          </div>
        </div>
      </div>
      <div class="portal-card">
        <div class="portal-icon">📅</div>
        <h3>Book a weight loss consult</h3>
        <p>Scheduling and intake are handled through our secure, HIPAA-compliant patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better &rarr;</a>
        <div class="portal-trust">
          <span>🔐 Encrypted &amp; secure</span>
          <span>🛡️ HIPAA-compliant</span>
          <span>&#10003; No patient data collected here</span>
        </div>
        <hr class="portal-divider">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and request a consultation. All clinical decisions are made after provider review.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container">
    <div class="label">Common questions</div>
    <h2 class="title">Weight loss at MBS Medical</h2>
    <div class="faq-grid">
      <div class="faq-item">
        <h3>Does insurance cover this program?</h3>
        <p>MBS Medical is a cash-pay practice. We do not bill insurance. You pay a transparent, fixed fee per visit &mdash; no claims, no denials, no unexpected bills. Your fee is confirmed before you book.</p>
      </div>
      <div class="faq-item">
        <h3>Who is a good fit for this program?</h3>
        <p>Adults who want a medically supervised approach to weight management &mdash; especially those who have tried diet and exercise without lasting results and want a provider to evaluate what else may be contributing.</p>
      </div>
      <div class="faq-item">
        <h3>How does the process work?</h3>
        <p>You start with a short online intake. A provider reviews your information and meets with you via telehealth to discuss your history, goals, and options. Your care plan is built after that visit, not before.</p>
      </div>
      <div class="faq-item">
        <h3>Is medication automatically part of the program?</h3>
        <p>No. All treatment decisions &mdash; including whether medication is appropriate &mdash; are made by a licensed clinician after a full medical review. Your provider will be straightforward about what fits your situation.</p>
      </div>
      <div class="faq-item">
        <h3>What does follow-up care look like?</h3>
        <p>After your initial visit, follow-up appointments are scheduled to review progress, adjust your plan as needed, and keep your care on track. You are not left on your own after the first visit.</p>
      </div>
      <div class="faq-item">
        <h3>Are lab costs included in the visit fee?</h3>
        <p>Lab costs, when applicable, are separate from the visit fee and will be communicated at the time of ordering. There are no hidden charges &mdash; your provider will explain everything upfront.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div class="cta-inner">
      <h2>Ready to get started?</h2>
      <p>Same-week telehealth appointments available. Start with a short online intake and connect with a provider.</p>
      <div class="cta-actions">
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Book Your Visit</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-white">All Services</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
