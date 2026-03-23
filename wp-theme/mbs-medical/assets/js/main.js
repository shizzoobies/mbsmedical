// Splash screen — shows on first visit AND every reload; skips on internal page nav
(function () {
  var splash = document.getElementById('mbsSplash');
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
  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();

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

  const toggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.menu');
  if (toggle && menu) {
    const closeMenu = () => {
      menu.classList.remove('open');
      toggle.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'Open menu');
      toggle.focus();
    };

    // Open / close menu
    toggle.addEventListener('click', () => {
      const isOpen = menu.classList.toggle('open');
      toggle.classList.toggle('open', isOpen);
      toggle.setAttribute('aria-expanded', isOpen);
      toggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
      // Move focus to first menu link when opening
      if (isOpen) {
        const firstLink = menu.querySelector('a');
        if (firstLink) firstLink.focus();
      }
    });

    // Close menu when a link is clicked; return focus to toggle
    menu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    // Focus trap — keep Tab/Shift+Tab inside menu while open
    document.addEventListener('keydown', (e) => {
      if (!menu.classList.contains('open')) return;

      if (e.key === 'Escape') { closeMenu(); return; }

      if (e.key === 'Tab') {
        const focusable = Array.from(menu.querySelectorAll('a'));
        const first = focusable[0];
        const last  = focusable[focusable.length - 1];
        if (e.shiftKey) {
          // Shift+Tab: wrap from first link back to toggle
          if (document.activeElement === first) {
            e.preventDefault();
            toggle.focus();
          }
        } else {
          // Tab: wrap from toggle forward to first link, or from last link back to toggle
          if (document.activeElement === toggle) {
            e.preventDefault();
            first.focus();
          } else if (document.activeElement === last) {
            e.preventDefault();
            toggle.focus();
          }
        }
      }
    });
  }
});
