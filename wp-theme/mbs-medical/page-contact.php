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

      <!-- Booking portal card -->
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

      <!-- Contact form -->
      <div class="split-text">
        <div class="label" aria-hidden="true">Send us a message</div>
        <h2>General questions</h2>
        <p>Not ready to book yet? Send us a message and we'll get back to you within one business day.</p>

        <form id="mbsContactForm" class="contact-form" novalidate aria-label="Contact form">
          <?php wp_nonce_field( 'mbs_contact_nonce', 'mbs_contact_nonce_field' ); ?>

          <div class="form-row">
            <div class="form-group">
              <label for="contactName">Your Name <span class="form-required" aria-hidden="true">*</span></label>
              <input type="text" id="contactName" name="name" required autocomplete="name" placeholder="Jane Smith" />
            </div>
            <div class="form-group">
              <label for="contactEmail">Email Address <span class="form-required" aria-hidden="true">*</span></label>
              <input type="email" id="contactEmail" name="email" required autocomplete="email" placeholder="jane@email.com" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="contactPhone">Phone <span class="form-optional">(optional)</span></label>
              <input type="tel" id="contactPhone" name="phone" autocomplete="tel" placeholder="(555) 000-0000" />
            </div>
            <div class="form-group">
              <label for="contactTopic">Topic</label>
              <select id="contactTopic" name="topic">
                <option value="General Question">General Question</option>
                <option value="Primary Care">Primary Care</option>
                <option value="Medical Weight Loss">Medical Weight Loss</option>
                <option value="TRT Evaluation">TRT Evaluation</option>
                <option value="Billing / Pricing">Billing / Pricing</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="contactMessage">Message <span class="form-required" aria-hidden="true">*</span></label>
            <textarea id="contactMessage" name="message" rows="5" required placeholder="How can we help you?"></textarea>
          </div>

          <!-- Honeypot — hidden from real users, bots fill it in -->
          <div class="form-honeypot" aria-hidden="true">
            <label for="contactWebsite">Website</label>
            <input type="text" id="contactWebsite" name="website" tabindex="-1" autocomplete="off" />
          </div>

          <div id="contactFormStatus" role="alert" aria-live="polite" class="form-status" hidden></div>

          <button type="submit" class="btn btn-primary" id="contactSubmit">Send Message</button>

          <p class="form-note">We respond within one business day. For medical emergencies, call 911 or go to the nearest emergency room.</p>
        </form>

        <script>
        (function () {
          var form    = document.getElementById('mbsContactForm');
          var status  = document.getElementById('contactFormStatus');
          var submit  = document.getElementById('contactSubmit');
          if (!form) return;

          form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Basic client-side validation
            var name    = form.querySelector('[name="name"]').value.trim();
            var email   = form.querySelector('[name="email"]').value.trim();
            var message = form.querySelector('[name="message"]').value.trim();

            if (!name || !email || !message) {
              showStatus('error', 'Please fill in all required fields.');
              return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
              showStatus('error', 'Please enter a valid email address.');
              return;
            }

            submit.disabled = true;
            submit.textContent = 'Sending…';
            status.hidden = true;

            var data = new FormData(form);
            data.append('action', 'mbs_contact_form');

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo esc_url( admin_url( "admin-ajax.php" ) ); ?>', true);
            xhr.timeout = 15000;

            xhr.onload = function () {
              submit.disabled = false;
              submit.textContent = 'Send Message';
              var res;
              try { res = JSON.parse(xhr.responseText); } catch(err) { res = null; }
              if (res && res.success) {
                form.reset();
                showStatus('success', '✅ Message sent! We\'ll get back to you within one business day.');
              } else {
                var msg = (res && res.data && res.data.message) ? res.data.message : 'Something went wrong. Please refresh the page and try again.';
                showStatus('error', msg);
              }
            };

            xhr.onerror = xhr.ontimeout = function () {
              submit.disabled = false;
              submit.textContent = 'Send Message';
              showStatus('error', 'Could not send your message. Please check your connection and try again.');
            };

            xhr.send(data);
          });

          function showStatus(type, msg) {
            status.textContent = msg;
            status.className = 'form-status form-status-' + type;
            status.hidden = false;
            status.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          }
        })();
        </script>
      </div>

    </div>
  </div>
</section>

<!-- Hours + emergency notice -->
<section class="section section-alt" aria-label="Hours and emergency information">
  <div class="container">
    <div class="highlights-grid" style="max-width:860px;margin:0 auto">
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">🕐</div>
        <h4>Hours</h4>
        <p>Monday to Friday, 8:00 AM to 6:00 PM. Same-week appointments typically available.</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">📍</div>
        <h4>Telehealth only</h4>
        <p>All visits are conducted via secure video call. Available statewide, subject to provider licensing.</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">⚠️</div>
        <h4>Emergencies</h4>
        <p>Telehealth is not appropriate for emergencies. Call 911 or go to the nearest ER immediately.</p>
      </div>
    </div>
  </div>
</section>

<!-- Services quick links -->
<section class="section" aria-labelledby="contact-services-heading">
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
          <p>Lab-driven evaluation and ongoing care for adults dealing with hormonal concerns.</p>
          <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-link">See TRT Details <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
