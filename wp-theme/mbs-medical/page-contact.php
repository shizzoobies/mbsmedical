<?php get_header(); ?>

<!-- ====================================================
     PAGE HERO
     ==================================================== -->
<section class="page-hero" aria-labelledby="contact-hero-heading">
  <div class="container">
    <span class="eyebrow">Get in Touch</span>
    <h1 id="contact-hero-heading">Book a visit or ask a question</h1>
    <p>All scheduling and patient intake are handled through our secure Practice Better portal, keeping your health information private and protected.</p>
  </div>
</section>

<!-- ====================================================
     BOOKING PORTAL + CONTACT FORM
     ==================================================== -->
<section class="section" aria-labelledby="contact-booking-heading">
  <div class="container">
    <div class="about-grid">

      <!-- Booking portal card -->
      <div class="portal-card">
        <div class="portal-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="30" height="30"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
        </div>
        <h2 id="contact-booking-heading" style="font-size:1.25rem;font-weight:700;color:var(--text);margin:0 0 .75rem">Book your appointment</h2>
        <p>Appointment requests and patient intake are handled through our secure patient portal. No health information is collected on this website.</p>
        <a href="#PRACTICE-BETTER-PORTAL-URL" class="btn-portal" target="_blank" rel="noopener noreferrer">Book Securely via Practice Better <span aria-hidden="true">&rarr;</span></a>
        <div class="portal-trust" aria-label="Security and privacy assurances">
          <span>Encrypted &amp; secure</span>
          <span>HIPAA-compliant</span>
          <span>No patient data collected here</span>
        </div>
        <hr class="portal-divider" aria-hidden="true">
        <p class="portal-small">You will be taken to our secure Practice Better portal to complete your intake and schedule your visit. Same-week appointments are available for most services.</p>
      </div>

      <!-- Contact form -->
      <div>
        <span class="eyebrow">Send Us a Message</span>
        <h2>General questions</h2>
        <p>Not ready to book yet? Send us a message and we&#8217;ll get back to you within one business day.</p>

        <form id="mbsContactForm" class="contact-form" novalidate aria-label="Contact form">
          <?php wp_nonce_field( 'mbs_contact_nonce', 'mbs_contact_nonce_field' ); ?>

          <div class="form-row">
            <div class="form-group">
              <label for="contactName" class="form-required">Your Name</label>
              <input type="text" id="contactName" name="name" required autocomplete="name" placeholder="Jane Smith" />
            </div>
            <div class="form-group">
              <label for="contactEmail" class="form-required">Email Address</label>
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
            <label for="contactMessage" class="form-required">Message</label>
            <textarea id="contactMessage" name="message" rows="5" required placeholder="How can we help you?"></textarea>
          </div>

          <!-- Honeypot: hidden from real users, bots fill it in -->
          <div class="form-honeypot" aria-hidden="true">
            <label for="contactWebsite">Website</label>
            <input type="text" id="contactWebsite" name="website" tabindex="-1" autocomplete="off" />
          </div>

          <div id="contactFormStatus" role="alert" aria-live="polite" class="form-status" hidden></div>

          <button type="submit" class="btn" id="contactSubmit">Send Message</button>

          <p class="form-note">We respond within one business day. For medical emergencies, call 911 or go to the nearest emergency room.</p>
        </form>

        <script>
        (function () {
          var form   = document.getElementById('mbsContactForm');
          var status = document.getElementById('contactFormStatus');
          var submit = document.getElementById('contactSubmit');
          if (!form) return;

          form.addEventListener('submit', function (e) {
            e.preventDefault();

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
            submit.textContent = 'Sending\u2026';
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
                showStatus('success', 'Message sent! We\'ll get back to you within one business day.');
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

<!-- ====================================================
     HOURS + EMERGENCY NOTICE
     ==================================================== -->
<section class="section section--tinted" aria-label="Hours and emergency information">
  <div class="container">
    <div class="highlights-grid" style="max-width:860px;margin:0 auto">
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
        </div>
        <div>
          <h4>Hours</h4>
          <p>Monday to Friday, 8:00 AM to 6:00 PM. Same-week appointments typically available.</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
        </div>
        <div>
          <h4>Telehealth only</h4>
          <p>All visits are conducted via secure video call. Available statewide, subject to provider licensing.</p>
        </div>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"/></svg>
        </div>
        <div>
          <h4>Emergencies</h4>
          <p>Telehealth is not appropriate for emergencies. Call 911 or go to the nearest ER immediately.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SERVICES QUICK LINKS
     ==================================================== -->
<section class="section" aria-labelledby="contact-services-heading">
  <div class="container">
    <div class="section-header section-header--center">
      <span class="eyebrow">What We Offer</span>
      <h2 id="contact-services-heading">Not sure which service fits?</h2>
      <p class="lead">Browse our services and book directly for the one that fits your needs.</p>
    </div>
    <div class="services-grid">

      <article class="service-card" aria-labelledby="contact-svc-pc">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
        </div>
        <h3 id="contact-svc-pc">Primary Care</h3>
        <p>Routine visits, medication management, and ongoing care from a provider who knows your history.</p>
        <a href="<?php echo esc_url( home_url( '/primary-care/' ) ); ?>" class="service-card-link">Learn more about Primary Care <span aria-hidden="true">&rarr;</span></a>
      </article>

      <article class="service-card" aria-labelledby="contact-svc-wl">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"/></svg>
        </div>
        <h3 id="contact-svc-wl">Weight Loss</h3>
        <p>Medically supervised weight management built around your health history and real clinical oversight.</p>
        <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="service-card-link">Explore Weight Loss <span aria-hidden="true">&rarr;</span></a>
      </article>

      <article class="service-card" aria-labelledby="contact-svc-trt">
        <div class="service-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
        </div>
        <h3 id="contact-svc-trt">TRT Evaluation</h3>
        <p>Lab-driven evaluation and ongoing care for adults dealing with hormonal concerns.</p>
        <a href="<?php echo esc_url( home_url( '/trt/' ) ); ?>" class="service-card-link">See TRT Details <span aria-hidden="true">&rarr;</span></a>
      </article>

    </div>
  </div>
</section>

<?php get_footer(); ?>
