// Splash screen -- shows on first visit AND every reload; skips on internal page nav
(function () {
  var splash = document.getElementById('splash');
  if (!splash) return;

  // Detect hard reload vs internal page navigation
  var navEntry = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
  var isReload = navEntry && navEntry.type === 'reload';

  // Internal nav (not a reload): hide instantly with no transition
  if (!isReload && sessionStorage.getItem('mbsSplashSeen')) {
    splash.style.transition = 'none';
    splash.style.opacity = '0';
    splash.style.visibility = 'hidden';
    splash.style.pointerEvents = 'none';
    return;
  }

  // First visit or reload: run the full splash
  setTimeout(function () {
    splash.classList.add('hidden');
    sessionStorage.setItem('mbsSplashSeen', '1');
  }, 1300);
})();

document.addEventListener('DOMContentLoaded', () => {
  // Year in footer
  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();

  // Smooth scroll for in-page anchor links
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href');
      if (id.length > 1) {
        const target = document.querySelector(id);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });

  // Mobile navigation drawer
  const hamburger   = document.getElementById('hamburger');
  const mobileNav   = document.getElementById('mobile-nav');
  const closeBtn    = document.getElementById('mobile-nav-close');

  if (hamburger && mobileNav) {
    const openMenu = () => {
      mobileNav.classList.add('is-open');
      hamburger.setAttribute('aria-expanded', 'true');
      hamburger.setAttribute('aria-label', 'Close navigation menu');
      // Move focus to the close button
      if (closeBtn) closeBtn.focus();
    };

    const closeMenu = () => {
      mobileNav.classList.remove('is-open');
      hamburger.setAttribute('aria-expanded', 'false');
      hamburger.setAttribute('aria-label', 'Open navigation menu');
      hamburger.focus();
    };

    hamburger.addEventListener('click', () => {
      const isOpen = mobileNav.classList.contains('is-open');
      isOpen ? closeMenu() : openMenu();
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', closeMenu);
    }

    // Close when any nav link is clicked
    mobileNav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    // Close on backdrop click (outside the panel)
    mobileNav.addEventListener('click', e => {
      if (e.target === mobileNav) closeMenu();
    });

    // Focus trap and Escape key
    document.addEventListener('keydown', e => {
      if (!mobileNav.classList.contains('is-open')) return;

      if (e.key === 'Escape') {
        closeMenu();
        return;
      }

      if (e.key === 'Tab') {
        const focusable = Array.from(
          mobileNav.querySelectorAll('button, a[href]')
        ).filter(el => !el.closest('[aria-hidden="true"]'));
        const first = focusable[0];
        const last  = focusable[focusable.length - 1];

        if (e.shiftKey) {
          if (document.activeElement === first) {
            e.preventDefault();
            last.focus();
          }
        } else {
          if (document.activeElement === last) {
            e.preventDefault();
            first.focus();
          }
        }
      }
    });
  }
});
