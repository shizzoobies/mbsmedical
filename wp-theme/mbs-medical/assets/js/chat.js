(function () {
  'use strict';

  // ── Knowledge base ──────────────────────────────────────────────────────────
  var KB = [
    {
      keywords: ['emergency', 'urgent', '911', 'crisis', 'help me', 'dying', 'chest pain', 'danger'],
      response: '⚠️ If this is a medical emergency, please call 911 or go to your nearest emergency room immediately. Telehealth is not appropriate for emergencies.',
      actions: []
    },
    {
      keywords: ['book', 'appointment', 'schedule', 'reserve', 'sign up', 'get started', 'start', 'intake', 'new patient'],
      response: "Booking is done through our secure Practice Better portal — it takes just a few minutes. No health information is collected on this website.",
      actions: [{ label: 'Book Your Visit', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['insurance', 'coverage', 'covered', 'bill', 'billing', 'claim', 'medicaid', 'medicare', 'tricare', 'accept insurance', 'file insurance'],
      response: "MBS Medical is a cash-pay practice — we don't accept or bill insurance. You pay a clear, fixed fee per visit. No claims, no denials, no surprise bills.",
      actions: [{ label: 'See Pricing', url: '/#pricing' }]
    },
    {
      keywords: ['cost', 'price', 'fee', 'how much', 'pay', 'dollar', 'rate', 'charge', 'pricing', 'afford'],
      response: "Visit fees are transparent and confirmed before you book — no surprise billing ever. Check our pricing section for current rates.",
      actions: [{ label: 'View Pricing', url: '/#pricing' }]
    },
    {
      keywords: ['primary care', 'general care', 'regular doctor', 'checkup', 'check up', 'physical', 'medication refill', 'refill', 'prescription', 'wellness', 'preventive', 'preventative', 'chronic', 'routine visit', 'annual', 'follow up'],
      response: "Our primary care service covers routine visits, medication management, lab reviews, referrals, and ongoing care — with the same provider every time, so they actually know your history.",
      actions: [{ label: 'Primary Care Details', url: '/primary-care/' }, { label: 'Book a Visit', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['weight', 'lose weight', 'weight loss', 'diet', 'overweight', 'obesity', 'body fat', 'glp', 'semaglutide', 'tirzepatide', 'ozempic', 'wegovy', 'slim', 'fat loss', 'bmi'],
      response: "Our medical weight loss program is clinically supervised and fully personalized. Your provider evaluates your full health picture first — no cookie-cutter programs or templates.",
      actions: [{ label: 'Explore Weight Loss', url: '/weight-loss/' }, { label: 'Book a Consult', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['trt', 'testosterone', 'hormone', 'low t', 'low energy', 'no energy', 'libido', 'sex drive', 'fatigue', 'tired all the time', 'muscle mass', 'vitality', 'mood', 'brain fog', 'low testosterone', 'hormone therapy', 'hrt'],
      response: "Our TRT evaluation is lab-driven — your provider reviews your symptoms and bloodwork before any recommendation is made. Discreet telehealth from home, with regular monitoring built in.",
      actions: [{ label: 'TRT Evaluation Details', url: '/trt/' }, { label: 'Book an Evaluation', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['services', 'what do you offer', 'what do you treat', 'what can you help', 'what do you do', 'options', 'specialties'],
      response: "MBS Medical offers three focused services — all via telehealth, all cash-pay:",
      actions: [
        { label: 'Primary Care', url: '/primary-care/' },
        { label: 'Medical Weight Loss', url: '/weight-loss/' },
        { label: 'TRT Evaluation', url: '/trt/' }
      ]
    },
    {
      keywords: ['telehealth', 'virtual visit', 'remote', 'online visit', 'video call', 'from home', 'video appointment', 'telemedicine'],
      response: "All MBS Medical services are via telehealth — private video appointments from your home, on your schedule. Available statewide, subject to provider availability and state licensing.",
      actions: [{ label: 'Book a Visit', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['david', 'hervig', 'provider', 'pa-c', 'physician assistant', 'who is my doctor', 'who are the providers', 'about the doctor', 'doctor background', 'meet the provider'],
      response: "Your provider is David Hervig, PA-C — a Physician Assistant and US Army Veteran with 12 years of service. He built MBS Medical around direct, honest, ongoing care. No rotating roster of strangers.",
      actions: [{ label: 'About David', url: '/about/' }]
    },
    {
      keywords: ['md', 'medical director', 'collaborating', 'physician', 'who else', 'other doctor', 'supervising'],
      response: "MBS Medical also has a collaborating physician (MD) who provides medical oversight across all three service lines. You can learn more on our About page.",
      actions: [{ label: 'Meet the Team', url: '/about/' }]
    },
    {
      keywords: ['hours', 'open', 'available hours', 'when are you open', 'monday', 'friday', 'weekend', 'what time'],
      response: "MBS Medical is available Monday to Friday, 8:00 AM to 6:00 PM. Same-week appointments are typically available — no long waits.",
      actions: [{ label: 'Book an Appointment', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['contact', 'email', 'reach you', 'message', 'talk to someone', 'question', 'hello@'],
      response: "For general questions, email us at hello@mbsmedical.com and we'll get back to you within one business day. For booking, use the portal.",
      actions: [{ label: 'Contact Page', url: '/contact/' }]
    },
    {
      keywords: ['veteran', 'military', 'army', 'us army', 'served', 'service member'],
      response: "David Hervig, PA-C is a US Army Veteran with 12 years of service. That background shapes a care style that's direct, thorough, and genuinely invested in the people he works with.",
      actions: [{ label: 'About David', url: '/about/' }]
    },
    {
      keywords: ['hipaa', 'privacy', 'secure', 'data', 'personal information', 'health info', 'safe', 'confidential', 'protected'],
      response: "No health or personal information is collected on this website. All scheduling and intake happen through our HIPAA-compliant Practice Better portal — encrypted and secure.",
      actions: [{ label: 'Book Securely', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['lab', 'labs', 'bloodwork', 'blood test', 'blood work', 'testing', 'labcorp', 'quest'],
      response: "Lab work is a standard part of our TRT evaluation and may be part of weight loss care. Lab costs are separate from visit fees and always disclosed upfront — no hidden charges.",
      actions: [{ label: 'TRT Evaluation', url: '/trt/' }, { label: 'Weight Loss', url: '/weight-loss/' }]
    },
    {
      keywords: ['same week', 'same-week', 'how soon', 'when can i', 'available this week', 'quick', 'fast'],
      response: "Same-week telehealth appointments are typically available for all three services. Complete a short intake and a provider will follow up within one business day.",
      actions: [{ label: 'Book Your Visit', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    },
    {
      keywords: ['state', 'where', 'location', 'what state', 'statewide', 'travel', 'in person', 'office'],
      response: "MBS Medical is telehealth-only and available statewide, subject to provider licensing. No in-person office visits at this time.",
      actions: [{ label: 'Book a Telehealth Visit', url: '#PRACTICE-BETTER-PORTAL-URL', external: true }]
    }
  ];

  var QUICK_REPLIES = [
    { label: '📅 Book a visit',         text: 'I want to book an appointment' },
    { label: '🩺 Our services',          text: 'What services do you offer?' },
    { label: '💳 Cost and pricing',      text: 'How much does a visit cost?' },
    { label: '🚫 Do you take insurance?', text: 'Do you accept insurance?' }
  ];

  var FALLBACK_TEXT = "I don't have a specific answer for that, but our team can help. Send us a message and we'll get back to you within one business day.";
  var FALLBACK_ACTIONS = [{ label: 'Contact Us', url: '/contact/' }, { label: 'All Services', url: '/services/' }];

  // ── Match input to knowledge base ───────────────────────────────────────────
  function matchResponse(input) {
    var lower = input.toLowerCase();
    for (var i = 0; i < KB.length; i++) {
      var entry = KB[i];
      for (var j = 0; j < entry.keywords.length; j++) {
        if (lower.indexOf(entry.keywords[j]) !== -1) return entry;
      }
    }
    return null;
  }

  // ── Build the widget DOM ────────────────────────────────────────────────────
  function buildWidget() {
    var imgUrl = (window.mbsChatData && window.mbsChatData.assistantImg) ? window.mbsChatData.assistantImg : '';
    var wrap = document.createElement('div');
    wrap.id = 'mbsChatWidget';
    wrap.className = 'mbs-chat';
    wrap.setAttribute('aria-label', 'MBS Medical chat assistant');
    wrap.innerHTML =
      '<div class="chat-toggle-row">' +
        '<span class="chat-label" id="chatLabel" role="button" tabindex="0" aria-label="Open chat assistant">Need help?</span>' +
        '<button class="chat-toggle" id="chatToggle" aria-expanded="false" aria-controls="chatWindow" aria-label="Open chat assistant">' +
          '<img class="chat-toggle-img" src="' + imgUrl + '" alt="" aria-hidden="true" />' +
          '<svg class="icon-close" viewBox="0 0 24 24" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>' +
          '<span class="chat-pulse" aria-hidden="true"></span>' +
        '</button>' +
      '</div>' +
      '<div class="chat-window" id="chatWindow" role="dialog" aria-label="MBS Medical assistant" aria-modal="false" hidden>' +
        '<div class="chat-header">' +
          '<div class="chat-header-info">' +
            '<div class="chat-avatar" aria-hidden="true"><img src="' + imgUrl + '" alt="" /></div>' +
            '<div>' +
              '<div class="chat-name">MBS Assistant</div>' +
              '<div class="chat-status">Ask me anything</div>' +
            '</div>' +
          '</div>' +
          '<button class="chat-close" id="chatClose" aria-label="Close chat">' +
            '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>' +
          '</button>' +
        '</div>' +
        '<div class="chat-messages" id="chatMessages" role="log" aria-live="polite" aria-relevant="additions text" aria-label="Chat messages"></div>' +
        '<div class="chat-quick-replies" id="chatQuickReplies" aria-label="Suggested questions"></div>' +
        '<div class="chat-input-row">' +
          '<label for="chatInput" class="sr-only">Type your question</label>' +
          '<input type="text" id="chatInput" class="chat-input" placeholder="Ask a question..." autocomplete="off" />' +
          '<button id="chatSend" class="chat-send" aria-label="Send message">' +
            '<svg viewBox="0 0 24 24" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>' +
          '</button>' +
        '</div>' +
        '<p class="chat-footer-note">No personal health information is collected in this chat.</p>' +
      '</div>';
    document.body.appendChild(wrap);
    return wrap;
  }

  // ── Add a message bubble ────────────────────────────────────────────────────
  function addMessage(type, html, actions) {
    var msgs = document.getElementById('chatMessages');
    var bubble = document.createElement('div');
    bubble.className = 'chat-msg ' + type;
    bubble.innerHTML = html;
    if (actions && actions.length) {
      var actWrap = document.createElement('div');
      actWrap.className = 'chat-msg-actions';
      actions.forEach(function (a) {
        var btn = document.createElement('a');
        btn.className = 'chat-action-btn';
        btn.href = a.url;
        btn.textContent = a.label;
        if (a.external) { btn.target = '_blank'; btn.rel = 'noopener noreferrer'; }
        actWrap.appendChild(btn);
      });
      bubble.appendChild(actWrap);
    }
    msgs.appendChild(bubble);
    msgs.scrollTop = msgs.scrollHeight;
  }

  // ── Render quick reply chips ────────────────────────────────────────────────
  function renderQuickReplies(replies) {
    var qr = document.getElementById('chatQuickReplies');
    qr.innerHTML = '';
    replies.forEach(function (r) {
      var btn = document.createElement('button');
      btn.className = 'chat-qr-btn';
      btn.textContent = r.label;
      btn.setAttribute('aria-label', r.text);
      btn.addEventListener('click', function () {
        qr.innerHTML = '';
        handleInput(r.text);
      });
      qr.appendChild(btn);
    });
  }

  // ── Handle user input ───────────────────────────────────────────────────────
  function handleInput(text) {
    var trimmed = text.trim();
    if (!trimmed) return;
    addMessage('user', trimmed, null);
    var match = matchResponse(trimmed);
    if (match) {
      addMessage('bot', match.response, match.actions);
    } else {
      addMessage('bot', FALLBACK_TEXT, FALLBACK_ACTIONS);
    }
  }

  // ── Initialise ──────────────────────────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    var wrap    = buildWidget();
    var toggle  = document.getElementById('chatToggle');
    var win     = document.getElementById('chatWindow');
    var closeBtn= document.getElementById('chatClose');
    var input   = document.getElementById('chatInput');
    var send    = document.getElementById('chatSend');

    function openChat() {
      wrap.classList.add('open');
      win.hidden = false;
      toggle.setAttribute('aria-expanded', 'true');
      toggle.setAttribute('aria-label', 'Close chat assistant');
      if (!win._greeted) {
        win._greeted = true;
        addMessage('bot', "👋 Hi! I'm the MBS Medical assistant. I can answer questions about our services, pricing, and how to book. How can I help?", null);
        renderQuickReplies(QUICK_REPLIES);
      }
      setTimeout(function () { input.focus(); }, 200);
    }

    function closeChat() {
      wrap.classList.remove('open');
      win.hidden = true;
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'Open chat assistant');
      toggle.focus();
    }

    toggle.addEventListener('click', function (e) {
      e.stopPropagation();
      wrap.classList.contains('open') ? closeChat() : openChat();
    });

    // "Need help?" label also opens chat
    var label = document.getElementById('chatLabel');
    if (label) {
      label.addEventListener('click', function (e) {
        e.stopPropagation();
        openChat();
      });
      label.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openChat(); }
      });
    }
    closeBtn.addEventListener('click', function (e) { e.stopPropagation(); closeChat(); });

    // Prevent any click inside the chat window from triggering outside-click close
    win.addEventListener('click', function (e) { e.stopPropagation(); });

    send.addEventListener('click', function () {
      handleInput(input.value);
      input.value = '';
      input.focus();
    });

    input.addEventListener('keydown', function (e) {
      if (e.key === 'Enter') {
        handleInput(input.value);
        input.value = '';
      }
    });

    // ESC closes chat
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && wrap.classList.contains('open')) closeChat();
    });

    // Click outside closes chat
    document.addEventListener('click', function (e) {
      if (wrap.classList.contains('open') && !wrap.contains(e.target)) closeChat();
    });
  });

})();
