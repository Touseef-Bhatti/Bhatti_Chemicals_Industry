<?php
if (!headers_sent() && extension_loaded('zlib') && !ini_get('zlib.output_compression')) {
    ob_start('ob_gzhandler');
}
define('BCI_HEADER_ASSETS_LOADED', true);
define('BCI_FOOTER_ASSETS_LOADED', true);
require_once __DIR__ . '/../includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>Zinc Oxide for Ceramics &amp; Glazes | Bhatti Chemicals</title>
    <meta name="description" content="Premium 99.9% Zinc Oxide for ceramic glazes, frits &amp; tiles. Lowers thermal expansion &amp; enhances gloss. Sourced direct from Pakistan factory.">
    <meta name="keywords" content="zinc oxide ceramics, zinc oxide glaze, ceramic frit flux, zinc oxide tiles Pakistan, sanitaryware zinc oxide, thermal expansion zinc oxide, zinc oxide Gujranwala">
    <link rel="canonical" href="https://www.bhattichemicalsindustry.com.pk/zinc-oxide-applications/ceramics-and-glass.php">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Bhatti Chemicals Industry">
    <meta property="og:title" content="Zinc Oxide (ZnO) for Ceramics, Glazes &amp; Glass | Bhatti Chemicals">
    <meta property="og:description" content="Technical guide to 99.9% pure Zinc Oxide in ceramic glazes, frits, porcelain tiles, sanitaryware, and specialty glass. Manufactured in Gujranwala, Pakistan.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=1200&q=80">
    <meta property="og:url" content="https://www.bhattichemicalsindustry.com.pk/zinc-oxide-applications/ceramics-and-glass.php">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zinc Oxide for Ceramics &amp; Glazes | Bhatti Chemicals">
    <meta name="twitter:description" content="Technical monograph on 99.9% Zinc Oxide in ceramic tiles, sanitaryware glazes, frits, and glass manufacturing in Pakistan.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=1200&q=80">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
    <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

    <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
    <link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>

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

    <!-- Structured Data: TechArticle Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TechArticle",
      "headline": "Industrial Applications of Zinc Oxide in Ceramics, Glazes & Glass Manufacturing",
      "description": "Comprehensive technical monograph exploring the fluxing behavior, thermal expansion moderation, frit synthesis, willemite crystallization, and glaze formulation of Zinc Oxide (ZnO).",
      "image": [
        "https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=1200&q=80"
      ],
      "author": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "url": "https://www.bhattichemicalsindustry.com.pk/"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.bhattichemicalsindustry.com.pk/assets/favicon/favicon.svg"
        }
      },
      "mainEntityOfPage": "https://www.bhattichemicalsindustry.com.pk/zinc-oxide-applications/ceramics-and-glass.php",
      "datePublished": "2026-03-01",
      "dateModified": "2026-09-19",
      "about": [
        {"@type": "Thing", "name": "Zinc Oxide"},
        {"@type": "Thing", "name": "Ceramic Glaze"},
        {"@type": "Thing", "name": "Ceramic Tile"},
        {"@type": "Thing", "name": "Frits"}
      ]
    }
    </script>

    <!-- Structured Data: Product Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Ceramic Grade Zinc Oxide (ZnO ≥ 99.9%)",
      "image": "https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=1200&q=80",
      "description": "High-purity 99.9% French Process Zinc Oxide manufactured by Bhatti Chemicals Industry in Gujranwala, Pakistan. Active ceramic flux for sanitaryware, floor tiles, tableware glazes, and frit production.",
      "brand": {
        "@type": "Brand",
        "name": "Bhatti Chemicals Industry"
      },
      "manufacturer": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Gujranwala",
          "addressRegion": "Punjab",
          "addressCountry": "PK"
        }
      },
      "category": "Ceramic Chemicals > Glaze Fluxes",
      "material": "Zinc Oxide (ZnO)",
      "offers": {
        "@type": "Offer",
        "url": "https://www.bhattichemicalsindustry.com.pk/contact-us.php",
        "availability": "https://schema.org/InStock",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "0.00",
          "priceCurrency": "PKR",
          "description": "Factory wholesale price per metric ton or 25 kg bag, FOB Gujranwala or CIF global ports."
        }
      }
    }
    </script>

    <!-- Structured Data: BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://www.bhattichemicalsindustry.com.pk/"},
        {"@type":"ListItem","position":2,"name":"Products","item":"https://www.bhattichemicalsindustry.com.pk/products/"},
        {"@type":"ListItem","position":3,"name":"Zinc Oxide","item":"https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php"},
        {"@type":"ListItem","position":4,"name":"Industrial Applications","item":"https://www.bhattichemicalsindustry.com.pk/zinc-oxide-applications/"},
        {"@type":"ListItem","position":5,"name":"Ceramics & Glazes","item":"https://www.bhattichemicalsindustry.com.pk/zinc-oxide-applications/ceramics-and-glass.php"}
      ]
    }
    </script>

    <!-- Structured Data: FAQPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the primary function of Zinc Oxide in ceramic glazes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Zinc Oxide acts as a versatile fluxing agent at high temperatures (above 1050°C), reducing glaze viscosity and promoting smooth melting. Crucially, it possesses one of the lowest coefficients of thermal expansion among ceramic fluxes, which prevents glaze crazing and micro-fissures during cooling."
          }
        },
        {
          "@type": "Question",
          "name": "How does Zinc Oxide affect glaze opacity, gloss, and matte finishes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "At low concentrations (1% to 4%), Zinc Oxide dissolves completely into the silica-alumina glass melt, producing a brilliant high-gloss finish. At higher concentrations (6% to 15%), it promotes the precipitation of micro-crystalline willemite (Zn2SiO4), yielding elegant zinc-matte and satin surfaces."
          }
        },
        {
          "@type": "Question",
          "name": "Why is high purity (≥ 99.9%) essential for ceramic grade Zinc Oxide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "High purity ensures minimal iron oxide (Fe2O3 ≤ 0.005%) and copper impurities. Heavy metal trace contaminants cause undesirable yellow or greenish staining in white sanitaryware and clear tableware glazes. Bhatti Chemicals French Process ZnO delivers pristine whiteness."
          }
        },
        {
          "@type": "Question",
          "name": "How does Zinc Oxide perform in specialty glass and enamels?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In glass melting, Zinc Oxide lowers liquidus temperatures, increases mechanical hardness, improves optical refractive index, and enhances chemical durability against water, acidic, and alkaline attack."
          }
        },
        {
          "@type": "Question",
          "name": "What packaging and delivery options are available for ceramic manufacturers in Pakistan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bhatti Chemicals delivers Zinc Oxide in standard 25 kg multi-wall moisture-proof paper bags with inner polyethylene liners. Bulk shipments and full container loads (FCL) are dispatched throughout Gujranwala, Gujrat, Lahore, and Karachi with certified batch Certificate of Analysis (COA)."
          }
        }
      ]
    }
    </script>

    <!-- Google Fonts & Embedded Styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; scroll-padding-top: 82px; }
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: #1a1a1a; background: #fafafa;
      overflow-x: hidden; line-height: 1.7;
      -webkit-font-smoothing: antialiased;
    }
    h1, h2, h3, h4, h5 { font-family: 'Sora', sans-serif; letter-spacing: -0.02em; line-height: 1.25; }
    h1 { font-size: clamp(2.2rem, 4.5vw, 3.4rem); font-weight: 800; color: #fff; }
    h2 { font-size: clamp(1.65rem, 3vw, 2.35rem); font-weight: 700; color: #0d1f19; margin: 1.8rem 0 1rem; }
    h3 { font-size: 1.3rem; font-weight: 700; color: #007b5e; margin: 1.4rem 0 0.6rem; }
    h4 { font-size: 1.1rem; font-weight: 600; color: #1a1a1a; margin: 1rem 0 0.4rem; }
    p  { line-height: 1.85; color: #374151; margin-bottom: 1.25rem; font-size: 1.02rem; }

    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .eyebrow {
      font-size: 0.78rem; font-weight: 800; letter-spacing: 0.14em;
      text-transform: uppercase; color: #007b5e; margin-bottom: 0.5rem; display: inline-block;
    }
    .pill-eyebrow {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 5px 14px; border-radius: 999px;
      font-size: 0.75rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
      background: rgba(0, 123, 94, 0.12); color: #4ade9e;
      border: 1px solid rgba(74, 222, 158, 0.3); margin-bottom: 1rem;
    }

    /* ── HERO ── */
    .page-hero {
      position: relative; background: #0d1f19; padding: 135px 24px 75px; overflow: hidden;
    }
    .page-hero::before {
      content: ''; position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 70% 65% at 85% 30%, rgba(0,123,94,0.38) 0%, transparent 65%),
        radial-gradient(ellipse 45% 55% at 5% 85%, rgba(0,90,69,0.22) 0%, transparent 60%);
    }
    .hero-watermark {
      position: absolute; right: 2%; top: 50%; transform: translateY(-50%);
      font-size: clamp(120px, 15vw, 260px); font-weight: 900;
      color: rgba(255,255,255,0.03); pointer-events: none; user-select: none;
      text-transform: uppercase; font-family: 'Sora', sans-serif;
    }
    .page-hero-inner { position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; }
    .breadcrumb {
      display: flex; flex-wrap: wrap; align-items: center; gap: 8px;
      margin-bottom: 1.4rem; font-size: 0.82rem; color: rgba(255,255,255,0.5);
    }
    .breadcrumb a { color: rgba(255,255,255,0.65); text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: #4ade9e; }
    .breadcrumb span { color: rgba(255,255,255,0.3); }

    .hero-tag-row { display: flex; flex-wrap: wrap; gap: 10px; margin: 1.2rem 0 1.6rem; }
    .hero-tag {
      background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18);
      color: #e2e8f0; font-size: 0.8rem; font-weight: 600; padding: 6px 14px;
      border-radius: 999px; backdrop-filter: blur(8px);
    }
    .hero-tag.highlight {
      background: rgba(0,123,94,0.3); border-color: rgba(74,222,158,0.45); color: #4ade9e;
    }
    .hero-desc {
      font-size: 1.12rem; line-height: 1.8; color: rgba(255,255,255,0.85);
      max-width: 860px; margin-bottom: 2rem;
    }
    .hero-ctas { display: flex; flex-wrap: wrap; gap: 14px; align-items: center; }
    .btn-primary {
      display: inline-flex; align-items: center; gap: 8px;
      background: #007b5e; color: #fff; padding: 13px 28px;
      border-radius: 8px; font-weight: 700; font-size: 0.95rem;
      text-decoration: none; transition: background 0.2s, transform 0.15s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.2s;
      box-shadow: 0 4px 14px rgba(0,123,94,0.35);
    }
    .btn-primary:hover { background: #009673; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,123,94,0.45); }
    .btn-primary:active { transform: scale(0.98); }
    .btn-ghost {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.22);
      color: #fff; padding: 13px 26px; border-radius: 8px;
      font-weight: 600; font-size: 0.95rem; text-decoration: none;
      transition: background 0.2s, border-color 0.2s, transform 0.15s;
    }
    .btn-ghost:hover { background: rgba(255,255,255,0.16); border-color: rgba(255,255,255,0.4); transform: translateY(-2px); }
    .btn-ghost:active { transform: scale(0.98); }
    .last-updated { font-size: 0.78rem; color: rgba(255,255,255,0.4); margin-top: 1.4rem; }

    /* METRICS STRIP */
    .metrics-strip { background: #fff; border-bottom: 1px solid #e5e7eb; padding: 24px 0; }
    .metrics-grid {
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;
      max-width: 1200px; margin: 0 auto; padding: 0 24px;
    }
    .metric-cell {
      border-left: 3px solid #007b5e; padding: 8px 18px;
    }
    .metric-title { display: block; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; color: #6b7280; }
    .metric-val { display: block; font-size: 1.5rem; font-weight: 800; color: #0d1f19; font-family: 'Sora', sans-serif; }
    .metric-sub { display: block; font-size: 0.8rem; color: #4b5563; }

    /* GEO QUOTABLE BLOCK */
    .geo-quotable-block {
      background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
      border: 1px solid rgba(0,123,94,0.25);
      border-left: 6px solid #007b5e;
      border-radius: 12px; padding: 24px 28px; margin: 40px auto 30px;
      max-width: 1200px; box-shadow: 0 4px 20px rgba(0,123,94,0.06);
    }
    .geo-quotable-title {
      font-size: 0.78rem; font-weight: 800; text-transform: uppercase;
      letter-spacing: 0.12em; color: #007b5e; margin-bottom: 8px;
    }
    .geo-quotable-text {
      font-size: 1.05rem; line-height: 1.85; color: #1e293b; margin: 0;
    }

    /* CONTENT SECTIONS */
    .content-section { padding: 60px 0; border-bottom: 1px solid #f1f5f9; }
    .content-section.alt-bg { background: #f8fafc; }
    .section-header { margin-bottom: 35px; }
    .section-header p { font-size: 1.1rem; color: #4b5563; max-width: 820px; }
    .two-col-grid { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 40px; align-items: start; }
    .image-showcase {
      background: #fff; border-radius: 14px; overflow: hidden;
      border: 1px solid #e2e8f0; box-shadow: 0 8px 30px rgba(0,0,0,0.06);
    }
    .image-showcase img { width: 100%; height: 320px; object-fit: cover; display: block; }
    .image-caption { padding: 14px 18px; font-size: 0.85rem; color: #475569; background: #fff; border-top: 1px solid #f1f5f9; }

    .tech-card {
      background: #fff; border: 1px solid #e2e8f0; border-radius: 12px;
      padding: 24px; margin-top: 22px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);
    }

    /* SPECIFICATION & FORMULATION TABLES */
    .table-container {
      background: #fff; border: 1px solid #e2e8f0; border-radius: 12px;
      overflow-x: auto; box-shadow: 0 4px 16px rgba(0,0,0,0.04); margin: 24px 0 35px;
    }
    table.data-table { width: 100%; border-collapse: collapse; text-align: left; min-width: 620px; }
    table.data-table th {
      background: #0d1f19; color: #fff; font-size: 0.85rem; font-weight: 700;
      padding: 14px 18px; text-transform: uppercase; letter-spacing: 0.06em;
    }
    table.data-table td {
      padding: 13px 18px; font-size: 0.93rem; color: #334155; border-bottom: 1px solid #f1f5f9;
    }
    table.data-table tr:nth-child(even) td { background: #fafafa; }
    table.data-table tr:hover td { background: #f0fdf4; }

    /* COMMERCIAL PARENT BANNER */
    .parent-commercial-banner {
      background: linear-gradient(135deg, #0d1f19 0%, #16362b 100%);
      border-radius: 14px; padding: 36px 40px; margin: 45px 0;
      color: #fff; display: flex; align-items: center; justify-content: space-between;
      gap: 30px; border: 1px solid rgba(74, 222, 158, 0.25);
    }
    .banner-content h3 { color: #4ade9e; font-size: 1.45rem; margin-top: 0; }
    .banner-content p { color: rgba(255,255,255,0.85); font-size: 0.98rem; margin-bottom: 0; }

    /* SIBLING APPS GRID */
    .sibling-grid {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 30px;
    }
    .sibling-card {
      background: #fff; border: 1px solid #e2e8f0; border-radius: 12px;
      overflow: hidden; text-decoration: none; color: inherit;
      transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
      display: flex; flex-direction: column;
    }
    .sibling-card:hover {
      transform: translateY(-4px); box-shadow: 0 10px 24px rgba(0,123,94,0.12);
      border-color: #007b5e;
    }
    .sibling-img-box { height: 160px; overflow: hidden; background: #e2e8f0; }
    .sibling-img-box img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
    .sibling-card:hover .sibling-img-box img { transform: scale(1.05); }
    .sibling-body { padding: 18px; flex: 1; display: flex; flex-direction: column; }
    .sibling-body h4 { margin: 0 0 8px; color: #0d1f19; font-size: 1.05rem; }
    .sibling-body p { font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 12px; flex: 1; }
    .sibling-link-text { color: #007b5e; font-size: 0.85rem; font-weight: 700; margin-top: auto; }

    /* FAQ ACCORDION */
    .faq-container { margin-top: 30px; }
    .faq-item {
      background: #fff; border: 1px solid #e2e8f0; border-radius: 10px;
      margin-bottom: 14px; overflow: hidden; transition: border-color 0.2s;
    }
    .faq-item:hover { border-color: #007b5e; }
    .faq-question {
      width: 100%; text-align: left; background: none; border: none;
      padding: 18px 22px; font-size: 1.05rem; font-weight: 700; color: #0d1f19;
      cursor: pointer; display: flex; align-items: center; justify-content: space-between;
      gap: 16px; font-family: 'Sora', sans-serif;
    }
    .faq-icon {
      font-size: 1.3rem; line-height: 1; color: #007b5e;
      transition: transform 0.25s ease;
    }
    .faq-item.active .faq-icon { transform: rotate(45deg); }
    .faq-answer {
      display: none; padding: 0 22px 20px; font-size: 0.96rem; color: #475569;
      line-height: 1.8; border-top: 1px solid #f8fafc;
    }
    .faq-item.active .faq-answer { display: block; }

    /* CTA STRIP */
    .cta-strip {
      background: #0d1f19; color: #fff; text-align: center;
      padding: 70px 24px; position: relative; overflow: hidden;
    }
    .cta-strip h2 { color: #fff; margin-bottom: 14px; }
    .cta-strip p { color: rgba(255,255,255,0.85); max-width: 640px; margin: 0 auto 28px; font-size: 1.05rem; }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      .two-col-grid { grid-template-columns: 1fr; }
      .metrics-grid { grid-template-columns: 1fr 1fr; }
      .sibling-grid { grid-template-columns: 1fr 1fr; }
      .parent-commercial-banner { flex-direction: column; text-align: center; }
    }
    @media (max-width: 640px) {
      .metrics-grid { grid-template-columns: 1fr; }
      .sibling-grid { grid-template-columns: 1fr; }
      .hero-tag-row { flex-direction: column; align-items: flex-start; }
      .hero-ctas { flex-direction: column; width: 100%; }
      .hero-ctas .btn-primary, .hero-ctas .btn-ghost { width: 100%; justify-content: center; }
    }
    </style>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/whatsapp-widget.php'; ?>

<main id="main-content">

<!-- ════════════════════════════════════════════════
     SECTION 1: HERO & OVERVIEW
════════════════════════════════════════════════ -->
<section class="page-hero" aria-label="Zinc Oxide for Ceramics and Glazes Hero">
  <div class="hero-watermark" aria-hidden="true">CERAMIC ZnO</div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo site_url('/'); ?>">Home</a>
      <span>›</span>
      <a href="<?php echo site_url('/products/'); ?>">Products</a>
      <span>›</span>
      <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>">Zinc Oxide</a>
      <span>›</span>
      <a href="<?php echo site_url('/zinc-oxide-applications/'); ?>">Applications</a>
      <span>›</span>
      <span aria-current="page">Ceramics &amp; Glazes</span>
    </nav>
    <span class="pill-eyebrow">High-Temperature Inorganic Flux</span>
    <h1>Zinc Oxide for Ceramics &amp; Glazes</h1>
    <div class="hero-tag-row">
      <span class="hero-tag highlight">Flux &amp; Viscosity Modifier</span>
      <span class="hero-tag">Thermal Expansion Control</span>
      <span class="hero-tag">Purity &ge; 99.9% (French Process)</span>
      <span class="hero-tag">Iron Free (Fe₂O₃ &le; 0.005%)</span>
      <span class="hero-tag">25 kg Moisture-Proof Bags</span>
    </div>
    <p class="hero-desc">
      High-purity 99.9% Zinc Oxide manufactured by Bhatti Chemicals Industry provides ceramic tile producers, sanitaryware factories, and frit smelters with an indispensable flux that reduces firing temperatures, suppresses glaze crazing, and delivers superior gloss and surface hardness.
    </p>
    <div class="hero-ctas">
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary">Request Ceramic Grade Quote</a>
      <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-ghost">View Product Specifications</a>
    </div>
    <p class="last-updated">Last updated: <time datetime="2026-09-19">September 2026</time></p>
  </div>
</section>

<!-- METRICS STRIP -->
<div class="metrics-strip" role="list" aria-label="Ceramic Zinc Oxide Performance Metrics">
  <div class="metrics-grid">
    <div class="metric-cell" role="listitem">
      <span class="metric-title">Chemical Assay</span>
      <span class="metric-val">&ge; 99.9%</span>
      <span class="metric-sub">Pure ZnO (French Process)</span>
    </div>
    <div class="metric-cell" role="listitem">
      <span class="metric-title">Active Flux Range</span>
      <span class="metric-val">1050&deg;C &ndash; 1280&deg;C</span>
      <span class="metric-sub">Broad eutectic melting window</span>
    </div>
    <div class="metric-cell" role="listitem">
      <span class="metric-title">Fe₂O₃ Impurity</span>
      <span class="metric-val">&le; 0.005%</span>
      <span class="metric-sub">Prevents glaze discoloration</span>
    </div>
    <div class="metric-cell" role="listitem">
      <span class="metric-title">Packaging &amp; MOQ</span>
      <span class="metric-val">25 kg Bags</span>
      <span class="metric-sub">Palletized, MOQ: 25 kg (1 bag)</span>
    </div>
  </div>
</div>

<!-- GEO CITABILITY BLOCK -->
<div class="container">
  <aside class="geo-quotable-block" aria-label="Verified Chemical Definition of Ceramic Grade Zinc Oxide">
    <div class="geo-quotable-title">Verified Chemical Definition &amp; Industrial Function</div>
    <p class="geo-quotable-text">
      <strong>Zinc Oxide (ZnO)</strong> manufactured by <strong>Bhatti Chemicals Industry</strong> in Gujranwala, Pakistan (CAS: 1314-13-2, molecular weight: 81.38 g/mol, purity &ge; 99.9%) is an indispensable inorganic intermediate oxide utilized in ceramic glazes, frits, porcelain sanitaryware, and technical glass. At temperatures above 1050&deg;C, Zinc Oxide acts as a strong basic flux that forms low-melting eutectic compounds with silica (SiO₂) and alumina (Al₂O₃), reducing melt viscosity and broadening the firing range. Crucially, Zinc Oxide exhibits one of the lowest coefficients of thermal expansion among ceramic fluxes, minimizing glaze shrinkage and preventing crazing or pinholing. When formulated in low additions (1&ndash;4 wt%), it enhances brilliant gloss and optical clarity; in higher additions (6&ndash;14 wt%), it promotes willemite (Zn₂SiO₄) micro-crystallization to produce elegant satin and crystalline glazes.
    </p>
  </aside>
</div>

<!-- ════════════════════════════════════════════════
     SECTION 2: CERAMIC GLAZE & FRIT MECHANISMS
════════════════════════════════════════════════ -->
<section class="content-section" id="fluxing-mechanisms">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">High-Temperature Kinetics</span>
      <h2>Role of Zinc Oxide in Ceramic Glazes &amp; Glass Formulations</h2>
      <p>
        Zinc Oxide functions amphoterically in ceramic melts—acting as a modifying flux at high temperatures while enhancing chemical durability and structural density upon vitrification.
      </p>
    </div>

    <div class="two-col-grid">
      <div>
        <h3>1. Eutectic Fluxing &amp; Melt Viscosity</h3>
        <p>
          During kiln firing between Cone 04 and Cone 10 (1050&deg;C to 1280&deg;C), Zinc Oxide reacts vigorously with feldspar, quartz, and kaolin to create low-viscosity liquid phases. This promotes complete degassing, allowing entrapped carbonaceous gases to escape before the glaze seals, effectively eliminating surface pinholes, blisters, and orange-peel textures.
        </p>

        <h3>2. Thermal Expansion Moderation &amp; Crazing Resistance</h3>
        <p>
          Glaze crazing occurs when the glaze contracts more rapidly than the underlying ceramic body during cooling. Unlike alkali metal fluxes (Na₂O and K₂O) which dramatically increase thermal expansion, ZnO has a remarkably low linear coefficient of thermal expansion. Incorporating Zinc Oxide balances the glaze expansion coefficient to match porcelain, stoneware, and earthenware bodies perfectly.
        </p>

        <h3>3. Chemical Resistance &amp; Mechanical Hardness</h3>
        <p>
          Zinc ions (Zn²⁺) incorporate into the glassy silicate matrix, forming durable zinc-silicate bonds that resist leaching from household detergents, citrus acids, and environmental moisture. In floor tiles and sanitaryware, this produces exceptional scratch resistance and abrasion durability (PEI ratings 4 and 5).
        </p>
      </div>

      <div>
        <div class="image-showcase">
          <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=800&q=80" alt="Ceramic Tile and Glaze Manufacturing with High-Purity Zinc Oxide" loading="lazy">
          <div class="image-caption">
            Ceramic glaze vitrification: High-purity French Process Zinc Oxide delivers flawless gloss, prevents crazing, and enhances surface hardness in wall and floor tiles.
          </div>
        </div>

        <div class="tech-card" style="border-left: 4px solid #007b5e; background: #fbfdfc;">
          <h4 style="margin-top:0;">Why Ceramic Plants in Pakistan Choose Bhatti Chemicals</h4>
          <ul style="padding-left: 20px; font-size: 0.95rem; color:#374151; line-height: 1.75;">
            <li><strong>Ultra-Low Iron Content:</strong> Fe₂O₃ &le; 0.005% guarantees pure white sanitaryware without off-color yellow tinges.</li>
            <li><strong>Uniform Particle Fineness:</strong> 325 mesh wet-sieve residue &le; 0.05% ensures instant dispersion in ball mills without undispersed specks.</li>
            <li><strong>Stable Lead-Free Frit Chemistry:</strong> Meets modern international environmental restrictions for tableware and food-contact ceramics.</li>
            <li><strong>Local Supply Security:</strong> Immediate delivery to industrial ceramic hubs across Gujranwala, Gujrat, Lalamusa, Lahore, and Karachi.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTION 3: FORMULATION & RECIPES TABLE
════════════════════════════════════════════════ -->
<section class="content-section alt-bg" id="formulations">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Industry Recipes</span>
      <h2>Industrial Ceramic Glaze &amp; Glass Formulations</h2>
      <p>Typical batch compositions demonstrating the targeted utilization of 99.9% Zinc Oxide across ceramic manufacturing sectors:</p>
    </div>

    <div class="table-container">
      <table class="data-table" aria-label="Ceramic Glaze Formulations with Zinc Oxide">
        <thead>
          <tr>
            <th>Application Category</th>
            <th>Firing Temp (&deg;C)</th>
            <th>ZnO Content (%)</th>
            <th>Co-Fluxes &amp; Raw Materials</th>
            <th>Primary Performance Benefit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Sanitaryware Opaque White Glaze</strong></td>
            <td>1200&deg;C &ndash; 1250&deg;C</td>
            <td>3.5 &ndash; 6.0%</td>
            <td>Zircon (ZrSiO₄), Potash Feldspar, Wollastonite, Kaolin</td>
            <td>High gloss, acid/alkali resistance, eliminates crazing</td>
          </tr>
          <tr>
            <td><strong>Porcelain Floor Tile Gloss Glaze</strong></td>
            <td>1180&deg;C &ndash; 1220&deg;C</td>
            <td>2.0 &ndash; 4.5%</td>
            <td>Soda Feldspar, Calcite, Quartz, Alumina hydrate</td>
            <td>Surface micro-hardness, scratch resistance, fast vitrification</td>
          </tr>
          <tr>
            <td><strong>Artistic Crystalline Glaze</strong></td>
            <td>1250&deg;C &ndash; 1300&deg;C</td>
            <td>18.0 &ndash; 25.0%</td>
            <td>Silica, Ferro Frit 3110, Rutile, Titanium Dioxide</td>
            <td>Precipitates visible macroscopic Willemite (Zn₂SiO₄) crystals</td>
          </tr>
          <tr>
            <td><strong>Satin / Zinc-Matte Wall Tile Glaze</strong></td>
            <td>1080&deg;C &ndash; 1140&deg;C</td>
            <td>7.0 &ndash; 12.0%</td>
            <td>Barium Carbonate, Dolomite, Nepheline Syenite, Clay</td>
            <td>Smooth silky tactile finish with low light reflectivity</td>
          </tr>
          <tr>
            <td><strong>Borosilicate &amp; Technical Glass</strong></td>
            <td>1400&deg;C &ndash; 1550&deg;C</td>
            <td>1.5 &ndash; 3.5%</td>
            <td>Silica sand, Borax, Soda ash, Limestone</td>
            <td>Thermal shock resistance, lower liquidus temp, optical clarity</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTION 4: TECHNICAL SPECIFICATIONS
════════════════════════════════════════════════ -->
<section class="content-section" id="specifications">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Quality Assurance</span>
      <h2>Ceramic Grade Zinc Oxide Specifications</h2>
      <p>Manufactured under ISO 9001:2015 quality management with batch-by-batch laboratory validation:</p>
    </div>

    <div class="table-container">
      <table class="data-table" aria-label="Zinc Oxide Technical Specifications">
        <thead>
          <tr>
            <th>Chemical &amp; Physical Property</th>
            <th>Standard Specification</th>
            <th>Typical Batch Analysis</th>
            <th>Test Standard</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Zinc Oxide (ZnO) Assay</strong></td>
            <td>&ge; 99.90%</td>
            <td>99.93%</td>
            <td>ISO 6745 / ASTM D79</td>
          </tr>
          <tr>
            <td><strong>Iron Oxide (Fe₂O₃)</strong></td>
            <td>&le; 0.005%</td>
            <td>0.0018%</td>
            <td>AAS / ICP-OES</td>
          </tr>
          <tr>
            <td><strong>Lead Oxide (PbO)</strong></td>
            <td>&le; 0.005%</td>
            <td>0.0015%</td>
            <td>Spectrophotometry</td>
          </tr>
          <tr>
            <td><strong>Loss on Ignition (LOI, 950&deg;C)</strong></td>
            <td>&le; 0.20%</td>
            <td>0.12%</td>
            <td>Gravimetric</td>
          </tr>
          <tr>
            <td><strong>Sieve Residue (325 Mesh / 45 &mu;m)</strong></td>
            <td>&le; 0.05%</td>
            <td>0.01%</td>
            <td>Wet Sieve Analysis</td>
          </tr>
          <tr>
            <td><strong>Specific Gravity</strong></td>
            <td>5.60 &ndash; 5.68 g/cm³</td>
            <td>5.64 g/cm³</td>
            <td>Pycnometer</td>
          </tr>
          <tr>
            <td><strong>Physical Appearance</strong></td>
            <td>Fine white odorless powder</td>
            <td>Conforms</td>
            <td>Visual Inspection</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- COMMERCIAL PARENT CALLOUT -->
    <div class="parent-commercial-banner">
      <div class="banner-content">
        <h3>Direct Factory Sourcing from Pakistan's Flagship Manufacturer</h3>
        <p>Looking for verified bulk supply of 99.9% Zinc Oxide? Visit our main product catalog or contact our commercial technical sales team in Gujranwala for custom contract packaging and containerized export pricing.</p>
      </div>
      <div>
        <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-primary" style="white-space: nowrap;">
          View Main Zinc Oxide Page &rarr;
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTION 5: PACKAGING & DISPATCH
════════════════════════════════════════════════ -->
<section class="content-section alt-bg" id="packaging">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Logistics &amp; Handling</span>
      <h2>Packaging &amp; Supply Chain Reliability</h2>
      <p>Safeguarding product purity and dryness from our factory floor to your ceramic milling facility:</p>
    </div>

    <div class="two-col-grid">
      <div>
        <h3>Moisture-Proof Packaging Options</h3>
        <p>
          Ceramic glaze performance relies heavily on consistent moisture content. Any moisture absorbed during warehouse storage alters weight formulations and can cause clumping in dry-feed silos. Bhatti Chemicals packs ceramic grade Zinc Oxide in:
        </p>
        <ul style="padding-left: 20px; font-size: 0.98rem; color:#374151; line-height: 1.8; margin-bottom: 20px;">
          <li><strong>Standard 25 kg Bags:</strong> High-burst multi-wall kraft paper bags with inner high-density polyethylene (HDPE) heat-sealed barrier liners.</li>
          <li><strong>Palletized &amp; Stretch-Wrapped:</strong> 1 Metric Ton (40 bags) per sturdy wooden or composite fumigated export pallet, shrink-wrapped with weather-shield film.</li>
          <li><strong>Jumbo Bags (FIBC):</strong> 500 kg to 1000 kg bulk bags available on special contract for automated ceramic mixing facilities.</li>
        </ul>
      </div>
      <div>
        <div class="tech-card" style="border-top: 4px solid #007b5e;">
          <h4 style="margin-top:0;">Fast Nationwide &amp; Export Dispatch</h4>
          <p style="font-size:0.95rem; color:#475569; margin-bottom:12px;">
            Conveniently located on Main G.T. Road, Gujranwala, our central production plant enables rapid same-day or next-day truck dispatch to ceramic clusters across Punjab and Sindh:
          </p>
          <ul style="padding-left: 18px; font-size:0.9rem; color:#334155; line-height:1.7;">
            <li><strong>Gujranwala, Gujrat &amp; Lalamusa:</strong> Dedicated same-day direct mill deliveries.</li>
            <li><strong>Lahore &amp; Faisalabad:</strong> 24-hour truckload dispatch.</li>
            <li><strong>Karachi:</strong> 48-hour container transport to Port Qasim / Karachi Port for sea export.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTION 6: FREQUENTLY ASKED QUESTIONS
════════════════════════════════════════════════ -->
<section class="content-section" id="faq">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Expert Answers</span>
      <h2>Frequently Asked Questions on Ceramic Zinc Oxide</h2>
      <p>Direct answers for ceramic engineers, glaze formulators, and procurement managers:</p>
    </div>

    <div class="faq-container">
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false">
          <span>What is the primary function of Zinc Oxide in ceramic glazes?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <p>Zinc Oxide acts as a versatile fluxing agent at temperatures above 1050&deg;C, lowering glaze melt viscosity and broadening the firing maturation range. Crucially, it possesses one of the lowest coefficients of thermal expansion among ceramic fluxes, which prevents glaze crazing and micro-fissures during kiln cooling.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false">
          <span>How does Zinc Oxide affect glaze opacity, gloss, and matte finishes?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <p>At low concentrations (1% to 4%), Zinc Oxide dissolves completely into the silica-alumina glass melt, producing a brilliant high-gloss finish. At higher concentrations (6% to 15%), it promotes the precipitation of micro-crystalline willemite (Zn₂SiO₄), yielding elegant zinc-matte and satin surfaces.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false">
          <span>Why is high purity (≥ 99.9%) essential for ceramic grade Zinc Oxide?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <p>High purity ensures minimal iron oxide (Fe₂O₃ &le; 0.005%) and copper impurities. Heavy metal trace contaminants cause undesirable yellow or greenish staining in white sanitaryware and clear tableware glazes. Bhatti Chemicals French Process ZnO delivers pristine whiteness.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false">
          <span>How does Zinc Oxide perform in specialty glass and enamels?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <p>In glass melting, Zinc Oxide lowers liquidus temperatures, increases mechanical hardness, improves optical refractive index, and enhances chemical durability against water, acidic, and alkaline attack.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false">
          <span>What packaging and delivery options are available for ceramic manufacturers in Pakistan?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <p>Bhatti Chemicals delivers Zinc Oxide in standard 25 kg multi-wall moisture-proof paper bags with inner polyethylene liners. Bulk shipments and full container loads (FCL) are dispatched throughout Gujranwala, Gujrat, Lahore, and Karachi with certified batch Certificate of Analysis (COA).</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTION 7: EXPLORE OTHER APPLICATIONS
════════════════════════════════════════════════ -->
<section class="content-section alt-bg" id="sibling-applications">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">Topical Industrial Network</span>
      <h2>Explore Other Industrial Applications of Zinc Oxide</h2>
      <p>Discover how Bhatti Chemicals Industry's high-purity 99.9% Zinc Oxide powers critical manufacturing sectors across Pakistan and overseas:</p>
    </div>

    <div class="sibling-grid">
      <a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>" class="sibling-card">
        <div class="sibling-img-box">
          <img src="https://images.unsplash.com/photo-1578844251758-2f71da64c96f?auto=format&fit=crop&w=600&q=80" alt="Zinc Oxide in Rubber and Tyre Vulcanization" loading="lazy">
        </div>
        <div class="sibling-body">
          <h4>Rubber &amp; Tyre Manufacturing</h4>
          <p>Primary inorganic activator for sulfur vulcanization kinetics and thermal heat dissipation in high-speed radial tyres.</p>
          <span class="sibling-link-text">Explore Rubber Guide &rarr;</span>
        </div>
      </a>

      <a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>" class="sibling-card">
        <div class="sibling-img-box">
          <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=600&q=80" alt="Zinc Oxide in Paints and Protective Coatings" loading="lazy">
        </div>
        <div class="sibling-body">
          <h4>Paints &amp; Protective Coatings</h4>
          <p>Non-leaching fungistatic mildew resistance, UV solar screening, and cathodic corrosion defense for marine and architectural primers.</p>
          <span class="sibling-link-text">Explore Coatings Guide &rarr;</span>
        </div>
      </a>

      <a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>" class="sibling-card">
        <div class="sibling-img-box">
          <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80" alt="Zinc Oxide in Pharmaceuticals and Ointments" loading="lazy">
        </div>
        <div class="sibling-body">
          <h4>Pharmaceuticals &amp; Ointments</h4>
          <p>BP/USP pharmaceutical grade active antiseptic, skin barrier paste, and calamine wound healing agent.</p>
          <span class="sibling-link-text">Explore Pharma Guide &rarr;</span>
        </div>
      </a>

      <a href="<?php echo site_url('/zinc-oxide-applications/cosmetics-and-skincare.php'); ?>" class="sibling-card">
        <div class="sibling-img-box">
          <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=600&q=80" alt="Zinc Oxide in Cosmetics and Skincare" loading="lazy">
        </div>
        <div class="sibling-body">
          <h4>Cosmetics &amp; Skincare</h4>
          <p>Broad-spectrum physical UVA/UVB mineral photoprotection, soothing baby creams, and non-comedogenic formulations.</p>
          <span class="sibling-link-text">Explore Cosmetics Guide &rarr;</span>
        </div>
      </a>

      <a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>" class="sibling-card">
        <div class="sibling-img-box">
          <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=600&q=80" alt="Zinc Oxide in Agriculture and Animal Feed" loading="lazy">
        </div>
        <div class="sibling-body">
          <h4>Agriculture &amp; Animal Feed</h4>
          <p>Bioavailable micronutrient nutrition (~80.3% Zn) for livestock growth, poultry eggshell integrity, and crop fertilizer enrichment.</p>
          <span class="sibling-link-text">Explore Agriculture Guide &rarr;</span>
        </div>
      </a>

      <a href="<?php echo site_url('/zinc-oxide-applications/'); ?>" class="sibling-card">
        <div class="sibling-img-box" style="background:#0d1f19; display:flex; align-items:center; justify-content:center; color:#4ade9e; font-size:2rem; font-weight:800; font-family:'Sora',sans-serif;">
          ALL APPS
        </div>
        <div class="sibling-body">
          <h4>Applications Hub Directory</h4>
          <p>Browse our complete technical directory of industrial manufacturing sectors powered by 99.9% French Process Zinc Oxide.</p>
          <span class="sibling-link-text">View Applications Hub &rarr;</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTION 8: CTA STRIP
════════════════════════════════════════════════ -->
<section class="cta-strip" aria-label="Call to action">
  <div class="container">
    <h2>Partner with Pakistan's Trusted Zinc Oxide Manufacturer</h2>
    <p>Contact Bhatti Chemicals Industry today to discuss chemical specifications, request batch COA documentation, and secure competitive commercial pricing for your ceramic plant.</p>
    <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary">Request Quotation &amp; Sample</a>
      <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-ghost">View Product Catalog</a>
    </div>
  </div>
</section>

</main>

<!-- Interactive Accordion Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const faqButtons = document.querySelectorAll('.faq-question');
  faqButtons.forEach(button => {
    button.addEventListener('click', function () {
      const item = this.parentElement;
      const isOpen = item.classList.contains('active');
      
      // Close all other items
      document.querySelectorAll('.faq-item').forEach(el => {
        el.classList.remove('active');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });

      // Toggle current item
      if (!isOpen) {
        item.classList.add('active');
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
