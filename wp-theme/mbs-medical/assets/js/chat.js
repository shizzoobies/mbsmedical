(function () {
  'use strict';

  // ── Quick reply chips shown on first open ────────────────────────────────────
  var QUICK_REPLIES = [
    { label: '📅 Book a visit',          text: 'How do I book an appointment?' },
    { label: '🩺 Our services',          text: 'What services do you offer?' },
    { label: '💳 Cost and pricing',      text: 'How much does a visit cost?' },
    { label: '🚫 Do you take insurance?', text: 'Do you accept insurance?' }
  ];

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
          '<input type="text" id="chatInput" class="chat-input" placeholder="Ask a question..." autocomplete="off" maxlength="500" />' +
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
  function addMessage(type, text, actions) {
    var msgs = document.getElementById('chatMessages');
    var bubble = document.createElement('div');
    bubble.className = 'chat-msg ' + type;
    // Escape HTML — never inject raw API text as innerHTML
    bubble.textContent = text;
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
    return bubble;
  }

  // ── Typing indicator ────────────────────────────────────────────────────────
  function showTyping() {
    var msgs = document.getElementById('chatMessages');
    var bubble = document.createElement('div');
    bubble.className = 'chat-msg bot chat-typing';
    bubble.id = 'chatTypingIndicator';
    bubble.setAttribute('aria-label', 'Assistant is typing');
    bubble.innerHTML = '<span></span><span></span><span></span>';
    msgs.appendChild(bubble);
    msgs.scrollTop = msgs.scrollHeight;
  }

  function hideTyping() {
    var el = document.getElementById('chatTypingIndicator');
    if (el) el.parentNode.removeChild(el);
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

  // ── Send message to WordPress AJAX → Claude API ─────────────────────────────
  var isBusy = false;

  function handleInput(text) {
    var trimmed = text.trim();
    if (!trimmed || isBusy) return;

    // Clear quick replies
    var qr = document.getElementById('chatQuickReplies');
    if (qr) qr.innerHTML = '';

    addMessage('user', trimmed, null);

    // Check for AJAX config
    var ajaxUrl = window.mbsChatData && window.mbsChatData.ajaxUrl;
    var nonce   = window.mbsChatData && window.mbsChatData.nonce;

    if (!ajaxUrl || !nonce) {
      // Fallback if config is missing
      addMessage('bot', "I'm not set up correctly right now. Please use our contact form and we'll get back to you within one business day.", [
        { label: 'Contact Us', url: '/contact/' }
      ]);
      return;
    }

    isBusy = true;
    var input  = document.getElementById('chatInput');
    var send   = document.getElementById('chatSend');
    if (input) input.disabled = true;
    if (send)  send.disabled  = true;

    showTyping();

    // Build form data
    var body = 'action=mbs_chat_message' +
               '&nonce=' + encodeURIComponent(nonce) +
               '&message=' + encodeURIComponent(trimmed);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', ajaxUrl, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.timeout = 30000; // 30 seconds

    xhr.onload = function () {
      hideTyping();
      isBusy = false;
      if (input) input.disabled = false;
      if (send)  send.disabled  = false;
      if (input) input.focus();

      if (xhr.status >= 200 && xhr.status < 300) {
        var data;
        try { data = JSON.parse(xhr.responseText); } catch (e) { data = null; }

        if (data && data.success && data.data && data.data.message) {
          var links = (data.data.links && data.data.links.length) ? data.data.links : null;
          addMessage('bot', data.data.message, links);
        } else {
          var errMsg = (data && data.data && data.data.message) ? data.data.message :
            "I'm having trouble connecting right now. Please use our contact form and we'll get back to you within one business day.";
          addMessage('bot', errMsg, [
            { label: 'Contact Us', url: '/contact/' }
          ]);
        }
      } else {
        addMessage('bot', "Something went wrong on my end. Please use our contact form and we'll get back to you within one business day.", [
          { label: 'Contact Us', url: '/contact/' }
        ]);
      }
    };

    xhr.onerror = function () {
      hideTyping();
      isBusy = false;
      if (input) input.disabled = false;
      if (send)  send.disabled  = false;
      addMessage('bot', "I couldn't connect. Please check your internet connection or use our contact form.", [
        { label: 'Contact Us', url: '/contact/' }
      ]);
    };

    xhr.ontimeout = function () {
      hideTyping();
      isBusy = false;
      if (input) input.disabled = false;
      if (send)  send.disabled  = false;
      addMessage('bot', "That took too long to respond. Please try again or use our contact form.", [
        { label: 'Contact Us', url: '/contact/' }
      ]);
    };

    xhr.send(body);
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

    // Prevent clicks inside the chat window from triggering outside-click close
    win.addEventListener('click', function (e) { e.stopPropagation(); });

    send.addEventListener('click', function () {
      handleInput(input.value);
      input.value = '';
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
