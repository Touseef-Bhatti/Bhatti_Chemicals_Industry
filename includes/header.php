<?php include_once __DIR__ . '/helpers.php'; ?>
<?php if (!defined('BCI_HEADER_ASSETS_LOADED')): ?>
<link rel="stylesheet" href="<?php echo site_url('/assets/css/header.css'); ?>">

<!-- Prefetch common next pages to speed navigation -->
<link rel="prefetch" href="<?php echo site_url('/about.php'); ?>">
<link rel="prefetch" href="<?php echo site_url('/products/'); ?>">
<link rel="prefetch" href="<?php echo site_url('/services.php'); ?>">
<link rel="prefetch" href="<?php echo site_url('/contact-us.php'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="<?php echo site_url('/assets/js/lazy-bg.js'); ?>" defer></script>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo site_url('/assets/css/search.css'); ?>">

<?php
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? ($_SERVER['PHP_SELF'] ?? ''));
$currentPage = basename($scriptName);
$isProductSection = strpos($scriptName, '/products/') !== false;
$productPages = ['zinc-oxide.php','zinc-ash.php','zinc-ingot.php','zinc-dross.php','zinc-dust.php','zinc-alloy.php'];
$isProductsActive = $isProductSection || in_array($currentPage, $productPages, true);
$isAboutActive = ($currentPage == 'about.php');
$isServicesActive = ($currentPage == 'services.php');
$isContactActive = ($currentPage == 'contact-us.php');
$isHomeActive = (!$isProductSection && $currentPage == 'index.php');
?>

<header class="site-header" id="siteHeader">
  <div class="header-inner">

    <a href="<?php echo site_url('/'); ?>" class="logo-link" aria-label="Bhatti Chemicals Industry — Home">
      <img src="<?php echo site_url('/assets/images/logo/bhatti-chemicals-logo-512.webp'); ?>" srcset="<?php echo site_url('/assets/images/logo/bhatti-chemicals-logo-320.webp'); ?> 320w, <?php echo site_url('/assets/images/logo/bhatti-chemicals-logo-512.webp'); ?> 512w" sizes="167px" alt="Bhatti Chemicals Industry" class="logo" width="512" height="129" fetchpriority="high">
    </a>

    <nav class="main-nav" aria-label="Primary navigation">
      <ul>
        <li>
          <a href="<?php echo site_url('/'); ?>" class="nav-link <?php echo $isHomeActive ? 'active' : ''; ?>">Home</a>
        </li>

        <li class="has-dropdown">
          <a href="<?php echo site_url('/products/'); ?>" class="nav-link <?php echo $isProductsActive ? 'active' : ''; ?>">
            Products
            <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <div class="dropdown products-dropdown">
            <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="dropdown-featured">
              <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance.webp'); ?>" alt="Zinc Oxide — flagship product" class="dropdown-featured-thumb" width="500" height="427" loading="lazy" decoding="async">
              <div class="dropdown-featured-body">
                <span class="dropdown-tag">Flagship Product</span>
                <strong>Zinc Oxide (ZnO)</strong>
                <span class="dropdown-desc">99.9% purity — our primary manufactured product</span>
              </div>
            </a>
            <ul class="dropdown-list">
              <li><a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="<?php echo ($currentPage=='zinc-oxide.php')?'active':''; ?>">Zinc Oxide</a></li>
              <li><a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="<?php echo ($currentPage=='zinc-ash.php')?'active':''; ?>">Zinc Ash Fine</a></li>
              <li><a href="<?php echo site_url('/products/zinc-ingot.php'); ?>" class="<?php echo ($currentPage=='zinc-ingot.php')?'active':''; ?>">Zinc Ingot</a></li>
              <li><a href="<?php echo site_url('/products/zinc-dross.php'); ?>" class="<?php echo ($currentPage=='zinc-dross.php')?'active':''; ?>">Zinc Dross</a></li>
              <li><a href="<?php echo site_url('/products/zinc-dust.php'); ?>" class="<?php echo ($currentPage=='zinc-dust.php')?'active':''; ?>">Zinc Dust (APCD)</a></li>
              <li><a href="<?php echo site_url('/products/zinc-alloy.php'); ?>" class="<?php echo ($currentPage=='zinc-alloy.php')?'active':''; ?>">Zinc Alloy</a></li>
            </ul>
            <a href="<?php echo site_url('/products/'); ?>" class="dropdown-viewall">View All Products →</a>
          </div>
        </li>

        <li>
          <a href="<?php echo site_url('/services.php'); ?>" class="nav-link <?php echo $isServicesActive ? 'active' : ''; ?>">Services</a>
        </li>

        <li>
          <a href="<?php echo site_url('/export.php'); ?>" class="nav-link <?php echo ($currentPage=='export.php') ? 'active' : ''; ?>">Export</a>
        </li>

        <li class="has-dropdown">
          <a href="<?php echo site_url('/about.php'); ?>" class="nav-link <?php echo $isAboutActive ? 'active' : ''; ?>">
            About
            <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <div class="dropdown about-dropdown">
            <a href="<?php echo site_url('/about.php'); ?>">Company Overview</a>
            <a href="<?php echo site_url('/about.php#ceo-vision'); ?>">CEO &amp; Vision</a>
            <a href="<?php echo site_url('/services.php'); ?>">Laboratory Services</a>
            <a href="<?php echo site_url('/about.php#FAQs'); ?>">FAQs</a>
          </div>
        </li>

        <li>
          <a href="<?php echo site_url('/contact-us.php'); ?>" class="nav-link <?php echo $isContactActive ? 'active' : ''; ?>">Contact</a>
        </li>
      </ul>
    </nav>

    <div class="header-actions">
      <button type="button" class="search-trigger desktop-only" id="searchTrigger" aria-label="Search" aria-controls="searchOverlay" aria-expanded="false" title="Search (Ctrl+K)">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <span class="search-trigger-label">Search</span>
      </button>
      <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-header-cta desktop-only">Request a Quote</a>
      <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<aside class="mobile-sidebar" id="mobileSidebar" aria-label="Mobile navigation">
  <div class="mobile-sidebar-header">
    <img src="<?php echo site_url('/assets/images/logo/bhatti-chemicals-logo-320.webp'); ?>" alt="Bhatti Chemicals Industry" width="320" height="80">
    <button class="mobile-sidebar-close" id="mobileSidebarClose" aria-label="Close menu">&times;</button>
  </div>

  <ul class="mobile-nav-list">
    <li>
      <a href="<?php echo site_url('/'); ?>" class="mobile-nav-link <?php echo $isHomeActive ? 'active' : ''; ?>">Home</a>
    </li>

    <li>
      <div class="mobile-nav-link" data-accordion="products" role="button" tabindex="0">
        <span>Products</span>
        <span class="mobile-accordion-toggle">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="#1a1a1a" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </div>
      <ul class="mobile-submenu">
        <li><a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="<?php echo ($currentPage=='zinc-oxide.php')?'active':''; ?>">Zinc Oxide</a></li>
        <li><a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="<?php echo ($currentPage=='zinc-ash.php')?'active':''; ?>">Zinc Ash Fine</a></li>
        <li><a href="<?php echo site_url('/products/zinc-ingot.php'); ?>" class="<?php echo ($currentPage=='zinc-ingot.php')?'active':''; ?>">Zinc Ingot</a></li>
        <li><a href="<?php echo site_url('/products/zinc-dross.php'); ?>" class="<?php echo ($currentPage=='zinc-dross.php')?'active':''; ?>">Zinc Dross</a></li>
        <li><a href="<?php echo site_url('/products/zinc-dust.php'); ?>" class="<?php echo ($currentPage=='zinc-dust.php')?'active':''; ?>">Zinc Dust (APCD)</a></li>
        <li><a href="<?php echo site_url('/products/zinc-alloy.php'); ?>" class="<?php echo ($currentPage=='zinc-alloy.php')?'active':''; ?>">Zinc Alloy</a></li>
        <li><a href="<?php echo site_url('/products/'); ?>" class="<?php echo ($isProductSection && $currentPage=='index.php')?'active':''; ?>">View All Products</a></li>
      </ul>
    </li>

    <li>
      <a href="<?php echo site_url('/services.php'); ?>" class="mobile-nav-link <?php echo $isServicesActive ? 'active' : ''; ?>">Services</a>
    </li>

    <li>
      <a href="<?php echo site_url('/export.php'); ?>" class="mobile-nav-link <?php echo ($currentPage=='export.php') ? 'active' : ''; ?>">Global Export</a>
    </li>

    <li>
      <div class="mobile-nav-link" data-accordion="about" role="button" tabindex="0">
        <span>About</span>
        <span class="mobile-accordion-toggle">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="#1a1a1a" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </div>
      <ul class="mobile-submenu">
        <li><a href="<?php echo site_url('/about.php'); ?>">Company Overview</a></li>
        <li><a href="<?php echo site_url('/about.php#ceo-vision'); ?>">CEO &amp; Vision</a></li>
        <li><a href="<?php echo site_url('/services.php'); ?>">Laboratory Services</a></li>
        <li><a href="<?php echo site_url('/about.php#FAQs'); ?>">FAQs</a></li>
      </ul>
    </li>

    <li>
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="mobile-nav-link <?php echo $isContactActive ? 'active' : ''; ?>">Contact</a>
    </li>
  </ul>

  <div class="mobile-sidebar-cta">
    <button type="button" class="btn-primary-mobile" id="searchTriggerMobile" aria-label="Open search" aria-controls="searchOverlay" aria-expanded="false" style="width:100%;cursor:pointer;border:none;display:flex;align-items:center;justify-content:center;gap:8px;margin-bottom:10px;background:rgba(0,123,94,0.12);color:var(--brand-jade,#007b5e);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      Search
    </button>
    <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-primary-mobile">Request a Quote</a>
  </div>
</aside>

<!-- ============================================================
     SEARCH OVERLAY
============================================================ -->
<div class="search-overlay" id="searchOverlay" role="dialog" aria-modal="true" aria-label="Search Bhatti Chemicals Industry" aria-hidden="true">
  <div class="search-container">

    <!-- Input Row -->
    <div class="search-input-row">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <input type="search" class="search-input" id="searchInput" aria-label="Search products, applications, and pages" placeholder="Search products, applications, pages…" autocomplete="off" spellcheck="false">
      <span class="search-shortcut-badge" aria-hidden="true"><kbd>ESC</kbd></span>
      <button type="button" class="search-close-btn" id="searchCloseBtn" aria-label="Close search">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>

    <!-- Quick Links (shown before typing) -->
    <div class="search-quick-links" id="searchQuickLinks">
      <div class="search-quick-links-title">Quick Links</div>
      <div class="search-quick-links-grid">
        <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="search-quick-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
          Zinc Oxide
        </a>
        <a href="<?php echo site_url('/products/'); ?>" class="search-quick-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
          All Products
        </a>
        <a href="<?php echo site_url('/zinc-oxide-applications/'); ?>" class="search-quick-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          Applications
        </a>
        <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="search-quick-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>
          Get a Quote
        </a>
        <a href="<?php echo site_url('/contact-us.php'); ?>" class="search-quick-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Contact Us
        </a>
        <a href="<?php echo site_url('/export.php'); ?>" class="search-quick-link">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          Global Export
        </a>
      </div>
    </div>

    <!-- Dynamic Results (populated by JS) -->
    <div class="search-results" id="searchResults"></div>

    <!-- Footer Hints -->
    <div class="search-footer" id="searchFooter">
      <span class="search-footer-hint"><kbd>↑</kbd><kbd>↓</kbd> Navigate</span>
      <span class="search-footer-hint"><kbd>↵</kbd> Open</span>
      <span class="search-footer-hint"><kbd>ESC</kbd> Close</span>
    </div>

  </div>
</div>

<script src="<?php echo site_url('/assets/js/search.js'); ?>" defer></script>

<script>
(function () {
  const header = document.getElementById('siteHeader');
  const menuToggle = document.getElementById('menuToggle');
  const sidebar = document.getElementById('mobileSidebar');
  const overlay = document.getElementById('sidebarOverlay');
  const closeBtn = document.getElementById('mobileSidebarClose');

  /* Solid header on scroll */
  function onScroll() {
    if (window.scrollY > 30) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('load', () => requestAnimationFrame(onScroll), { once: true });

  /* Mobile sidebar open/close */
  function openSidebar() {
    sidebar.classList.add('open');
    overlay.classList.add('open');
    menuToggle.classList.add('open');
    menuToggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeSidebar() {
    sidebar.classList.remove('open');
    overlay.classList.remove('open');
    menuToggle.classList.remove('open');
    menuToggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }
  menuToggle.addEventListener('click', () => {
    sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
  });
  closeBtn.addEventListener('click', closeSidebar);
  overlay.addEventListener('click', closeSidebar);

  /* Mobile accordion */
  document.querySelectorAll('[data-accordion]').forEach(trigger => {
    function toggle() {
      const li = trigger.closest('li');
      const wasOpen = li.classList.contains('accordion-open');
      document.querySelectorAll('.mobile-nav-list li.accordion-open').forEach(el => el.classList.remove('accordion-open'));
      if (!wasOpen) li.classList.add('accordion-open');
    }
    trigger.addEventListener('click', toggle);
    trigger.addEventListener('keydown', e => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggle(); } });
  });

  /* Close sidebar on internal nav click (except accordion triggers) */
  document.querySelectorAll('.mobile-submenu a, .mobile-nav-list > li > a').forEach(link => {
    link.addEventListener('click', closeSidebar);
  });

  /* Close mobile sidebar on Escape */
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeSidebar();
  });
})();
</script>
