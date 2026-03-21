
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
    toggle.addEventListener('click', () => {
      const isOpen = menu.classList.toggle('open');
      toggle.classList.toggle('open', isOpen);
      toggle.setAttribute('aria-expanded', isOpen);
    });
    menu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        menu.classList.remove('open');
        toggle.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }
});
