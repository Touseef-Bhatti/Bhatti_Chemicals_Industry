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

    <meta name="description" content="Buy 99.9% Zinc Oxide (ZnO) from a manufacturer in Pakistan. 25 kg bags, bulk supply and quality documentation for rubber, tyres, ceramics, paints and other industries.">
    <meta name="keywords" content="Zinc Oxide Pakistan, Zinc Oxide manufacturer Pakistan, Zinc Oxide supplier Pakistan, Zinc Oxide exporter Pakistan, buy zinc oxide, high purity zinc oxide, zinc oxide for rubber, zinc oxide for ceramics, zinc oxide 99.9%, zinc oxide Gujranwala, ZnO supplier Pakistan, ISO certified zinc oxide">
    <link rel="canonical" href="https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php">

    <!-- Open Graph -->
    <meta property="og:type" content="product">
    <meta property="og:site_name" content="Bhatti Chemicals Industry">
    <meta property="og:title" content="Zinc Oxide Manufacturer in Pakistan | 99.9% ZnO | Bhatti Chemicals">
    <meta property="og:description" content="Buy 99.9% Zinc Oxide (ZnO) from a manufacturer in Pakistan. 25 kg bags, bulk supply and quality documentation for rubber, tyres, ceramics, paints and other industries.">
    <meta property="og:image" content="https://www.bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp">
    <meta property="og:url" content="https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
    <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

    <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
    <link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
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

    <title>Zinc Oxide Manufacturer in Pakistan | 99.9% ZnO | Bhatti Chemicals</title>

    <!-- Product Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "@id": "https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php#product",
      "name": "Zinc Oxide (ZnO)",
      "description": "High-purity Zinc Oxide manufactured by Bhatti Chemicals Industry in Gujranwala, Pakistan. 99.9% purity, fine white powder, packed in 25 kg bags. Used in rubber vulcanization, ceramics, paints, pharmaceuticals, cosmetics, agriculture, and animal feed.",
      "image": "https://www.bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp",
      "url": "https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php",
      "brand": {
        "@type": "Brand",
        "name": "Bhatti Chemicals Industry"
      },
      "manufacturer": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "url": "https://www.bhattichemicalsindustry.com.pk/",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Gujranwala",
          "addressCountry": "PK"
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+92-304-1462460",
          "contactType": "sales",
          "email": "info@bhattichemicalsindustry.com.pk"
        }
      },
      "category": "Zinc Oxide",
      "material": "Zinc Oxide",
      "additionalProperty": [
        { "@type": "PropertyValue", "name": "Purity", "value": "≥ 99.9%" },
        { "@type": "PropertyValue", "name": "Physical Form", "value": "Fine white powder" },
        { "@type": "PropertyValue", "name": "Pack Size", "value": "25 kg bags" },
        { "@type": "PropertyValue", "name": "CAS Number", "value": "1314-13-2" },
        { "@type": "PropertyValue", "name": "Molecular Formula", "value": "ZnO" }
      ],
      "offers": {
        "@type": "Offer",
        "url": "https://www.bhattichemicalsindustry.com.pk/contact-us.php",
        "availability": "https://schema.org/InStock",
        "itemCondition": "https://schema.org/NewCondition",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "0.00",
          "priceCurrency": "PKR",
          "description": "Quote-based pricing confirmed after quantity and destination review; contact our team for current pricing."
        },
        "seller": {
          "@type": "Organization",
          "name": "Bhatti Chemicals Industry"
        }
      }
    }
    </script>
    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://www.bhattichemicalsindustry.com.pk/"},
        {"@type":"ListItem","position":2,"name":"Products","item":"https://www.bhattichemicalsindustry.com.pk/products/"},
        {"@type":"ListItem","position":3,"name":"Zinc Oxide","item":"https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php"}
      ]
    }
    </script>
    <!-- WebPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "@id": "https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php#webpage",
      "name": "Zinc Oxide Manufacturer in Pakistan",
      "description": "Buy 99.9% Zinc Oxide (ZnO) from a manufacturer in Pakistan. 25 kg bags, bulk supply and quality documentation for rubber, tyres, ceramics, paints and other industries.",
      "url": "https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php",
      "dateModified": "2026-09-19",
      "publisher": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "url": "https://www.bhattichemicalsindustry.com.pk/"
      }
    }
    </script>

    <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; scroll-padding-top: 82px; }
    body {
      font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
      color: #1a1a1a; background: #fafafa;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }
    h1, h2, h3 {
      font-family: 'Sora', system-ui, -apple-system, sans-serif;
      line-height: 1.15;
      letter-spacing: -0.02em;
    }
    h1 { font-size: clamp(2rem, 4.5vw, 3.2rem); font-weight: 800; }
    h2 { font-size: clamp(1.55rem, 3vw, 2.2rem); font-weight: 700; }
    h3 { font-size: 1.12rem; font-weight: 600; }
    p  { line-height: 1.78; color: #4a5568; }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.74rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #007b5e;
      background: rgba(0, 123, 94, 0.08);
      border: 1px solid rgba(0, 123, 94, 0.16);
      padding: 4px 14px;
      border-radius: 9999px;
      margin-bottom: 0.85rem;
    }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .section-header { text-align: center; margin-bottom: 3.2rem; }
    .section-header h2 { color: #0f172a; margin-bottom: 0.75rem; }
    .section-desc { font-size: 1.02rem; max-width: 680px; margin: 0 auto; color: #4a5568; line-height: 1.75; }

    /* ── HERO ── */
    .page-hero {
      position: relative;
      min-height: 60vh;
      background: #0d1f19;
      display: flex; align-items: flex-end;
      padding: 124px 24px 64px;
      overflow: hidden;
    }
    .page-hero::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 70% 65% at 85% 25%, rgba(0,123,94,0.32) 0%, transparent 65%),
        radial-gradient(ellipse 45% 55% at 5% 85%, rgba(0,90,69,0.22) 0%, transparent 60%);
      pointer-events: none;
    }
    .hero-zno {
      position: absolute; right: 2%; top: 50%;
      transform: translateY(-50%);
      font-family: 'Sora', sans-serif;
      font-size: clamp(140px, 18vw, 300px);
      font-weight: 800;
      color: rgba(255,255,255,0.04);
      pointer-events: none; user-select: none;
      letter-spacing: -0.05em;
    }
    .page-hero-inner { position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; width: 100%; }
    .breadcrumb {
      display: flex; align-items: center; gap: 8px;
      margin-bottom: 1.2rem;
      font-size: 0.8rem; color: rgba(255,255,255,0.45);
    }
    .breadcrumb a { color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: #4ade9e; }
    .breadcrumb span { color: rgba(255,255,255,0.25); }
    .page-hero-inner h1 { color: #fff; margin-bottom: 0.5rem; }
    .hero-subtitle {
      font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 500;
      color: rgba(255,255,255,0.72); margin-bottom: 1.3rem;
      letter-spacing: 0.01em;
    }
    .hero-tag-row {
      display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 1.6rem;
    }
    .hero-tag {
      background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18);
      color: rgba(255,255,255,0.9); border-radius: 9999px;
      padding: 6px 16px; font-size: 0.82rem; font-weight: 500;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: background 0.25s, border-color 0.25s;
    }
    .hero-tag:hover {
      background: rgba(255,255,255,0.14);
      border-color: rgba(255,255,255,0.32);
    }
    .hero-tag.highlight {
      background: rgba(0,123,94,0.45); border-color: rgba(74,222,158,0.45);
      color: #4ade9e;
      box-shadow: 0 0 16px rgba(0,123,94,0.28);
    }
    .page-hero-inner .hero-desc {
      color: rgba(255,255,255,0.72); font-size: 1.05rem;
      max-width: 600px; line-height: 1.75; margin-bottom: 2.2rem;
    }
    .hero-ctas { display: flex; flex-wrap: wrap; gap: 14px; }
    .btn-primary {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 13px 28px;
      background: #007b5e; color: #fff;
      border-radius: 8px; font-weight: 600; font-size: 0.95rem;
      text-decoration: none;
      transition: background 0.25s cubic-bezier(0.16, 1, 0.3, 1), transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s;
      font-family: 'Inter', sans-serif;
      box-shadow: 0 2px 8px rgba(0, 123, 94, 0.24);
    }
    .btn-primary:hover {
      background: #00634b;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 123, 94, 0.35);
    }
    .btn-primary:active, .btn-ghost:active, .btn-white:active {
      transform: scale(0.98);
    }
    .btn-ghost {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 13px 28px;
      background: rgba(255,255,255,0.08); color: #fff;
      border: 1px solid rgba(255,255,255,0.3); border-radius: 8px;
      font-weight: 600; font-size: 0.95rem;
      text-decoration: none;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      transition: background 0.25s, border-color 0.25s, transform 0.2s;
      font-family: 'Inter', sans-serif;
    }
    .btn-ghost:hover {
      background: rgba(255,255,255,0.16);
      border-color: rgba(255,255,255,0.45);
      transform: translateY(-2px);
    }
    .last-updated {
      font-size: 0.75rem; color: rgba(255,255,255,0.45);
      margin-top: 1.3rem;
    }

    /* ── OVERVIEW STRIP ── */
    .overview-strip {
      background: #ffffff;
      border-top: 3px solid #007b5e;
      border-bottom: 1px solid #e2e8f0;
      box-shadow: 0 4px 20px -4px rgba(0,0,0,0.03);
    }
    .overview-inner {
      max-width: 1200px; margin: 0 auto;
      display: grid; grid-template-columns: repeat(4, 1fr);
    }
    .overview-item {
      padding: 28px 24px;
      border-right: 1px solid #edf2f0;
      display: flex; flex-direction: column;
      transition: background 0.2s;
    }
    .overview-item:hover { background: #fafcfb; }
    .overview-item:last-child { border-right: none; }
    .overview-label {
      font-size: 0.73rem; font-weight: 700; letter-spacing: 0.1em;
      text-transform: uppercase; color: #4b5563; margin-bottom: 6px;
    }
    .overview-value {
      font-family: 'Sora', sans-serif; font-size: 1.35rem; font-weight: 700;
      color: #007b5e; line-height: 1.1; margin-bottom: 4px;
    }
    .overview-note { font-size: 0.8rem; color: #6b7280; }

    /* ── WHY CHOOSE ── */
    .why-section { padding: 96px 24px; background: #fff; }
    .why-intro {
      max-width: 820px; margin: 0 auto 2.8rem;
    }
    .why-intro p { font-size: 1.02rem; margin-bottom: 1rem; line-height: 1.75; }
    .why-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid; grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }
    .why-card {
      background: #ffffff; border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 14px; padding: 30px 24px;
      box-shadow: 0 4px 18px -2px rgba(0,0,0,0.04), 0 2px 6px -1px rgba(0,0,0,0.02);
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s;
    }
    .why-card:hover {
      box-shadow: 0 14px 34px -4px rgba(0, 123, 94, 0.14);
      border-color: rgba(0, 123, 94, 0.32);
      transform: translateY(-4px);
    }
    .why-icon { color: #007b5e; margin-bottom: 14px; }
    .why-icon svg { width: 30px; height: 30px; fill: currentColor; display: block; }
    .why-card h3 { color: #1a1a1a; margin-bottom: 0.6rem; font-size: 1.05rem; }
    .why-card p { font-size: 0.92rem; color: #4a5568; line-height: 1.65; }

    /* ── QUALITY & SPECIFICATIONS ── */
    .quality-section {
      padding: 96px 24px;
      background: #f4f6f4;
    }
    .quality-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px; align-items: start;
    }
    .quality-text h2 { color: #0f172a; margin-bottom: 1.1rem; }
    .quality-text p { margin-bottom: 1.1rem; font-size: 1rem; line-height: 1.75; }

    .specs-table {
      width: 100%; border-collapse: collapse;
      background: #fff; border-radius: 12px; overflow: hidden;
      box-shadow: 0 4px 20px -2px rgba(0,0,0,0.05);
      border: 1px solid rgba(0, 123, 94, 0.12);
    }
    .specs-table th {
      background: #007b5e; color: #fff;
      font-family: 'Sora', sans-serif; font-size: 0.82rem;
      font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase;
      padding: 14px 18px; text-align: left;
    }
    .specs-table td {
      padding: 13px 18px; font-size: 0.92rem;
      border-bottom: 1px solid #edf2f0; color: #374151;
    }
    .specs-table tr:last-child td { border-bottom: none; }
    .specs-table tr:nth-child(even) td { background: #fafbfa; }
    .specs-table td:first-child { font-weight: 600; color: #1a1a1a; }
    .specs-table td.good { color: #007b5e; font-weight: 600; }

    .quality-visuals {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      align-items: start;
      gap: 16px;
    }
    .quality-img-card {
      display: flex;
      flex-direction: column;
      background: #fff; border-radius: 12px;
      border: 1px solid rgba(0, 123, 94, 0.12);
      overflow: hidden;
      box-shadow: 0 4px 16px -2px rgba(0,0,0,0.05);
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .quality-img-card:hover {
      box-shadow: 0 12px 30px -4px rgba(0, 123, 94, 0.12);
      transform: translateY(-3px);
    }
    .quality-img-card img {
      width: 100%; display: block;
      height: auto;
      aspect-ratio: 4 / 3; object-fit: cover;
      cursor: pointer; transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .quality-img-card img:hover { transform: scale(1.03); }
    .quality-img-card figcaption {
      padding: 11px 16px;
      font-size: 0.82rem; color: #4b5563; font-weight: 500;
    }
    .quality-img-full {
      grid-column: 1 / -1;
    }
    .quality-img-full img { aspect-ratio: 16/7; }
    .quality-img-featured {
      grid-column: 1 / -1;
    }
    .quality-img-featured img {
      aspect-ratio: 3 / 2;
      object-position: center;
    }
    .quality-img-product img {
      aspect-ratio: 4 / 3;
      object-fit: contain;
      background: #f4f6f5;
    }
    .quality-visuals .lab-report-card {
      margin-top: 0;
    }

    .production-video-frame {
      position: relative;
      max-width: 1200px;
      margin: 64px auto 0;
      padding: 10px;
      border: 1px solid rgba(0,123,94,0.18);
      border-radius: 24px;
      background: linear-gradient(145deg, #ffffff 0%, #edf3f0 100%);
      overflow: hidden;
      box-shadow:
        0 24px 60px rgba(20,45,37,0.14),
        0 6px 18px rgba(0,0,0,0.06);
    }
    .production-video-frame::before {
      content: '';
      position: absolute;
      z-index: 1;
      top: 0;
      left: 22%;
      right: 22%;
      height: 4px;
      border-radius: 0 0 6px 6px;
      background: linear-gradient(90deg, #4ade9e, #007b5e);
      box-shadow: 0 2px 10px rgba(0,123,94,0.28);
    }
    .production-video-frame video {
      width: 100%;
      display: block;
      aspect-ratio: 16 / 6;
      object-fit: cover;
      border-radius: 16px;
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.12);
    }

    @media (min-width: 1025px) {
      .production-video-frame {
        max-width: 960px;
        margin-top: 72px;
      }
      .production-video-frame video {
        aspect-ratio: 16 / 7;
      }
    }

    /* Lab Report Card */
    .lab-report-card {
      display: flex; align-items: center; gap: 16px;
      background: #ffffff; border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 12px; padding: 14px 18px; margin-top: 16px;
      cursor: pointer;
      transition: box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s;
      text-decoration: none; grid-column: 1 / -1;
      box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    }
    .lab-report-card:hover {
      box-shadow: 0 10px 24px -2px rgba(0, 123, 94, 0.12);
      border-color: rgba(0, 123, 94, 0.35);
      transform: translateY(-2px);
    }
    .lab-report-thumb { width: 72px; height: 72px; border-radius: 8px; object-fit: cover; border: 1px solid #e2e8e0; flex-shrink: 0; }
    .lab-report-info { display: flex; flex-direction: column; gap: 3px; }
    .lab-report-info strong { font-size: 0.9rem; color: #1a1a1a; font-family: 'Sora', sans-serif; }
    .lab-report-info span { font-size: 0.8rem; color: #6b7280; }
    .lab-report-icon {
      margin-left: auto; flex-shrink: 0; width: 34px; height: 34px; border-radius: 50%;
      background: #007b5e; color: #fff; display: flex; align-items: center; justify-content: center;
      box-shadow: 0 2px 8px rgba(0, 123, 94, 0.3);
    }
    .lab-report-icon svg { width: 17px; height: 17px; fill: currentColor; }

    /* ── PROCESS SECTION ── */
    .process-section {
      padding: 96px 24px;
      background: #fff;
    }
    .process-steps {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px;
    }
    .process-step {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 14px;
      padding: 30px 26px;
      position: relative;
      box-shadow: 0 4px 18px -2px rgba(0,0,0,0.04);
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s;
    }
    .process-step:hover {
      box-shadow: 0 14px 34px -4px rgba(0, 123, 94, 0.14);
      border-color: rgba(0, 123, 94, 0.32);
      transform: translateY(-4px);
    }
    .step-num {
      display: inline-flex; align-items: center; justify-content: center;
      width: 40px; height: 40px; border-radius: 50%;
      background: #007b5e; color: #fff;
      font-family: 'Sora', sans-serif; font-size: 0.88rem; font-weight: 700;
      margin-bottom: 16px;
      box-shadow: 0 4px 12px rgba(0, 123, 94, 0.28);
    }
    .process-icon { color: #007b5e; margin-bottom: 12px; }
    .process-icon svg { width: 28px; height: 28px; fill: currentColor; }
    .process-step h3 { color: #1a1a1a; margin-bottom: 0.6rem; font-size: 1.05rem; }
    .process-step p { font-size: 0.92rem; color: #4a5568; line-height: 1.7; }

    /* ── APPLICATIONS SECTION (Agency-Grade 3-Col Showcase Grid) ── */
    .applications-section {
      padding: 96px 24px;
      background: #f4f6f4;
    }
    .applications-list {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }
    .application-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 16px;
      padding: 0;
      display: flex;
      flex-direction: column;
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.04), 0 2px 6px -1px rgba(0, 0, 0, 0.02);
      overflow: hidden;
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .application-card:hover {
      border-color: rgba(0, 123, 94, 0.35);
      box-shadow: 0 16px 36px -4px rgba(0, 123, 94, 0.12), 0 6px 16px -2px rgba(0, 0, 0, 0.04);
      transform: translateY(-5px);
    }
    .application-media {
      width: 100%;
      aspect-ratio: 16 / 10;
      overflow: hidden;
      background: #eef3f0;
      position: relative;
    }
    .application-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), filter 0.4s ease;
    }
    .application-card:hover .application-img {
      transform: scale(1.05);
      filter: saturate(1.08) contrast(1.03);
    }
    .application-body {
      padding: 24px 26px 26px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .application-body h3 {
      color: #1a1a1a;
      margin-bottom: 0.6rem;
      font-size: 1.15rem;
      font-family: 'Sora', sans-serif;
      transition: color 0.22s;
    }
    .application-card:hover .application-body h3 {
      color: #007b5e;
    }
    .application-body p {
      font-size: 0.93rem;
      color: #4a5568;
      line-height: 1.7;
      margin-bottom: 1.2rem;
      flex: 1;
    }
    .app-badge {
      align-self: flex-start;
      display: inline-block;
      margin-bottom: 12px;
      background: rgba(0, 123, 94, 0.08);
      color: #007b5e;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.09em;
      text-transform: uppercase;
      padding: 4px 12px;
      border-radius: 9999px;
      border: 1px solid rgba(0, 123, 94, 0.14);
      transition: background 0.22s, color 0.22s, border-color 0.22s;
    }
    .application-card:hover .app-badge {
      background: #007b5e;
      color: #fff;
      border-color: #007b5e;
    }
    .app-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #007b5e;
      font-weight: 700;
      font-size: 0.92rem;
      text-decoration: none;
      transition: transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), color 0.2s ease;
      margin-top: auto;
    }
    .app-link:hover {
      color: #005a45;
      transform: translateX(4px);
    }
    .apps-hub-cta {
      text-align: center;
      margin-top: 40px;
    }

    /* ── PACKAGING ── */
    .packaging-section { padding: 84px 24px; background: #fff; }
    .packaging-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid; grid-template-columns: minmax(0, 1.3fr) minmax(280px, 0.7fr);
      gap: 48px; align-items: center;
    }
    .packaging-content h2 { color: #0f172a; margin-bottom: 1rem; }
    .packaging-content p { font-size: 1.02rem; margin-bottom: 1rem; line-height: 1.75; }
    .packaging-list { list-style: none; margin-top: 1.2rem; }
    .packaging-list li {
      display: flex; align-items: flex-start; gap: 12px;
      color: #4a5568; font-size: 0.95rem; line-height: 1.65;
      margin-bottom: 12px;
    }
    .packaging-list svg { color: #007b5e; width: 18px; height: 18px; fill: currentColor; margin-top: 4px; flex-shrink: 0; }
    .packaging-visual {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .packaging-visual figure {
      width: 100%;
      max-width: 290px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 28px -4px rgba(13, 31, 25, 0.16);
      border: 1px solid rgba(0, 123, 94, 0.2);
      background: #252827;
      padding: 14px 14px 12px;
      text-align: center;
    }
    .packaging-visual img {
      width: 100%;
      height: 280px;
      max-height: 280px;
      object-fit: contain;
      display: block;
      margin: 0 auto;
      border-radius: 8px;
    }
    .packaging-visual figcaption {
      padding-top: 10px;
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.85);
      font-weight: 600;
      letter-spacing: 0.02em;
    }

    /* ── PAKISTAN SUPPLY ── */
    .market-section {
      padding: 90px 24px;
      background: #fafafa;
    }
    .market-wrap {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
      gap: 44px;
      align-items: start;
    }
    .market-copy h2 {
      color: #0f172a;
      margin-bottom: 1.1rem;
    }
    .market-copy p {
      font-size: 1.02rem;
      margin-bottom: 1.1rem;
      line-height: 1.75;
    }
    .market-panel {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 14px;
      padding: 28px;
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.04);
    }
    .market-panel h3 {
      color: #1a1a1a;
      margin-bottom: 16px;
      font-size: 1.1rem;
    }
    .market-list {
      list-style: none;
      display: grid;
      gap: 14px;
    }
    .market-list li {
      display: grid;
      grid-template-columns: 22px 1fr;
      gap: 10px;
      color: #4a5568;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    .market-list svg {
      color: #007b5e;
      margin-top: 3px;
      width: 18px;
      height: 18px;
      fill: currentColor;
    }

    /* ── EXPORT ── */
    .export-section { padding: 80px 24px; background: #f4f6f4; }
    .export-inner {
      max-width: 900px; margin: 0 auto; text-align: center;
    }
    .export-inner h2 { color: #0f172a; margin-bottom: 1rem; }
    .export-inner p { font-size: 1.02rem; max-width: 640px; margin: 0 auto 1.8rem; line-height: 1.75; }

    /* ── QUALITY ASSURANCE ── */
    .qa-section { padding: 96px 24px; background: #fafafa; }
    .qa-grid {
      max-width: 1100px; margin: 0 auto;
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 26px;
    }
    .qa-card {
      background: #ffffff; border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 14px; padding: 32px 26px;
      text-align: center;
      box-shadow: 0 4px 18px -2px rgba(0,0,0,0.04);
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s;
    }
    .qa-card:hover {
      box-shadow: 0 14px 34px -4px rgba(0, 123, 94, 0.14);
      border-color: rgba(0, 123, 94, 0.32);
      transform: translateY(-4px);
    }
    .qa-icon { color: #007b5e; margin-bottom: 14px; }
    .qa-icon svg { width: 34px; height: 34px; fill: currentColor; display: block; margin: 0 auto; }
    .qa-card h3 { color: #1a1a1a; margin-bottom: 0.6rem; font-size: 1.05rem; }
    .qa-card p { font-size: 0.92rem; color: #4a5568; line-height: 1.65; }

    /* ── FAQ ── */
    .faq-section {
      padding: 96px 24px;
      background: #fff;
    }
    .faq-list { max-width: 860px; margin: 0 auto; }
    .faq-item {
      border: 1px solid rgba(0, 123, 94, 0.12); border-radius: 12px;
      margin-bottom: 14px; background: #ffffff; overflow: hidden;
      transition: border-color 0.25s, box-shadow 0.25s;
      box-shadow: 0 2px 8px rgba(0,0,0,0.02);
    }
    .faq-item:hover {
      border-color: rgba(0, 123, 94, 0.28);
      box-shadow: 0 6px 18px rgba(0, 123, 94, 0.08);
    }
    .faq-q {
      width: 100%; background: none; border: none;
      display: flex; justify-content: space-between; align-items: center; gap: 16px;
      padding: 22px 26px; text-align: left; cursor: pointer;
      font-family: 'Sora', sans-serif; font-size: 1.02rem; font-weight: 600;
      color: #1a1a1a; transition: background 0.2s, color 0.2s;
    }
    .faq-q:hover { background: #f4f8f6; color: #007b5e; }
    .faq-q[aria-expanded="true"] { background: #f0f6f3; color: #007b5e; }
    .faq-chevron {
      flex-shrink: 0; width: 24px; height: 24px;
      border: 2px solid #007b5e; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      color: #007b5e; font-size: 0.85rem;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .faq-q[aria-expanded="true"] .faq-chevron { transform: rotate(180deg); }
    .faq-a {
      padding: 0 26px; max-height: 0; overflow: hidden;
      transition: max-height 0.35s ease, padding 0.25s;
    }
    .faq-a.open { max-height: 340px; padding: 0 26px 22px; }
    .faq-a p { font-size: 0.95rem; color: #4a5568; line-height: 1.75; }
    .faq-a a { color: #007b5e; font-weight: 600; }

    /* ── CTA STRIP ── */
    .cta-strip {
      background: linear-gradient(135deg, #007b5e 0%, #005a45 100%);
      padding: 76px 24px; text-align: center; position: relative;
    }
    .cta-strip h2 { color: #fff; margin-bottom: 0.85rem; }
    .cta-strip p { color: rgba(255,255,255,0.88); font-size: 1.05rem; margin-bottom: 2.2rem; max-width: 560px; margin-left: auto; margin-right: auto; line-height: 1.7; }
    .cta-btn-row { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
    .btn-white {
      display: inline-flex; align-items: center; justify-content: center;
      padding: 14px 32px;
      background: #fff; color: #007b5e;
      border-radius: 8px; font-weight: 700; font-size: 0.95rem;
      text-decoration: none; transition: transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.2s;
      font-family: 'Inter', sans-serif;
      box-shadow: 0 4px 14px rgba(0,0,0,0.15);
    }
    .btn-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.22); }
    .btn-ghost-white {
      display: inline-flex; align-items: center; justify-content: center;
      padding: 14px 32px;
      background: rgba(255,255,255,0.08); color: #fff;
      border: 2px solid rgba(255,255,255,0.6); border-radius: 8px;
      font-weight: 600; font-size: 0.95rem;
      text-decoration: none;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      transition: background 0.2s, border-color 0.2s, transform 0.2s;
      font-family: 'Inter', sans-serif;
    }
    .btn-ghost-white:hover { background: rgba(255,255,255,0.18); border-color: #fff; transform: translateY(-2px); }

    /* ── RELATED PRODUCTS ── */
    .related-section {
      padding: 86px 24px;
      background: #fafafa;
    }
    .related-grid {
      max-width: 1100px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .related-card {
      background: #fff; border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 14px; overflow: hidden;
      box-shadow: 0 4px 16px -2px rgba(0,0,0,0.04);
      transition: box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s;
      text-decoration: none; display: flex; flex-direction: column;
    }
    .related-card:hover {
      box-shadow: 0 12px 28px -4px rgba(0, 123, 94, 0.12);
      border-color: rgba(0, 123, 94, 0.32);
      transform: translateY(-3px);
    }
    .related-card-media { display: block; aspect-ratio: 16/9; overflow: hidden; }
    .related-card-media img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; transition: transform 0.35s ease; }
    .related-card:hover .related-card-media img { transform: scale(1.04); }
    .related-card-body { padding: 20px 22px; flex: 1; }
    .related-card-body h3 { color: #1a1a1a; font-size: 1.02rem; margin-bottom: 6px; font-family: 'Sora', sans-serif; }
    .related-card-body p { font-size: 0.88rem; color: #6b7280; line-height: 1.6; }

    /* ── MODAL (full-screen image) ── */
    #imgModal {
      display: none; position: fixed; inset: 0; z-index: 9999;
      background: rgba(13, 31, 25, 0.92);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      align-items: center; justify-content: center;
    }
    #imgModal.open { display: flex; }
    #imgModal img {
      max-width: 90vw; max-height: 90vh;
      border-radius: 10px; box-shadow: 0 20px 60px rgba(0,0,0,0.6);
      border: 1px solid rgba(255,255,255,0.12);
    }
    .modal-actions {
      position: absolute;
      top: 20px;
      right: 24px;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .modal-download {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      min-height: 40px;
      padding: 9px 16px;
      border-radius: 8px;
      background: #007b5e;
      color: #fff;
      text-decoration: none;
      font-size: 0.88rem;
      font-weight: 600;
      transition: background 0.2s, transform 0.15s;
    }
    .modal-download:hover {
      background: #005a45;
      transform: translateY(-1px);
    }
    .modal-download svg { width: 16px; height: 16px; fill: currentColor; }
    .modal-download[hidden] { display: none; }
    .modal-close {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.14);
      border: 1px solid rgba(255,255,255,0.28);
      color: #fff;
      font-size: 1.8rem;
      cursor: pointer;
      line-height: 1;
      display: flex; align-items: center; justify-content: center;
      transition: background 0.2s;
    }
    .modal-close:hover { background: rgba(255,255,255,0.25); }

    /* ── RESPONSIVE ── */
    @media (max-width: 1024px) {
      .market-wrap { grid-template-columns: 1fr; }
      .quality-grid { grid-template-columns: 1fr; }
      .overview-inner { grid-template-columns: 1fr 1fr; }
      .process-steps { grid-template-columns: 1fr 1fr; }
      .related-grid { grid-template-columns: 1fr 1fr; }
      .applications-list { grid-template-columns: repeat(2, 1fr); gap: 22px; }
      .why-grid { grid-template-columns: 1fr 1fr; }
      .packaging-grid { grid-template-columns: 1fr; }
      .qa-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      .overview-inner { grid-template-columns: 1fr 1fr; }
      .overview-item { border-right: none; border-bottom: 1px solid #edf2f0; }
      .quality-visuals { grid-template-columns: 1fr; }
      .quality-img-full,
      .quality-img-featured,
      .lab-report-card { grid-column: auto; }
      .process-steps { grid-template-columns: 1fr; }
      .related-grid { grid-template-columns: 1fr; }
      .applications-list { grid-template-columns: 1fr; gap: 20px; }
      .why-grid { grid-template-columns: 1fr; }
      .qa-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 480px) {
      .overview-inner { grid-template-columns: 1fr; }
      .hero-zno { display: none; }
      .market-section { padding: 58px 18px; }
      .market-panel { padding: 20px; }
      .modal-actions {
        top: 14px;
        right: 14px;
        left: 14px;
        justify-content: space-between;
      }
      .modal-download {
        min-height: 36px;
        padding: 8px 11px;
        font-size: 0.78rem;
      }
      .modal-close {
        width: 36px;
        height: 36px;
        font-size: 1.5rem;
      }
      .quality-visuals { gap: 12px; }
      .quality-img-card { border-radius: 10px; }
      .quality-img-card figcaption { padding: 9px 12px; }
      .quality-img-card img,
      .quality-img-product img { aspect-ratio: 4 / 3; }
      .lab-report-card {
        align-items: flex-start;
        gap: 12px;
        padding: 12px;
      }
      .lab-report-thumb { width: 58px; height: 58px; }
      .lab-report-icon { width: 28px; height: 28px; }
    }

    /* Reveal */
    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
    .reveal.visible { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
      .reveal { opacity: 1; transform: none; transition: none; }
      .application-card,
      .application-img,
      .application-body h3,
      .app-badge { transition: none; }
      .application-card:hover,
      .application-card:hover .application-img { transform: none; }
    }

    /* overflow guard */
    html, body { max-width: 100%; overflow-x: hidden; }
    header { left: 0; right: 0; max-width: 100%; box-sizing: border-box; }

    /* Skip layout and paint work for sections well below the initial viewport. */
    .why-section,
    .quality-section,
    .process-section,
    .applications-section,
    .packaging-section,
    .market-section,
    .export-section,
    .qa-section,
    .faq-section,
    .cta-strip,
    .related-section {
      content-visibility: auto;
      contain-intrinsic-size: auto 900px;
    </style>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/whatsapp-widget.php'; ?>

<main id="main-content">

<!-- ════════════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════════════ -->
<section class="page-hero" aria-label="Zinc Oxide product page">
  <div class="hero-zno" aria-hidden="true">ZnO</div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo site_url('/'); ?>">Home</a>
      <span>›</span>
      <a href="<?php echo site_url('/products/'); ?>">Products</a>
      <span>›</span>
      <span aria-current="page">Zinc Oxide</span>
    </nav>
    <p class="eyebrow" style="color:#4ade9e;">Flagship Manufactured Product</p>
    <h1>Zinc Oxide Manufacturer in Pakistan</h1>
    <p class="hero-subtitle">99.9% High-Purity Zinc Oxide (ZnO) | 25 KG Bags | Bulk &amp; Export Supply</p>
    <div class="hero-tag-row">
      <span class="hero-tag highlight">ISO 9001:2015 Certified</span>
      <span class="hero-tag">25 kg Bags</span>
      <span class="hero-tag">Third-Party Lab Tested</span>
      <span class="hero-tag">Made in Gujranwala, Pakistan</span>
    </div>
    <p class="hero-desc">
      Bhatti Chemicals Industry manufactures high-purity Zinc Oxide through a controlled roasting and oxidation process at our facility in Gujranwala, Pakistan. Consistent quality across every batch, backed by quality documentation and third-party laboratory testing.
    </p>
    <div class="hero-ctas">
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary" id="hero-cta-quote">Request a Quote</a>
      <a href="#specifications" class="btn-ghost" id="hero-cta-specs">View Specifications</a>
    </div>
    <p class="last-updated">Last updated: <time datetime="2026-09-19">September 2026</time></p>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     OVERVIEW STRIP
════════════════════════════════════════════════ -->
<div class="overview-strip" role="list" aria-label="Key product specifications">
  <div class="overview-inner">
    <div class="overview-item" role="listitem">
      <span class="overview-label">Purity</span>
      <span class="overview-value">99.9%</span>
      <span class="overview-note">Zinc Oxide (ZnO)</span>
    </div>
    <div class="overview-item" role="listitem">
      <span class="overview-label">Physical Form</span>
      <span class="overview-value">Fine Powder</span>
      <span class="overview-note">White, free from contaminants</span>
    </div>
    <div class="overview-item" role="listitem">
      <span class="overview-label">Pack Size</span>
      <span class="overview-value">25 kg</span>
      <span class="overview-note">Standard bags (MOQ: 25 kg)</span>
    </div>
    <div class="overview-item" role="listitem">
      <span class="overview-label">Quality Standard</span>
      <span class="overview-value">ISO 9001</span>
      <span class="overview-note">:2015 Certified + 3rd-party tested</span>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════
     WHY CHOOSE A PAKISTANI ZINC OXIDE MANUFACTURER
════════════════════════════════════════════════ -->
<section class="why-section" id="why-choose" aria-labelledby="why-choose-heading">
  <div class="section-header reveal">
    <p class="eyebrow">Direct from the Manufacturer</p>
    <h2 id="why-choose-heading">Why Choose a Pakistani Zinc Oxide Manufacturer?</h2>
  </div>
  <div class="why-intro reveal">
    <p>
      Bhatti Chemicals Industry is a Zinc Oxide manufacturer based in Gujranwala, Pakistan. As a direct manufacturer, we control production quality from raw material intake through to final packaging and dispatch. Industrial buyers work directly with our production and sales teams for quotations, quality documentation, and supply scheduling.
    </p>
  </div>
  <div class="why-grid">
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 2 10 5v15h-2V8.2l-8-4-8 4V22H2V7l10-5Zm-6 9h12v11h-2v-3H8v3H6V11Zm2 2v4h8v-4H8Z"/></svg></div>
      <h3>Direct Manufacturer</h3>
      <p>Buy Zinc Oxide directly from our production facility in Gujranwala, Pakistan. No middlemen — direct communication with the manufacturing team.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v5l5 8.7A2.9 2.9 0 0 1 16.5 22h-9A2.9 2.9 0 0 1 5 17.7L10 9V4H9V2Zm2.8 8-5 8.7c-.3.6.1 1.3.7 1.3h9c.6 0 1-.7.7-1.3l-5-8.7h-.4Z"/></svg></div>
      <h3>Quality Documentation</h3>
      <p>Every batch is tested before dispatch. Certificate of Analysis (COA) and Technical Data Sheet (TDS) documents are available on request.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 2 9 4.5v11L12 22l-9-4.5v-11L12 2Zm0 2.2L6.2 7.1 12 10l5.8-2.9L12 4.2ZM5 8.7v7.6l6 3v-7.6l-6-3Zm8 10.6 6-3V8.7l-6 3v7.6Z"/></svg></div>
      <h3>Flexible Supply</h3>
      <p>Available in standard 25 kg bags with a minimum order of 25 kg. Bulk-order quantities are supported for ongoing industrial procurement.</p>
    </div>
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2Zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8Zm-1-6h2v2h-2v-2Zm0-8h2v6h-2V6Z"/></svg></div>
      <h3>Export Inquiry Support</h3>
      <p>Zinc Oxide is available for export inquiries. Contact our team for destination-specific quotation, packaging, and logistics information.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SPECIFICATIONS & QUALITY
════════════════════════════════════════════════ -->
<section class="quality-section" id="specifications" aria-labelledby="specs-heading">
  <div class="quality-grid">
    <div class="quality-text reveal">
      <p class="eyebrow">Product Quality</p>
      <h2 id="specs-heading">Zinc Oxide Specifications</h2>
      <p>
        Zinc Oxide (ZnO) is a white, fine powder with ≥ 99.9% purity manufactured by Bhatti Chemicals Industry. Our Zinc Oxide meets the quality requirements of industrial buyers in rubber, ceramics, pharmaceuticals, and paint manufacturing. Every batch is manufactured to consistent purity, then tested before dispatch.
      </p>
      <p>
        The table below reflects the standard quality parameters for our Zinc Oxide. Buyers requiring specific technical data sheets or certificate of analysis documents can <a href="<?php echo site_url('/contact-us.php'); ?>">request them directly</a> from our team.
      </p>

      <table class="specs-table" aria-label="Zinc Oxide quality specifications">
        <thead>
          <tr>
            <th>Parameter</th>
            <th>Specification</th>
            <th>Industry Relevance</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Zinc Oxide (ZnO) Content</td>
            <td class="good">≥ 99.9%</td>
            <td>Highest grade for industrial use</td>
          </tr>
          <tr>
            <td>CAS Number</td>
            <td>1314-13-2</td>
            <td>Standard chemical identifier</td>
          </tr>
          <tr>
            <td>Molecular Formula</td>
            <td>ZnO</td>
            <td>Zinc Oxide</td>
          </tr>
          <tr>
            <td>Physical Appearance</td>
            <td>Fine white powder</td>
            <td>Uniform dispersion in formulations</td>
          </tr>
          <tr>
            <td>Moisture Content</td>
            <td>≤ 0.3%</td>
            <td>Stability in storage and processing</td>
          </tr>
          <tr>
            <td>Lead (Pb)</td>
            <td>≤ 50 ppm</td>
            <td>Heavy-metal compliance</td>
          </tr>
          <tr>
            <td>Iron (Fe)</td>
            <td>≤ 0.003%</td>
            <td>Colour consistency in ceramics &amp; coatings</td>
          </tr>
          <tr>
            <td>Standard Pack Size</td>
            <td>25 kg bags</td>
            <td>Efficient handling and storage</td>
          </tr>
          <tr>
            <td>Minimum Order Quantity</td>
            <td>25 kg (1 bag)</td>
            <td>Flexible for trials and large orders</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="quality-visuals reveal">
      <figure class="quality-img-card">
        <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>"
             alt="High-purity Zinc Oxide fine white powder — physical appearance"
             width="400" height="342" loading="lazy" decoding="async">
        <figcaption>Physical Appearance — fine white powder</figcaption>
      </figure>
      <figure class="quality-img-card quality-img-product">
        <img src="<?php echo site_url('/assets/images/products/zinc-oxide-bag.jpg'); ?>"
             alt="Bhatti Chemicals Industry Zinc Oxide 25 kg bag packaging"
             width="853" height="1316" loading="lazy" decoding="async">
        <figcaption>Standard 25 kg bag packaging</figcaption>
      </figure>
      <figure class="quality-img-card quality-img-featured">
        <img src="<?php echo site_url('/assets/images/misc/zinc-oxide-production-facility.webp'); ?>"
             alt="Zinc Oxide production and 25 kg bag packaging facility at Bhatti Chemicals Industry"
             width="960" height="640" loading="lazy" decoding="async">
        <figcaption>Zinc Oxide production and packaging facility</figcaption>
      </figure>
      <div class="lab-report-card zoomable-card" data-img="<?php echo site_url('/assets/lab-reports/zinc-oxide-lab-report.jpg'); ?>" data-download="<?php echo site_url('/assets/lab-reports/zinc-oxide-lab-report.jpg'); ?>">
        <img src="<?php echo site_url('/assets/lab-reports/zinc-oxide-lab-report-thumb.webp'); ?>" alt="Zinc Oxide laboratory quality report — Bhatti Chemicals Industry" class="lab-report-thumb" width="160" height="122" loading="lazy" decoding="async">
        <div class="lab-report-info"><strong>Laboratory Quality Report</strong><span>Click to view full screen</span></div>
        <div class="lab-report-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 4h6v2H6v4H4Zm10 0h6v6h-2V6h-4ZM4 14h2v4h4v2H4Zm14 0h2v6h-6v-2h4Z"/></svg></div>
      </div>
    </div>
  </div>

  <!-- Production video -->
  <div class="production-video-frame reveal">
    <video data-src="<?php echo site_url('/assets/videos/zinc-oxide-furnace.mp4'); ?>" autoplay loop muted playsinline
           preload="none" width="960" height="420"
           aria-label="Zinc Oxide production furnace — Bhatti Chemicals Industry">
      <track kind="captions" srclang="en" label="English" src="<?php echo site_url('/assets/videos/zinc-oxide-furnace-captions.vtt'); ?>" default>
    </video>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MANUFACTURING PROCESS
════════════════════════════════════════════════ -->
<section class="process-section" id="manufacturing" aria-labelledby="process-heading">
  <div class="section-header reveal">
    <p class="eyebrow">How We Make It</p>
    <h2 id="process-heading">Zinc Oxide Manufacturing Process</h2>
    <p class="section-desc">A controlled six-step production process converts high-grade zinc into consistently pure Zinc Oxide powder, ready for industrial use.</p>
  </div>
  <div class="process-steps">
    <div class="process-step reveal">
      <div class="step-num">01</div>
      <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M10 4a6 6 0 1 0 3.7 10.7L19 20l1-1-5.3-5.3A6 6 0 0 0 10 4Zm0 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8Z"/></svg></div>
      <h3>Raw Material Selection</h3>
      <p>High-grade zinc ore or pure zinc metal is sourced from trusted suppliers to ensure consistent input quality for every production run.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">02</div>
      <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M13.5 2s.6 3-1.8 5.3C9.5 9.4 8 11.1 8 14a4 4 0 0 0 8 0c0-1.4-.5-2.8-1.4-4 2.7 1.6 4.4 4.3 4.4 7a7 7 0 0 1-14 0c0-5 4.2-8.2 8.5-15Z"/></svg></div>
      <h3>Roasting &amp; Oxidation</h3>
      <p>The zinc is heated in our furnace, where it reacts with oxygen at controlled temperatures to produce zinc oxide vapour.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">03</div>
      <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 7h10a3 3 0 1 0-3-3h2a1 1 0 1 1 1 1H3v2Zm0 4h15a3 3 0 1 1-3 3h2a1 1 0 1 0 1-1H3v-2Zm0 6h8v2H3v-2Z"/></svg></div>
      <h3>Cooling &amp; Collection</h3>
      <p>Zinc oxide vapour is cooled and collected as fine white powder through a collection system that prevents contamination.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">04</div>
      <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v5l5 8.7A2.9 2.9 0 0 1 16.5 22h-9A2.9 2.9 0 0 1 5 17.7L10 9V4H9V2Zm2.8 8-5 8.7c-.3.6.1 1.3.7 1.3h9c.6 0 1-.7.7-1.3l-5-8.7h-.4Z"/></svg></div>
      <h3>Quality Testing</h3>
      <p>Each batch undergoes rigorous chemical and physical analysis in our lab and by accredited third-party laboratories to verify purity, composition, and physical properties.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">05</div>
      <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 2 9 4.5v11L12 22l-9-4.5v-11L12 2Zm0 2.2L6.2 7.1 12 10l5.8-2.9L12 4.2ZM5 8.7v7.6l6 3v-7.6l-6-3Zm8 10.6 6-3V8.7l-6 3v7.6Z"/></svg></div>
      <h3>Packaging &amp; Dispatch</h3>
      <p>The tested product is packed in 25 kg bags with full batch documentation and dispatched locally or internationally with proper shipping paperwork.</p>
    </div>
    <div class="process-step reveal">
      <div class="step-num">06</div>
      <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 2 10 5v15h-2V8.2l-8-4-8 4V22H2V7l10-5Zm-6 9h12v11h-2v-3H8v3H6V11Zm2 2v4h8v-4H8Z"/></svg></div>
      <h3>Storage &amp; Inventory</h3>
      <p>Finished product is stored in a clean, dry, moisture-controlled warehouse to preserve quality before delivery to customers.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INDUSTRIAL APPLICATIONS
════════════════════════════════════════════════ -->
<section class="applications-section" id="applications" aria-labelledby="applications-heading">
  <div class="section-header reveal">
    <p class="eyebrow">Industries Served</p>
    <h2 id="applications-heading">Industrial Applications of Zinc Oxide</h2>
    <p class="section-desc">Zinc Oxide is a critical input material across diverse manufacturing industries, each depending on its specific chemical and physical properties.</p>
  </div>
  <div class="applications-list">
    <article class="application-card reveal">
      <div class="application-media"><img src="https://images.unsplash.com/photo-1578844251758-2f71da64c96f?auto=format&fit=crop&w=800&q=80" alt="Zinc Oxide used in rubber and tyre manufacturing" class="application-img" width="800" height="500" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Rubber &amp; Tyres</span>
        <h3>Rubber and Tyre Manufacturing</h3>
        <p>Zinc Oxide is a key activator in the rubber vulcanization process, enhancing elasticity, tensile strength, and durability of rubber compounds. It improves heat dissipation in tyres, preventing overheating during use, and extends the service life of tyre and industrial rubber products through its anti-aging properties.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>" class="app-link">
          Zinc Oxide for Rubber &amp; Tyre Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=800&q=80" alt="Zinc Oxide used in paints and coatings" class="application-img" width="800" height="500" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Paints &amp; Coatings</span>
        <h3>Paints and Protective Coatings</h3>
        <p>As a protective additive in paints and coatings, Zinc Oxide improves mildew and mold resistance, enhances UV stability, and acts as a corrosion inhibitor that extends the life of metal structures. Widely used in automotive, marine, and architectural coatings.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>" class="app-link">
          Zinc Oxide for Paints &amp; Coatings Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=800&q=80" alt="Zinc Oxide used in ceramics and glass manufacturing" class="application-img" width="800" height="500" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Ceramics &amp; Glass</span>
        <h3>Ceramics and Glass Manufacturing</h3>
        <p>In ceramic production, Zinc Oxide is used as a flux that lowers melting temperatures in glazes and improves surface finish, colour brightness, and thermal stability. In glass manufacturing, it enhances chemical durability and optical clarity.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/ceramics-and-glass.php'); ?>" class="app-link">
          Zinc Oxide for Ceramics &amp; Glass Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=800&q=80" alt="Zinc Oxide used in pharmaceuticals and ointments" class="application-img" width="800" height="500" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Pharmaceuticals</span>
        <h3>Pharmaceuticals and Ointments</h3>
        <p>Used extensively in diaper rash creams, wound dressings, medicated powders, and anti-inflammatory formulations. Zinc Oxide's antibacterial and antifungal properties promote faster recovery from burns, cuts, and skin conditions, making it an established ingredient in both prescription and over-the-counter medicines.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>" class="app-link">
          Zinc Oxide for Pharmaceutical Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=800&q=80" alt="Zinc Oxide used in cosmetics and skincare" class="application-img" width="800" height="500" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Cosmetics &amp; Skincare</span>
        <h3>Cosmetics and Skincare Products</h3>
        <p>Zinc Oxide serves as a physical UV blocker in sunscreens and is widely used in foundations, lotions, and baby powders for its skin-soothing, anti-inflammatory, and antibacterial properties. Its non-toxic and gentle nature makes it suitable for sensitive skin formulations.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/cosmetics-and-skincare.php'); ?>" class="app-link">
          Zinc Oxide for Cosmetics &amp; Skincare Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=800&q=80" alt="Zinc Oxide used in animal feed and agriculture" class="application-img" width="800" height="500" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Agriculture &amp; Animal Feed</span>
        <h3>Animal Feed and Agricultural Fertilizers</h3>
        <p>Zinc Oxide is an essential micronutrient in animal feed, supporting immune function, growth, and reproductive health in livestock and poultry. In agricultural fertilizers, it corrects zinc deficiency in soils, improving plant metabolism and increasing crop yields.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>" class="app-link">
          Zinc Oxide for Agriculture &amp; Feed Applications &rarr;
        </a>
      </div>
    </article>
  </div>
  <div class="apps-hub-cta reveal">
    <a href="<?php echo site_url('/zinc-oxide-applications/'); ?>" class="btn-primary">
      View All Industrial Applications &amp; Specifications Hub &rarr;
    </a>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     PACKAGING
════════════════════════════════════════════════ -->
<section class="packaging-section" id="packaging" aria-labelledby="packaging-heading">
  <div class="packaging-grid">
    <div class="packaging-content reveal">
      <p class="eyebrow">Packaging &amp; Bulk Supply</p>
      <h2 id="packaging-heading">Zinc Oxide Packaging</h2>
      <p>
        Bhatti Chemicals Industry supplies Zinc Oxide in standard 25 kg bags, designed for efficient handling, storage, and transport. Bags are sealed to protect the product from moisture and contamination during transit and warehouse storage.
      </p>
      <p>
        Bulk orders are available for manufacturers and distributors with ongoing Zinc Oxide requirements. Contact our team to discuss quantity-based quotations and delivery scheduling.
      </p>
      <ul class="packaging-list">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Standard 25 kg bag packaging</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Minimum order quantity: 25 kg (1 bag)</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Bulk supply available for industrial procurement</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Sealed bags for moisture protection</span></li>
      </ul>
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary" style="margin-top:1rem;">Request Bulk Quotation</a>
    </div>
    <div class="packaging-visual reveal">
      <figure>
        <img src="<?php echo site_url('/assets/images/products/zinc-oxide-bag.jpg'); ?>"
             alt="Bhatti Chemicals Industry Zinc Oxide 25 kg bag packaging — sealed for moisture protection"
             width="853" height="1316" loading="lazy" decoding="async">
        <figcaption>Zinc Oxide — 25 kg sealed bag</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     PAKISTAN SUPPLY
════════════════════════════════════════════════ -->
<section class="market-section" id="pakistan-supply" aria-labelledby="zinc-oxide-pakistan">
  <div class="market-wrap">
    <div class="market-copy reveal">
      <p class="eyebrow">Pakistan Supply</p>
      <h2 id="zinc-oxide-pakistan">Zinc Oxide Supply Across Pakistan</h2>
      <p>
        We supply Zinc Oxide from our manufacturing facility in Gujranwala to industrial customers across Pakistan. Our product serves manufacturers, traders, and distributors who require stable quality, 25 kg bag packaging, batch traceability, and laboratory reports.
      </p>
      <p>
        Whether you need Zinc Oxide for rubber manufacturing, tyre production, ceramics, paints, coatings, pharmaceuticals, or agricultural applications, our team can support regular supply requirements with responsive quotation support.
      </p>
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary" style="margin-top:0.5rem;">Contact for Pakistan Supply</a>
    </div>
    <aside class="market-panel reveal" aria-label="Pakistan supply strengths">
      <h3>Supply Capabilities</h3>
      <ul class="market-list">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>99.9% purity Zinc Oxide with third-party laboratory testing.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Standard 25 kg bag packing for local distribution and bulk orders.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>ISO 9001:2015 certified manufacturing and documented batch quality.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Direct manufacturer communication and quotation support.</span></li>
      </ul>
    </aside>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INTERNATIONAL EXPORT
════════════════════════════════════════════════ -->
<section class="export-section" id="export" aria-labelledby="export-heading">
  <div class="export-inner reveal">
    <p class="eyebrow">International Supply</p>
    <h2 id="export-heading">Zinc Oxide Export Inquiries</h2>
    <p>
      Bulk Zinc Oxide is available for export inquiries. Contact Bhatti Chemicals Industry for destination-specific quotation, packaging specifications, and logistics information. We support export documentation including certificate of analysis, technical data sheets, and shipping paperwork.
    </p>
    <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary">Contact for Export Inquiry</a>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     QUALITY ASSURANCE
════════════════════════════════════════════════ -->
<section class="qa-section" id="quality" aria-labelledby="qa-heading">
  <div class="section-header reveal">
    <p class="eyebrow">Quality Assurance</p>
    <h2 id="qa-heading">Quality Standards &amp; Testing</h2>
    <p class="section-desc">Our Zinc Oxide manufacturing operates under a documented quality management system, with every batch tested before dispatch.</p>
  </div>
  <div class="qa-grid">
    <div class="qa-card reveal">
      <div class="qa-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4Zm0 2.18 7 3.12v4.7c0 4.67-3.13 9.06-7 10.17-3.87-1.11-7-5.5-7-10.17V6.3l7-3.12Zm-1 5.82v6h2v-6h-2Zm0 8v2h2v-2h-2Z"/></svg></div>
      <h3>ISO 9001:2015</h3>
      <p>Bhatti Chemicals Industry operates under ISO 9001:2015 certified quality management across production, packaging, and dispatch.</p>
    </div>
    <div class="qa-card reveal">
      <div class="qa-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v5l5 8.7A2.9 2.9 0 0 1 16.5 22h-9A2.9 2.9 0 0 1 5 17.7L10 9V4H9V2Zm2.8 8-5 8.7c-.3.6.1 1.3.7 1.3h9c.6 0 1-.7.7-1.3l-5-8.7h-.4Z"/></svg></div>
      <h3>Third-Party Lab Testing</h3>
      <p>Zinc Oxide batches are tested by accredited third-party laboratories to independently verify purity, composition, and physical properties.</p>
    </div>
    <div class="qa-card reveal">
      <div class="qa-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6Zm-1 7V3.5L18.5 9H13ZM6 20V4h5v7h7v9H6Zm2-7h8v2H8v-2Zm0 4h5v2H8v-2Z"/></svg></div>
      <h3>Batch Documentation</h3>
      <p>Certificate of Analysis (COA) and Technical Data Sheet (TDS) documents are available for every batch. Buyers can request documentation with their order.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════ -->
<section class="faq-section" id="faq" aria-labelledby="faq-heading">
  <div class="section-header reveal">
    <p class="eyebrow">Common Questions</p>
    <h2 id="faq-heading">Zinc Oxide — Frequently Asked Questions</h2>
  </div>
  <div class="faq-list">
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What is Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Zinc Oxide (ZnO) is a white, fine powder produced by oxidizing zinc metal. It has the CAS number 1314-13-2 and the molecular formula ZnO. Zinc Oxide is used as a functional additive across many industries including rubber vulcanization, ceramics, paints, pharmaceuticals, cosmetics, agriculture, and animal feed.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What purity of Zinc Oxide does Bhatti Chemicals Industry supply?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Bhatti Chemicals Industry produces Zinc Oxide at ≥ 99.9% purity. It is presented as a fine white powder, free from visible contaminants, and undergoes third-party laboratory analysis before dispatch. Full certificates of analysis are available on request.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Where is your Zinc Oxide manufactured?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Our Zinc Oxide is manufactured at our production facility in Gujranwala, Pakistan. The manufacturing process involves controlled roasting and oxidation of high-grade zinc to produce fine Zinc Oxide powder.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What industries use Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Zinc Oxide from Bhatti Chemicals Industry is used in <a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>">rubber and tyre manufacturing</a>, <a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>">paints and protective coatings</a>, ceramics and glass, <a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>">pharmaceuticals and ointments</a>, <a href="<?php echo site_url('/zinc-oxide-applications/cosmetics-and-skincare.php'); ?>">cosmetics and sunscreens</a>, and <a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>">animal feed and agricultural fertilizers</a>.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Is Zinc Oxide available in 25 kg bags?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. Bhatti Chemicals Industry supplies Zinc Oxide in standard 25 kg sealed bags. The minimum order quantity is 25 kg (one bag), making it accessible for both trial orders and ongoing industrial procurement.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Do you supply bulk quantities of Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. Bulk supply is available for manufacturers and distributors with ongoing requirements. Contact our team with your required quantity for a quotation. We support regular supply scheduling for industrial customers.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Do you provide a Certificate of Analysis (COA)?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. A Certificate of Analysis (COA) is available for every batch of Zinc Oxide we produce. The COA includes purity assay results and key quality parameters. <a href="<?php echo site_url('/contact-us.php'); ?>">Contact us</a> to request a sample COA or to receive documentation with your order.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Do you provide a Technical Data Sheet (TDS)?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. A Technical Data Sheet (TDS) containing product specifications, physical properties, and handling information is available on request. <a href="<?php echo site_url('/contact-us.php'); ?>">Contact our team</a> to receive the current TDS for our Zinc Oxide.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What is the CAS number of Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>The CAS number for Zinc Oxide is 1314-13-2. Its molecular formula is ZnO and its molecular weight is 81.38 g/mol. These identifiers are standard across all industrial and commercial applications of Zinc Oxide.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        How can I request a Zinc Oxide quotation?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Contact us by email at <a href="mailto:info@bhattichemicalsindustry.com.pk">info@bhattichemicalsindustry.com.pk</a> or via WhatsApp at <a href="https://wa.me/923041462460">+92 304 1462460</a>. Please specify the product, required quantity, and your location. We respond to all trade inquiries promptly.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CTA STRIP
════════════════════════════════════════════════ -->
<section class="cta-strip" id="contact" aria-labelledby="cta-heading">
  <h2 id="cta-heading">Request a Zinc Oxide Quotation</h2>
  <p>Specify your required quantity, application, and destination. Our team will respond with pricing and documentation.</p>
  <div class="cta-btn-row">
    <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-white">Request a Quote</a>
    <a href="https://wa.me/923041462460" class="btn-ghost-white" target="_blank" rel="noopener">WhatsApp +92 304 1462460</a>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     RELATED PRODUCTS
════════════════════════════════════════════════ -->
<section class="related-section" aria-labelledby="related-heading">
  <div class="section-header reveal">
    <p class="eyebrow">Also From Bhatti Chemicals</p>
    <h2 id="related-heading">Related Zinc Products</h2>
  </div>
  <div class="related-grid">
    <a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="related-card reveal">
      <span class="related-card-media"><img src="<?php echo site_url('/assets/images/products/zinc-ash-fine.webp'); ?>" alt="Zinc Ash Fine 65-70% — Bhatti Chemicals Industry" width="480" height="360" loading="lazy" decoding="async"></span>
      <div class="related-card-body">
        <h3>Zinc Ash Fine (65–70%)</h3>
        <p>High-value zinc recovery material for export. Consistent analysis, 25–50 kg bags.</p>
      </div>
    </a>
    <a href="<?php echo site_url('/products/zinc-ingot.php'); ?>" class="related-card reveal">
      <span class="related-card-media"><img src="<?php echo site_url('/assets/images/products/zinc-ingot.webp'); ?>" alt="Zinc Ingot — Bhatti Chemicals Industry" width="660" height="405" loading="lazy" decoding="async"></span>
      <div class="related-card-body">
        <h3>Zinc Ingot</h3>
        <p>Industrial-grade zinc ingots for galvanizing, die casting, and alloy production.</p>
      </div>
    </a>
    <a href="<?php echo site_url('/products/zinc-dross.php'); ?>" class="related-card reveal">
      <span class="related-card-media"><img src="<?php echo site_url('/assets/images/products/zinc-dross.jpg'); ?>" alt="Zinc Dross — Bhatti Chemicals Industry" width="960" height="1280" loading="lazy" decoding="async"></span>
      <div class="related-card-body">
        <h3>Zinc Dross</h3>
        <p>Consistent-grade zinc dross for recycling and refining workflows.</p>
      </div>
    </a>
  </div>
</section>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<!-- Full-screen image modal -->
<div id="imgModal" role="dialog" aria-modal="true" aria-label="Full-screen image">
  <div class="modal-actions">
    <a id="modalDownload" class="modal-download" href="#" download="bhatti-chemicals-zinc-oxide-lab-report.jpg" hidden>
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11 3h2v10.2l3.6-3.6L18 11l-6 6-6-6 1.4-1.4 3.6 3.6V3ZM5 19h14v2H5v-2Z"/></svg>
      <span>Download Lab Report</span>
    </a>
    <button type="button" class="modal-close" onclick="document.getElementById('imgModal').classList.remove('open')" aria-label="Close">&times;</button>
  </div>
  <img id="modalImg" src="" alt="Full screen view">
</div>

<script>
// Zoom images
const modal = document.getElementById('imgModal');
const modalImg = document.getElementById('modalImg');
const modalDownload = document.getElementById('modalDownload');

function openImageModal(src, downloadUrl = '') {
  modalImg.src = src;
  if (downloadUrl) {
    modalDownload.href = downloadUrl;
    modalDownload.hidden = false;
  } else {
    modalDownload.href = '#';
    modalDownload.hidden = true;
  }
  modal.classList.add('open');
}

function closeImageModal() {
  modal.classList.remove('open');
}

document.querySelectorAll('.zoomable').forEach(img => {
  img.style.cursor = 'zoom-in';
  img.addEventListener('click', function(){
    openImageModal(this.src);
  });
});
document.querySelectorAll('.zoomable-card').forEach(card => {
  card.addEventListener('click', function(){
    openImageModal(this.dataset.img, this.dataset.download || '');
  });
});
modal.addEventListener('click', function(e){
  if(e.target === this) closeImageModal();
});
document.addEventListener('keydown', e => {
  if(e.key === 'Escape') closeImageModal();
});

// Keep the below-the-fold production video off the critical loading path.
(function(){
  const video = document.querySelector('.production-video-frame video[data-src]');
  if (!video) return;

  function loadVideo() {
    if (video.src) return;
    video.src = video.dataset.src;
    video.load();
    const playPromise = video.play();
    if (playPromise) playPromise.catch(function(){});
  }

  if (!('IntersectionObserver' in window)) {
    loadVideo();
    return;
  }

  const videoObserver = new IntersectionObserver(function(entries) {
    if (!entries[0].isIntersecting) return;
    loadVideo();
    videoObserver.disconnect();
  }, { rootMargin: '300px 0px' });
  videoObserver.observe(video);
})();

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
        a.classList.remove('open'); a.hidden = true;
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
