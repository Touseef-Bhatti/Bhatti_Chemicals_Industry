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

    <meta name="description" content="About Bhatti Chemicals Industry — ISO 9001:2015 certified Zinc Oxide manufacturer and Zinc Ash exporter based in Gujranwala, Pakistan. Led by CEO M. Ashraf Bhatti with 50+ years of zinc manufacturing expertise.">
    <meta name="keywords" content="Bhatti Chemicals Industry about, M Ashraf Bhatti CEO, zinc oxide manufacturer Gujranwala, zinc products Pakistan, zinc chemical manufacturer history">
    <link rel="canonical" href="https://bhattichemicalsindustry.com.pk/about.php">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bhatti Chemicals Industry">
    <meta property="og:title" content="About Bhatti Chemicals Industry | Zinc Oxide Manufacturer, Pakistan">
    <meta property="og:description" content="ISO 9001:2015 certified manufacturer of Zinc Oxide and exporter of Zinc Ash in Gujranwala, Pakistan. Over 50 years of zinc manufacturing expertise under CEO M. Ashraf Bhatti.">
    <meta property="og:url" content="https://bhattichemicalsindustry.com.pk/about.php">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
    <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

    <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
    <link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>

    <!-- Google Analytics (Delayed Execution) -->
    <script>
      (function () {
        if (location.hostname !== 'bhattichemicalsindustry.com.pk') return;
        function loadAnalytics() {
          window.dataLayer = window.dataLayer || [];
          window.gtag = function(){ dataLayer.push(arguments); };
          gtag('js', new Date());
          gtag('config', 'G-F1BD95KL8M');
          var script = document.createElement('script');
          script.async = true;
          script.src = 'https://www.googletagmanager.com/gtag/js?id=G-F1BD95KL8M';
          document.head.appendChild(script);
        }
        window.addEventListener('load', function () {
          if ('requestIdleCallback' in window) {
            requestIdleCallback(loadAnalytics, { timeout: 3000 });
          } else {
            setTimeout(loadAnalytics, 1500);
          }
        });
      })();
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-F1BD95KL8M');
    </script>

    <title>About Bhatti Chemicals Industry | Zinc Oxide Manufacturer in Pakistan</title>

    <!-- Schema: About / Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Bhatti Chemicals Industry",
      "url": "https://bhattichemicalsindustry.com.pk/",
      "logo": "https://bhattichemicalsindustry.com.pk/assets/images/logo/bhatti-chemicals-logo.gif",
      "description": "ISO 9001:2015 certified manufacturer of Zinc Oxide and exporter of Zinc Ash, based in Gujranwala, Pakistan.",
      "foundingDate": "1974",
      "email": ["bhattichemicalsindustry@gmail.com","info@bhattichemicalsindustry.com.pk"],
      "telephone": "+92-304-1462460",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Gujranwala",
        "addressCountry": "PK"
      },
      "member": {
        "@type": "Person",
        "name": "M. Ashraf Bhatti",
        "jobTitle": "Chief Executive Officer"
      }
    }
    </script>
    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Bhatti Chemicals Industry located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bhatti Chemicals Industry is based in Gujranwala, Pakistan — one of Pakistan's major industrial cities known for its manufacturing output."
          }
        },
        {
          "@type": "Question",
          "name": "What does Bhatti Chemicals Industry manufacture?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bhatti Chemicals Industry manufactures Zinc Oxide (ZnO) as its flagship product and also supplies Zinc Ash Fine (65–70%), Zinc Ingot, Zinc Dross, Zinc Dust (APCD), and Zinc Alloy."
          }
        },
        {
          "@type": "Question",
          "name": "How long has Bhatti Chemicals Industry been in operation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bhatti Chemicals Industry has over 50 years of experience in zinc manufacturing, growing from a local operation into an internationally recognised zinc products supplier."
          }
        },
        {
          "@type": "Question",
          "name": "Is Bhatti Chemicals Industry ISO certified?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Bhatti Chemicals Industry is ISO 9001:2015 certified. Products are regularly tested by accredited third-party laboratories to verify consistent quality."
          }
        },
        {
          "@type": "Question",
          "name": "Does Bhatti Chemicals Industry offer custom zinc formulations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Bhatti Chemicals Industry offers custom Zinc Oxide formulations tailored to specific industrial requirements. Contact the team to discuss your application needs."
          }
        }
      ]
    }
    </script>

    <style>
    /* ============================================================
       BASE
    ============================================================ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; scroll-padding-top: 82px; }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      color: #1a1a1a;
      background: #fafafa;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }
    h1,h2,h3 { font-family: 'Sora', sans-serif; line-height: 1.15; }
    h1 { font-size: clamp(2rem, 4.5vw, 3.2rem); font-weight: 800; }
    h2 { font-size: clamp(1.55rem, 3vw, 2.25rem); font-weight: 700; }
    h3 { font-size: 1.15rem; font-weight: 600; }
    p  { line-height: 1.8; color: #4a5568; }

    .eyebrow {
      font-size: 0.76rem; font-weight: 600;
      letter-spacing: 0.12em; text-transform: uppercase;
      color: #007b5e; margin-bottom: 0.5rem;
    }

    /* ============================================================
       HERO BANNER
    ============================================================ */
    .page-hero {
      position: relative;
      min-height: 56vh;
      background: #0d1f19;
      display: flex; align-items: flex-end;
      padding: 120px 24px 60px;
      overflow: hidden;
    }
    .page-hero::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 60% 70% at 80% 30%, rgba(0,123,94,0.28) 0%, transparent 65%),
        radial-gradient(ellipse 40% 50% at 5% 90%, rgba(0,90,69,0.2) 0%, transparent 60%);
      pointer-events: none;
    }
    .page-hero-bg-text {
      position: absolute; right: 0; top: 50%;
      transform: translateY(-50%);
      font-family: 'Sora', sans-serif;
      font-size: clamp(120px, 18vw, 260px);
      font-weight: 800;
      color: rgba(255,255,255,0.03);
      letter-spacing: -0.04em;
      pointer-events: none; user-select: none;
      white-space: nowrap;
    }
    .page-hero-inner {
      position: relative; z-index: 2;
      max-width: 1200px; margin: 0 auto; width: 100%;
    }
    .page-hero-inner h1 { color: #fff; margin-bottom: 1rem; }
    .page-hero-inner p {
      color: rgba(255,255,255,0.7);
      font-size: clamp(0.95rem, 1.5vw, 1.1rem);
      max-width: 620px; line-height: 1.75;
    }
    .breadcrumb {
      display: flex; align-items: center; gap: 8px;
      margin-bottom: 1.2rem;
      font-size: 0.8rem; color: rgba(255,255,255,0.45);
    }
    .breadcrumb a { color: rgba(255,255,255,0.55); text-decoration: none; }
    .breadcrumb a:hover { color: #4ade9e; }
    .breadcrumb span { color: rgba(255,255,255,0.25); }

    /* ============================================================
       LAYOUT
    ============================================================ */
    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .section-header { text-align: center; margin-bottom: 3rem; }
    .section-header h2 { color: #1a1a1a; margin-bottom: 0.6rem; }
    .section-desc { font-size: 1rem; max-width: 660px; margin: 0 auto; color: #4a5568; }

    /* ============================================================
       IDENTITY SECTION
    ============================================================ */
    .identity-section {
      padding: 90px 24px;
      background: #fff;
    }
    .identity-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 70px; align-items: start;
    }
    .identity-text h2 { color: #1a1a1a; margin-bottom: 1.2rem; }
    .identity-text p { margin-bottom: 1.1rem; font-size: 1.01rem; }
    .identity-text p:last-of-type { margin-bottom: 0; }

    .identity-facts {
      display: grid; grid-template-columns: 1fr 1fr; gap: 16px;
      margin-top: 1.8rem;
    }
    .fact-chip {
      background: #f0f2f0; border-radius: 8px;
      padding: 16px 18px; border: 1px solid #e2e8e0;
    }
    .fact-chip strong {
      display: block;
      font-family: 'Sora', sans-serif;
      font-size: 1.4rem; font-weight: 800;
      color: #007b5e; line-height: 1;
      margin-bottom: 3px;
    }
    .fact-chip span { font-size: 0.8rem; color: #374151; }

    /* CEO card */
    .ceo-card {
      background: #fff;
      border: 1px solid #e2e8e0;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 6px 30px rgba(0,0,0,0.08);
      position: sticky; top: 100px;
    }
    .ceo-card img {
      width: 100%; display: block; object-fit: cover;
      aspect-ratio: 3/4;
    }
    .ceo-card-body {
      padding: 22px 22px 26px;
      border-top: 3px solid #007b5e;
    }
    .ceo-card-body strong {
      display: block;
      font-family: 'Sora', sans-serif;
      font-size: 1.15rem; font-weight: 700;
      color: #1a1a1a; margin-bottom: 2px;
    }
    .ceo-card-body .ceo-title {
      font-size: 0.82rem; color: #6b7280; margin-bottom: 12px;
    }
    .ceo-card-body blockquote {
      font-size: 0.9rem; color: #4a5568;
      line-height: 1.7; font-style: italic;
      border-left: 3px solid #007b5e;
      padding-left: 12px; margin: 0;
    }

    /* ============================================================
       SERVICES SECTION
    ============================================================ */
    .services-section {
      padding: 90px 24px;
      background: #f0f2f0;
    }
    .services-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .service-card {
      background: #fff; border-radius: 12px;
      padding: 32px 28px;
      border: 1px solid #e2e8e0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.04);
      transition: box-shadow 0.25s, transform 0.2s;
    }
    .service-card:hover {
      box-shadow: 0 8px 28px rgba(0,0,0,0.09);
      transform: translateY(-3px);
    }
    .service-icon {
      width: 56px; height: 56px; margin-bottom: 18px;
      border-radius: 10px;
      background: rgba(0,123,94,0.08);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.6rem;
    }
    .service-icon svg { width: 28px; height: 28px; fill: currentColor; }
    .service-card h3 { color: #1a1a1a; margin-bottom: 0.6rem; }
    .service-card p { font-size: 0.93rem; color: #4a5568; }

    /* ============================================================
       HISTORY TIMELINE
    ============================================================ */
    .history-section {
      padding: 90px 24px;
      background: #fff;
    }
    .timeline {
      max-width: 800px; margin: 0 auto;
      position: relative;
    }
    .timeline::before {
      content: '';
      position: absolute; left: 20px; top: 4px; bottom: 4px;
      width: 2px; background: #e2e8e0;
    }
    .timeline-item {
      display: flex; gap: 28px;
      margin-bottom: 40px;
      position: relative;
    }
    .timeline-item:last-child { margin-bottom: 0; }
    .timeline-dot {
      flex-shrink: 0;
      width: 42px; height: 42px;
      border-radius: 50%;
      background: #007b5e;
      display: flex; align-items: center; justify-content: center;
      color: #fff; font-size: 1.1rem; font-weight: 700;
      font-family: 'Sora', sans-serif;
      position: relative; z-index: 1;
      box-shadow: 0 0 0 4px #fff, 0 0 0 6px rgba(0,123,94,0.2);
    }
    .timeline-dot svg { width: 20px; height: 20px; fill: currentColor; }
    .timeline-body h3 { color: #1a1a1a; margin-bottom: 0.4rem; padding-top: 6px; }
    .timeline-body p { font-size: 0.96rem; color: #4a5568; line-height: 1.7; }

    /* ============================================================
       WHY CHOOSE US
    ============================================================ */
    .why-section {
      padding: 90px 24px;
      background: #0d1f19;
    }
    .why-section .section-header .eyebrow { color: #4ade9e; }
    .why-section .section-header h2 { color: #fff; }
    .why-section .section-desc { color: rgba(255,255,255,0.6); }
    .why-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 22px;
    }
    .why-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 12px; padding: 30px 24px;
      transition: background 0.2s, border-color 0.2s;
    }
    .why-card:hover { background: rgba(0,123,94,0.18); border-color: rgba(0,123,94,0.4); }
    .why-icon { font-size: 1.9rem; margin-bottom: 14px; color: #4ade9e; }
    .why-icon svg { display: block; width: 30px; height: 30px; fill: currentColor; }
    .why-card h3 { color: #fff; margin-bottom: 0.6rem; font-size: 1.02rem; }
    .why-card p { color: rgba(255,255,255,0.65); font-size: 0.9rem; }

    /* ============================================================
       FAQ SECTION
    ============================================================ */
    .faq-section {
      padding: 90px 24px;
      background: #fafafa;
    }
    .faq-list { max-width: 820px; margin: 0 auto; }
    .faq-item {
      border: 1px solid #e2e8e0; border-radius: 10px;
      margin-bottom: 12px; background: #fff; overflow: hidden;
    }
    .faq-q {
      width: 100%; background: none; border: none;
      display: flex; justify-content: space-between; align-items: center; gap: 16px;
      padding: 20px 24px; text-align: left; cursor: pointer;
      font-family: 'Sora', sans-serif; font-size: 1rem; font-weight: 600;
      color: #1a1a1a; transition: background 0.15s;
    }
    .faq-q:hover { background: #f0f2f0; }
    .faq-q[aria-expanded="true"] { background: #f0f2f0; color: #007b5e; }
    .faq-chevron {
      flex-shrink: 0; width: 22px; height: 22px;
      border: 2px solid #007b5e; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      color: #007b5e; font-size: 0.85rem;
      transition: transform 0.25s;
    }
    .faq-q[aria-expanded="true"] .faq-chevron { transform: rotate(180deg); }
    .faq-a {
      padding: 0 24px; max-height: 0; overflow: hidden;
      transition: max-height 0.35s ease, padding 0.25s;
    }
    .faq-a.open { max-height: 300px; padding: 0 24px 20px; }
    .faq-a p { font-size: 0.95rem; color: #4a5568; line-height: 1.75; }
    .faq-a a { color: #007b5e; }

    /* ============================================================
       INDUSTRIES STRIP
    ============================================================ */
    .industries-strip {
      padding: 70px 24px;
      background: #f0f2f0;
      text-align: center;
    }
    .industries-strip h2 { color: #1a1a1a; margin-bottom: 0.5rem; }
    .industries-strip p { color: #6b7280; font-size: 0.95rem; margin-bottom: 2rem; }
    .industry-tags {
      display: flex; flex-wrap: wrap;
      gap: 12px; justify-content: center;
      max-width: 900px; margin: 0 auto;
    }
    .industry-tag {
      background: #fff; border: 1px solid #e2e8e0;
      border-radius: 999px; padding: 8px 18px;
      font-size: 0.88rem; font-weight: 600;
      color: #374151;
      display: flex; align-items: center; gap: 7px;
      transition: background 0.2s, color 0.2s, border-color 0.2s;
    }
    .industry-tag svg { width: 17px; height: 17px; fill: currentColor; }
    .industry-tag:hover {
      background: #007b5e; color: #fff; border-color: #007b5e;
    }

    /* ============================================================
       CTA STRIP
    ============================================================ */
    .cta-strip {
      background: #007b5e;
      padding: 70px 24px;
      text-align: center;
    }
    .cta-strip h2 { color: #fff; margin-bottom: 0.75rem; }
    .cta-strip p { color: rgba(255,255,255,0.92); font-size: 1rem; margin-bottom: 2rem; max-width: 540px; margin-left: auto; margin-right: auto; }
    .cta-btn-row { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
    .btn-white {
      display: inline-block; padding: 14px 30px;
      background: #fff; color: #007b5e;
      border-radius: 6px; font-weight: 700; font-size: 0.95rem;
      text-decoration: none; transition: transform 0.15s, box-shadow 0.15s;
      font-family: 'Inter', sans-serif;
    }
    .btn-white:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(0,0,0,0.15); }
    .btn-ghost-white {
      display: inline-block; padding: 14px 30px;
      background: transparent; color: #fff;
      border: 2px solid rgba(255,255,255,0.55);
      border-radius: 6px; font-weight: 600; font-size: 0.95rem;
      text-decoration: none; transition: background 0.2s;
      font-family: 'Inter', sans-serif;
    }
    .btn-ghost-white:hover { background: rgba(255,255,255,0.12); }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1024px) {
      .identity-grid { grid-template-columns: 1fr; }
      .ceo-card { position: static; max-width: 340px; }
      .services-grid { grid-template-columns: 1fr 1fr; }
      .why-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      .services-grid { grid-template-columns: 1fr; }
      .why-grid { grid-template-columns: 1fr; }
      .identity-facts { grid-template-columns: 1fr 1fr; }
      .ceo-card { width: 90%; margin-inline: auto; }
      .timeline::before { display: none; }
    }
    @media (max-width: 480px) {
      .identity-facts { grid-template-columns: 1fr; }
    }

    /* Reveal animations */
    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .reveal.visible { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) { .reveal { opacity:1; transform:none; transition:none; } }
    </style>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>
<?php include __DIR__ . '/includes/whatsapp-widget.php'; ?>

<main id="main-content">

<!-- ════════════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════════════ -->
<section class="page-hero" aria-label="About Bhatti Chemicals Industry">
  <div class="page-hero-bg-text" aria-hidden="true">About</div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo site_url('/'); ?>">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">About Us</span>
    </nav>
    <p class="eyebrow" style="color:#4ade9e;">Bhatti Chemicals Industry</p>
    <h1>Zinc Oxide Manufacturer<br>Based in Gujranwala, Pakistan</h1>
    <p>
      A zinc products manufacturer and exporter with over 50 years of industrial experience, serving domestic and international buyers in rubber, ceramics, pharmaceuticals, paint, and agriculture.
    </p>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     WHO WE ARE / CEO
════════════════════════════════════════════════ -->
<section class="identity-section" id="about">
  <div class="identity-grid">
    <div class="identity-text reveal">
      <p class="eyebrow">Who We Are</p>
      <h2>A Trusted Zinc Manufacturer Serving Global Industries</h2>
      <p>
        Bhatti Chemicals Industry is a leading manufacturer of Zinc Oxide (ZnO) and an established exporter of Zinc Ash, headquartered in Gujranwala, Pakistan — one of the country's key industrial cities. The company has operated for over 50 years, supplying high-purity zinc products to manufacturers, processors, and distributors in Pakistan and internationally.
      </p>
      <p>
        Our core manufactured product is Zinc Oxide with 99.9% purity, produced through a controlled roasting and oxidation process and supplied in 25 kg bags. We also export Zinc Ash Fine (65–70%), as well as Zinc Ingot, Zinc Dross, Zinc Dust (APCD), and Zinc Alloy to international buyers.
      </p>
      <p>
        Bhatti Chemicals Industry is ISO 9001:2015 certified. Every batch of product is tested by third-party accredited laboratories to verify purity, composition, and physical properties before shipment — ensuring the consistent quality that industrial buyers require.
      </p>

      <div class="identity-facts">
        <div class="fact-chip">
          <strong>50+</strong>
          <span>Years of Zinc Manufacturing</span>
        </div>
        <div class="fact-chip">
          <strong>ISO</strong>
          <span>9001:2015 Certified</span>
        </div>
        <div class="fact-chip">
          <strong>99.9%</strong>
          <span>Zinc Oxide Purity</span>
        </div>
        <div class="fact-chip">
          <strong>15+</strong>
          <span>Countries Served</span>
        </div>
      </div>
    </div>

    <div class="reveal">
      <div class="ceo-card" id="ceo-vision">
        <img src="<?php echo site_url('/assets/images/team/ceo-ashraf-bhatti.jpeg'); ?>"
             alt="M. Ashraf Bhatti, CEO of Bhatti Chemicals Industry"
             loading="lazy">
        <div class="ceo-card-body">
          <strong>M. Ashraf Bhatti</strong>
          <p class="ceo-title">Chief Executive Officer</p>
          <blockquote>
            "Our vision is to continuously innovate and provide the highest quality Zinc Oxide products. We strive to meet global standards and exceed customer expectations by enhancing our manufacturing processes, investing in advanced technologies, and nurturing sustainable practices."
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════ -->
<section class="services-section" id="services">
  <div class="section-header reveal">
    <p class="eyebrow">What We Offer</p>
    <h2>Services for Industrial Buyers</h2>
    <p class="section-desc">Beyond supplying zinc products, we support our customers throughout the procurement process with technical expertise and reliable logistics.</p>
  </div>
  <div class="services-grid">
    <div class="service-card reveal">
      <div class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v4.5l5 8.7A3.2 3.2 0 0 1 16.2 22H7.8A3.2 3.2 0 0 1 5 17.2l5-8.7V4H9V2Zm3 7.1-5.3 9.1A1.2 1.2 0 0 0 7.8 20h8.4a1.2 1.2 0 0 0 1.1-1.8L12 9.1ZM8.9 16h6.2l1.1 2H7.8l1.1-2Z"/></svg></div>
      <h3>Custom Formulations</h3>
      <p>We offer custom Zinc Oxide formulations tailored to client specifications, ensuring optimal purity, particle size, and physical properties for your specific industrial application.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M21.7 19.3 14.8 12.4a6.1 6.1 0 0 0-7.7-7.7l3.2 3.2-2.4 2.4-3.2-3.2a6.1 6.1 0 0 0 7.7 7.7l6.9 6.9a1.7 1.7 0 0 0 2.4-2.4ZM19 21a.7.7 0 1 1 0-1.4A.7.7 0 0 1 19 21Z"/></svg></div>
      <h3>Technical Support</h3>
      <p>Our team provides product consultation and technical guidance to help industrial buyers integrate zinc materials correctly into their manufacturing processes.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M2 5h12v10h2V8h4l3 4v3h-2a3 3 0 0 1-6 0H9a3 3 0 0 1-6 0H1V6a1 1 0 0 1 1-1Zm2 2v6h1a3 3 0 0 1 5 0h2V7H4Zm14 3v3h2.5L19 10h-1Zm-11 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg></div>
      <h3>Timely Delivery</h3>
      <p>We manage logistics and supply chain coordination to ensure on-schedule delivery of zinc products to customers in Pakistan and internationally, with full documentation.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h3v7.6l2.3 2.3 2.1-2.1 1.4 1.4-3.1 3.1 1.7 1.7H21v2h-4.6l-1.7-1.7-1.4 1.4 1.8 1.8H20v2H4v-2h6.3l2.9-2.9-2.1-2.1L9 14.6V20H7v-6.2l2-2V2Z"/></svg></div>
      <h3>Research & Development</h3>
      <p>Ongoing investment in R&D enables us to refine production processes, improve product consistency, and develop solutions that meet evolving industrial standards.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm4.7 7.7-5.5 5.5a1 1 0 0 1-1.4 0l-2.5-2.5 1.4-1.4 1.8 1.8 4.8-4.8 1.4 1.4Z"/></svg></div>
      <h3>Quality Assurance</h3>
      <p>ISO 9001:2015 certified quality management systems and third-party laboratory testing ensure every batch meets verified quality standards before dispatch.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 3 10 5-10 5L2 8l10-5Zm-6 8.5V15c0 1.7 2.7 3 6 3s6-1.3 6-3v-3.5l-6 3-6-3ZM4 16h2v4H4v-4Z"/></svg></div>
      <h3>Customer Training</h3>
      <p>We provide guidance and training for customers integrating our products into their operations, helping ensure correct usage, storage, and handling of zinc materials.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     HISTORY TIMELINE
════════════════════════════════════════════════ -->
<section class="history-section">
  <div class="section-header reveal">
    <p class="eyebrow">Our History</p>
    <h2>50+ Years of Building a Zinc Products Legacy</h2>
  </div>
  <div class="timeline">
    <div class="timeline-item reveal">
      <div class="timeline-dot" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 21V5l9-3 9 3v16H3Zm4-2h2v-5H7v5Zm4 0h2v-5h-2v5Zm4 0h2v-5h-2v5ZM5 7h14V5.4l-7-2.3-7 2.3V7Z"/></svg></div>
      <div class="timeline-body">
        <h3>Founding</h3>
        <p>Bhatti Chemicals Industry was established with a clear mandate: to manufacture high-quality Zinc Oxide products for Pakistan's growing industrial base, starting with domestic rubber and ceramics customers.</p>
      </div>
    </div>
    <div class="timeline-item reveal">
      <div class="timeline-dot" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 19h18v2H1V3h2v16Zm3-3 4-5 3 3 5-7 1.6 1.2-6.4 9-3-3-2.6 3.2L6 16Z"/></svg></div>
      <div class="timeline-body">
        <h3>Growth &amp; Expansion</h3>
        <p>Through commitment to product quality and reliable supply, the company expanded its customer base from local manufacturers to regional and international buyers, growing its range to include Zinc Ash, Zinc Ingot, and Zinc Dross.</p>
      </div>
    </div>
    <div class="timeline-item reveal">
      <div class="timeline-dot" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm6.9 9h-3.1a15.3 15.3 0 0 0-1-5A8.1 8.1 0 0 1 18.9 11ZM12 4.1c.7 1 1.5 3.1 1.8 6.9h-3.6c.3-3.8 1.1-5.9 1.8-6.9ZM4.3 13h3.9c.1 1.5.3 2.8.6 3.9A8 8 0 0 1 4.3 13Zm3.9-2H4.3a8 8 0 0 1 4.5-3.9A17 17 0 0 0 8.2 11Zm3.8 8.9c-.7-1-1.5-3.1-1.8-6.9h3.6c-.3 3.8-1.1 5.9-1.8 6.9Zm3.2-3c.3-1.1.5-2.4.6-3.9h3.9a8 8 0 0 1-4.5 3.9Z"/></svg></div>
      <div class="timeline-body">
        <h3>International Reach</h3>
        <p>Bhatti Chemicals Industry expanded operations across multiple continents, establishing export relationships with buyers in India, UAE, Saudi Arabia, the UK, China, and other key markets.</p>
      </div>
    </div>
    <div class="timeline-item reveal">
      <div class="timeline-dot" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m8 2 4 3 4-3 2 1v5.2a6 6 0 0 1-3.8 5.6L16 22l-4-2-4 2 1.8-8.2A6 6 0 0 1 6 8.2V3l2-1Zm0 4v2.2a4 4 0 0 0 8 0V6l-4 3-4-3Z"/></svg></div>
      <div class="timeline-body">
        <h3>ISO 9001:2015 Certification</h3>
        <p>The company achieved ISO 9001:2015 certification, formalising quality management systems that underpin consistent batch-to-batch product quality and regulatory compliance for international buyers.</p>
      </div>
    </div>
    <div class="timeline-item reveal">
      <div class="timeline-dot" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5c5.5 0 9.5 5 10.5 7-1 2-5 7-10.5 7S2.5 14 1.5 12C2.5 10 6.5 5 12 5Zm0 2c-3.4 0-6.3 2.7-8 5 1.7 2.3 4.6 5 8 5s6.3-2.7 8-5c-1.7-2.3-4.6-5-8-5Zm0 1.5A3.5 3.5 0 1 1 12 15a3.5 3.5 0 0 1 0-7Z"/></svg></div>
      <div class="timeline-body">
        <h3>Today &amp; Forward</h3>
        <p>Under CEO M. Ashraf Bhatti, the company continues to strengthen its position as a trusted zinc products manufacturer, investing in production technology, quality systems, and customer support to serve an expanding global customer base.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     WHY CHOOSE US
════════════════════════════════════════════════ -->
<section class="why-section">
  <div class="section-header">
    <p class="eyebrow">Why Choose Bhatti Chemicals</p>
    <h2>What Procurement Managers Value About Us</h2>
    <p class="section-desc">Industrial buyers who work with us cite four consistent reasons for long-term supply relationships.</p>
  </div>
  <div class="why-grid">
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7 3h10v2h3v3a5 5 0 0 1-4 4.9A5 5 0 0 1 13 16v2h4v2H7v-2h4v-2a5 5 0 0 1-3-3.1A5 5 0 0 1 4 8V5h3V3Zm-1 4v1a3 3 0 0 0 2 2.8V7H6Zm12 0v3.8A3 3 0 0 0 18 8V7h-1Z"/></svg></div>
      <h3>Verified Product Quality</h3>
      <p>ISO 9001:2015 certified processes, third-party lab testing on every batch, and consistent 99.9% purity Zinc Oxide make quality verification straightforward for buyers.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m2 8 4-4 5 2 2-1 5 2 4-2v11l-4 2-5-2-5 2-6-2V8Zm5-.9L4 8.5v6.2l3 1V7.1Zm2 .4v8.2l4 1.4v-8.2L9 7.5Zm6 1.4v8.2l3 1V9.9l-3-1Z"/></svg></div>
      <h3>Expert Consultation</h3>
      <p>Our experienced team provides technical product support and responsive communication — from initial inquiry through to after-sales assistance.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm1 5v4.6l3.2 1.9-1 1.7-4.2-2.6V7h2Z"/></svg></div>
      <h3>Reliable Delivery</h3>
      <p>Stable production capacity and established logistics partnerships mean orders are fulfilled consistently and on schedule, whether domestic or international.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m4 3 7 7-1.4 1.4-1.8-1.8L5 12.4l-1.4-1.4 2.8-2.8L2.6 4.4 4 3Zm8 8 8 8-1.4 1.4-8-8L12 11Zm-2 6 2 2-3 3-2-2 3-3Z"/></svg></div>
      <h3>Long-Term Partnership</h3>
      <p>With over 50 years of operation, we bring the experience, stability, and commitment needed to be a long-term supply chain partner rather than a one-time transaction.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INDUSTRIES STRIP
════════════════════════════════════════════════ -->
<section class="industries-strip">
  <div class="section-header reveal">
    <p class="eyebrow">Industries We Serve</p>
    <h2>Zinc Products for Diverse Industrial Applications</h2>
    <p>Our Zinc Oxide and zinc materials are used by manufacturers across eight major industry categories.</p>
  </div>
  <div class="industry-tags">
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 7h12l3 4h3v6h-2a3 3 0 0 1-6 0H9a3 3 0 0 1-6 0H1V9a2 2 0 0 1 2-2Zm2 2v5h1a3 3 0 0 1 5 0h5v-1.3L14 9H5Zm1 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg></span> Rubber &amp; Tyres</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 3h16v4H4V3Zm2 6h12l-2 12H8L6 9Zm4 2v7h2v-7h-2Z"/></svg></span> Paints &amp; Coatings</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M6 3h12v3h2v2H4V6h2V3Zm1 7h10v9H7v-9Zm2 2v5h6v-5H9Z"/></svg></span> Ceramics &amp; Glass</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M8 3h8v3l2 2v9a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8l2-2V3Zm2 2v2l-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V9l-2-2V5h-4Z"/></svg></span> Pharmaceuticals</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20 3c-7 .5-11.7 3.7-13.4 9.1A8.3 8.3 0 0 0 3 20l2 .1c.2-2.2 1.1-4.2 2.6-5.8 2.3 2.3 6.4 2.3 9.3-.5C19.3 11.4 20 7.7 20 3Z"/></svg></span> Cosmetics &amp; Skincare</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 22V12.8C8.5 12.2 6 9.4 6 6V3h2v3a4 4 0 0 0 3 3.9V2h2v7.9A4 4 0 0 0 16 6V3h2v3c0 3.4-2.5 6.2-6 6.8V22h-2Z"/></svg></span> Agriculture &amp; Fertilizers</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 10a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v4h2v2h-2v3h-2v-3H7v3H5v-3H3v-2h2v-4Zm2 0v4h10v-4a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Z"/></svg></span> Animal Feed</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M13 2 4 13h6l-1 9 9-12h-6l1-8Z"/></svg></span> Battery Manufacturing</span>
    <span class="industry-tag"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3.4 9.5 8 11 4.6-1.5 8-6 8-11V5l-8-3Zm0 3 5 1.9V11c0 3.5-2.1 6.7-5 8-2.9-1.3-5-4.5-5-8V6.9L12 5Z"/></svg></span> Steel Galvanizing</span>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════ -->
<section class="faq-section" id="FAQs">
  <div class="section-header reveal">
    <p class="eyebrow">Common Questions</p>
    <h2>About Bhatti Chemicals Industry</h2>
    <p class="section-desc">Straightforward answers to the questions buyers, distributors, and partners most commonly ask.</p>
  </div>
  <div class="faq-list">
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Where is Bhatti Chemicals Industry located?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>We are based in Gujranwala, Pakistan — one of the country's key industrial manufacturing cities. Our facility handles production, quality testing, packaging, and dispatch for both domestic and international orders.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What products does Bhatti Chemicals Industry manufacture and supply?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>We manufacture <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>">Zinc Oxide (ZnO)</a> as our flagship product and supply <a href="<?php echo site_url('/products/zinc-ash.php'); ?>">Zinc Ash Fine (65–70%)</a>, Zinc Ingot, Zinc Dross, Zinc Dust (APCD), and Zinc Alloy. Zinc Oxide is our primary manufactured product; Zinc Ash is our primary export material.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        How long has the company been in the zinc industry?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Bhatti Chemicals Industry has over 50 years of experience in zinc manufacturing. The company has grown from a local operation to a globally recognised supplier with export relationships across more than 15 countries.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Are your products ISO 9001:2015 certified?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. All our products are manufactured under ISO 9001:2015 certified quality management processes and are regularly tested by accredited third-party laboratories to ensure consistent quality before shipment.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Do you serve both local and international clients?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. We supply clients across Pakistan and export to international buyers through an established distribution and logistics network. Export destinations include India, UAE, Saudi Arabia, China, UK, USA, Russia, Turkey, and others.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Can you provide custom zinc oxide formulations?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. We offer tailored Zinc Oxide formulations designed around client-specific industrial requirements — including custom particle size, purity grade, and packaging. Contact us to discuss your specifications.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Which industries use your zinc products?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Our products are used in rubber and tyre manufacturing, ceramics and glass, paints and coatings, pharmaceuticals and ointments, cosmetics and sunscreens, steel galvanizing, animal feed, agricultural fertilizers, and battery manufacturing.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CTA STRIP
════════════════════════════════════════════════ -->
<section class="cta-strip">
  <h2>Ready to Discuss Your Zinc Requirements?</h2>
  <p>Contact our team with your product, quantity, and destination. We respond promptly to all trade and procurement inquiries.</p>
  <div class="cta-btn-row">
    <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-white">View Zinc Oxide →</a>
    <a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="btn-white">View Zinc Ash →</a>
    <a href="#contact" class="btn-ghost-white">Request a Quote</a>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CONTACT + FOOTER
════════════════════════════════════════════════ -->

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
// Reveal on scroll
(function(){
  const els = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('visible'); io.unobserve(e.target); } });
  }, { threshold: 0.08 });
  els.forEach(el => io.observe(el));
})();

// FAQ accordion
(function(){
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', function(){
      const expanded = this.getAttribute('aria-expanded') === 'true';
      document.querySelectorAll('.faq-q').forEach(b => {
        b.setAttribute('aria-expanded','false');
        const a = b.nextElementSibling;
        a.classList.remove('open');
        a.hidden = true;
      });
      if(!expanded){
        this.setAttribute('aria-expanded','true');
        const ans = this.nextElementSibling;
        ans.hidden = false;
        requestAnimationFrame(() => ans.classList.add('open'));
      }
    });
  });
})();
</script>

</body>
</html>
