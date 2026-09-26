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
<meta name="description" content="Explore industrial zinc products manufactured and exported by Bhatti Chemicals Industry: Zinc Oxide (≥99.99%), Zinc Ash (65–70%), Zinc Ingot (≥99.95%), Zinc Dross, Zinc Dust, and Zinc Alloy. ISO 9001:2015 certified, Gujranwala, Pakistan.">
<meta name="keywords" content="zinc products Pakistan, zinc oxide manufacturer, zinc ash exporter, zinc ingot 99.95%, zinc dross, APCD zinc dust, zinc alloy ZAMAK, Bhatti Chemicals Industry products">
<link rel="canonical" href="https://bhattichemicalsindustry.com.pk/products/">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Bhatti Chemicals Industry">
<meta property="og:title" content="Zinc Products Catalog | Zinc Oxide, Zinc Ash & Industrial Metals | Bhatti Chemicals">
<meta property="og:description" content="Complete portfolio of industrial zinc products: 99.99% Zinc Oxide, 65–70% Zinc Ash Fine, High-Purity Ingot, Dross, Dust & ZAMAK Alloys. ISO 9001:2015 certified manufacturer and exporter in Pakistan.">
<meta property="og:image" content="https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp">
<meta property="og:url" content="https://bhattichemicalsindustry.com.pk/products/">

<!-- Favicons -->
<link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
<link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
<link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
<link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

<link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
<link rel="stylesheet" href="<?php echo site_url('/assets/css/lab-report-btn.css'); ?>">
<link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>

<!-- Google Analytics (Delayed execution for Core Web Vitals) -->
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

<title>Zinc Products Catalog — Zinc Oxide, Zinc Ash, Ingot & Alloys | Bhatti Chemicals Industry</title>

<!-- Schema.org ItemList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Bhatti Chemicals Industry Zinc Products",
  "description": "Comprehensive industrial zinc catalog manufactured and exported by Bhatti Chemicals Industry in Gujranwala, Pakistan.",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Zinc Oxide (ZnO) — 99.99% Purity Guaranteed",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Zinc Ash Fine (65–70% Metallic Zinc)",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-ash.php"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Zinc Ingot (≥99.95% Purity)",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-ingot.php"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Zinc Dross (85–95% Zinc Content)",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-dross.php"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Zinc Dust (APCD 50–60% Metallic Zinc)",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-dust.php"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "Zinc Alloy (ZAMAK 3, 5, 7 Die Casting)",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-alloy.php"
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
    {"@type":"ListItem","position":1,"name":"Home","item":"https://bhattichemicalsindustry.com.pk/"},
    {"@type":"ListItem","position":2,"name":"Products","item":"https://bhattichemicalsindustry.com.pk/products/"}
  ]
}
</script>

<!-- FAQPage Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What zinc products does Bhatti Chemicals Industry manufacture and supply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bhatti Chemicals Industry supplies six key commercial zinc products: our flagship French Process Zinc Oxide (≥99.99% purity), Zinc Ash Fine (65–70% metallic zinc) for international export, High-Purity Zinc Ingot (≥99.95%), Zinc Dross (85–95% zinc), APCD Zinc Dust (50–60% zinc), and ZAMAK Zinc Alloys (grades 3, 5, and 7)."
      }
    },
    {
      "@type": "Question",
      "name": "Which product is your primary manufactured flagship?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Zinc Oxide (ZnO) with ≥99.99% guaranteed purity is our primary manufactured product. Produced via the French Indirect Process with Chinese automated plant technology at our 5,000 MT/year Gujranwala facility, it serves domestic and multinational tyre, rubber, ceramic, and paint producers."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide Certificate of Analysis (COA) and SGS inspection reports?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every batch across all products is tested in our in-house analytical quality control laboratory in Gujranwala. In addition, third-party SGS verification certificates and full export customs documentation are provided for domestic and international shipments."
      }
    },
    {
      "@type": "Question",
      "name": "Can you ship products in bulk containers internationally?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Bhatti Chemicals Industry actively exports to over 15 countries worldwide through Port Qasim and Karachi Port. Products are packed in standard 25 kg bags, 50 kg bags, 1 MT jumbo bags, or custom strapped pallets for secure containerized sea freight."
      }
    }
  ]
}
</script>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; scroll-padding-top: 82px; }
body {
  font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
  color: #1a1a1a;
  background: #fafafa;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
h1, h2, h3, h4 {
  font-family: 'Sora', system-ui, -apple-system, sans-serif;
  line-height: 1.2;
  letter-spacing: -0.02em;
}
h1 { font-size: clamp(2.1rem, 4.8vw, 3.4rem); font-weight: 800; }
h2 { font-size: clamp(1.6rem, 3.2vw, 2.3rem); font-weight: 700; }
h3 { font-size: 1.25rem; font-weight: 600; }
p { line-height: 1.75; color: #475569; }

.container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.section-header { text-align: center; margin-bottom: 3rem; }
.section-header h2 { color: #0f172a; margin-bottom: 0.75rem; }
.section-desc { font-size: 1.05rem; max-width: 680px; margin: 0 auto; color: #475569; }

.eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #007b5e;
  background: rgba(0, 123, 94, 0.08);
  border: 1px solid rgba(0, 123, 94, 0.2);
  padding: 5px 14px;
  border-radius: 9999px;
  margin-bottom: 0.85rem;
}

/* ── HERO SECTION ── */
.page-hero {
  position: relative;
  min-height: 52vh;
  background: #0d1f19;
  display: flex;
  align-items: flex-end;
  padding: 124px 24px 64px;
  overflow: hidden;
}
.page-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 70% 65% at 85% 25%, rgba(0,123,94,0.35) 0%, transparent 65%),
    radial-gradient(ellipse 45% 55% at 5% 85%, rgba(0,90,69,0.25) 0%, transparent 60%);
  pointer-events: none;
}
.hero-bg-text {
  position: absolute;
  right: 1%;
  top: 50%;
  transform: translateY(-50%);
  font-family: 'Sora', sans-serif;
  font-size: clamp(120px, 16vw, 260px);
  font-weight: 800;
  color: rgba(255,255,255,0.035);
  pointer-events: none;
  user-select: none;
  letter-spacing: -0.05em;
  white-space: nowrap;
}
.page-hero-inner { position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; width: 100%; }
.breadcrumb {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 1.2rem;
  font-size: 0.82rem;
  color: rgba(255,255,255,0.5);
}
.breadcrumb a { color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.2s; }
.breadcrumb a:hover { color: #4ade9e; }
.breadcrumb span { color: rgba(255,255,255,0.3); }
.page-hero-inner h1 { color: #ffffff; margin-bottom: 0.85rem; }
.hero-desc {
  color: rgba(255,255,255,0.8);
  font-size: clamp(1rem, 2vw, 1.18rem);
  max-width: 680px;
  line-height: 1.75;
  margin-bottom: 1.75rem;
}
.hero-tag-row { display: flex; flex-wrap: wrap; gap: 10px; }
.hero-tag {
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.18);
  color: rgba(255,255,255,0.92);
  border-radius: 9999px;
  padding: 6px 16px;
  font-size: 0.82rem;
  font-weight: 600;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}
.hero-tag.highlight {
  background: rgba(0, 123, 94, 0.35);
  border-color: rgba(74, 222, 158, 0.4);
  color: #6ee7b7;
}

/* ── OVERVIEW STATS STRIP ── */
.overview-strip {
  background: #ffffff;
  border-bottom: 1px solid #e2e8f0;
  box-shadow: 0 4px 20px rgba(0,0,0,0.03);
}
.overview-inner {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}
.overview-item {
  padding: 24px 20px;
  border-right: 1px solid #e2e8f0;
  display: flex;
  flex-direction: column;
}
.overview-item:last-child { border-right: none; }
.overview-label {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #64748b;
  margin-bottom: 4px;
}
.overview-value {
  font-family: 'Sora', sans-serif;
  font-size: 1.4rem;
  font-weight: 800;
  color: #007b5e;
  line-height: 1.1;
  margin-bottom: 4px;
}
.overview-note { font-size: 0.82rem; color: #475569; }

/* ── HUB MAIN CONTENT ── */
.products-hub { padding: 80px 24px; background: #ffffff; }

/* ── FLAGSHIP SHOWCASE BANNER ── */
.flagship-banner {
  max-width: 1200px;
  margin: 0 auto 4.5rem;
  background: linear-gradient(135deg, #0d1f19 0%, #132a22 100%);
  border: 1px solid rgba(0, 123, 94, 0.35);
  border-radius: 18px;
  overflow: hidden;
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  box-shadow: 0 16px 48px rgba(0, 123, 94, 0.12), 0 2px 10px rgba(0,0,0,0.05);
}
.flagship-img-wrap {
  position: relative;
  overflow: hidden;
  background: #081410;
  display: flex;
  align-items: center;
  justify-content: center;
}
.flagship-img-wrap img {
  width: 100%;
  height: 100%;
  min-height: 340px;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}
.flagship-banner:hover .flagship-img-wrap img {
  transform: scale(1.03);
}
.flagship-floating-badge {
  position: absolute;
  top: 20px;
  left: 20px;
  background: rgba(13, 31, 25, 0.88);
  border: 1px solid rgba(74, 222, 158, 0.35);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  color: #4ade9e;
  font-size: 0.76rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 6px 14px;
  border-radius: 9999px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}
.flagship-pulse {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #4ade9e;
  box-shadow: 0 0 10px #4ade9e;
}
.flagship-content {
  padding: 48px 44px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.flagship-tag {
  display: inline-block;
  background: rgba(200, 146, 42, 0.18);
  border: 1px solid rgba(200, 146, 42, 0.35);
  color: #f4c85a;
  font-size: 0.74rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 5px 12px;
  border-radius: 6px;
  margin-bottom: 14px;
  width: fit-content;
}
.flagship-content h2 {
  color: #ffffff;
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  margin-bottom: 0.9rem;
}
.flagship-content p {
  color: rgba(255, 255, 255, 0.78);
  font-size: 1rem;
  line-height: 1.7;
  margin-bottom: 1.6rem;
}
.flagship-specs {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 1.8rem;
}
.f-spec {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.14);
  color: #ffffff;
  border-radius: 8px;
  padding: 6px 14px;
  font-size: 0.84rem;
  font-weight: 600;
}
.flagship-actions {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 14px;
}
.btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 13px 26px;
  background: #007b5e;
  color: #ffffff;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.95rem;
  text-decoration: none;
  transition: background 0.2s, transform 0.15s, box-shadow 0.15s;
}
.btn-primary:hover {
  background: #005a45;
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(0, 123, 94, 0.35);
}
.btn-outline-white {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 12px 24px;
  background: transparent;
  color: #ffffff;
  border: 1.5px solid rgba(255, 255, 255, 0.35);
  border-radius: 8px;
  font-weight: 600;
  font-size: 0.95rem;
  text-decoration: none;
  transition: background 0.2s, border-color 0.2s;
}
.btn-outline-white:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: #ffffff;
}

/* ── PRODUCTS GRID ── */
.products-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}
.product-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  overflow: hidden;
  transition: box-shadow 0.28s, transform 0.22s, border-color 0.22s;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
}
.product-card:hover {
  box-shadow: 0 14px 36px rgba(0, 0, 0, 0.09);
  transform: translateY(-4px);
  border-color: #cbd5e1;
}
.product-card-img-wrap {
  position: relative;
  overflow: hidden;
  background: #f1f5f9;
  aspect-ratio: 16 / 10;
}
.product-card-img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.35s ease;
}
.product-card:hover .product-card-img-wrap img {
  transform: scale(1.04);
}
.product-card-body {
  padding: 24px;
  flex: 1;
  display: flex;
  flex-direction: column;
}
.product-tag {
  display: inline-block;
  margin-bottom: 10px;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 4px 10px;
  border-radius: 6px;
  width: fit-content;
}
.tag-flagship { background: rgba(0, 123, 94, 0.12); color: #007b5e; }
.tag-export { background: rgba(180, 83, 9, 0.12); color: #9a3412; }
.tag-industrial { background: rgba(2, 132, 199, 0.12); color: #0369a1; }
.tag-recovery { background: rgba(100, 116, 139, 0.15); color: #334155; }
.tag-alloy { background: rgba(79, 70, 229, 0.12); color: #4338ca; }

.product-card-body h3 {
  color: #0f172a;
  font-size: 1.22rem;
  margin-bottom: 0.5rem;
  font-weight: 700;
}
.product-spec-row {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
  margin-bottom: 12px;
}
.mini-spec {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 6px;
  padding: 4px 10px;
  font-size: 0.78rem;
  color: #334155;
  font-weight: 600;
}
.product-card-body p {
  font-size: 0.92rem;
  color: #475569;
  flex: 1;
  margin-bottom: 1.4rem;
  line-height: 1.65;
}
.card-link-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: #007b5e;
  font-weight: 700;
  font-size: 0.9rem;
  transition: gap 0.2s, color 0.2s;
  margin-top: auto;
}
.product-card:hover .card-link-btn {
  color: #005a45;
  gap: 9px;
}

/* ── COMPARISON MATRIX ── */
.comparison-section {
  padding: 90px 24px;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
}
.comparison-table-wrap {
  max-width: 1200px;
  margin: 0 auto;
  overflow-x: auto;
  border-radius: 14px;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
}
.comparison-table {
  width: 100%;
  border-collapse: collapse;
  min-width: 820px;
  font-size: 0.92rem;
}
.comparison-table th {
  background: #0d1f19;
  color: #ffffff;
  font-family: 'Sora', sans-serif;
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: 16px 20px;
  text-align: left;
}
.comparison-table td {
  padding: 16px 20px;
  border-bottom: 1px solid #f1f5f9;
  color: #334155;
}
.comparison-table tr:last-child td { border-bottom: none; }
.comparison-table tr:hover td { background: #f8fafc; }
.comparison-table td:first-child {
  font-weight: 700;
  color: #0f172a;
}
.comparison-table a {
  color: #007b5e;
  text-decoration: none;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 4px;
}
.comparison-table a:hover { text-decoration: underline; }
.badge-purity {
  display: inline-block;
  background: rgba(0, 123, 94, 0.1);
  color: #007b5e;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 4px;
  font-size: 0.82rem;
}

/* ── QUALITY & TESTING BANNER ── */
.quality-banner-section {
  padding: 80px 24px;
  background: #ffffff;
}
.quality-banner-card {
  max-width: 1200px;
  margin: 0 auto;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  padding: 44px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: center;
}
.quality-banner-text h3 {
  font-size: 1.8rem;
  color: #0f172a;
  margin-bottom: 0.85rem;
}
.quality-banner-text p {
  font-size: 1rem;
  color: #475569;
  margin-bottom: 1.4rem;
  line-height: 1.7;
}
.quality-points-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}
.quality-point {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  padding: 16px;
}
.quality-point strong {
  display: block;
  font-size: 0.92rem;
  color: #0f172a;
  margin-bottom: 4px;
}
.quality-point span {
  font-size: 0.82rem;
  color: #64748b;
  line-height: 1.4;
  display: block;
}

/* ── FAQ SECTION ── */
.faq-section {
  padding: 90px 24px;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
}
.faq-list { max-width: 820px; margin: 0 auto; }
.faq-item {
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  margin-bottom: 14px;
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.faq-q {
  width: 100%;
  background: none;
  border: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  padding: 22px 24px;
  text-align: left;
  cursor: pointer;
  font-family: 'Sora', sans-serif;
  font-size: 1.05rem;
  font-weight: 700;
  color: #0f172a;
  transition: background 0.15s, color 0.15s;
}
.faq-q:hover { background: #f8fafc; }
.faq-q[aria-expanded="true"] { background: #f8fafc; color: #007b5e; }
.faq-chevron {
  flex-shrink: 0;
  width: 26px;
  height: 26px;
  border: 1.5px solid #007b5e;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #007b5e;
  transition: transform 0.25s;
}
.faq-chevron svg { width: 14px; height: 14px; fill: none; stroke: currentColor; stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round; }
.faq-q[aria-expanded="true"] .faq-chevron { transform: rotate(180deg); }
.faq-a {
  padding: 0 24px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease, padding 0.25s;
}
.faq-a.open { max-height: 320px; padding: 0 24px 22px; }
.faq-a p { font-size: 0.96rem; color: #475569; line-height: 1.75; }

/* ── CTA STRIP ── */
.cta-strip {
  background: linear-gradient(135deg, #0d1f19 0%, #007b5e 100%);
  padding: 80px 24px;
  text-align: center;
}
.cta-strip h2 { color: #ffffff; margin-bottom: 0.85rem; }
.cta-strip p {
  color: rgba(255, 255, 255, 0.9);
  font-size: 1.05rem;
  margin-bottom: 2rem;
  max-width: 580px;
  margin-left: auto;
  margin-right: auto;
}
.cta-btn-row { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
.btn-white {
  display: inline-block;
  padding: 14px 32px;
  background: #ffffff;
  color: #007b5e;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.96rem;
  text-decoration: none;
  transition: transform 0.15s, box-shadow 0.15s;
}
.btn-white:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.18);
}
.btn-ghost-white {
  display: inline-block;
  padding: 14px 30px;
  background: transparent;
  color: #ffffff;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 8px;
  font-weight: 600;
  font-size: 0.96rem;
  text-decoration: none;
  transition: background 0.2s;
}
.btn-ghost-white:hover { background: rgba(255, 255, 255, 0.14); }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .flagship-banner { grid-template-columns: 1fr; }
  .flagship-img-wrap img { min-height: 260px; max-height: 320px; }
  .products-grid { grid-template-columns: repeat(2, 1fr); }
  .overview-inner { grid-template-columns: repeat(2, 1fr); }
  .overview-item:nth-child(2) { border-right: none; }
  .overview-item:nth-child(-n+2) { border-bottom: 1px solid #e2e8f0; }
  .quality-banner-card { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .products-grid { grid-template-columns: 1fr; }
  .flagship-content { padding: 32px 24px; }
  .quality-banner-card { padding: 28px 20px; }
  .quality-points-grid { grid-template-columns: 1fr; }
  .hero-bg-text { display: none; }
  .overview-inner { grid-template-columns: 1fr; }
  .overview-item { border-right: none; border-bottom: 1px solid #e2e8f0; }
  .overview-item:last-child { border-bottom: none; }
}

.reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.5s ease, transform 0.5s ease; }
.reveal.visible { opacity: 1; transform: none; }
@media (prefers-reduced-motion: reduce) {
  .reveal { opacity: 1; transform: none; transition: none; }
}
</style>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/whatsapp-widget.php'; ?>

<main id="main-content">

<!-- HERO SECTION -->
<section class="page-hero" aria-label="Zinc products catalog header">
  <div class="hero-bg-text" aria-hidden="true">PRODUCTS</div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo site_url('/'); ?>">Home</a>
      <span>›</span>
      <span aria-current="page">Products</span>
    </nav>
    <div class="eyebrow" style="color: #4ade9e; background: rgba(74, 222, 158, 0.12); border-color: rgba(74, 222, 158, 0.3);">
      Industrial Chemical &amp; Metal Solutions
    </div>
    <h1>Zinc Products for Domestic &amp; Global Markets</h1>
    <p class="hero-desc">
      Explore the comprehensive portfolio of high-purity Zinc Oxide, export-grade Zinc Ash, virgin and secondary zinc ingots, galvanizing dross, and die-casting alloys manufactured by Bhatti Chemicals Industry.
    </p>
    <div class="hero-tag-row">
      <span class="hero-tag highlight">ISO 9001:2015 Certified</span>
      <span class="hero-tag">French Process Technology</span>
      <span class="hero-tag">5,000 MT Annual Capacity</span>
      <span class="hero-tag">Exporting to 15+ Nations</span>
      <span class="hero-tag">In-House QC Lab &amp; SGS Verified</span>
    </div>
  </div>
</section>

<!-- OVERVIEW STRIP -->
<div class="overview-strip" role="region" aria-label="Product portfolio highlights">
  <div class="overview-inner">
    <div class="overview-item">
      <span class="overview-label">Flagship Purity</span>
      <span class="overview-value">&ge; 99.99%</span>
      <span class="overview-note">Zinc Oxide (White Seal Grade)</span>
    </div>
    <div class="overview-item">
      <span class="overview-label">Export Zinc Ash</span>
      <span class="overview-value">65–70%</span>
      <span class="overview-note">Metallic zinc content</span>
    </div>
    <div class="overview-item">
      <span class="overview-label">Annual Output</span>
      <span class="overview-value">5,000 MT</span>
      <span class="overview-note">Automated plant operations</span>
    </div>
    <div class="overview-item">
      <span class="overview-label">Quality Standard</span>
      <span class="overview-value">ISO 9001</span>
      <span class="overview-note">Certified &amp; Lab-verified lots</span>
    </div>
  </div>
</div>

<!-- PRODUCTS HUB -->
<section class="products-hub">

  <!-- FLAGSHIP HERO BANNER -->
  <div class="flagship-banner reveal">
    <div class="flagship-img-wrap">
      <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance.webp'); ?>" 
           alt="Zinc Oxide 99.99% fine white powder appearance by Bhatti Chemicals Industry" 
           width="660" height="440" loading="eager" fetchpriority="high">
      <div class="flagship-floating-badge">
        <span class="flagship-pulse"></span>
        <span>Flagship Manufactured</span>
      </div>
    </div>
    <div class="flagship-content">
      <span class="flagship-tag">Primary Manufactured Product</span>
      <h2>Zinc Oxide (ZnO) &ge; 99.99% Purity</h2>
      <p>
        Engineered through the French Indirect Process using automated Chinese plant lines at our Gujranwala facility. Delivers ultra-low heavy metal concentrations (Pb &le; 20 ppm) and 325-mesh fineness for rubber vulcanization, automotive tyres, ceramic glazes, industrial paints, and pharmaceuticals.
      </p>
      <div class="flagship-specs">
        <span class="f-spec">&ge; 99.99% Pure ZnO</span>
        <span class="f-spec">French Indirect Process</span>
        <span class="f-spec">325 Mesh / 45 &micro;m</span>
        <span class="f-spec">25 kg Moisture-Proof Bags</span>
      </div>
      <div class="flagship-actions">
        <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="btn-primary">
          <span>View Zinc Oxide Full Specs</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
        <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-outline-white">
          <span>Request Quote</span>
        </a>
      </div>
    </div>
  </div>

  <div class="section-header reveal">
    <div class="eyebrow">Comprehensive Range</div>
    <h2>All Six Industrial Zinc Products</h2>
    <p class="section-desc">
      Each product is manufactured or processed under stringent ISO 9001:2015 quality standards with full batch laboratory analysis and certificate of analysis documentation.
    </p>
  </div>

  <!-- PRODUCTS GRID -->
  <div class="products-grid">

    <!-- 1. Zinc Oxide -->
    <article class="product-card reveal">
      <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="product-card-img-wrap" aria-label="Zinc Oxide product page">
        <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>" 
             alt="Zinc Oxide high-purity white powder in sample dish" 
             width="400" height="250" loading="lazy" decoding="async">
      </a>
      <div class="product-card-body">
        <span class="product-tag tag-flagship">Flagship Manufactured</span>
        <h3>Zinc Oxide (ZnO)</h3>
        <div class="product-spec-row">
          <span class="mini-spec">&ge; 99.99% Pure</span>
          <span class="mini-spec">French Process</span>
          <span class="mini-spec">25 kg Bags</span>
        </div>
        <p>Our core manufactured product. Ultra-low lead and iron content, optimized for tyre compounding, rubber vulcanization, ceramic glazes, and pharma.</p>
        <a href="<?php echo site_url('/products/zinc-oxide.php'); ?>" class="card-link-btn" aria-label="Explore Zinc Oxide specifications">
          <span>Full Product Details</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- 2. Zinc Ash Fine -->
    <article class="product-card reveal">
      <a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="product-card-img-wrap" aria-label="Zinc Ash Fine product page">
        <img src="<?php echo site_url('/assets/images/products/zinc-ash-fine.webp'); ?>" 
             alt="Zinc Ash Fine metallic recovery material" 
             width="660" height="440" loading="lazy" decoding="async">
      </a>
      <div class="product-card-body">
        <span class="product-tag tag-export">Primary Export Product</span>
        <h3>Zinc Ash Fine</h3>
        <div class="product-spec-row">
          <span class="mini-spec">65–70% Metallic Zn</span>
          <span class="mini-spec">25–50 kg Bags</span>
          <span class="mini-spec">Export Grade</span>
        </div>
        <p>High-yield zinc recovery material exported to smelters and chemical producers across 15+ countries with full customs and laboratory certification.</p>
        <a href="<?php echo site_url('/products/zinc-ash.php'); ?>" class="card-link-btn" aria-label="Explore Zinc Ash Fine specifications">
          <span>Full Product Details</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- 3. Zinc Ingot -->
    <article class="product-card reveal">
      <a href="<?php echo site_url('/products/zinc-ingot.php'); ?>" class="product-card-img-wrap" aria-label="Zinc Ingot product page">
        <img src="<?php echo site_url('/assets/images/products/zinc-ingot.webp'); ?>" 
             alt="High-purity zinc ingots stacked in warehouse" 
             width="660" height="405" loading="lazy" decoding="async">
      </a>
      <div class="product-card-body">
        <span class="product-tag tag-industrial">Industrial Zinc Metal</span>
        <h3>Zinc Ingot</h3>
        <div class="product-spec-row">
          <span class="mini-spec">&ge; 99.95% Purity</span>
          <span class="mini-spec">~25 kg / Ingot</span>
          <span class="mini-spec">Galvanizing Grade</span>
        </div>
        <p>High-purity solid zinc ingots for hot-dip galvanizing baths, brass casting, die-casting base formulations, and metallurgical processes.</p>
        <a href="<?php echo site_url('/products/zinc-ingot.php'); ?>" class="card-link-btn" aria-label="Explore Zinc Ingot specifications">
          <span>Full Product Details</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- 4. Zinc Dross -->
    <article class="product-card reveal">
      <a href="<?php echo site_url('/products/zinc-dross.php'); ?>" class="product-card-img-wrap" aria-label="Zinc Dross product page">
        <img src="<?php echo site_url('/assets/images/products/zinc-dross.jpg'); ?>" 
             alt="Dense metallic zinc dross pieces" 
             width="480" height="300" loading="lazy" decoding="async">
      </a>
      <div class="product-card-body">
        <span class="product-tag tag-recovery">Recovery By-Product</span>
        <h3>Zinc Dross</h3>
        <div class="product-spec-row">
          <span class="mini-spec">85–95% Zinc</span>
          <span class="mini-spec">Galvanizing Bottom Dross</span>
        </div>
        <p>Zinc-rich intermetallic by-product generated in hot-dip galvanizing baths. High metallic value for zinc smelters, refiners, and secondary producers.</p>
        <a href="<?php echo site_url('/products/zinc-dross.php'); ?>" class="card-link-btn" aria-label="Explore Zinc Dross specifications">
          <span>Full Product Details</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- 5. Zinc Dust (APCD) -->
    <article class="product-card reveal">
      <a href="<?php echo site_url('/products/zinc-dust.php'); ?>" class="product-card-img-wrap" aria-label="Zinc Dust APCD product page">
        <img src="<?php echo site_url('/assets/images/products/zinc-dust-420.webp'); ?>" 
             alt="Zinc Dust APCD uniform grey powder" 
             width="420" height="280" loading="lazy" decoding="async">
      </a>
      <div class="product-card-body">
        <span class="product-tag tag-recovery">Filtration By-Product</span>
        <h3>Zinc Dust (APCD)</h3>
        <div class="product-spec-row">
          <span class="mini-spec">50–60% Metallic Zn</span>
          <span class="mini-spec">Sub-micron Powder</span>
        </div>
        <p>Collected via high-efficiency Air Pollution Control Devices during thermal smelting. Uniform particle size for anti-corrosion primers and chemical recovery.</p>
        <a href="<?php echo site_url('/products/zinc-dust.php'); ?>" class="card-link-btn" aria-label="Explore Zinc Dust specifications">
          <span>Full Product Details</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- 6. Zinc Alloy -->
    <article class="product-card reveal">
      <a href="<?php echo site_url('/products/zinc-alloy.php'); ?>" class="product-card-img-wrap" aria-label="Zinc Alloy product page">
        <img src="<?php echo site_url('/assets/images/products/zinc-ingot-stock.webp'); ?>" 
             alt="Zinc alloy ingots for precision die casting" 
             width="660" height="400" loading="lazy" decoding="async">
      </a>
      <div class="product-card-body">
        <span class="product-tag tag-alloy">Precision Die Casting</span>
        <h3>Zinc Alloy (ZAMAK)</h3>
        <div class="product-spec-row">
          <span class="mini-spec">ZAMAK 3 / 5 / 7</span>
          <span class="mini-spec">99.99% Base Zn</span>
        </div>
        <p>Engineered zinc-aluminum-magnesium alloys for precision die-casting, automotive fittings, industrial hardware, and high-impact structural parts.</p>
        <a href="<?php echo site_url('/products/zinc-alloy.php'); ?>" class="card-link-btn" aria-label="Explore Zinc Alloy specifications">
          <span>Full Product Details</span>
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </article>

  </div>
</section>

<!-- COMPARISON MATRIX -->
<section class="comparison-section">
  <div class="container">
    <div class="section-header reveal">
      <div class="eyebrow">Technical Reference Matrix</div>
      <h2>Side-by-Side Product Comparison</h2>
      <p class="section-desc">
        Compare zinc content, physical morphology, standard packaging, and target industrial applications across our full zinc product catalog.
      </p>
    </div>

    <div class="comparison-table-wrap reveal">
      <table class="comparison-table" aria-label="Technical comparison of Bhatti Chemicals zinc products">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Zinc Assay</th>
            <th scope="col">Physical Form</th>
            <th scope="col">Standard Packaging</th>
            <th scope="col">Primary Industrial Application</th>
            <th scope="col">Specs Page</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Zinc Oxide (ZnO)</strong></td>
            <td><span class="badge-purity">&ge; 99.99% Pure</span></td>
            <td>Fine white powder (325 mesh)</td>
            <td>25 kg moisture-proof valve bags</td>
            <td>Tyres, rubber vulcanization, ceramics, paints, pharma</td>
            <td><a href="<?php echo site_url('/products/zinc-oxide.php'); ?>">Full Specs &rarr;</a></td>
          </tr>
          <tr>
            <td><strong>Zinc Ash Fine</strong></td>
            <td><span class="badge-purity">65–70% Metallic</span></td>
            <td>Grey powder &amp; fine flakes</td>
            <td>25–50 kg HDPE bags / Jumbo bags</td>
            <td>Export — zinc chemical synthesis &amp; smelting recovery</td>
            <td><a href="<?php echo site_url('/products/zinc-ash.php'); ?>">Full Specs &rarr;</a></td>
          </tr>
          <tr>
            <td><strong>Zinc Ingot</strong></td>
            <td><span class="badge-purity">&ge; 99.95% Zn</span></td>
            <td>Solid metallic ingot (~25 kg)</td>
            <td>Strapped bundles (~1 MT)</td>
            <td>Hot-dip galvanizing, brass alloying, die-casting base</td>
            <td><a href="<?php echo site_url('/products/zinc-ingot.php'); ?>">Full Specs &rarr;</a></td>
          </tr>
          <tr>
            <td><strong>Zinc Dross</strong></td>
            <td><span class="badge-purity">85–95% Zn</span></td>
            <td>Dense metallic chunks &amp; slabs</td>
            <td>Loose bulk / containerized crates</td>
            <td>Secondary smelting &amp; hydrometallurgical zinc recovery</td>
            <td><a href="<?php echo site_url('/products/zinc-dross.php'); ?>">Full Specs &rarr;</a></td>
          </tr>
          <tr>
            <td><strong>Zinc Dust (APCD)</strong></td>
            <td><span class="badge-purity">50–60% Metallic</span></td>
            <td>Fine uniform grey powder</td>
            <td>Heavy-duty 25–50 kg sealed drums/bags</td>
            <td>Anti-corrosion protective coatings &amp; chemical recovery</td>
            <td><a href="<?php echo site_url('/products/zinc-dust.php'); ?>">Full Specs &rarr;</a></td>
          </tr>
          <tr>
            <td><strong>Zinc Alloy (ZAMAK)</strong></td>
            <td><span class="badge-purity">99.99% Base Zn</span></td>
            <td>ZAMAK 3, 5, 7 ingots</td>
            <td>Strapped bundles (~1 MT pallets)</td>
            <td>Automotive components, industrial hardware &amp; die casting</td>
            <td><a href="<?php echo site_url('/products/zinc-alloy.php'); ?>">Full Specs &rarr;</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- QUALITY ASSURANCE SHOWCASE -->
<section class="quality-banner-section">
  <div class="quality-banner-card reveal">
    <div class="quality-banner-text">
      <div class="eyebrow">Quality &amp; Compliance</div>
      <h3>Rigorous In-House Analytical Testing on Every Lot</h3>
      <p>
        At our Gujranwala manufacturing complex, every batch of Zinc Oxide, Zinc Ash, and secondary zinc is analyzed using EDTA titration, spectrophotometry, and sub-micron sieve analysis. We guarantee exact chemical composition, ultra-low trace heavy metals, and complete batch-to-batch consistency.
      </p>
      <a href="<?php echo site_url('/services.php'); ?>" class="btn-primary">
        <span>Explore Quality Testing Services</span>
        <span aria-hidden="true">&rarr;</span>
      </a>
    </div>
    <div class="quality-points-grid">
      <div class="quality-point">
        <strong>ISO 9001:2015 Certified</strong>
        <span>Audited quality management across manufacturing, packing, and dispatch.</span>
      </div>
      <div class="quality-point">
        <strong>SGS Verification Available</strong>
        <span>Independent third-party inspection certificates available on buyer request.</span>
      </div>
      <div class="quality-point">
        <strong>Official Batch COA</strong>
        <span>Detailed Certificate of Analysis shipped with every container and domestic order.</span>
      </div>
      <div class="quality-point">
        <strong>Export Documentation</strong>
        <span>Full bill of lading, chamber certificate, packing list, and customs clearance.</span>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
  <div class="container">
    <div class="section-header reveal">
      <div class="eyebrow">Frequently Asked Questions</div>
      <h2>Product Selection &amp; Procurement FAQs</h2>
      <p class="section-desc">Common technical, logistics, and quality assurance questions about sourcing zinc from Bhatti Chemicals Industry.</p>
    </div>

    <div class="faq-list">
      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ans-1">
          <span>What zinc products does Bhatti Chemicals Industry manufacture and supply?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ans-1" class="faq-a" role="region">
          <p>We supply six core products: our flagship French Process Zinc Oxide (&ge;99.99% purity), Zinc Ash Fine (65–70% metallic zinc) for export, Zinc Ingot (&ge;99.95%), Zinc Dross (85–95%), APCD Zinc Dust (50–60%), and ZAMAK Zinc Alloys (grades 3, 5, and 7).</p>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ans-2">
          <span>Which product is your primary manufactured flagship?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ans-2" class="faq-a" role="region">
          <p>Zinc Oxide (ZnO) with &ge;99.99% guaranteed purity is our primary manufactured product. Produced via the French Indirect Process with Chinese automated plant technology at our 5,000 MT/year Gujranwala facility, it serves domestic and multinational tyre, rubber, ceramic, and paint producers.</p>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ans-3">
          <span>Do you provide Certificate of Analysis (COA) and SGS inspection reports?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ans-3" class="faq-a" role="region">
          <p>Yes. Every batch across all products is tested in our in-house analytical quality control laboratory in Gujranwala. In addition, third-party SGS verification certificates and full export customs documentation are provided for domestic and international shipments.</p>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ans-4">
          <span>Can you ship products in bulk containers internationally?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ans-4" class="faq-a" role="region">
          <p>Yes. Bhatti Chemicals Industry actively exports to over 15 countries worldwide through Port Qasim and Karachi Port. Products are packed in standard 25 kg bags, 50 kg bags, 1 MT jumbo bags, or custom strapped pallets for secure containerized sea freight.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONVERSION CTA STRIP -->
<section class="cta-strip" aria-label="Procurement call to action">
  <div class="container">
    <h2>Need Custom Specifications or an Export Quote?</h2>
    <p>
      Tell our metallurgical and chemical specialists your required assay, volume, and destination port. We provide rapid pricing, test samples, and complete technical support.
    </p>
    <div class="cta-btn-row">
      <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-white">Request Official Quotation</a>
      <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer" class="btn-ghost-white">Direct WhatsApp Inquiry</a>
    </div>
  </div>
</section>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script>
(function() {
  /* Scroll reveal */
  var els = document.querySelectorAll('.reveal');
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.08 });
  els.forEach(function(el) { io.observe(el); });

  /* FAQ Accordion */
  document.querySelectorAll('.faq-q').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var isExp = btn.getAttribute('aria-expanded') === 'true';
      var ans = btn.nextElementSibling;
      document.querySelectorAll('.faq-q').forEach(function(b) {
        b.setAttribute('aria-expanded', 'false');
        if (b.nextElementSibling) b.nextElementSibling.classList.remove('open');
      });
      if (!isExp && ans) {
        btn.setAttribute('aria-expanded', 'true');
        ans.classList.add('open');
      }
    });
  });
})();
</script>
</body>
</html>
