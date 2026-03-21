<?php get_header(); ?>

<main id="main-content">

<section class="page-hero" aria-labelledby="contact-hero-heading">
  <div class="container">
    <div class="label" aria-hidden="true">Get in touch</div>
    <h1 id="contact-hero-heading">Book a visit or ask a question</h1>
    <p class="lead">All scheduling and patient intake are handled through our secure Practice Better portal, keeping your health information private and protected.</p>
  </div>
</section>

<section class="section" aria-labelledby="contact-booking-heading">
  <div class="container">
    <div class="split">
      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">📅</div>
        <h2 id="contact-booking-heading" style="font-size:1.25rem;font-weight:700;color:var(--navy-dark);margin:0">Book your appointment</h2>
        <p>Appointment requests and patient intake are handled through our secure patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span><span aria-hidden="true">🔐</span> Encrypted &amp; secure</span>
          <span><span aria-hidden="true">🛡️</span> HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and schedule your visit. Same-week appointments are available for most services.</p>
      </div>
      <div class="split-text">
        <div class="label" aria-hidden="true">Contact info</div>
        <h2>Reach us directly</h2>
        <p>For general questions, you can email us and we will get back to you within one business day.</p>
        <ul class="cred-list" style="margin-top:1.5rem">
          <li><div class="cred-pip" aria-hidden="true"></div> <a href="mailto:hello@mbsmedical.com">hello@mbsmedical.com</a></li>
          <li><div class="cred-pip" aria-hidden="true"></div> Telehealth, available statewide</li>
          <li><div class="cred-pip" aria-hidden="true"></div> Mon to Fri, 8:00 AM to 6:00 PM</li>
        </ul>
        <div role="note" style="margin-top:2rem;padding:1.25rem 1.5rem;background:var(--lavender);border-radius:var(--radius);border-left:3px solid var(--teal)">
          <p style="font-size:.9rem;color:var(--text);line-height:1.7;font-weight:500;margin:0"><strong>Emergency notice:</strong> For emergencies, call 911 or go to the nearest emergency room. Telehealth is not appropriate for urgent or emergency care.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services quick links -->
<section class="section section-alt" aria-labelledby="contact-services-heading">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem">
      <div class="label" aria-hidden="true">What we offer</div>
      <h2 class="title" id="contact-services-heading">Not sure which service fits?</h2>
      <p class="lead center">Browse our services and book directly for the one that fits your needs.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-card-body" style="padding:2rem">
          <div class="service-icon icon-t" aria-hidden="true">🩺</div>
          <h3>Primary Care</h3>
          <p>Routine visits, medication management, and ongoing care from a provider who knows your history.</p>
          <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="service-link">Learn more about Primary Care <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="service-card">
        <div class="service-card-body" style="padding:2rem">
          <div class="service-icon icon-p" aria-hidden="true">📉</div>
          <h3>Weight Loss</h3>
          <p>Medically supervised weight management built around your health history and real clinical oversight.</p>
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-link">Explore Weight Loss <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="service-card">
        <div class="service-card-body" style="padding:2rem">
          <div class="service-icon icon-pk" aria-hidden="true">🔬</div>
          <h3>TRT Evaluation</h3>
          <p>Lab-driven evaluation and ongoing care for men dealing with low energy or reduced vitality.</p>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-link">See TRT Details <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
