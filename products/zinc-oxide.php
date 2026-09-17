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

    <meta name="description" content="Zinc Oxide manufacturer and supplier in Pakistan. Buy high-purity ZnO from Bhatti Chemicals Industry in Gujranwala: 99.9% purity, ISO 9001:2015 certified, 25 kg bags, local supply and export-ready orders.">
    <meta name="keywords" content="Zinc Oxide Pakistan, Zinc Oxide manufacturer Pakistan, Zinc Oxide supplier Pakistan, Zinc Oxide exporter Pakistan, buy zinc oxide, high purity zinc oxide, zinc oxide for rubber, zinc oxide for ceramics, zinc oxide 99.9%, zinc oxide Gujranwala, ZnO supplier Pakistan, ISO certified zinc oxide">
    <link rel="canonical" href="https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php">

    <!-- Open Graph -->
    <meta property="og:type" content="product">
    <meta property="og:site_name" content="Bhatti Chemicals Industry">
    <meta property="og:title" content="Zinc Oxide (ZnO) — 99.9% Purity | Bhatti Chemicals Industry, Pakistan">
    <meta property="og:description" content="High-purity Zinc Oxide manufactured in Gujranwala, Pakistan. 99.9% purity, ISO 9001:2015 certified, 25 kg bags. Serving rubber, ceramics, paint, pharmaceutical & agriculture industries.">
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

    <title>Zinc Oxide (ZnO) — 99.9% Purity | Bhatti Chemicals Industry, Gujranwala Pakistan</title>

    <!-- Product Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "@id": "https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php#product",
      "name": "Zinc Oxide (ZnO)",
      "description": "High-purity Zinc Oxide manufactured by Bhatti Chemicals Industry in Gujranwala, Pakistan. 99.9% purity, fine white powder, ISO 9001:2015 certified, packed in 25 kg bags. Used in rubber vulcanization, ceramics, paints, pharmaceuticals, cosmetics, agriculture, and animal feed.",
      "image": "https://www.bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp",
      "url": "https://www.bhattichemicalsindustry.com.pk/products/zinc-oxide.php",
      "brand": {
        "@type": "Brand",
        "name": "Bhatti Chemicals Industry"
      },
      "manufacturer": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "address": { "@type": "PostalAddress", "addressLocality": "Gujranwala", "addressCountry": "PK" }
      },
      "category": "Zinc Oxide",
      "material": "Zinc Oxide",
      "offers": {
        "@type": "Offer",
        "url": "https://www.bhattichemicalsindustry.com.pk/contact-us.php",
        "availability": "https://schema.org/InStock",
        "itemCondition": "https://schema.org/NewCondition",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "0.00",
          "priceCurrency": "PKR",
          "description": "Quote-based price confirmed after quantity and destination review; contact our team for current pricing."
        },
        "seller": {
          "@type": "Organization",
          "name": "Bhatti Chemicals Industry"
        }
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
          "name": "What is the purity of Bhatti Chemicals Industry's Zinc Oxide?",
          "acceptedAnswer": { "@type": "Answer", "text": "Bhatti Chemicals Industry produces Zinc Oxide at 99.9% purity. It is presented as a fine white powder, free from visible contaminants, and packed in 25 kg bags." }
        },
        {
          "@type": "Question",
          "name": "What industries use Zinc Oxide from Bhatti Chemicals Industry?",
          "acceptedAnswer": { "@type": "Answer", "text": "Zinc Oxide from Bhatti Chemicals Industry is used in rubber and tyre manufacturing, paints and coatings, ceramics and glass, pharmaceuticals and ointments, cosmetics and sunscreens, animal feed, agricultural fertilizers, and battery manufacturing." }
        },
        {
          "@type": "Question",
          "name": "What is the minimum order quantity for Zinc Oxide?",
          "acceptedAnswer": { "@type": "Answer", "text": "The minimum order quantity for Zinc Oxide from Bhatti Chemicals Industry is 25 kg — equivalent to one standard bag." }
        },
        {
          "@type": "Question",
          "name": "Is Bhatti Chemicals Industry's Zinc Oxide ISO certified?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Bhatti Chemicals Industry is ISO 9001:2015 certified. Zinc Oxide undergoes third-party laboratory testing on every batch to verify purity and quality." }
        },
        {
          "@type": "Question",
          "name": "How is Zinc Oxide manufactured by Bhatti Chemicals Industry?",
          "acceptedAnswer": { "@type": "Answer", "text": "Bhatti Chemicals Industry manufactures Zinc Oxide through a roasting and oxidation process: high-grade zinc is heated in a furnace, reacting with oxygen to produce zinc oxide vapour, which is then cooled and collected as fine white powder, quality-tested, and packed in 25 kg bags." }
        }
      ]
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

    <style>
    *, *::before, *::after { box-sizing: border-box; margin:0; padding:0; }
    html { scroll-behavior: smooth; scroll-padding-top: 82px; }
    body {
      font-family: system-ui, -apple-system, 'Segoe UI', sans-serif;
      color: #1a1a1a; background: #fafafa;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }
    h1,h2,h3 { font-family: system-ui, -apple-system, 'Segoe UI', sans-serif; line-height: 1.15; }
    h1 { font-size: clamp(2rem, 4.5vw, 3.2rem); font-weight: 800; }
    h2 { font-size: clamp(1.55rem, 3vw, 2.2rem); font-weight: 700; }
    h3 { font-size: 1.12rem; font-weight: 600; }
    p  { line-height: 1.8; color: #4a5568; }

    .eyebrow {
      font-size: 0.76rem; font-weight: 600;
      letter-spacing: 0.12em; text-transform: uppercase;
      color: #007b5e; margin-bottom: 0.5rem;
    }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .section-header { text-align: center; margin-bottom: 3rem; }
    .section-header h2 { color: #1a1a1a; margin-bottom: 0.6rem; }
    .section-desc { font-size: 1rem; max-width: 660px; margin: 0 auto; color: #4a5568; }

    /* ── HERO ── */
    .page-hero {
      position: relative;
      min-height: 58vh;
      background: #0d1f19;
      display: flex; align-items: flex-end;
      padding: 120px 24px 60px;
      overflow: hidden;
    }
    .page-hero::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 65% 60% at 80% 30%, rgba(0,123,94,0.3) 0%, transparent 65%),
        radial-gradient(ellipse 40% 50% at 5% 85%, rgba(0,90,69,0.18) 0%, transparent 60%);
    }
    .hero-zno {
      position: absolute; right: 2%; top: 50%;
      transform: translateY(-50%);
      font-family: 'Sora', sans-serif;
      font-size: clamp(140px, 18vw, 300px);
      font-weight: 800;
      color: rgba(255,255,255,0.04);
      pointer-events: none; user-select: none;
    }
    .page-hero-inner { position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; width: 100%; }
    .breadcrumb {
      display: flex; align-items: center; gap: 8px;
      margin-bottom: 1.2rem;
      font-size: 0.8rem; color: rgba(255,255,255,0.45);
    }
    .breadcrumb a { color: rgba(255,255,255,0.55); text-decoration: none; }
    .breadcrumb a:hover { color: #4ade9e; }
    .breadcrumb span { color: rgba(255,255,255,0.25); }
    .page-hero-inner h1 { color: #fff; margin-bottom: 1rem; }
    .hero-tag-row {
      display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 1.5rem;
    }
    .hero-tag {
      background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);
      color: rgba(255,255,255,0.85); border-radius: 999px;
      padding: 5px 14px; font-size: 0.82rem; font-weight: 500;
    }
    .hero-tag.highlight {
      background: rgba(0,123,94,0.4); border-color: rgba(0,200,130,0.4);
      color: #4ade9e;
    }
    .page-hero-inner .hero-desc {
      color: rgba(255,255,255,0.7); font-size: 1.05rem;
      max-width: 580px; line-height: 1.75; margin-bottom: 2rem;
    }
    .hero-ctas { display: flex; flex-wrap: wrap; gap: 14px; }
    .btn-primary {
      display: inline-block; padding: 13px 28px;
      background: #007b5e; color: #fff;
      border-radius: 6px; font-weight: 600; font-size: 0.95rem;
      text-decoration: none; transition: background 0.2s, transform 0.15s;
      font-family: 'Inter', sans-serif;
    }
    .btn-primary:hover { background: #005a45; transform: translateY(-1px); }
    .btn-ghost {
      display: inline-block; padding: 13px 28px;
      background: rgba(255,255,255,0.1); color: #fff;
      border: 1px solid rgba(255,255,255,0.35); border-radius: 6px;
      font-weight: 600; font-size: 0.95rem;
      text-decoration: none; transition: background 0.2s;
      font-family: 'Inter', sans-serif;
    }
    .btn-ghost:hover { background: rgba(255,255,255,0.18); }

    /* ── OVERVIEW STRIP ── */
    .overview-strip {
      background: #fff;
      border-top: 3px solid #007b5e;
      border-bottom: 1px solid #e2e8e0;
    }
    .overview-inner {
      max-width: 1200px; margin: 0 auto;
      display: grid; grid-template-columns: repeat(4, 1fr);
    }
    .overview-item {
      padding: 26px 24px;
      border-right: 1px solid #e2e8e0;
      display: flex; flex-direction: column;
    }
    .overview-item:last-child { border-right: none; }
    .overview-label {
      font-size: 0.73rem; font-weight: 600; letter-spacing: 0.1em;
      text-transform: uppercase; color: #4b5563; margin-bottom: 4px;
    }
    .overview-value {
      font-family: 'Sora', sans-serif; font-size: 1.3rem; font-weight: 700;
      color: #007b5e; line-height: 1.1; margin-bottom: 3px;
    }
    .overview-note { font-size: 0.8rem; color: #6b7280; }

    /* Pakistan SEO Section */
    .market-section {
      padding: 82px 24px;
      background: #fafafa;
    }
    .market-wrap {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
      gap: 40px;
      align-items: start;
    }
    .market-copy h2 {
      color: #1a1a1a;
      margin-bottom: 1rem;
    }
    .market-copy p {
      font-size: 1rem;
      margin-bottom: 1rem;
    }
    .market-links {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 1.4rem;
    }
    .market-chip {
      display: inline-flex;
      align-items: center;
      min-height: 34px;
      padding: 6px 12px;
      border-radius: 999px;
      background: rgba(0,123,94,0.08);
      color: #00634c;
      border: 1px solid rgba(0,123,94,0.18);
      font-size: 0.82rem;
      font-weight: 600;
      text-decoration: none;
    }
    .market-panel {
      background: #fff;
      border: 1px solid #e2e8e0;
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }
    .market-panel h3 {
      color: #1a1a1a;
      margin-bottom: 14px;
    }
    .market-list {
      list-style: none;
      display: grid;
      gap: 12px;
    }
    .market-list li {
      display: grid;
      grid-template-columns: 22px 1fr;
      gap: 10px;
      color: #4a5568;
      font-size: 0.94rem;
      line-height: 1.6;
    }
    .market-list svg {
      color: #007b5e;
      margin-top: 4px;
      width: 17px;
      height: 17px;
      fill: currentColor;
    }

    /* ── QUALITY SECTION ── */
    .quality-section {
      padding: 90px 24px;
      background: #f0f2f0;
    }
    .quality-grid {
      max-width: 1200px; margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px; align-items: start;
    }
    .quality-text h2 { color: #1a1a1a; margin-bottom: 1rem; }
    .quality-text p { margin-bottom: 1rem; font-size: 1rem; }

    .specs-table {
      width: 100%; border-collapse: collapse;
      background: #fff; border-radius: 10px; overflow: hidden;
      box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    }
    .specs-table th {
      background: #007b5e; color: #fff;
      font-family: 'Sora', sans-serif; font-size: 0.82rem;
      font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase;
      padding: 12px 16px; text-align: left;
    }
    .specs-table td {
      padding: 13px 16px; font-size: 0.92rem;
      border-bottom: 1px solid #e2e8e0; color: #374151;
    }
    .specs-table tr:last-child td { border-bottom: none; }
    .specs-table tr:nth-child(even) td { background: #f9fafb; }
    .specs-table td:first-child { font-weight: 600; color: #1a1a1a; }
    .specs-table td.good { color: #007b5e; font-weight: 500; }

    .quality-visuals {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      align-items: start;
      gap: 16px;
    }
    .quality-img-card {
      display: flex;
      flex-direction: column;
      background: #fff; border-radius: 10px;
      border: 1px solid #e2e8e0;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .quality-img-card img {
      width: 100%; display: block;
      height: auto;
      aspect-ratio: 4 / 3; object-fit: cover;
      cursor: pointer; transition: transform 0.3s;
    }
    .quality-img-card img:hover { transform: scale(1.02); }
    .quality-img-card figcaption {
      padding: 10px 14px;
      font-size: 0.8rem; color: #6b7280; font-weight: 500;
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
      margin: 60px auto 0;
      padding: 10px;
      border: 1px solid rgba(0,123,94,0.16);
      border-radius: 24px;
      background: linear-gradient(145deg, #ffffff 0%, #edf3f0 100%);
      overflow: hidden;
      box-shadow:
        0 24px 60px rgba(20,45,37,0.16),
        0 6px 18px rgba(0,0,0,0.08);
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
      border-radius: 15px;
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.12);
    }

    /* Desktop-only production video dimensions */
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
    .lab-report-card{display:flex;align-items:center;gap:14px;background:#f9fafb;border:1px solid #e2e8e0;border-radius:10px;padding:12px 16px;margin-top:16px;cursor:pointer;transition:box-shadow .2s,transform .15s;text-decoration:none;grid-column:1/-1}
    .lab-report-card:hover{box-shadow:0 4px 16px rgba(0,0,0,.1);transform:translateY(-1px)}
    .lab-report-thumb{width:70px;height:70px;border-radius:8px;object-fit:cover;border:1px solid #e2e8e0;flex-shrink:0}
    .lab-report-info{display:flex;flex-direction:column;gap:2px}
    .lab-report-info strong{font-size:.88rem;color:#1a1a1a;font-family:'Sora',sans-serif}
    .lab-report-info span{font-size:.78rem;color:#6b7280}
    .lab-report-icon{margin-left:auto;flex-shrink:0;width:32px;height:32px;border-radius:50%;background:#007b5e;color:#fff;display:flex;align-items:center;justify-content:center;font-size:.85rem}
    .lab-report-icon svg{width:17px;height:17px;fill:currentColor}

    /* ── PROCESS SECTION ── */
    .process-section {
      padding: 90px 24px;
      background: #fff;
    }
    .process-steps {
      max-width: 1100px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .process-step {
      background: #f0f2f0;
      border: 1px solid #e2e8e0;
      border-radius: 12px;
      padding: 28px 24px;
      position: relative;
      transition: box-shadow 0.25s, transform 0.2s;
    }
    .process-step:hover {
      box-shadow: 0 8px 28px rgba(0,0,0,0.09);
      transform: translateY(-2px);
    }
    .step-num {
      display: inline-flex; align-items: center; justify-content: center;
      width: 36px; height: 36px; border-radius: 50%;
      background: #007b5e; color: #fff;
      font-family: 'Sora', sans-serif; font-size: 0.85rem; font-weight: 700;
      margin-bottom: 14px;
    }
    .process-icon { color:#007b5e; margin-bottom:12px; }
    .process-icon svg { width:28px; height:28px; fill:currentColor; }
    .process-step h3 { color: #1a1a1a; margin-bottom: 0.5rem; font-size: 1rem; }
    .process-step p { font-size: 0.9rem; color: #4a5568; }

    /* ── APPLICATIONS SECTION ── */
    .applications-section {
      padding: 90px 24px;
      background: #f0f2f0;
    }
    .applications-list {
      max-width: 1200px; margin: 0 auto;
      display: flex; flex-direction: column; gap: 28px;
    }
    .application-card {
      background: #fff;
      border: 1px solid #e2e8e0;
      border-radius: 14px;
      padding: 32px 36px;
      display: grid;
      grid-template-columns: 180px 1fr;
      gap: 36px; align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.04);
      overflow: hidden;
      transition: box-shadow 0.25s, transform 0.22s, border-color 0.22s;
    }
    .application-card:hover {
      border-color: rgba(0,123,94,0.35);
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transform: translateY(-4px);
    }
    .application-media {
      width: 100%; aspect-ratio: 1;
      border-radius: 10px; overflow: hidden;
    }
    .application-img {
      width: 100%; height: 100%;
      object-fit: cover; display: block;
      transition: transform 0.32s ease, filter 0.32s ease;
    }
    .application-card:hover .application-img {
      filter: saturate(1.08) contrast(1.04);
      transform: scale(1.04);
    }
    .application-body h3 {
      color: #1a1a1a; margin-bottom: 0.5rem; font-size: 1.15rem;
      transition: color 0.22s;
    }
    .application-card:hover .application-body h3 {
      color: #007b5e;
    }
    .application-body p { font-size: 0.97rem; color: #4a5568; line-height: 1.75; }
    .app-badge {
      display: inline-block; margin-bottom: 8px;
      background: rgba(0,123,94,0.1); color: #007b5e;
      font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em;
      text-transform: uppercase; padding: 3px 10px; border-radius: 4px;
      transition: background 0.22s, color 0.22s;
    }
    .application-card:hover .app-badge {
      background: #007b5e;
      color: #fff;
    }
    .app-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-top: 10px;
      color: #007b5e;
      font-weight: 700;
      font-size: 0.92rem;
      text-decoration: none;
      transition: transform 0.18s ease, color 0.18s ease;
    }
    .app-link:hover {
      color: #005a45;
      transform: translateX(4px);
    }
    .apps-hub-cta {
      text-align: center;
      margin-top: 36px;
    }

    /* ── RELATED PRODUCTS ── */
    .related-section {
      padding: 80px 24px;
      background: #fff;
    }
    .related-grid {
      max-width: 1100px; margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }
    .related-card {
      background: #f0f2f0; border: 1px solid #e2e8e0;
      border-radius: 12px; overflow: hidden;
      transition: box-shadow 0.2s, transform 0.2s;
      text-decoration: none; display: flex; flex-direction: column;
    }
    .related-card:hover { box-shadow: 0 6px 22px rgba(0,0,0,0.09); transform: translateY(-2px); }
    .related-card-media { display: block; aspect-ratio: 16/9; overflow: hidden; }
    .related-card-media img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; }
    .related-card-body { padding: 18px 20px; flex: 1; }
    .related-card-body h3 { color: #1a1a1a; font-size: 1rem; margin-bottom: 4px; }
    .related-card-body p { font-size: 0.86rem; color: #6b7280; }

    /* ── FAQ ── */
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
    .faq-a.open { max-height: 320px; padding: 0 24px 20px; }
    .faq-a p { font-size: 0.95rem; color: #4a5568; line-height: 1.75; }
    .faq-a a { color: #007b5e; }

    /* ── MODAL (full-screen image) ── */
    #imgModal {
      display: none; position: fixed; inset: 0; z-index: 9999;
      background: rgba(0,0,0,0.88);
      align-items: center; justify-content: center;
    }
    #imgModal.open { display: flex; }
    #imgModal img {
      max-width: 90vw; max-height: 90vh;
      border-radius: 8px; box-shadow: 0 0 40px rgba(0,0,0,0.5);
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
      padding: 9px 14px;
      border-radius: 6px;
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
    .modal-download svg { width:16px; height:16px; fill:currentColor; }
    .modal-download[hidden] { display: none; }
    .modal-close {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.12);
      border: 1px solid rgba(255,255,255,0.25);
      color: #fff;
      font-size: 1.8rem;
      cursor: pointer;
      line-height: 1;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 1024px) {
      .market-wrap { grid-template-columns: 1fr; }
      .quality-grid { grid-template-columns: 1fr; }
      .overview-inner { grid-template-columns: 1fr 1fr; }
      .process-steps { grid-template-columns: 1fr 1fr; }
      .related-grid { grid-template-columns: 1fr 1fr; }
      .application-card { grid-template-columns: 160px 1fr; gap: 24px; padding: 24px; }
    }
    @media (max-width: 768px) {
      .overview-inner { grid-template-columns: 1fr 1fr; }
      .overview-item { border-right: none; border-bottom: 1px solid #e2e8e0; }
      .quality-visuals { grid-template-columns: 1fr; }
      .quality-img-full,
      .quality-img-featured,
      .lab-report-card { grid-column: auto; }
      .process-steps { grid-template-columns: 1fr; }
      .related-grid { grid-template-columns: 1fr; }
      .application-card { grid-template-columns: 1fr; gap: 18px; padding: 18px; }
      .application-media { aspect-ratio: 16/9; }
    }
    @media (max-width: 480px) {
      .overview-inner { grid-template-columns: 1fr; }
      .hero-zno { display: none; }
      .market-section { padding: 58px 18px; }
      .market-panel { padding: 20px; }
      .market-chip { width: 100%; justify-content: center; }
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
      .quality-img-card { border-radius: 8px; }
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
    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .reveal.visible { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
      .reveal { opacity:1; transform:none; transition:none; }
      .application-card,
      .application-img,
      .application-body h3,
      .app-badge { transition: none; }
      .application-card:hover,
      .application-card:hover .application-img { transform: none; }
    }

    /* overflow guard */
    html, body { max-width: 100%; overflow-x: hidden; }
    header { left:0; right:0; max-width:100%; box-sizing:border-box; }

    /* Skip layout and paint work for sections well below the initial viewport. */
    .market-section,
    .quality-section,
    .process-section,
    .applications-section,
    .related-section,
    .faq-section {
      content-visibility: auto;
      contain-intrinsic-size: auto 1000px;
    }
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
    <h1>Zinc Oxide (ZnO)<br>99.9% Purity</h1>
    <div class="hero-tag-row">
      <span class="hero-tag highlight">ISO 9001:2015 Certified</span>
      <span class="hero-tag">25 kg Bags</span>
      <span class="hero-tag">MOQ: 25 kg</span>
      <span class="hero-tag">Third-Party Lab Tested</span>
      <span class="hero-tag">Made in Gujranwala, Pakistan</span>
    </div>
    <p class="hero-desc">
      Bhatti Chemicals Industry manufactures high-purity Zinc Oxide through a controlled roasting and oxidation process. Consistent quality across every batch, backed by ISO 9001:2015 certification and third-party laboratory testing.
    </p>
    <div class="hero-ctas">
      <a href="#contact" class="btn-primary">Request a Quote</a>
      <a href="#specifications" class="btn-ghost">View Specifications</a>
    </div>
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
     PAKISTAN SUPPLY & EXPORT
════════════════════════════════════════════════ -->
<section class="market-section" aria-labelledby="zinc-oxide-pakistan">
  <div class="market-wrap">
    <div class="market-copy reveal">
      <p class="eyebrow">Pakistan Manufacturer &amp; Export Supplier</p>
      <h2 id="zinc-oxide-pakistan">Zinc Oxide Manufacturer in Pakistan for Local and Export Orders</h2>
      <p>
        Bhatti Chemicals Industry supplies high-purity Zinc Oxide from Gujranwala, Pakistan for industrial buyers searching for reliable zinc oxide Pakistan, ZnO supplier Pakistan, and zinc oxide manufacturer in Pakistan options. Our product is made for consistent performance in rubber, tyres, ceramics, paints, coatings, pharmaceuticals, cosmetics, agriculture, and animal feed applications.
      </p>
      <p>
        We serve manufacturers, traders, distributors, and export customers who require stable quality, 25 kg bag packing, batch traceability, laboratory reports, and responsive quotation support. Whether you need Zinc Oxide for Lahore, Karachi, Faisalabad, Sialkot, Gujranwala, Islamabad, Rawalpindi, Multan, Peshawar, Quetta, or export shipment planning, our team can support regular supply requirements.
      </p>
      <div class="market-links" aria-label="Common Zinc Oxide search terms">
        <span class="market-chip">Zinc Oxide Pakistan</span>
        <span class="market-chip">Zinc Oxide Manufacturer Pakistan</span>
        <span class="market-chip">ZnO Supplier Pakistan</span>
        <span class="market-chip">Zinc Oxide Exporter Pakistan</span>
      </div>
    </div>
    <aside class="market-panel reveal" aria-label="Pakistan supply strengths">
      <h3>Supply Capabilities</h3>
      <ul class="market-list">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>99.9% purity Zinc Oxide with third-party laboratory testing.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Standard 25 kg bag packing for local distribution and bulk orders.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>ISO 9001:2015 certified manufacturing and documented batch quality.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span>Export-ready order support for buyers outside Pakistan.</span></li>
      </ul>
    </aside>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     QUALITY & SPECIFICATIONS
════════════════════════════════════════════════ -->
<section class="quality-section" id="specifications">
  <div class="quality-grid">
    <div class="quality-text reveal">
      <p class="eyebrow">Product Quality</p>
      <h2>Zinc Oxide Specifications</h2>
      <p>
        Our Zinc Oxide meets the rigorous quality requirements of industrial buyers in rubber, ceramics, pharmaceuticals, and paint manufacturing. Every batch is manufactured to consistent purity, then tested before dispatch.
      </p>
      <p>
        The table below reflects the standard quality parameters for our Zinc Oxide. Buyers requiring specific technical data sheets or certificate of analysis documents can request them directly from our team.
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
            <td>Pharmaceutical and food-grade safe</td>
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
        <img src="<?php echo site_url('/assets/lab-reports/zinc-oxide-lab-report-thumb.webp'); ?>" alt="Lab Report" class="lab-report-thumb" width="160" height="122" loading="lazy" decoding="async">
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
<section class="process-section">
  <div class="section-header reveal">
    <p class="eyebrow">How We Make It</p>
    <h2>Zinc Oxide Manufacturing Process</h2>
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
     APPLICATIONS
════════════════════════════════════════════════ -->
<section class="applications-section" id="applications">
  <div class="section-header reveal">
    <p class="eyebrow">Where It's Used</p>
    <h2>Industrial Applications of Zinc Oxide</h2>
    <p class="section-desc">Zinc Oxide is a critical input material across diverse manufacturing industries, each depending on its specific chemical and physical properties.</p>
  </div>
  <div class="applications-list">
    <article class="application-card reveal">
      <div class="application-media"><img src="<?php echo site_url('/assets/images/icons/applications/tire.jpg'); ?>" alt="Zinc Oxide used in rubber and tyre manufacturing" class="application-img" width="400" height="400" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Rubber &amp; Tyres</span>
        <h3>Rubber and Tyre Manufacturing</h3>
        <p>Zinc Oxide is a key activator in the rubber vulcanization process, enhancing elasticity, tensile strength, and durability of rubber compounds. It improves heat dissipation in tyres, preventing overheating during use, and extends the service life of tyre and industrial rubber products through its anti-aging properties.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>" class="app-link">
          Explore Rubber &amp; Tyre Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="<?php echo site_url('/assets/images/icons/applications/cosmatic.jpg'); ?>" alt="Zinc Oxide used in cosmetics and skincare" class="application-img" width="400" height="400" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Cosmetics &amp; Skincare</span>
        <h3>Cosmetics and Skincare Products</h3>
        <p>Zinc Oxide serves as a physical UV blocker in sunscreens and is widely used in foundations, lotions, and baby powders for its skin-soothing, anti-inflammatory, and antibacterial properties. Its non-toxic and gentle nature makes it suitable for sensitive skin formulations.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/cosmetics-and-skincare.php'); ?>" class="app-link">
          Explore Cosmetics &amp; Skincare Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="<?php echo site_url('/assets/images/icons/applications/medicine.avif'); ?>" alt="Zinc Oxide used in pharmaceuticals and ointments" class="application-img" width="400" height="400" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Pharmaceuticals</span>
        <h3>Pharmaceuticals and Ointments</h3>
        <p>Used extensively in diaper rash creams, wound dressings, medicated powders, and anti-inflammatory formulations. Zinc Oxide's antibacterial and antifungal properties promote faster recovery from burns, cuts, and skin conditions, making it an established ingredient in both prescription and over-the-counter medicines.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>" class="app-link">
          Explore Pharmaceutical Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="<?php echo site_url('/assets/images/icons/applications/paints.jpg'); ?>" alt="Zinc Oxide used in paints and coatings" class="application-img" width="400" height="400" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Paints &amp; Coatings</span>
        <h3>Paints and Protective Coatings</h3>
        <p>As a protective additive in paints and coatings, Zinc Oxide improves mildew and mold resistance, enhances UV stability, and acts as a corrosion inhibitor that extends the life of metal structures. Widely used in automotive, marine, and architectural coatings.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>" class="app-link">
          Explore Paints &amp; Coatings Applications &rarr;
        </a>
      </div>
    </article>
    <article class="application-card reveal">
      <div class="application-media"><img src="<?php echo site_url('/assets/images/icons/applications/feed.jpg'); ?>" alt="Zinc Oxide used in animal feed and agriculture" class="application-img" width="400" height="400" loading="lazy" decoding="async"></div>
      <div class="application-body">
        <span class="app-badge">Agriculture &amp; Animal Feed</span>
        <h3>Animal Feed and Agricultural Fertilizers</h3>
        <p>Zinc Oxide is an essential micronutrient in animal feed, supporting immune function, growth, and reproductive health in livestock and poultry. In agricultural fertilizers, it corrects zinc deficiency in soils, improving plant metabolism and increasing crop yields.</p>
        <a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>" class="app-link">
          Explore Agriculture &amp; Feed Applications &rarr;
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
     RELATED PRODUCTS
════════════════════════════════════════════════ -->
<section class="related-section">
  <div class="section-header reveal">
    <p class="eyebrow">Also From Bhatti Chemicals</p>
    <h2>Related Zinc Products</h2>
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

<!-- ════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════ -->
<section class="faq-section">
  <div class="section-header reveal">
    <p class="eyebrow">Common Questions</p>
    <h2>Zinc Oxide — Frequently Asked Questions</h2>
  </div>
  <div class="faq-list">
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What is the purity level of your Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Our Zinc Oxide is produced at ≥ 99.9% purity. It is presented as a fine white powder, free from visible contaminants, and undergoes third-party laboratory analysis before dispatch. Full certificates of analysis are available on request.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What industries use your Zinc Oxide?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Our Zinc Oxide is used in rubber and tyre manufacturing, ceramics and glass, paints and protective coatings, pharmaceuticals and ointments, cosmetics and sunscreens, animal feed, agricultural fertilizers, and battery manufacturing.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        What is the minimum order quantity?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>The minimum order quantity for our Zinc Oxide is 25 kg — equivalent to one standard bag. This allows buyers to trial the product before placing larger orders. Bulk supply is available for ongoing industrial procurement.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Is your Zinc Oxide ISO 9001:2015 certified?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. Bhatti Chemicals Industry is ISO 9001:2015 certified. All production, packaging, and dispatch processes operate under this certified quality management system. Each batch is also tested by accredited third-party laboratories to verify purity and composition.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        Can you provide custom Zinc Oxide formulations?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Yes. We offer custom formulations tailored to specific industrial requirements, including particular purity grades, particle size specifications, or packaging preferences. Contact our team to discuss your application requirements.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false">
        How do I place an order or request a sample?
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" hidden>
        <p>Contact us by email at <a href="mailto:info@bhattichemicalsindustry.com.pk">info@bhattichemicalsindustry.com.pk</a> or via WhatsApp at +92 304 1462460. Please specify the product, required quantity, and your location. We respond to all trade inquiries promptly.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CONTACT + FOOTER
════════════════════════════════════════════════ -->

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
