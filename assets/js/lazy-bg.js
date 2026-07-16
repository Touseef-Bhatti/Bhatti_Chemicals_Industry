// Lazy background image loader using IntersectionObserver
(function(){
  if (!('IntersectionObserver' in window)) return; // graceful fallback

  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const bg = el.getAttribute('data-bg');
      if (bg) {
        // set background-image inline style
        el.style.backgroundImage = `url('${bg}')`;
        el.classList && el.classList.add('bg-loaded');
        el.removeAttribute('data-bg');
      }
      obs.unobserve(el);
    });
  }, { rootMargin: '200px 0px', threshold: 0.01 });

  // Observe all elements with data-bg
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-bg]').forEach(el => io.observe(el));
  });
})();
