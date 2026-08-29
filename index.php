<?php
if (!headers_sent() && extension_loaded('zlib') && !ini_get('zlib.output_compression')) {
    ob_start('ob_gzhandler');
}
require_once __DIR__ . '/includes/helpers.php';
define('BCI_HEADER_ASSETS_LOADED', true);
define('BCI_FOOTER_ASSETS_LOADED', true);
$host = $_SERVER['HTTP_HOST'] ?? '';
$isLocalhost = preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/', $host);
if ($isLocalhost && isset($_GET['clear_sw']) && !headers_sent()) {
    header('Clear-Site-Data: "cache", "storage"');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhatti Chemicals Industry is an ISO 9001:2015 certified manufacturer of high-purity Zinc Oxide and a trusted exporter of Zinc Ash, based in Gujranwala, Pakistan. Serving rubber, ceramics, paint, pharmaceutical, and agriculture industries worldwide.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Zinc Oxide manufacturer Pakistan, Zinc Oxide supplier, Zinc Ash exporter, Bhatti Chemicals Industry, Gujranwala chemical manufacturer, industrial Zinc Oxide, ISO 9001 certified Zinc Oxide">
    <link rel="canonical" href="https://www.bhattichemicalsindustry.com.pk/">
    <link rel="preload" as="image" type="image/webp"
          href="<?php echo site_url('/assets/images/products/hero-zinc-oxide-bag.webp'); ?>"
          fetchpriority="high">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bhatti Chemicals Industry">
    <meta property="og:title" content="Zinc Oxide Manufacturer & Zinc Ash Exporter | Bhatti Chemicals Industry">
    <meta property="og:description" content="ISO 9001:2015 certified manufacturer of Zinc Oxide and exporter of Zinc Ash, Gujranwala, Pakistan. Serving global industries since inception.">
    <meta property="og:image" content="https://www.bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp">
    <meta property="og:url" content="https://www.bhattichemicalsindustry.com.pk/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zinc Oxide Manufacturer & Zinc Ash Exporter | Bhatti Chemicals Industry">
    <meta name="twitter:description" content="ISO 9001:2015 certified manufacturer of Zinc Oxide and exporter of Zinc Ash, Gujranwala, Pakistan.">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
    <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">

    <!-- PWA -->
    <link rel="manifest" href="<?php echo site_url('/manifest.json'); ?>">
    <meta name="theme-color" content="#007b5e">
    <link rel="icon" href="<?php echo site_url('/assets/favicon/web-app-manifest-192x192.png'); ?>" type="image/png">

    <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>">
    <script>document.documentElement.classList.add('js');</script>

    <!-- Google Analytics -->
    <script>
      (function () {
        if (location.hostname !== 'www.bhattichemicalsindustry.com.pk') return;
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

    <title>Zinc Oxide Manufacturer & Zinc Ash Exporter in Pakistan | Bhatti Chemicals Industry</title>

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Bhatti Chemicals Industry",
      "url": "https://www.bhattichemicalsindustry.com.pk/",
      "logo": "https://www.bhattichemicalsindustry.com.pk/assets/images/logo/bhatti-chemicals-logo.gif",
      "description": "ISO 9001:2015 certified manufacturer of Zinc Oxide and exporter of Zinc Ash, based in Gujranwala, Pakistan, serving rubber, ceramics, glass, paint, pharmaceutical, and agriculture industries worldwide.",
      "email": ["bhattichemicalsindustry@gmail.com","info@bhattichemicalsindustry.com.pk"],
      "telephone": "+92-304-1462460",
      "address": {"@type":"PostalAddress","addressLocality":"Gujranwala","addressCountry":"PK"},
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61567839302531",
        "https://www.linkedin.com/in/bhatti-chemicals-industry?originalSubdomain=pk"
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Bhatti Chemicals Industry",
      "url": "https://www.bhattichemicalsindustry.com.pk/"
    }
    </script>
    <!-- FAQ Page Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What products does Bhatti Chemicals Industry manufacture?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bhatti Chemicals Industry manufactures Zinc Oxide (ZnO) as its primary product and supplies Zinc Ash Fine (65–70%), Zinc Ingot, Zinc Dross, Zinc Dust (APCD), and Zinc Alloy. Zinc Oxide is the flagship manufactured product; Zinc Ash is the primary export product."
          }
        },
        {
          "@type": "Question",
          "name": "What is the purity of your Zinc Oxide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Zinc Oxide is produced at 99.9% purity, presented as a fine white powder free from visible contaminants, packed in 25 kg bags."
          }
        },
        {
          "@type": "Question",
          "name": "Are your products ISO certified?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Bhatti Chemicals Industry is ISO 9001:2015 certified. Products undergo regular third-party laboratory testing before shipment."
          }
        },
        {
          "@type": "Question",
          "name": "Do you export internationally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We supply Zinc Ash and other zinc products to international buyers, with full export documentation, appropriate packaging, and logistics coordination."
          }
        },
        {
          "@type": "Question",
          "name": "How do I request a quotation from Bhatti Chemicals Industry?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Contact us by email at info@bhattichemicalsindustry.com.pk or via WhatsApp at +92 304 1462460 with your product name, required quantity, and destination country."
          }
        },
        {
          "@type": "Question",
          "name": "Which industries use Zinc Oxide from Bhatti Chemicals?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Zinc Oxide is used by manufacturers in rubber and tyre production, paints and coatings, ceramics and glass, pharmaceuticals and ointments, cosmetics and sunscreens, animal feed, agricultural fertilizers, and battery manufacturing."
          }
        }
      ]
    }
    </script>

    <style>
    /* ============================================================
       RESET & BASE
    ============================================================ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; scroll-padding-top: 80px; }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      color: #1a1a1a;
      background: #fafafa;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    /* ============================================================
       TYPOGRAPHY SCALE
    ============================================================ */
    h1, h2, h3 { font-family: 'Sora', sans-serif; line-height: 1.15; }
    h1 { font-size: clamp(2.2rem, 5vw, 3.8rem); font-weight: 800; }
    h2 { font-size: clamp(1.7rem, 3.5vw, 2.6rem); font-weight: 700; }
    h3 { font-size: clamp(1.1rem, 2vw, 1.35rem); font-weight: 600; }
    p  { line-height: 1.75; color: #4a5568; }

    .eyebrow {
      font-family: 'Inter', sans-serif;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #007b5e;
      margin-bottom: 0.6rem;
    }

    /* ============================================================
       LAYOUT UTILITIES
    ============================================================ */
    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .section-header { text-align: center; margin-bottom: 3rem; }
    .section-header h2 { color: #1a1a1a; margin-bottom: 0.75rem; }
    .section-header .section-desc { font-size: 1.05rem; max-width: 680px; margin: 0 auto; }
    .text-center { text-align: center; }

    /* ============================================================
       BUTTONS
    ============================================================ */
    .btn-primary {
      display: inline-block; padding: 13px 28px;
      background: #007b5e; color: #fff;
      border-radius: 6px; font-weight: 600; font-size: 0.95rem;
      text-decoration: none; transition: background 0.2s, transform 0.15s;
      font-family: 'Inter', sans-serif;
    }
    .btn-primary:hover { background: #005a45; transform: translateY(-1px); }

    .btn-secondary {
      display: inline-block; padding: 13px 28px;
      background: transparent; color: #007b5e;
      border: 2px solid #007b5e; border-radius: 6px;
      font-weight: 600; font-size: 0.95rem;
      text-decoration: none; transition: all 0.2s;
      font-family: 'Inter', sans-serif;
    }
    .btn-secondary:hover { background: #007b5e; color: #fff; transform: translateY(-1px); }

    .btn-ghost {
      display: inline-block; padding: 13px 28px;
      background: rgba(255,255,255,0.1); color: #fff;
      border: 1px solid rgba(255,255,255,0.4); border-radius: 6px;
      font-weight: 600; font-size: 0.95rem;
      text-decoration: none; transition: all 0.2s;
      font-family: 'Inter', sans-serif;
    }
    .btn-ghost:hover { background: rgba(255,255,255,0.2); }

    .btn-text-link {
      display: inline-flex; align-items: center; gap: 6px;
      color: #007b5e; font-weight: 600; font-size: 0.95rem;
      text-decoration: none; border-bottom: 1px solid transparent;
      transition: border-color 0.2s;
    }
    .btn-text-link:hover { border-color: #007b5e; }

    .btn-large {
      display: inline-block; padding: 15px 36px;
      background: #007b5e; color: #fff;
      border-radius: 6px; font-weight: 700; font-size: 1rem;
      text-decoration: none; transition: background 0.2s, transform 0.15s;
      font-family: 'Inter', sans-serif;
    }
    .btn-large:hover { background: #005a45; transform: translateY(-1px); }

    /* ============================================================
       HERO SECTION  — signature: giant ZnO periodic element card
    ============================================================ */
    .hero-section {
      position: relative;
      min-height: 100vh;
      background: #0d1f19;
      display: flex;
      align-items: center;
      overflow: hidden;
      padding: 120px 24px 80px;
    }

    /* Layered gradient mesh for depth */
    .hero-section::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 70% 60% at 70% 50%, rgba(0,123,94,0.22) 0%, transparent 70%),
        radial-gradient(ellipse 50% 80% at 10% 80%, rgba(0,90,69,0.18) 0%, transparent 60%);
      pointer-events: none;
    }

    /* ── SIGNATURE ELEMENT: periodic-table ZnO card ── */
    .hero-molecule {
      position: absolute;
      right: -2%;
      top: 50%;
      transform: translateY(-50%);
      font-family: 'Sora', sans-serif;
      font-size: clamp(220px, 28vw, 420px);
      font-weight: 800;
      color: rgba(255,255,255,0.035);
      line-height: 1;
      letter-spacing: -0.02em;
      pointer-events: none;
      user-select: none;
      white-space: nowrap;
    }
    /* Periodic-table label decoration above and below ZnO */
    .hero-molecule::before {
      content: '30';
      display: block;
      font-size: 0.12em;
      font-weight: 400;
      letter-spacing: 0.1em;
      color: rgba(255,255,255,0.06);
      text-align: center;
      margin-bottom: -0.15em;
    }
    .hero-molecule::after {
      content: 'Zinc Oxide';
      display: block;
      font-size: 0.085em;
      font-weight: 400;
      letter-spacing: 0.14em;
      color: rgba(255,255,255,0.05);
      text-align: center;
      margin-top: -0.25em;
      text-transform: uppercase;
    }

    .hero-inner {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: minmax(0, 1.2fr) minmax(320px, 0.8fr);
      grid-template-areas:
        "copy visual"
        "details visual";
      align-items: center;
      column-gap: clamp(40px, 6vw, 96px);
    }

    .hero-copy { grid-area: copy; max-width: 720px; }
    .hero-details { grid-area: details; max-width: 720px; }

    .hero-product-visual {
      grid-area: visual;
      position: relative;
      width: min(100%, 460px);
      margin-left: auto;
      isolation: isolate;
      margin-bottom: 10pc;
    }
    .hero-product-visual::before {
      content: '';
      position: absolute;
      z-index: -1;
      inset: 8% -8% -5% 8%;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(74,222,158,0.2) 0%, rgba(0,123,94,0.08) 48%, transparent 72%);
      filter: blur(10px);
    }
    .hero-product-visual img {
      display: block;
      width: 100%;
      height: auto;
      max-height: min(68vh, 680px);
      object-fit: contain;
      border-radius: 20px;
      border: 1px solid rgba(255,255,255,0.13);
      box-shadow: 0 28px 70px rgba(0,0,0,0.38);
    }

    .hero-eyebrow {
      display: inline-flex; align-items: center; gap: 8px;
      font-size: 0.8rem; font-weight: 600; letter-spacing: 0.1em;
      text-transform: uppercase; color: #4ade9e;
      margin-bottom: 1.4rem; line-height: 1;
    }
    .hero-eyebrow::before {
      content: '';
      display: block; width: 28px; height: 2px;
      background: #4ade9e; border-radius: 2px;
    }

    .hero-section h1 {
      color: #fff;
      margin-bottom: 1.25rem;
    }
    .hero-section h1 em {
      font-style: normal;
      color: #4ade9e;
    }

    .hero-tagline {
      color: rgba(255,255,255,0.72);
      font-size: clamp(1rem, 1.6vw, 1.15rem);
      max-width: 580px;
      margin-bottom: 2.2rem;
      line-height: 1.75;
    }

    .hero-ctas {
      display: flex; flex-wrap: wrap; gap: 14px;
      margin-bottom: 2.8rem;
    }

    .hero-stats {
      display: flex; flex-wrap: wrap; gap: 0;
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 1.8rem;
      margin-top: 0;
    }
    .hero-stat {
      padding: 0 32px 0 0;
      border-right: 1px solid rgba(255,255,255,0.1);
      margin-right: 32px;
    }
    .hero-stat:last-child { border-right: none; margin-right: 0; }
    .hero-stat-value {
      display: block;
      font-family: 'Sora', sans-serif;
      font-size: 1.8rem; font-weight: 800;
      color: #fff; line-height: 1;
      margin-bottom: 2px;
    }
    .hero-stat-label {
      font-size: 0.78rem; color: rgba(255,255,255,0.5);
      font-weight: 500; letter-spacing: 0.04em;
    }

    /* ============================================================
       TRUST BAR
    ============================================================ */
    .trust-bar {
      background: #fff;
      border-top: 3px solid #007b5e;
      border-bottom: 1px solid #e2e8e0;
      padding: 0;
    }
    .trust-bar-inner {
      display: flex; align-items: stretch;
      max-width: 1200px; margin: 0 auto;
    }
    .trust-item {
      flex: 1;
      display: flex; align-items: center; gap: 14px;
      padding: 20px 24px;
      border-right: 1px solid #e2e8e0;
    }
    .trust-item:last-child { border-right: none; }
    .trust-icon {
      font-size: 1.5rem; flex-shrink: 0;
    }
    .trust-icon svg,
    .industry-icon svg,
    .why-icon svg {
      display: block;
      width: 1em;
      height: 1em;
      fill: currentColor;
    }
    .trust-item-text strong {
      display: block;
      font-family: 'Sora', sans-serif;
      font-size: 1.05rem; font-weight: 700;
      color: #007b5e; line-height: 1.2;
    }
    .trust-item-text span {
      font-size: 0.8rem; color: #6b7280; font-weight: 500;
    }

    /* ============================================================
       ABOUT SECTION
    ============================================================ */
    .about-section {
      padding: 90px 24px;
      background: #fafafa;
    }
    .about-section,
    .products-section,
    .industries-section,
    .why-section,
    .faq-section {
      content-visibility: auto;
      contain-intrinsic-size: 900px;
    }
    .about-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 70px;
      align-items: center;
    }
    .about-text h2 { color: #1a1a1a; margin-bottom: 1.25rem; }
    .about-text p { margin-bottom: 1.1rem; font-size: 1.03rem; }
    .about-text p:last-of-type { margin-bottom: 1.8rem; }
    .about-ceo-img {
      width: 100%; border-radius: 10px;
      display: block;
      box-shadow: 0 8px 40px rgba(0,0,0,0.13);
      object-fit: cover; aspect-ratio: 4/5;
    }
    .about-ceo-label {
      margin-top: 14px;
      text-align: center;
    }
    .about-ceo-label strong {
      display: block;
      font-family: 'Sora', sans-serif;
      font-size: 1rem; color: #1a1a1a;
    }
    .about-ceo-label span {
      font-size: 0.82rem; color: #6b7280;
    }

    /* ============================================================
       PRODUCTS SECTION
    ============================================================ */
    .products-section {
      padding: 90px 24px;
      background: #f0f2f0;
    }
    .products-section .section-header { margin-bottom: 2.5rem; }

    /* Featured product (Zinc Oxide) */
    .featured-product {
      max-width: 1200px; margin: 0 auto 3.5rem;
      display: grid;
      grid-template-columns: 420px 1fr;
      gap: 60px;
      align-items: center;
      background: #fff;
      border-radius: 14px;
      padding: 48px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.06);
      border: 1px solid #e2e8e0;
      position: relative;
      overflow: hidden;
    }
    .featured-product::before {
      content: '';
      position: absolute; top: 0; left: 0;
      width: 4px; height: 100%;
      background: #007b5e;
    }

    .featured-product-img { position: relative; }
    .featured-product-img img {
      width: 100%; border-radius: 10px;
      display: block; object-fit: cover;
      aspect-ratio: 4/3;
      box-shadow: 0 4px 20px rgba(0,0,0,0.09);
    }
    .flagship-badge {
      position: absolute; top: 14px; left: 14px;
      background: #c8922a; color: #fff;
      font-size: 0.72rem; font-weight: 700;
      letter-spacing: 0.08em; text-transform: uppercase;
      padding: 5px 12px; border-radius: 4px;
    }

    .featured-product-info .eyebrow { color: #c8922a; }
    .featured-product-info h3 {
      font-size: clamp(1.35rem, 2.5vw, 1.75rem);
      color: #1a1a1a; margin-bottom: 0.9rem;
    }
    .featured-product-info > p { margin-bottom: 1.25rem; font-size: 0.98rem; }

    .feature-list {
      list-style: none; margin: 0 0 1.8rem;
      display: grid; grid-template-columns: 1fr 1fr; gap: 8px 16px;
    }
    .feature-list li {
      font-size: 0.88rem; color: #374151; font-weight: 500;
      display: flex; align-items: center; gap: 8px;
    }
    .feature-list li::before {
      content: ''; flex-shrink: 0;
      width: 6px; height: 6px; border-radius: 50%;
      background: #007b5e;
    }

    /* Secondary products grid */
    .products-grid {
      max-width: 1200px; margin: 0 auto 2.5rem;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .product-card {
      background: #fff; border-radius: 12px;
      overflow: hidden;
      border: 1px solid #e2e8e0;
      box-shadow: 0 2px 12px rgba(0,0,0,0.05);
      transition: box-shadow 0.25s, transform 0.2s;
      display: flex; flex-direction: column;
    }
    .product-card:hover {
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      transform: translateY(-3px);
    }
    .product-card img {
      width: 100%; aspect-ratio: 16/9; object-fit: cover;
      display: block;
    }
    .product-card-info {
      padding: 22px 24px 24px;
      flex: 1; display: flex; flex-direction: column;
    }
    .product-badge {
      display: inline-block; margin-bottom: 8px;
      background: rgba(200,146,42,0.12); color: #9a6b12;
      font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em;
      text-transform: uppercase; padding: 3px 10px; border-radius: 4px;
    }
    .product-card-info h3 { color: #1a1a1a; margin-bottom: 0.6rem; }
    .product-card-info p { font-size: 0.9rem; flex: 1; margin-bottom: 1.1rem; }
    .product-card-info a {
      color: #007b5e; font-weight: 600; font-size: 0.88rem;
      text-decoration: none;
      display: inline-flex; align-items: center; gap: 4px;
      border-bottom: 1px solid transparent; width: fit-content;
      transition: border-color 0.2s;
    }
    .product-card-info a:hover { border-color: #007b5e; }

    .products-section .text-center { margin-top: 1rem; }

    /* ============================================================
       INDUSTRIES SECTION
    ============================================================ */
    .industries-section {
      padding: 90px 24px;
      background: #fff;
    }
    .industries-grid {
      max-width: 1100px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      list-style: none;
    }
    .industries-grid li {
      background: #f0f2f0;
      border: 1px solid #e2e8e0;
      border-radius: 10px;
      padding: 22px 20px;
      font-family: 'Sora', sans-serif;
      font-size: 0.93rem; font-weight: 600;
      color: #1a1a1a;
      display: flex; align-items: center; gap: 12px;
      transition: background 0.2s, border-color 0.2s, color 0.2s;
    }
    .industries-grid li:hover {
      background: #007b5e;
      border-color: #007b5e;
      color: #fff;
    }
    .industry-icon {
      width: 1.35rem;
      height: 1.35rem;
      flex-shrink: 0;
      color: #007b5e;
    }
    .industries-grid li:hover .industry-icon { color: #fff; }

    /* ============================================================
       WHY CHOOSE US
    ============================================================ */
    .why-section {
      padding: 90px 24px;
      background: #0d1f19;
    }
    .why-section .section-header .eyebrow { color: #4ade9e; }
    .why-section .section-header h2 { color: #fff; }
    .why-section .section-desc { color: rgba(255,255,255,0.65); }

    .why-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }
    .why-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 12px;
      padding: 32px 26px;
      transition: background 0.2s, border-color 0.2s;
    }
    .why-card:hover {
      background: rgba(0,123,94,0.18);
      border-color: rgba(0,123,94,0.4);
    }
    .why-icon {
      font-size: 2rem; margin-bottom: 1rem;
      color: #4ade9e;
    }
    .why-card h3 { color: #fff; margin-bottom: 0.7rem; font-size: 1.05rem; }
    .why-card p { color: rgba(255,255,255,0.65); font-size: 0.92rem; }

    /* ============================================================
       FAQ SECTION
    ============================================================ */
    .faq-section {
      padding: 90px 24px;
      background: #fafafa;
    }
    .faq-list {
      max-width: 820px; margin: 0 auto;
    }
    .faq-item {
      border: 1px solid #e2e8e0;
      border-radius: 10px;
      margin-bottom: 12px;
      background: #fff;
      overflow: hidden;
    }
    .faq-q {
      width: 100%; background: none; border: none;
      display: flex; justify-content: space-between; align-items: center;
      gap: 16px;
      padding: 20px 24px;
      text-align: left; cursor: pointer;
      font-family: 'Sora', sans-serif;
      font-size: 1rem; font-weight: 600;
      color: #1a1a1a;
      transition: background 0.15s;
    }
    .faq-q:hover { background: #f0f2f0; }
    .faq-q[aria-expanded="true"] { background: #f0f2f0; color: #007b5e; }
    .faq-chevron {
      flex-shrink: 0;
      width: 22px; height: 22px;
      border: 2px solid #007b5e;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      color: #007b5e; font-size: 0.9rem;
      transition: transform 0.25s;
    }
    .faq-q[aria-expanded="true"] .faq-chevron { transform: rotate(180deg); }
    .faq-a {
      padding: 0 24px;
      max-height: 0; overflow: hidden;
      transition: max-height 0.35s ease, padding 0.25s;
    }
    .faq-a.open {
      max-height: 400px;
      padding: 0 24px 20px;
    }
    .faq-a p { font-size: 0.95rem; color: #4a5568; line-height: 1.75; }
    .faq-a a { color: #007b5e; text-decoration: underline; }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1024px) {
      .hero-inner {
        grid-template-columns: minmax(0, 1.25fr) minmax(280px, 0.75fr);
        column-gap: 36px;
      }
      .hero-product-visual { width: min(100%, 380px); }
      .about-grid { grid-template-columns: 1fr; }
      .about-ceo-img { max-width: 320px; margin-inline: auto; aspect-ratio: auto; }
      .featured-product { grid-template-columns: 1fr; gap: 32px; }
      .products-grid { grid-template-columns: 1fr 1fr; }
      .why-grid { grid-template-columns: 1fr 1fr; }
      .industries-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 768px) {
      h1 { font-size: 2rem; }
      .hero-section {
        min-height: auto;
        padding: 112px 20px 64px;
      }
      .hero-inner {
        grid-template-columns: minmax(0, 1fr);
        grid-template-areas:
          "copy"
          "visual"
          "details";
        row-gap: 28px;
      }
      .hero-copy,
      .hero-details { width: 100%; max-width: none; }
      .hero-tagline { margin-bottom: 0; }
      .hero-product-visual {
        width: min(76vw, 340px);
        margin: 0 auto;
      }
      .hero-product-visual img {
        max-height: none;
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.32);
      }
      .hero-molecule { font-size: 160px; right: -15%; }
      .hero-eyebrow { flex-wrap: wrap; line-height: 1.45; }
      .hero-section h1 em { display: block; }
      .trust-bar-inner { flex-direction: column; }
      .trust-item { border-right: none; border-bottom: 1px solid #e2e8e0; }
      .trust-item:last-child { border-bottom: none; }
      .about-grid { gap: 40px; }
      .about-visual { order: -1; text-align: center; }
      .products-grid { grid-template-columns: 1fr; }
      .why-grid { grid-template-columns: 1fr; }
      .industries-grid { grid-template-columns: 1fr 1fr; }
      .hero-stats {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px 18px;
      }
      .hero-stat { border-right: none; padding-right: 0; margin-right: 0; }
      .featured-product { padding: 28px 22px; }
      .feature-list { grid-template-columns: 1fr; }
      .hero-ctas { flex-direction: column; }
      .hero-ctas a { text-align: center; }
      .hero-ctas { margin-bottom: 2.2rem; }
    }
    @media (max-width: 480px) {
      .hero-section h1 { font-size: 1.9rem; }
      .hero-section { padding: 104px 16px 52px; }
      .hero-product-visual { width: min(82vw, 300px); }
      .industries-grid { grid-template-columns: 1fr; }
      .hero-molecule { display: none; }
    }

    /* Scroll animations */
    .reveal { opacity: 1; transform: none; }
    .js .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .js .reveal.visible { opacity: 1; transform: none; }

    @media (prefers-reduced-motion: reduce) {
      .js .reveal { opacity: 1; transform: none; transition: none; }
    }
    </style>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">
<?php include __DIR__ . '/includes/whatsapp-widget.php'; ?>

<!-- ════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════ -->
<section class="hero-section" aria-label="Bhatti Chemicals Industry — Zinc Oxide Manufacturer">
  <div class="hero-molecule" aria-hidden="true">ZnO</div>

  <div class="hero-inner">
    <div class="hero-copy">
      <p class="hero-eyebrow">ISO 9001:2015 Certified &nbsp;·&nbsp; Gujranwala, Pakistan</p>

      <h1>Pakistan's Trusted<br><em>Zinc Oxide</em> Manufacturer<br>& Zinc Ash Exporter</h1>

      <p class="hero-tagline">
        Bhatti Chemicals Industry produces high-purity Zinc Oxide (99.9%) and supplies Zinc Ash, Zinc Ingot, and Zinc Dross to manufacturers, processors, and distributors across Pakistan and 15+ countries worldwide.
      </p>
    </div>

    <figure class="hero-product-visual">
      <img src="<?php echo site_url('/assets/images/products/hero-zinc-oxide-bag.webp'); ?>"
           alt="25 kg bag of 99.9% Zinc Oxide manufactured by Bhatti Chemicals Industry in Pakistan"
           width="720" height="1080" fetchpriority="high" decoding="async">
    </figure>

    <div class="hero-details">
      <div class="hero-ctas">
        <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-primary">Explore Zinc Oxide</a>
        <a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="btn-secondary" style="color:#4ade9e;border-color:#4ade9e;">Zinc Ash Export</a>
        <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-ghost">Request a Quote</a>
      </div>

      <div class="hero-stats">
        <div class="hero-stat">
          <span class="hero-stat-value">99.9%</span>
          <span class="hero-stat-label">ZnO Purity</span>
        </div>
        <div class="hero-stat">
          <span class="hero-stat-value">50+</span>
          <span class="hero-stat-label">Years in Zinc</span>
        </div>
        <div class="hero-stat">
          <span class="hero-stat-value">15+</span>
          <span class="hero-stat-label">Export Countries</span>
        </div>
        <div class="hero-stat">
          <span class="hero-stat-value">ISO</span>
          <span class="hero-stat-label">9001:2015 Certified</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TRUST BAR
════════════════════════════════════════════════ -->
<div class="trust-bar" role="list" aria-label="Key company credentials">
  <div class="trust-bar-inner">
    <div class="trust-item" role="listitem">
      <div class="trust-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 2.5 4.5 5.7v5.9c0 4.7 3.2 8.4 7.5 9.9 4.3-1.5 7.5-5.2 7.5-9.9V5.7L12 2.5Zm0 2.2 5.5 2.4v4.5c0 3.4-2.1 6.2-5.5 7.8-3.4-1.6-5.5-4.4-5.5-7.8V7.1L12 4.7Zm3.6 5.1-4.5 4.5-2.2-2.2-1.4 1.4 3.6 3.6L17 11.2l-1.4-1.4Z"/></svg>
      </div>
      <div class="trust-item-text">
        <strong>ISO 9001:2015</strong>
        <span>Quality Management Certified</span>
      </div>
    </div>
    <div class="trust-item" role="listitem">
      <div class="trust-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M3 21V9l6 3V9l6 3V6h4v15H3Zm2-2h12V8h-1v7.2l-6-3V15l-6-3v7Zm2-2h2v-2H7v2Zm4 0h2v-2h-2v2Zm4 0h2v-2h-2v2Z"/></svg>
      </div>
      <div class="trust-item-text">
        <strong>30+ Years</strong>
        <span>Manufacturing Experience</span>
      </div>
    </div>
    <div class="trust-item" role="listitem">
      <div class="trust-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v4.5l5 8.7A3.2 3.2 0 0 1 16.2 22H7.8A3.2 3.2 0 0 1 5 17.2l5-8.7V4H9V2Zm3 7.1-5.3 9.1A1.2 1.2 0 0 0 7.8 20h8.4a1.2 1.2 0 0 0 1.1-1.8L12 9.1ZM8.9 16h6.2l1.1 2H7.8l1.1-2Z"/></svg>
      </div>
      <div class="trust-item-text">
        <strong>99.9% Purity</strong>
        <span>Zinc Oxide, Every Batch</span>
      </div>
    </div>
    <div class="trust-item" role="listitem">
      <div class="trust-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm6.9 9h-3.1a15 15 0 0 0-1-5A8.1 8.1 0 0 1 18.9 11ZM12 4.1c.7 1 1.5 3.1 1.8 6.9h-3.6c.3-3.8 1.1-5.9 1.8-6.9ZM4.3 13h3.9c.1 1.5.3 2.8.6 3.9A8 8 0 0 1 4.3 13Zm3.9-2H4.3a8 8 0 0 1 4.5-3.9A17 17 0 0 0 8.2 11Zm3.8 8.9c-.7-1-1.5-3.1-1.8-6.9h3.6c-.3 3.8-1.1 5.9-1.8 6.9Zm3.2-3c.3-1.1.5-2.4.6-3.9h3.9a8 8 0 0 1-4.5 3.9Z"/></svg>
      </div>
      <div class="trust-item-text">
        <strong>International Export</strong>
        <span>15+ Countries Served</span>
      </div>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════
     ABOUT
════════════════════════════════════════════════ -->
<section class="about-section" id="about">
  <div class="about-grid">
    <div class="about-text reveal">
      <p class="eyebrow">Who We Are</p>
      <h2>A Zinc Manufacturer Built on Decades of Industrial Expertise</h2>
      <p>
        Bhatti Chemicals Industry is a leading manufacturer of Zinc Oxide and a trusted exporter of Zinc Ash, headquartered in Gujranwala, Pakistan. For over 50 years, the company has served domestic and international industrial buyers with consistent product quality, reliable supply, and responsive technical support.
      </p>
      <p>
        Under the leadership of CEO M. Ashraf Bhatti, we have expanded our operations across three continents and built a reputation as a dependable zinc products partner for rubber processors, ceramics manufacturers, pharmaceutical companies, paint producers, and agricultural suppliers worldwide.
      </p>
      <a href="<?php echo site_url('/about.php'); ?>" class="btn-text-link">Our full company story →</a>
    </div>
    <div class="about-visual reveal">
      <img src="<?php echo site_url('/assets/images/team/ceo-ashraf-bhatti.jpeg'); ?>"
           alt="M. Ashraf Bhatti, CEO of Bhatti Chemicals Industry, Gujranwala Pakistan"
           class="about-ceo-img" loading="lazy">
      <div class="about-ceo-label">
        <strong>M. Ashraf Bhatti</strong>
        <span>Chief Executive Officer</span>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     PRODUCTS
════════════════════════════════════════════════ -->
<section class="products-section" id="products">
  <div class="section-header reveal">
    <p class="eyebrow">Our Products</p>
    <h2>Zinc Products for Global Industrial Supply</h2>
    <p class="section-desc">
      From our flagship manufactured Zinc Oxide to our exported Zinc Ash and other zinc materials — every product is quality-tested and available for domestic and international orders.
    </p>
  </div>

  <!-- Zinc Oxide — flagship -->
  <article class="featured-product reveal" itemscope itemtype="https://schema.org/Product">
    <div class="featured-product-img">
      <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance.webp'); ?>"
           alt="High-purity Zinc Oxide white powder manufactured by Bhatti Chemicals Industry"
           loading="lazy" itemprop="image">
      <span class="flagship-badge">Flagship Product</span>
    </div>
    <div class="featured-product-info">
      <p class="eyebrow">Manufactured In-House · Gujranwala, Pakistan</p>
      <h3 itemprop="name">Zinc Oxide (ZnO) — 99.9% Purity</h3>
      <p itemprop="description">
        Our primary manufactured product. Bhatti Chemicals Industry produces high-purity Zinc Oxide through a controlled roasting and oxidation process. The result is a fine white powder that meets the demanding quality requirements of rubber vulcanization, ceramics glazing, pharmaceutical formulations, and beyond.
      </p>
      <ul class="feature-list">
        <li>Purity: 99.9%</li>
        <li>Appearance: Fine white powder</li>
        <li>Pack size: 25 kg bags</li>
        <li>MOQ: 25 kg</li>
        <li>ISO 9001:2015 certified</li>
        <li>Third-party lab tested</li>
      </ul>
      <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-primary">Full Specifications & Applications →</a>
    </div>
  </article>

  <!-- Secondary products -->
  <div class="products-grid">
    <article class="product-card reveal" itemscope itemtype="https://schema.org/Product">
      <img src="<?php echo site_url('/assets/images/products/zinc-ash-fine.jpg'); ?>"
           alt="Zinc Ash Fine 65-70% exported by Bhatti Chemicals Industry"
           loading="lazy" itemprop="image">
      <div class="product-card-info">
        <span class="product-badge">Export Product</span>
        <h3 itemprop="name">Zinc Ash Fine (65–70%)</h3>
        <p itemprop="description">A high-value zinc recovery material with 65–70% metallic zinc content. Consistent analysis, low moisture, supplied in 25–50 kg bags for international export.</p>
        <a href="<?php echo site_url('/products/zinc-ash.php'); ?>">View Specifications →</a>
      </div>
    </article>
    <article class="product-card reveal" itemscope itemtype="https://schema.org/Product">
      <img src="<?php echo site_url('/assets/images/products/zinc-ingot.png'); ?>"
           alt="Zinc Ingot by Bhatti Chemicals Industry"
           loading="lazy" itemprop="image">
      <div class="product-card-info">
        <h3 itemprop="name">Zinc Ingot</h3>
        <p itemprop="description">Industrial-grade zinc ingots for galvanizing, die casting, alloy production, and further zinc processing applications.</p>
        <a href="<?php echo site_url('/products/zinc-ingot.php'); ?>">View Product →</a>
      </div>
    </article>
    <article class="product-card reveal" itemscope itemtype="https://schema.org/Product">
      <img src="<?php echo site_url('/assets/images/products/zinc-dross.jpg'); ?>"
           alt="Zinc Dross by Bhatti Chemicals Industry"
           loading="lazy" itemprop="image">
      <div class="product-card-info">
        <h3 itemprop="name">Zinc Dross</h3>
        <p itemprop="description">Consistent-grade zinc dross from our Gujranwala facility, suitable for recycling, refining, and zinc recovery workflows.</p>
        <a href="<?php echo site_url('/products/zinc-dross.php'); ?>">View Product →</a>
      </div>
    </article>
  </div>

  <div class="text-center reveal">
    <a href="<?php echo site_url('/products/'); ?>" class="btn-large">View All Zinc Products →</a>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INDUSTRIES
════════════════════════════════════════════════ -->
<section class="industries-section">
  <div class="section-header reveal">
    <p class="eyebrow">Industries Served</p>
    <h2>Zinc Oxide Applications Across Key Sectors</h2>
    <p class="section-desc">Our Zinc Oxide is used as a critical input material in eight major industrial categories, each with distinct quality requirements that our 99.9% purity product meets consistently.</p>
  </div>
  <ul class="industries-grid" role="list">
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7 17h10v2H7v-2Zm-3-4h2.2l1-4H20l1.4 4H23v5h-2a3 3 0 0 1-6 0H9a3 3 0 0 1-6 0H1v-3a2 2 0 0 1 2-2h1Zm5-2-.5 2h10.8l-.7-2H9Zm-3 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm12 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg></span> Rubber &amp; Tyres</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 3a9 9 0 0 0 0 18h1.4a2.6 2.6 0 0 0 0-5.2H12a1.2 1.2 0 0 1 0-2.4h2a7 7 0 0 0 0-10.4H12Zm-3 7a1.4 1.4 0 1 1 0-2.8A1.4 1.4 0 0 1 9 10Zm4-1.5a1.4 1.4 0 1 1 2.8 0 1.4 1.4 0 0 1-2.8 0ZM7.5 15a1.4 1.4 0 1 1 0-2.8 1.4 1.4 0 0 1 0 2.8Z"/></svg></span> Paints &amp; Coatings</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M8 2h8v5.5l3.3 5.7A5.8 5.8 0 0 1 14.3 22H9.7a5.8 5.8 0 0 1-5-8.8L8 7.5V2Zm2 2v4.1l-3.6 6.1A3.8 3.8 0 0 0 9.7 20h4.6a3.8 3.8 0 0 0 3.3-5.8L14 8.1V4h-4Zm-1 11h6l1.2 2H7.8L9 15Z"/></svg></span> Ceramics &amp; Glass</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.4 3.4a4.8 4.8 0 0 1 6.8 6.8l-4 4a4.8 4.8 0 0 1-6.8-6.8l4-4Zm1.4 1.4-4 4a2.8 2.8 0 0 0 4 4l1.3-1.3-4-4 2.7-2.7Zm5.4 5 4.4 4.4a4 4 0 0 1-5.6 5.6l-4.4-4.4 5.6-5.6Zm0 2.8-2.8 2.8 3 3a2 2 0 0 0 2.8-2.8l-3-3Z"/></svg></span> Pharmaceuticals</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20.5 3.5C13.5 4 8.8 7.2 7.1 12.6A8.3 8.3 0 0 0 3 20.5l2 .1c.2-2.2 1.1-4.2 2.6-5.8 2.3 2.3 6.4 2.3 9.3-.5 2.4-2.4 3.3-6.1 3.6-10.8Zm-2.3 2.3c-.4 3.3-1.2 5.5-2.7 7-1.9 1.9-4.5 2.1-6 .6 1.8-1.6 4.1-2.7 6.8-3.3l-.4-2c-2.4.5-4.6 1.4-6.4 2.7 1.7-2.7 4.5-4.3 8.7-5Z"/></svg></span> Cosmetics &amp; Skincare</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 22V12.8C8.5 12.2 6 9.4 6 6V3h2v3a4 4 0 0 0 3 3.9V2h2v7.9A4 4 0 0 0 16 6V3h2v3c0 3.4-2.5 6.2-6 6.8V22h-2Z"/></svg></span> Agriculture &amp; Fertilizers</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M5 10a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v4h2v2h-2v3h-2v-3H7v3H5v-3H3v-2h2v-4Zm2 0v4h10v-4a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm3-1h2v2h-2V9Zm4 0h2v2h-2V9Z"/></svg></span> Animal Feed</li>
    <li class="reveal" role="listitem"><span class="industry-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7 4h9a2 2 0 0 1 2 2v2h2v4h-2v6a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm0 2v12h9V6H7Zm5 1-3 5h2l-1 5 4-6h-2l2-4h-2Z"/></svg></span> Battery Manufacturing</li>
  </ul>
</section>

<!-- ════════════════════════════════════════════════
     WHY CHOOSE US
════════════════════════════════════════════════ -->
<section class="why-section">
  <div class="section-header">
    <p class="eyebrow">Why Bhatti Chemicals</p>
    <h2>What Makes Us a Reliable Supply Partner</h2>
  </div>
  <div class="why-grid">
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v4.5l5 8.7A3.2 3.2 0 0 1 16.2 22H7.8A3.2 3.2 0 0 1 5 17.2l5-8.7V4H9V2Zm3 7.1-5.3 9.1A1.2 1.2 0 0 0 7.8 20h8.4a1.2 1.2 0 0 0 1.1-1.8L12 9.1ZM8.9 16h6.2l1.1 2H7.8l1.1-2Z"/></svg></div>
      <h3>Consistent Product Quality</h3>
      <p>Every batch of Zinc Oxide is tested for purity, moisture, and physical properties before dispatch. ISO 9001:2015 certified processes ensure batch-to-batch consistency across all orders.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 2 9 4.5v11L12 22l-9-4.5v-11L12 2Zm0 2.2L6.2 7.1 12 10l5.8-2.9L12 4.2ZM5 8.7v7.6l6 3v-7.6l-6-3Zm8 10.6 6-3V8.7l-6 3v7.6Z"/></svg></div>
      <h3>Reliable Supply Chain</h3>
      <p>With more than 50 years in zinc manufacturing, we maintain stable production capacity and fulfil both domestic and international orders on consistent schedules.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm6.9 9h-3.1a15 15 0 0 0-1-5A8.1 8.1 0 0 1 18.9 11ZM12 4.1c.7 1 1.5 3.1 1.8 6.9h-3.6c.3-3.8 1.1-5.9 1.8-6.9ZM4.3 13h3.9c.1 1.5.3 2.8.6 3.9A8 8 0 0 1 4.3 13Zm3.9-2H4.3a8 8 0 0 1 4.5-3.9A17 17 0 0 0 8.2 11Zm3.8 8.9c-.7-1-1.5-3.1-1.8-6.9h3.6c-.3 3.8-1.1 5.9-1.8 6.9Zm3.2-3c.3-1.1.5-2.4.6-3.9h3.9a8 8 0 0 1-4.5 3.9Z"/></svg></div>
      <h3>International Export Experience</h3>
      <p>We export Zinc Ash and other zinc products to buyers across 15+ countries, providing complete export documentation, proper packaging, and logistics coordination.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M22 19.6 19.6 22l-5.8-5.8 2.4-2.4 5.8 5.8ZM14.7 4.2l2.1 2.1-3.3 3.3 1.9 1.9-2.1 2.1-1.9-1.9-5.6 5.6H3v-2.8l5.6-5.6-2-2L8.7 4.8l2 2 4-2.6Z"/></svg></div>
      <h3>Technical Support</h3>
      <p>Our team provides product guidance and consultation for industrial buyers integrating zinc materials into manufacturing processes, helping ensure correct application and performance.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════ -->
<section class="faq-section" id="faq">
  <div class="section-header reveal">
    <p class="eyebrow">Common Questions</p>
    <h2>Frequently Asked Questions</h2>
    <p class="section-desc">Answers to the most common questions from procurement managers, distributors, and industrial buyers about our products, quality, and export services.</p>
  </div>

  <div class="faq-list" role="list">
    <div class="faq-item reveal" role="listitem">
      <button class="faq-q" aria-expanded="false">
        What products does Bhatti Chemicals Industry manufacture?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Bhatti Chemicals Industry manufactures <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>">Zinc Oxide (ZnO)</a> as its flagship product. We also supply <a href="<?php echo site_url('/products/zinc-ash.php'); ?>">Zinc Ash Fine (65–70%)</a>, Zinc Ingot, Zinc Dross, Zinc Dust (APCD), and Zinc Alloy. Zinc Oxide is our primary manufactured product; Zinc Ash is our primary export product.</p>
      </div>
    </div>
    <div class="faq-item reveal" role="listitem">
      <button class="faq-q" aria-expanded="false">
        What is the purity of your Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Our Zinc Oxide is produced at 99.9% purity and presented as a fine white powder, free from visible contaminants. It is packed in standard 25 kg bags with a minimum order quantity of 25 kg. Samples and full lab reports are available on request.</p>
      </div>
    </div>
    <div class="faq-item reveal" role="listitem">
      <button class="faq-q" aria-expanded="false">
        Are your products ISO 9001:2015 certified?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. Bhatti Chemicals Industry is ISO 9001:2015 certified. All products undergo regular third-party laboratory testing to verify purity, composition, and physical properties before shipment, ensuring compliance with international quality standards.</p>
      </div>
    </div>
    <div class="faq-item reveal" role="listitem">
      <button class="faq-q" aria-expanded="false">
        Do you export Zinc Ash internationally?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. Zinc Ash Fine (65–70%) is one of our primary export products. We supply international buyers with full export documentation, appropriate industrial packaging (25–50 kg bags, custom sizes available), and logistics coordination. Contact us with your destination country and required quantities for a quote.</p>
      </div>
    </div>
    <div class="faq-item reveal" role="listitem">
      <button class="faq-q" aria-expanded="false">
        Which industries use Zinc Oxide from Bhatti Chemicals?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Our Zinc Oxide is used by manufacturers in rubber and tyre production, paints and coatings, ceramics and glass, pharmaceuticals and ointments, cosmetics and sunscreens, animal feed, agricultural fertilizers, and battery manufacturing.</p>
      </div>
    </div>
    <div class="faq-item reveal" role="listitem">
      <button class="faq-q" aria-expanded="false">
        How do I request a quotation or product sample?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Contact us by email at <a href="mailto:info@bhattichemicalsindustry.com.pk">info@bhattichemicalsindustry.com.pk</a> or via WhatsApp at +92 304 1462460. Please mention the product name, required quantity, packaging preference, and your destination. We respond promptly to all trade inquiries.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CONTACT
════════════════════════════════════════════════ -->

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- ════════════════════════════════════════════════
     SCRIPTS
════════════════════════════════════════════════ -->
<script>
// Reveal on scroll
(function(){
  const els = document.querySelectorAll('.reveal');
  if (!('IntersectionObserver' in window)) {
    els.forEach(el => el.classList.add('visible'));
    return;
  }
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('visible'); io.unobserve(e.target); } });
  }, { threshold: 0.1 });
  els.forEach(el => io.observe(el));
})();

// FAQ accordion — accessible
(function(){
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', function(){
      const expanded = this.getAttribute('aria-expanded') === 'true';
      // Close all
      document.querySelectorAll('.faq-q').forEach(b => {
        b.setAttribute('aria-expanded','false');
        const a = b.nextElementSibling;
        a.classList.remove('open');
        a.hidden = true;
      });
      // Open this one if it was closed
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

<!-- Service Worker -->
<script>
(function () {
  if (!('serviceWorker' in navigator)) return;
  var isLocalhost = /^(localhost|127\.0\.0\.1)$/.test(location.hostname);

  function clearLocalServiceWorkers() {
    navigator.serviceWorker.getRegistrations()
      .then(function (registrations) {
        registrations.forEach(function (registration) {
          registration.unregister();
        });
      })
      .catch(function () {});

    if ('caches' in window) {
      caches.keys()
        .then(function (keys) {
          keys.forEach(function (key) {
            caches.delete(key);
          });
        })
        .catch(function () {});
    }
  }

  window.addEventListener('load', function () {
    if (isLocalhost) {
      clearLocalServiceWorkers();
      return;
    }

    navigator.serviceWorker.register('<?php echo site_url('/service-worker.js'); ?>')
      .catch(err => console.error('SW error:', err));
  });
})();
</script>

</body>
</html>
