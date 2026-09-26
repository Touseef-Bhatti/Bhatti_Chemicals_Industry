<?php
if (!headers_sent() && extension_loaded('zlib') && !ini_get('zlib.output_compression')) {
    ob_start('ob_gzhandler');
}
define('BCI_HEADER_ASSETS_LOADED', true);
define('BCI_FOOTER_ASSETS_LOADED', true);
require_once __DIR__ . '/includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO Meta Tags -->
  <title>Zinc Oxide &amp; Zinc Chemicals Exporter from Pakistan | Global Export | Bhatti Chemicals</title>
  <meta name="description" content="Bhatti Chemicals Industry is Pakistan's premier exporter of 99.99% pure Zinc Oxide, Zinc Ash, and Zinc Ingots to 15+ countries worldwide. Direct factory supply, SGS inspection, 25 kg export packaging, FOB Karachi and CIF global shipping.">
  <meta name="keywords" content="zinc oxide exporter Pakistan, buy zinc oxide Pakistan export, zinc ash exporter, secondary zinc ingot export, 99.99% zinc oxide export, FOB Karachi zinc chemicals, CIF shipping zinc oxide, SGS certified zinc exporter Pakistan, zinc oxide chemical manufacturer Gujranwala">
  <link rel="canonical" href="https://bhattichemicalsindustry.com.pk/export.php">

  <!-- Open Graph / Social Cards -->
  <meta property="og:type" content="business.business">
  <meta property="og:site_name" content="Bhatti Chemicals Industry">
  <meta property="og:title" content="Zinc Oxide &amp; Zinc Chemicals Exporter from Pakistan | Bhatti Chemicals">
  <meta property="og:description" content="Direct factory exporter of 99.99% pure Zinc Oxide and Zinc Ash from Pakistan to 15+ countries worldwide. Certified on-site laboratory testing and SGS verification.">
  <meta property="og:image" content="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>">
  <meta property="og:url" content="https://bhattichemicalsindustry.com.pk/export.php">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Zinc Oxide Exporter Pakistan | Bhatti Chemicals Industry">
  <meta name="twitter:description" content="Direct manufacturer export of 99.99% pure Zinc Oxide, Zinc Ash, and Zinc Ingots with SGS testing from Pakistan.">
  <meta name="twitter:image" content="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
  <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
  <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
  <link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

  <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
  <link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>

  <!-- Structured Data: Organization & Service Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ChemicalSubstance",
    "name": "Zinc Oxide 99.99% Export Supply",
    "description": "High-purity 99.99% pure Zinc Oxide and Zinc Ash manufactured and exported by Bhatti Chemicals Industry from Gujranwala, Pakistan to global industrial markets.",
    "manufacturer": {
      "@type": "Organization",
      "name": "Bhatti Chemicals Industry",
      "url": "https://bhattichemicalsindustry.com.pk/",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Gujranwala",
        "addressRegion": "Punjab",
        "addressCountry": "Pakistan"
      }
    }
  }
  </script>

  <style>
    /* ── BASE & TYPOGRAPHY ── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; font-size: 16px; }
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: #334155;
      background: #fafcfb;
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
    }
    h1, h2, h3, h4, h5 {
      font-family: 'Sora', sans-serif;
      color: #0f172a;
      line-height: 1.25;
      letter-spacing: -0.015em;
    }

    /* ── REVEAL ANIMATIONS ── */
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ── HERO SECTION ── */
    .export-hero {
      position: relative;
      background: linear-gradient(135deg, #061e16 0%, #0d382b 60%, #08241b 100%);
      padding: 130px 24px 84px;
      overflow: hidden;
      color: #ffffff;
    }
    .export-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: 
        radial-gradient(circle at 80% 20%, rgba(74, 222, 158, 0.16) 0%, transparent 50%),
        radial-gradient(circle at 10% 80%, rgba(0, 123, 94, 0.25) 0%, transparent 60%);
      pointer-events: none;
    }
    .export-hero-inner {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }
    .breadcrumb {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.55);
      margin-bottom: 1.2rem;
    }
    .breadcrumb a {
      color: rgba(255, 255, 255, 0.75);
      text-decoration: none;
      transition: color 0.2s;
    }
    .breadcrumb a:hover { color: #4ade9e; }
    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #4ade9e;
      background: rgba(74, 222, 158, 0.12);
      border: 1px solid rgba(74, 222, 158, 0.28);
      padding: 4px 14px;
      border-radius: 9999px;
      margin-bottom: 1rem;
    }
    .export-hero h1 {
      font-size: clamp(2rem, 4.2vw, 3.2rem);
      color: #ffffff;
      font-weight: 800;
      margin-bottom: 0.8rem;
      letter-spacing: -0.02em;
    }
    .export-hero-sub {
      font-size: clamp(1rem, 1.8vw, 1.25rem);
      color: rgba(255, 255, 255, 0.82);
      max-width: 780px;
      line-height: 1.7;
      margin-bottom: 1.8rem;
    }
    .hero-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 2.2rem;
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.18);
      color: #ffffff;
      padding: 6px 16px;
      border-radius: 9999px;
      font-size: 0.82rem;
      font-weight: 600;
      backdrop-filter: blur(8px);
    }
    .hero-badge svg { width: 15px; height: 15px; fill: #4ade9e; }
    .hero-ctas {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
    }
    .btn-primary {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 14px 28px;
      background: #007b5e;
      color: #ffffff;
      border-radius: 10px;
      font-weight: 700;
      font-size: 0.95rem;
      text-decoration: none;
      box-shadow: 0 4px 14px rgba(0, 123, 94, 0.38);
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .btn-primary:hover {
      background: #00916f;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 123, 94, 0.48);
    }
    .btn-ghost {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 14px 28px;
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 10px;
      font-weight: 600;
      font-size: 0.95rem;
      text-decoration: none;
      backdrop-filter: blur(8px);
      transition: all 0.25s;
    }
    .btn-ghost:hover {
      background: rgba(255, 255, 255, 0.16);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-2px);
    }

    /* ── METRICS STRIP ── */
    .metrics-strip {
      background: #ffffff;
      border-top: 3px solid #007b5e;
      border-bottom: 1px solid #e2e8f0;
      box-shadow: 0 4px 20px -4px rgba(0, 0, 0, 0.03);
    }
    .metrics-inner {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
    }
    .metric-col {
      padding: 26px 24px;
      border-right: 1px solid #edf2f0;
      display: flex;
      flex-direction: column;
    }
    .metric-col:last-child { border-right: none; }
    .m-label {
      font-size: 0.74rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: #64748b;
      margin-bottom: 4px;
    }
    .m-val {
      font-family: 'Sora', sans-serif;
      font-size: 1.45rem;
      font-weight: 700;
      color: #007b5e;
      line-height: 1.15;
      margin-bottom: 2px;
    }
    .m-note { font-size: 0.8rem; color: #475569; }

    /* ── WHY IMPORT SECTION ── */
    .export-section-wrap {
      padding: 88px 24px;
    }
    .section-container {
      max-width: 1200px;
      margin: 0 auto;
    }
    .section-title-wrap {
      text-align: center;
      max-width: 760px;
      margin: 0 auto 48px;
    }
    .section-eyebrow {
      font-size: 0.76rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #007b5e;
      margin-bottom: 8px;
    }
    .section-title-wrap h2 {
      font-size: clamp(1.6rem, 2.8vw, 2.2rem);
      margin-bottom: 12px;
    }
    .section-desc {
      font-size: 1rem;
      color: #64748b;
      line-height: 1.7;
    }

    /* Why Grid */
    .why-export-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px;
      margin-bottom: 40px;
    }
    .why-export-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 16px;
      padding: 32px 26px;
      box-shadow: 0 4px 18px -2px rgba(0, 0, 0, 0.03);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .why-export-card:hover {
      transform: translateY(-4px);
      border-color: rgba(0, 123, 94, 0.35);
      box-shadow: 0 16px 36px -4px rgba(0, 123, 94, 0.12);
    }
    .why-icon-box {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: #f0f7f4;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 18px;
      color: #007b5e;
    }
    .why-icon-box svg { width: 24px; height: 24px; fill: currentColor; }
    .why-export-card h3 {
      font-size: 1.15rem;
      margin-bottom: 10px;
      color: #0f172a;
    }
    .why-export-card p {
      font-size: 0.92rem;
      color: #475569;
      line-height: 1.65;
    }

    /* ── EXPORT PRODUCTS CATALOG ── */
    .products-catalog-section {
      background: #f4f7f5;
      padding: 88px 24px;
    }
    .products-export-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }
    .product-export-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 16px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .product-export-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 36px -4px rgba(0, 123, 94, 0.14);
      border-color: rgba(0, 123, 94, 0.35);
    }
    .product-media-wrap {
      width: 100%;
      height: 200px;
      overflow: hidden;
      background: #eef3f0;
      position: relative;
    }
    .product-media-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .product-export-card:hover .product-media-wrap img {
      transform: scale(1.06);
    }
    .product-export-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      background: rgba(6, 30, 22, 0.8);
      color: #4ade9e;
      border: 1px solid rgba(74, 222, 158, 0.3);
      font-size: 0.7rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      padding: 3px 10px;
      border-radius: 9999px;
      backdrop-filter: blur(6px);
    }
    .product-export-body {
      padding: 22px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .product-export-body h3 {
      font-size: 1.12rem;
      margin-bottom: 8px;
    }
    .product-export-body p {
      font-size: 0.88rem;
      color: #64748b;
      line-height: 1.6;
      margin-bottom: 16px;
      flex: 1;
    }
    .product-specs-list {
      list-style: none;
      padding-top: 12px;
      border-top: 1px solid #edf2f0;
      margin-bottom: 16px;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .product-specs-list li {
      font-size: 0.78rem;
      color: #334155;
      display: flex;
      justify-content: space-between;
    }
    .product-specs-list strong { color: #007b5e; }
    .product-btn-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #007b5e;
      font-size: 0.88rem;
      font-weight: 700;
      text-decoration: none;
      transition: transform 0.2s;
    }
    .product-btn-link:hover {
      color: #005641;
      transform: translateX(4px);
    }

    /* ── CONTAINER LOGISTICS & PORT LOGISTICS ── */
    .logistics-section {
      padding: 88px 24px;
      background: #ffffff;
    }
    .logistics-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
    }
    .logistics-content h2 {
      font-size: clamp(1.6rem, 2.5vw, 2.1rem);
      margin-bottom: 14px;
    }
    .logistics-content p {
      font-size: 0.96rem;
      color: #475569;
      line-height: 1.75;
      margin-bottom: 20px;
    }
    .logistics-specs-box {
      background: #f8faf9;
      border: 1px solid rgba(0, 123, 94, 0.16);
      border-radius: 14px;
      padding: 22px;
      margin-bottom: 24px;
    }
    .logistics-specs-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .l-spec-item strong {
      display: block;
      font-size: 0.74rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #64748b;
      margin-bottom: 2px;
    }
    .l-spec-item span {
      font-family: 'Sora', sans-serif;
      font-size: 1.05rem;
      font-weight: 700;
      color: #007b5e;
    }
    .logistics-media {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 16px 40px -8px rgba(0, 0, 0, 0.12);
    }
    .logistics-media img {
      width: 100%;
      height: 480px;
      object-fit: cover;
      display: block;
    }
    .logistics-floating-card {
      position: absolute;
      bottom: 20px;
      left: 20px;
      right: 20px;
      background: rgba(6, 30, 22, 0.88);
      border: 1px solid rgba(74, 222, 158, 0.35);
      border-radius: 12px;
      padding: 16px 20px;
      backdrop-filter: blur(10px);
      color: #ffffff;
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .logistics-floating-icon {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      background: rgba(74, 222, 158, 0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: #4ade9e;
    }
    .logistics-floating-icon svg { width: 22px; height: 22px; fill: currentColor; }
    .logistics-floating-text strong { display: block; font-size: 0.92rem; }
    .logistics-floating-text span { font-size: 0.78rem; color: rgba(255, 255, 255, 0.75); }

    /* ── EXPORT INQUIRY FORM & CONTACT INFO ── */
    .export-inquiry-section {
      background: linear-gradient(135deg, #071f17 0%, #03120c 60%, #061912 100%);
      padding: 96px 24px;
      color: #ffffff;
    }
    .inquiry-grid {
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      gap: 48px;
    }
    .inquiry-info h2 {
      color: #ffffff;
      font-size: clamp(1.6rem, 2.6vw, 2.2rem);
      margin-bottom: 14px;
    }
    .inquiry-info p {
      color: rgba(255, 255, 255, 0.78);
      font-size: 0.98rem;
      line-height: 1.75;
      margin-bottom: 28px;
    }
    .contact-item-row {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 20px;
    }
    .c-icon-circle {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: rgba(74, 222, 158, 0.12);
      border: 1px solid rgba(74, 222, 158, 0.25);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #4ade9e;
      flex-shrink: 0;
    }
    .c-icon-circle svg { width: 20px; height: 20px; fill: currentColor; }
    .c-details strong { display: block; font-size: 0.76rem; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.55); margin-bottom: 2px; }
    .c-details span, .c-details a { font-size: 0.95rem; color: #ffffff; text-decoration: none; transition: color 0.2s; }
    .c-details a:hover { color: #4ade9e; }

    /* Form Card */
    .inquiry-form-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 36px 32px;
      color: #0f172a;
      box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.4);
    }
    .inquiry-form-card h3 {
      font-size: 1.35rem;
      margin-bottom: 6px;
    }
    .inquiry-form-card p {
      font-size: 0.88rem;
      color: #64748b;
      margin-bottom: 22px;
    }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      margin-bottom: 14px;
    }
    .form-group {
      display: flex;
      flex-direction: column;
      gap: 5px;
      margin-bottom: 14px;
    }
    .form-group label {
      font-size: 0.78rem;
      font-weight: 700;
      color: #334155;
    }
    .form-group input, .form-group select, .form-group textarea {
      width: 100%;
      padding: 11px 14px;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      font-family: inherit;
      font-size: 0.9rem;
      color: #0f172a;
      background: #ffffff;
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
      outline: none;
      border-color: #007b5e;
      box-shadow: 0 0 0 3px rgba(0, 123, 94, 0.15);
    }
    .btn-submit-inquiry {
      width: 100%;
      padding: 14px;
      background: #007b5e;
      color: #ffffff;
      border: none;
      border-radius: 8px;
      font-family: 'Sora', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      box-shadow: 0 4px 14px rgba(0, 123, 94, 0.35);
      transition: background 0.2s, transform 0.15s;
    }
    .btn-submit-inquiry:hover {
      background: #00916f;
      transform: translateY(-2px);
    }
    .form-status-box {
      margin-top: 16px;
      padding: 14px 18px;
      border-radius: 10px;
      font-size: 0.88rem;
      line-height: 1.5;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      animation: fadeInStatus 0.3s ease-in-out;
    }
    .form-status-box.success {
      background: #f0fdf4;
      border: 1px solid #86efac;
      color: #14532d;
    }
    .form-status-box svg {
      width: 24px;
      height: 24px;
      flex-shrink: 0;
      fill: #25D366;
      margin-top: 2px;
    }
    .form-status-box a {
      color: #007b5e;
      font-weight: 700;
      text-decoration: underline;
    }
    .form-status-box a:hover {
      color: #005641;
    }
    .direct-wa-hint {
      margin-top: 10px;
      text-align: center;
      font-size: 0.8rem;
      color: #64748b;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
    }
    .direct-wa-hint svg {
      width: 14px;
      height: 14px;
      fill: #25D366;
    }
    @keyframes fadeInStatus {
      from { opacity: 0; transform: translateY(-6px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 1024px) {
      .why-export-grid { grid-template-columns: repeat(2, 1fr); }
      .products-export-grid { grid-template-columns: repeat(2, 1fr); }
      .logistics-grid { grid-template-columns: 1fr; }
      .inquiry-grid { grid-template-columns: 1fr; }
      .metrics-inner { grid-template-columns: repeat(2, 1fr); }
      .metric-col:nth-child(2) { border-right: none; }
      .metric-col { border-bottom: 1px solid #edf2f0; }
    }
    @media (max-width: 640px) {
      .why-export-grid { grid-template-columns: 1fr; }
      .products-export-grid { grid-template-columns: 1fr; }
      .metrics-inner { grid-template-columns: 1fr; }
      .metric-col { border-right: none; }
      .form-row { grid-template-columns: 1fr; }
      .logistics-specs-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">

  <!-- ════════════════════════════════════════════════
       EXPORT HERO
  ════════════════════════════════════════════════ -->
  <section class="export-hero" aria-label="Global Export Services">
    <div class="export-hero-inner">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo site_url('/'); ?>">Home</a>
        <span>›</span>
        <span aria-current="page">Global Export Supply</span>
      </nav>
      
      <div class="hero-eyebrow">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
        <span>Pakistan's Premier Chemical Exporter</span>
      </div>

      <h1>Global Exporter of High-Purity Zinc Oxide &amp; Zinc Derivatives</h1>
      <p class="export-hero-sub">
        Bhatti Chemicals Industry exports guaranteed <strong>99.99% pure Zinc Oxide (ZnO)</strong> and Zinc derivatives directly from our automated manufacturing facility in Gujranwala, Pakistan. Trusted by commercial buyers across 15+ countries with full SGS verification, 25 kg export packaging, and reliable FOB Karachi &amp; CIF global port shipping.
      </p>

      <div class="hero-badge-row">
        <div class="hero-badge">
          <svg viewBox="0 0 24 24"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
          <span>99.99% Guaranteed Purity</span>
        </div>
        <div class="hero-badge">
          <svg viewBox="0 0 24 24"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
          <span>15+ Export Destinations</span>
        </div>
        <div class="hero-badge">
          <svg viewBox="0 0 24 24"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
          <span>SGS Pre-Shipment Inspection</span>
        </div>
        <div class="hero-badge">
          <svg viewBox="0 0 24 24"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
          <span>5,000 MT Annual Capacity</span>
        </div>
      </div>

      <div class="hero-ctas">
        <a href="#inquiry" class="btn-primary">Request Export Quotation</a>
        <a href="#quality-reports" class="btn-ghost">View Official Lab Reports</a>
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════════════════════
       EXPORT METRICS STRIP
  ════════════════════════════════════════════════ -->
  <div class="metrics-strip">
    <div class="metrics-inner">
      <div class="metric-col">
        <span class="m-label">Guaranteed Assay</span>
        <span class="m-val">&ge; 99.99%</span>
        <span class="m-note">Pure French Process Zinc Oxide</span>
      </div>
      <div class="metric-col">
        <span class="m-label">Annual Production</span>
        <span class="m-val">5,000 MT</span>
        <span class="m-note">Continuous plant output capacity</span>
      </div>
      <div class="metric-col">
        <span class="m-label">Maritime Shipping</span>
        <span class="m-val">FOB / CIF</span>
        <span class="m-note">Port Qasim &amp; Karachi Port (KPT)</span>
      </div>
      <div class="metric-col">
        <span class="m-label">Quality Standard</span>
        <span class="m-val">In-House + SGS</span>
        <span class="m-note">Certified COA with every container</span>
      </div>
    </div>
  </div>

  <!-- ════════════════════════════════════════════════
       WHY IMPORT FROM BHATTI CHEMICALS
  ════════════════════════════════════════════════ -->
  <section class="export-section-wrap" id="why-import">
    <div class="section-container">
      <div class="section-title-wrap reveal">
        <p class="section-eyebrow">Strategic Manufacturer Advantages</p>
        <h2>Why International Buyers Import from Bhatti Chemicals Industry</h2>
        <p class="section-desc">
          As a direct chemical manufacturer in Pakistan, we eliminate middlemen and trading brokers. We provide multinational procurement teams with verifiable chemical purity, competitive direct pricing, and complete customs trade documentation.
        </p>
      </div>

      <div class="why-export-grid">
        <div class="why-export-card reveal">
          <div class="why-icon-box">
            <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          </div>
          <h3>Guaranteed 99.99% Chemical Purity</h3>
          <p>We manufacture pure 99.99% Zinc Oxide using French indirect thermal vaporization. Heavy metals are strictly capped (Pb ≤ 50 ppm, Fe ≤ 0.003%, Cd ≤ 10 ppm) to ensure optimal reactivity across rubber, tyres, ceramics, and pharmaceuticals.</p>
        </div>

        <div class="why-export-card reveal">
          <div class="why-icon-box">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
          </div>
          <h3>Dual Lab Verification &amp; SGS Reports</h3>
          <p>Every export shipment is verified in our dedicated on-site analytical laboratory and accompanied by an official lot Certificate of Analysis (COA). Third-party inspections from internationally recognized laboratories like SGS are provided upon request.</p>
        </div>

        <div class="why-export-card reveal">
          <div class="why-icon-box">
            <svg viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
          </div>
          <h3>Direct Factory Pricing (Zero Markups)</h3>
          <p>Procuring directly from our Gujranwala plant removes intermediary commissions and trader margins. Our 5,000 MT annual production scale guarantees price stability and long-term contract predictability for international manufacturers.</p>
        </div>

        <div class="why-export-card reveal">
          <div class="why-icon-box">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
          </div>
          <h3>Fast Sea Freight via Karachi Ports</h3>
          <p>Our proximity to Port Qasim and Karachi Port Trust (KPT/KICT) enables rapid container drayage and direct sailings to the Middle East (Jebel Ali, Dammam), East Africa (Mombasa, Durban), Europe (Rotterdam, Hamburg), and Southeast Asia.</p>
        </div>

        <div class="why-export-card reveal">
          <div class="why-icon-box">
            <svg viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
          </div>
          <h3>Complete Export Documentation</h3>
          <p>We provide full international trade paperwork: Bill of Lading (B/L), Commercial Invoice, Packing List, Certificate of Origin (COO), Form E bank documentation, Technical Data Sheet (TDS), and Material Safety Data Sheet (MSDS).</p>
        </div>

        <div class="why-export-card reveal">
          <div class="why-icon-box">
            <svg viewBox="0 0 24 24"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
          </div>
          <h3>Moisture-Proof Export Packaging</h3>
          <p>Packed in robust 25 kg multi-wall craft paper valve bags with inner polyethylene moisture barriers. Palletized on heat-treated ISPM-15 export wooden pallets, shrink-wrapped, and strapped for rough ocean freight transit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════════════════════
       EXPORT PRODUCTS CATALOG
  ════════════════════════════════════════════════ -->
  <section class="products-catalog-section" id="export-products">
    <div class="section-container">
      <div class="section-title-wrap reveal">
        <p class="section-eyebrow">Export Grade Chemical Catalog</p>
        <h2>Manufactured Export Products</h2>
        <p class="section-desc">
          Available in 20ft Full Container Loads (FCL) with custom pallet configurations, certified batch assays, and container stuffing optimization.
        </p>
      </div>

      <div class="products-export-grid">
        <!-- Product 1: Zinc Oxide -->
        <article class="product-export-card reveal">
          <div class="product-media-wrap">
            <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>" alt="99.99% Pure Zinc Oxide white fine powder" width="400" height="200" loading="lazy">
            <span class="product-export-badge">Flagship Export</span>
          </div>
          <div class="product-export-body">
            <h3>99.99% Pure Zinc Oxide (ZnO)</h3>
            <p>French indirect process thermal vaporization. Ultra-fine white powder for tyres, rubber, paints, ceramics, and pharmaceuticals.</p>
            <ul class="product-specs-list">
              <li><span>Purity Assay</span><strong>&ge; 99.99% ZnO</strong></li>
              <li><span>Packaging</span><strong>25 kg Sealed Bags</strong></li>
              <li><span>Standard Sieve</span><strong>325 Mesh / 99.9%</strong></li>
              <li><span>Capacity</span><strong>5,000 MT/Year</strong></li>
            </ul>
            <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="product-btn-link">View Full Specifications &rarr;</a>
          </div>
        </article>

        <!-- Product 2: Zinc Ash Fine -->
        <article class="product-export-card reveal">
          <div class="product-media-wrap">
            <img src="<?php echo site_url('/assets/images/products/zinc-ash-fine-bag.webp'); ?>" alt="Zinc Ash Fine export grade packaging" width="480" height="200" loading="lazy">
            <span class="product-export-badge">Raw Material</span>
          </div>
          <div class="product-export-body">
            <h3>Zinc Ash Fine (65–75% Zn)</h3>
            <p>High-metallic secondary zinc content recovered from hot-dip galvanizing. Ideal feedstock for chemical plants and smelters.</p>
            <ul class="product-specs-list">
              <li><span>Total Zinc (Zn)</span><strong>65% &ndash; 75%</strong></li>
              <li><span>Packaging</span><strong>50 kg / 1 MT Bags</strong></li>
              <li><span>Form</span><strong>Fine Grey Powder</strong></li>
              <li><span>FCL Weight</span><strong>20 &ndash; 25 MT/FCL</strong></li>
            </ul>
            <a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="product-btn-link">View Full Specifications &rarr;</a>
          </div>
        </article>

        <!-- Product 3: Zinc Ingot -->
        <article class="product-export-card reveal">
          <div class="product-media-wrap">
            <img src="<?php echo site_url('/assets/images/products/zinc-ingot.webp'); ?>" alt="Secondary Zinc Ingot bundle for industrial export" width="660" height="200" loading="lazy">
            <span class="product-export-badge">Metal Ingot</span>
          </div>
          <div class="product-export-body">
            <h3>Secondary Zinc Ingot (&ge;99.95%)</h3>
            <p>Refined secondary zinc ingots cast for steel galvanizing baths, brass manufacturing, and zinc alloy die-casting foundries.</p>
            <ul class="product-specs-list">
              <li><span>Purity Grade</span><strong>&ge; 99.95% Zn</strong></li>
              <li><span>Piece Weight</span><strong>20 &ndash; 25 kg Ingot</strong></li>
              <li><span>Bundle Size</span><strong>1 MT Steel Strapped</strong></li>
              <li><span>Supply</span><strong>Direct Foundry Supply</strong></li>
            </ul>
            <a href="<?php echo site_url('/products/zinc-ingot.php'); ?>" class="product-btn-link">View Full Specifications &rarr;</a>
          </div>
        </article>

        <!-- Product 4: Zinc Dross -->
        <article class="product-export-card reveal">
          <div class="product-media-wrap">
            <img src="<?php echo site_url('/assets/images/products/zinc-dross.jpg'); ?>" alt="Zinc Dross bottom and top dross chunks" width="400" height="200" loading="lazy">
            <span class="product-export-badge">By-Product</span>
          </div>
          <div class="product-export-body">
            <h3>Zinc Dross (Top &amp; Bottom)</h3>
            <p>High-density metallic zinc dross generated during galvanizing. Sourced and sorted with minimal iron for smelter re-melting.</p>
            <ul class="product-specs-list">
              <li><span>Zinc Content</span><strong>85% &ndash; 95% Zn</strong></li>
              <li><span>Packaging</span><strong>Loose in FCL / Boxes</strong></li>
              <li><span>Physical Form</span><strong>Dense Metallic Slabs</strong></li>
              <li><span>Documentation</span><strong>Assay COA Verified</strong></li>
            </ul>
            <a href="<?php echo site_url('/products/zinc-dross.php'); ?>" class="product-btn-link">View Full Specifications &rarr;</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════════════════════
       LOGISTICS, CONTAINER PACKAGING & SEAPORTS
  ════════════════════════════════════════════════ -->
  <section class="logistics-section" id="logistics">
    <div class="section-container">
      <div class="logistics-grid">
        <div class="logistics-content reveal">
          <p class="section-eyebrow">Containerized Maritime Transport</p>
          <h2>Export Packaging &amp; Ocean Freight Logistics</h2>
          <p>
            We manage factory container loading, customs clearance, and inland trucking from Gujranwala to Karachi seaports. Every export consignment is stuffed into inspected, seaworthy 20ft containers, with moisture-absorber desiccant bags to prevent container rain during ocean voyages.
          </p>
          
          <div class="logistics-specs-box">
            <div class="logistics-specs-grid">
              <div class="l-spec-item">
                <strong>Standard Container FCL</strong>
                <span>20–25 MT per 20ft FCL</span>
              </div>
              <div class="l-spec-item">
                <strong>Packaging Format</strong>
                <span>25 kg Bags / 1 MT Pallets</span>
              </div>
              <div class="l-spec-item">
                <strong>Loading Seaports</strong>
                <span>Port Qasim (PQA) &amp; KICT Karachi</span>
              </div>
              <div class="l-spec-item">
                <strong>Shipping Terms (Incoterms)</strong>
                <span>FOB Karachi, CIF, CFR, EXW</span>
              </div>
            </div>
          </div>

          <p>
            <strong>Palletization Standards:</strong> Products are stacked on ISPM-15 heat-treated, fumigated wooden pallets (1,000 kg per pallet), wrapped with 5 layers of heavy-duty stretch film, and secured with poly-strapping and corner edge protectors.
          </p>
        </div>

        <div class="logistics-media reveal">
          <img src="<?php echo site_url('/assets/images/stock/unsplash/1578575437130-527eed3abbec.webp'); ?>" alt="Container ship loaded with export cargo at seaport — Bhatti Chemicals Industry" width="1200" height="800" loading="lazy">
          <div class="logistics-floating-card">
            <div class="logistics-floating-icon">
              <svg viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
            </div>
            <div class="logistics-floating-text">
              <strong>Seamless Customs &amp; Ocean Freight</strong>
              <span>Karachi Port Direct to 15+ Global Seaports</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Logistics & Packaging Image Gallery -->
      <div class="logistics-gallery-strip reveal" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px; margin-top:40px;">
        <div style="border-radius:12px; overflow:hidden; border:1px solid #e2e8f0; box-shadow:0 4px 14px rgba(0,0,0,0.05); background:#ffffff;">
          <img src="<?php echo site_url('/assets/images/stock/unsplash/1586528116311-ad8dd3c8310d.webp'); ?>" alt="Palletized industrial chemical warehouse storage — Bhatti Chemicals export packing" style="width:100%; height:200px; object-fit:cover; display:block;" loading="lazy">
          <div style="padding:14px 18px; font-size:0.86rem; color:#334155; font-weight:600; background:#f8faf9; border-top:1px solid #e2e8f0;">
            ISPM-15 Heat-Treated Palletization &amp; Stretch-Wrapping
          </div>
        </div>
        <div style="border-radius:12px; overflow:hidden; border:1px solid #e2e8f0; box-shadow:0 4px 14px rgba(0,0,0,0.05); background:#ffffff;">
          <img src="<?php echo site_url('/assets/images/stock/unsplash/1578575437130-527eed3abbec.webp'); ?>" alt="Container vessel sailing from Karachi seaport to global destinations" style="width:100%; height:200px; object-fit:cover; display:block;" loading="lazy">
          <div style="padding:14px 18px; font-size:0.86rem; color:#334155; font-weight:600; background:#f8faf9; border-top:1px solid #e2e8f0;">
            FCL Maritime Freight via Port Qasim &amp; Karachi Port (KPT)
          </div>
        </div>
        <div style="border-radius:12px; overflow:hidden; border:1px solid #e2e8f0; box-shadow:0 4px 14px rgba(0,0,0,0.05); background:#ffffff;">
          <img src="<?php echo site_url('/assets/images/stock/unsplash/1518241353330-0f7941c2d9b5.webp'); ?>" alt="Deep-sea container port terminal cranes handling international export cargo" style="width:100%; height:200px; object-fit:cover; display:block;" loading="lazy">
          <div style="padding:14px 18px; font-size:0.86rem; color:#334155; font-weight:600; background:#f8faf9; border-top:1px solid #e2e8f0;">
            Global Port Discharge: Middle East, Africa, Europe &amp; Asia
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════════════════════
       QUALITY ASSURANCE & LAB REPORT SHOWCASE (LIGHT)
  ════════════════════════════════════════════════ -->
  <section id="quality-reports">
    <?php 
      $appLabTitle = 'Global Export Supply & International Trade';
      $appLabSub = 'Certified 99.99% Pure Zinc Oxide Batch Analysis & SGS Documentation';
      include __DIR__ . '/includes/app-lab-report-card.php'; 
    ?>
  </section>

  <!-- ════════════════════════════════════════════════
       EXPORT INQUIRY & CONTACT INFO
  ════════════════════════════════════════════════ -->
  <section class="export-inquiry-section" id="inquiry">
    <div class="section-container">
      <div class="inquiry-grid">
        
        <!-- Left: Direct Contact Details -->
        <div class="inquiry-info reveal">
          <p class="section-eyebrow" style="color:#4ade9e;">Direct Manufacturer Communications</p>
          <h2>Request International Export Quotation</h2>
          <p>
            Contact our export sales department for competitive FOB Karachi or CIF destination port quotations, technical specifications, and container stuffing schedules. We guarantee fast response times within 24 business hours.
          </p>

          <div class="contact-item-row">
            <div class="c-icon-circle">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            </div>
            <div class="c-details">
              <strong>Manufacturing Plant &amp; Head Office</strong>
              <span>Bhatti Chemicals Industry, Gujranwala Industrial Zone, Punjab, Pakistan</span>
            </div>
          </div>

          <div class="contact-item-row">
            <div class="c-icon-circle">
              <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            </div>
            <div class="c-details">
              <strong>Export Department Email</strong>
              <a href="mailto:info@bhattichemicalsindustry.com.pk">info@bhattichemicalsindustry.com.pk</a>
            </div>
          </div>

          <div class="contact-item-row">
            <div class="c-icon-circle">
              <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            </div>
            <div class="c-details">
              <strong>Direct Phone / UAN</strong>
              <span>+92 55 4295107</span>
            </div>
          </div>

          <div class="contact-item-row">
            <div class="c-icon-circle" style="color:#25D366; background:rgba(37,211,102,0.12); border-color:rgba(37,211,102,0.3);">
              <svg viewBox="0 0 32 32"><path d="M16 3.5c-6.9 0-12.5 5.4-12.5 12.1 0 2.3.7 4.5 1.9 6.4L3.5 28.5l6.8-1.8c1.8 1 3.8 1.5 5.8 1.5 6.9 0 12.5-5.4 12.5-12.1S22.9 3.5 16 3.5Zm0 22.6c-1.8 0-3.5-.5-5-1.4l-.4-.2-4 1.1 1.1-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.8 0-5.5 4.6-10 10.3-10s10.3 4.5 10.3 10-4.6 10.5-10.3 10.5Z"/></svg>
            </div>
            <div class="c-details">
              <strong>International WhatsApp Support</strong>
              <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer">+92 304 1462 460</a>
            </div>
          </div>
        </div>

        <!-- Right: Inquiry Form Card -->
        <div class="inquiry-form-card reveal">
          <h3>Request Export Quotation</h3>
          <p>Complete the form below to receive official factory quotation and shipping schedules.</p>

          <form id="exportInquiryForm" action="<?php echo site_url('/contact-us.php#quote'); ?>" method="POST">
            <div class="form-row">
              <div class="form-group">
                <label for="expProduct">Target Product *</label>
                <select id="expProduct" name="product" required>
                  <option value="Zinc Oxide 99.99%">Zinc Oxide (ZnO &ge; 99.99%)</option>
                  <option value="Zinc Ash Fine">Zinc Ash Fine (65-75% Zn)</option>
                  <option value="Zinc Ingot">Secondary Zinc Ingot (&ge; 99.95%)</option>
                  <option value="Zinc Dross">Zinc Dross (Top/Bottom)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="expQuantity">Estimated Quantity (MT) *</label>
                <input type="text" id="expQuantity" name="quantity" placeholder="e.g. 25 MT (1 FCL)" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="expIncoterm">Preferred Incoterm *</label>
                <select id="expIncoterm" name="incoterm" required>
                  <option value="FOB Karachi">FOB Karachi (Port Qasim / KPT)</option>
                  <option value="CIF">CIF (Cost, Insurance &amp; Freight)</option>
                  <option value="CFR">CFR (Cost &amp; Freight)</option>
                  <option value="EXW">EXW (Ex Works Gujranwala)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="expPort">Destination Port &amp; Country *</label>
                <input type="text" id="expPort" name="destination" placeholder="e.g. Jebel Ali, UAE" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="expName">Contact Person *</label>
                <input type="text" id="expName" name="name" placeholder="Full Name" required>
              </div>
              <div class="form-group">
                <label for="expCompany">Company Name *</label>
                <input type="text" id="expCompany" name="company" placeholder="Company Name" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="expEmail">Corporate Email *</label>
                <input type="email" id="expEmail" name="email" placeholder="name@company.com" required>
              </div>
              <div class="form-group">
                <label for="expPhone">WhatsApp / Phone *</label>
                <input type="tel" id="expPhone" name="phone" placeholder="+123 456 7890" required>
              </div>
            </div>

            <div class="form-group">
              <label for="expNotes">Application &amp; Quality Specifications (Optional)</label>
              <textarea id="expNotes" name="notes" rows="3" placeholder="Specify purity requirements, sieve mesh, packaging preference (palletized / unpalletized), or target delivery timeline..."></textarea>
            </div>

            <button type="submit" id="btnExportSubmit" class="btn-submit-inquiry">Submit Export Quotation Request &rarr;</button>
            <p class="direct-wa-hint">
              <svg viewBox="0 0 32 32"><path d="M16 3.5c-6.9 0-12.5 5.4-12.5 12.1 0 2.3.7 4.5 1.9 6.4L3.5 28.5l6.8-1.8c1.8 1 3.8 1.5 5.8 1.5 6.9 0 12.5-5.4 12.5-12.1S22.9 3.5 16 3.5Zm0 22.6c-1.8 0-3.5-.5-5-1.4l-.4-.2-4 1.1 1.1-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.8 0-5.5 4.6-10 10.3-10s10.3 4.5 10.3 10-4.6 10.5-10.3 10.5Z"/></svg>
              Direct WhatsApp dispatch to +92 304 146 2460 (instant quotation)
            </p>
            <div id="exportFormStatus" style="display:none;" aria-live="polite"></div>
          </form>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
// Scroll reveal observer
(function(){
  const els = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if(e.isIntersecting){
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.08 });
  els.forEach(el => io.observe(el));
})();

// Export Quotation Request WhatsApp Dispatcher
(function() {
  const form = document.getElementById('exportInquiryForm');
  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    const product = document.getElementById('expProduct')?.value || '';
    const quantity = document.getElementById('expQuantity')?.value.trim() || '';
    const incoterm = document.getElementById('expIncoterm')?.value || '';
    const destination = document.getElementById('expPort')?.value.trim() || '';
    const name = document.getElementById('expName')?.value.trim() || '';
    const company = document.getElementById('expCompany')?.value.trim() || '';
    const email = document.getElementById('expEmail')?.value.trim() || '';
    const phone = document.getElementById('expPhone')?.value.trim() || '';
    const notes = document.getElementById('expNotes')?.value.trim() || '';

    const lines = [
      "🌐 *BHATTI CHEMICALS INDUSTRY*",
      "📦 *EXPORT QUOTATION REQUEST*",
      "━━━━━━━━━━━━━━━━━━━━━━━━━━━━",
      "🏢 *BUYER & CONTACT DETAILS*",
      `• *Contact Person:* ${name}`,
      `• *Company Name:* ${company}`,
      `• *Corporate Email:* ${email}`,
      `• *WhatsApp / Phone:* ${phone}`,
      "",
      "🚢 *ORDER & SHIPMENT SPECIFICATIONS*",
      `• *Target Product:* ${product}`,
      `• *Estimated Quantity:* ${quantity}`,
      `• *Preferred Incoterm:* ${incoterm}`,
      `• *Destination Port / Country:* ${destination}`,
      "",
      "📋 *APPLICATION & SPECIFICATIONS*",
      notes ? notes : "Standard export quality specifications required.",
      "━━━━━━━━━━━━━━━━━━━━━━━━━━━━",
      "⚡ *Source:* Export Portal (bhattichemicalsindustry.com.pk)"
    ];

    const message = lines.join("\n");
    const waUrl = "https://wa.me/923041462460?text=" + encodeURIComponent(message);

    const statusBox = document.getElementById('exportFormStatus');
    const submitBtn = document.getElementById('btnExportSubmit');

    if (statusBox) {
      statusBox.className = "form-status-box success";
      statusBox.innerHTML = `
        <svg viewBox="0 0 32 32"><path d="M16 3.5c-6.9 0-12.5 5.4-12.5 12.1 0 2.3.7 4.5 1.9 6.4L3.5 28.5l6.8-1.8c1.8 1 3.8 1.5 5.8 1.5 6.9 0 12.5-5.4 12.5-12.1S22.9 3.5 16 3.5Zm0 22.6c-1.8 0-3.5-.5-5-1.4l-.4-.2-4 1.1 1.1-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.8 0-5.5 4.6-10 10.3-10s10.3 4.5 10.3 10-4.6 10.5-10.3 10.5Z"/></svg>
        <div>
          <strong>Quotation request prepared! Opening WhatsApp...</strong><br>
          Connecting you with Bhatti Chemicals Export Desk (+92 304 146 2460).<br>
          <span style="font-size:0.84rem; color:#1e293b;">If WhatsApp does not open automatically, <a href="${waUrl}" target="_blank" rel="noopener noreferrer">click here to send immediately &rarr;</a></span>
        </div>
      `;
      statusBox.style.display = "flex";
      statusBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    if (submitBtn) {
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = `Opening WhatsApp... &rarr;`;
      submitBtn.disabled = true;
      setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
      }, 4000);
    }

    window.open(waUrl, '_blank', 'noopener,noreferrer');
  });
})();
</script>

</body>
</html>
