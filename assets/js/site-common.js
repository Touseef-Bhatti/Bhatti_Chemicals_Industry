(function () {
  function revealOnScroll() {
    var items = document.querySelectorAll('.reveal, .capability-card, .process-grid li, .proof-item');
    if (!items.length) return;
    if (!('IntersectionObserver' in window)) {
      items.forEach(function (item) {
        item.classList.add('visible');
        item.classList.add('is-visible');
      });
      return;
    }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('visible');
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.08 });
    items.forEach(function (item) { observer.observe(item); });
  }

  function setupFaqs() {
    document.querySelectorAll('.faq-q').forEach(function (btn) {
      if (btn.dataset.bound === 'true') return;
      btn.dataset.bound = 'true';
      btn.addEventListener('click', function () {
        var expanded = this.getAttribute('aria-expanded') === 'true';
        document.querySelectorAll('.faq-q').forEach(function (otherBtn) {
          otherBtn.setAttribute('aria-expanded', 'false');
          var answer = otherBtn.nextElementSibling;
          if (!answer) return;
          answer.classList.remove('open');
          answer.hidden = true;
        });
        if (!expanded) {
          this.setAttribute('aria-expanded', 'true');
          var currentAnswer = this.nextElementSibling;
          if (!currentAnswer) return;
          currentAnswer.hidden = false;
          requestAnimationFrame(function () {
            currentAnswer.classList.add('open');
          });
        }
      });
    });
  }

  function setupImageModal() {
    var modal = document.getElementById('imgModal');
    var modalImg = document.getElementById('modalImg');
    if (!modal || !modalImg) return;

    document.querySelectorAll('.zoomable').forEach(function (img) {
      if (img.dataset.bound === 'true') return;
      img.dataset.bound = 'true';
      img.style.cursor = 'zoom-in';
      img.addEventListener('click', function () {
        modalImg.src = this.currentSrc || this.src;
        modal.classList.add('open');
      });
    });

    document.querySelectorAll('.zoomable-card').forEach(function (card) {
      if (card.dataset.bound === 'true') return;
      card.dataset.bound = 'true';
      card.addEventListener('click', function (event) {
        if (event.target.closest('a, button')) return;
        modalImg.src = this.dataset.img;
        modal.classList.add('open');
      });
    });

    modal.addEventListener('click', function (event) {
      if (event.target === modal) modal.classList.remove('open');
    });
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') modal.classList.remove('open');
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    revealOnScroll();
    setupFaqs();
    setupImageModal();
  });
})();
