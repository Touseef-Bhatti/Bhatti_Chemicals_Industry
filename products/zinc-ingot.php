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
<meta name="description" content="Buy high-purity Zinc Ingot (≥99.95%) from Bhatti Chemicals Industry, Gujranwala, Pakistan. Standard ~25 kg ingots, strapped bundles, ISO 9001:2015 certified, in-house lab &amp; SGS verified for hot-dip galvanizing, die casting &amp; alloy manufacturing.">
<meta name="keywords" content="Zinc Ingot supplier Pakistan, buy zinc ingot, zinc ingot 99.95%, zinc ingot Gujranwala, galvanizing zinc ingot, die casting zinc, zinc ingot exporter Pakistan">
<link rel="canonical" href="https://bhattichemicalsindustry.com.pk/products/zinc-ingot.php">

<!-- Open Graph -->
<meta property="og:type" content="product">
<meta property="og:site_name" content="Bhatti Chemicals Industry">
<meta property="og:title" content="Zinc Ingot (≥99.95% Purity) | Bhatti Chemicals Industry, Pakistan">
<meta property="og:description" content="High-purity Zinc Ingot (≥99.95% Zn) from Gujranwala, Pakistan. ISO 9001:2015 certified. Premium grade for hot-dip galvanizing, precision die casting, and alloy manufacturing.">
<meta property="og:image" content="https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-ingot.webp">
<meta property="og:url" content="https://bhattichemicalsindustry.com.pk/products/zinc-ingot.php">

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

<title>Zinc Ingot (≥99.95% Purity) | Galvanizing &amp; Die Casting Grade | Bhatti Chemicals</title>

<!-- Schema.org Product -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "@id": "https://bhattichemicalsindustry.com.pk/products/zinc-ingot.php#product",
  "name": "Zinc Ingot (≥99.95% Purity)",
  "description": "High-purity Zinc Ingot (≥99.95% Zn) manufactured and supplied by Bhatti Chemicals Industry, Gujranwala, Pakistan. Standard ~25 kg solid ingots, strapped in ~1 MT bundles. ISO 9001:2015 certified, tested in-house with SGS verification available for hot-dip galvanizing, brass alloying, and precision die casting.",
  "image": "https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-ingot.webp",
  "url": "https://bhattichemicalsindustry.com.pk/products/zinc-ingot.php",
  "brand": {
    "@type": "Brand",
    "name": "Bhatti Chemicals Industry"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "Bhatti Chemicals Industry",
    "url": "https://bhattichemicalsindustry.com.pk/",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Gujranwala",
      "addressCountry": "PK"
    }
  },
  "category": "Zinc Ingot",
  "material": "High-Purity Zinc Metal",
  "additionalProperty": [
    { "@type": "PropertyValue", "name": "Purity Guarantee", "value": "≥ 99.95% Pure Zn" },
    { "@type": "PropertyValue", "name": "Physical Form", "value": "Solid metallic ingot bar" },
    { "@type": "PropertyValue", "name": "Bar Weight", "value": "~25 kg per ingot" },
    { "@type": "PropertyValue", "name": "Bundle Weight", "value": "~1,000 kg strapped bundles" },
    { "@type": "PropertyValue", "name": "Quality Documentation", "value": "In-house QC Lab COA and SGS Inspection Available" }
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://bhattichemicalsindustry.com.pk/contact-us.php",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition",
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "0.00",
      "priceCurrency": "PKR",
      "description": "Quote-based pricing confirmed upon volume and destination requirements; contact our sales team."
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
    {"@type":"ListItem","position":1,"name":"Home","item":"https://bhattichemicalsindustry.com.pk/"},
    {"@type":"ListItem","position":2,"name":"Products","item":"https://bhattichemicalsindustry.com.pk/products/"},
    {"@type":"ListItem","position":3,"name":"Zinc Ingot","item":"https://bhattichemicalsindustry.com.pk/products/zinc-ingot.php"}
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
      "name": "What is the purity specification of your Zinc Ingots?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bhatti Chemicals Industry supplies Zinc Ingots guaranteed at ≥99.95% zinc (Zn) purity with ultra-low trace impurities (Lead Pb ≤ 0.003%, Iron Fe ≤ 0.002%, Cadmium Cd ≤ 0.003%). A certified Certificate of Analysis is provided for every production batch."
      }
    },
    {
      "@type": "Question",
      "name": "What are the standard weight and dimensions of each Zinc Ingot?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Each standard Zinc Ingot bar weighs approximately 25 kg (±1 kg) with dimensions of approximately 450 mm × 100 mm × 45 mm. Ingots are stacked into steel-strapped bundles weighing approximately 1,000 kg for secure forklift handling."
      }
    },
    {
      "@type": "Question",
      "name": "Which industries utilize your Zinc Ingots?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our Zinc Ingots are used extensively in hot-dip galvanizing of structural steel, precision zinc die casting (ZAMAK formulation base), brass and bronze billet foundry casting, battery anode production, and as primary chemical feedstock for high-purity zinc oxide manufacturing."
      }
    },
    {
      "@type": "Question",
      "name": "Can Bhatti Chemicals Industry supply Zinc Ingots for international export?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We supply containerized Zinc Ingot shipments (typically 20–25 MT per 20ft FCL) to international buyers across the Middle East, Asia, and Europe with full commercial export documentation and optional third-party SGS inspection."
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
h3 { font-size: 1.2rem; font-weight: 600; }
p { line-height: 1.75; color: #475569; }

.container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.section-header { text-align: center; margin-bottom: 3rem; }
.section-header h2 { color: #0f172a; margin-bottom: 0.75rem; }
.section-desc { font-size: 1.02rem; max-width: 680px; margin: 0 auto; color: #475569; }

.eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #0369a1;
  background: rgba(2, 132, 199, 0.1);
  border: 1px solid rgba(2, 132, 199, 0.25);
  padding: 5px 14px;
  border-radius: 9999px;
  margin-bottom: 0.85rem;
}

/* ── HERO SECTION ── */
.page-hero {
  position: relative;
  min-height: 56vh;
  background: #0b1523;
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
    radial-gradient(ellipse 70% 65% at 85% 25%, rgba(29, 78, 216, 0.35) 0%, transparent 65%),
    radial-gradient(ellipse 45% 55% at 5% 85%, rgba(2, 132, 199, 0.22) 0%, transparent 60%);
  pointer-events: none;
}
.hero-bg-text {
  position: absolute;
  right: 1%;
  top: 50%;
  transform: translateY(-50%);
  font-family: 'Sora', sans-serif;
  font-size: clamp(120px, 16vw, 270px);
  font-weight: 800;
  color: rgba(255, 255, 255, 0.035);
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
.breadcrumb a:hover { color: #7dd3fc; }
.breadcrumb span { color: rgba(255,255,255,0.3); }
.page-hero-inner h1 { color: #ffffff; margin-bottom: 0.85rem; }
.hero-desc {
  color: rgba(255,255,255,0.8);
  font-size: clamp(1rem, 2vw, 1.15rem);
  max-width: 660px;
  line-height: 1.75;
  margin-bottom: 1.75rem;
}
.hero-tag-row { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 2rem; }
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
  background: rgba(29, 78, 216, 0.38);
  border-color: rgba(125, 211, 252, 0.45);
  color: #7dd3fc;
}
.hero-ctas { display: flex; flex-wrap: wrap; gap: 14px; }
.btn-blue {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 28px;
  background: #2563eb;
  color: #ffffff;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.95rem;
  text-decoration: none;
  transition: background 0.2s, transform 0.15s, box-shadow 0.15s;
}
.btn-blue:hover {
  background: #1d4ed8;
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(37, 99, 235, 0.35);
}
.btn-ghost-hero {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 26px;
  background: rgba(255, 255, 255, 0.08);
  color: #ffffff;
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 8px;
  font-weight: 600;
  font-size: 0.95rem;
  text-decoration: none;
  transition: background 0.2s, border-color 0.2s;
}
.btn-ghost-hero:hover {
  background: rgba(255, 255, 255, 0.15);
  border-color: #ffffff;
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
  color: #1d4ed8;
  line-height: 1.1;
  margin-bottom: 4px;
}
.overview-note { font-size: 0.82rem; color: #475569; }

/* ── DETAIL SECTION ── */
.detail-section { padding: 90px 24px; background: #ffffff; }
.detail-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 56px;
  align-items: center;
}
.detail-text h2 { color: #0f172a; margin-bottom: 1rem; }
.detail-text p { margin-bottom: 1.2rem; font-size: 1.02rem; line-height: 1.75; }

.detail-img-card {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
  border: 1px solid #e2e8f0;
  background: #f8fafc;
}
.detail-img-card img {
  width: 100%;
  height: 100%;
  aspect-ratio: 16 / 11;
  object-fit: cover;
  display: block;
}
.detail-img-badge {
  position: absolute;
  bottom: 16px;
  left: 16px;
  background: rgba(15, 23, 42, 0.85);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  color: #ffffff;
  padding: 8px 16px;
  border-radius: 8px;
  font-size: 0.82rem;
  font-weight: 600;
}

/* ── SPECS SECTION ── */
.specs-section { padding: 90px 24px; background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }
.specs-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 48px;
  align-items: start;
}
.specs-table {
  width: 100%;
  border-collapse: collapse;
  background: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
}
.specs-table th {
  background: #1e3a8a;
  color: #ffffff;
  font-family: 'Sora', sans-serif;
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: 14px 18px;
  text-align: left;
}
.specs-table td {
  padding: 14px 18px;
  font-size: 0.92rem;
  border-bottom: 1px solid #f1f5f9;
  color: #334155;
}
.specs-table tr:last-child td { border-bottom: none; }
.specs-table tr:hover td { background: #f0f7ff; }
.specs-table td:first-child { font-weight: 700; color: #0f172a; }
.specs-table td.good { color: #1d4ed8; font-weight: 700; }

/* ── STOCK & PHYSICAL DATA CARD ── */
.stock-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
}
.stock-card img {
  width: 100%;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  display: block;
}
.stock-card-body { padding: 24px; }
.stock-card-body h3 { color: #0f172a; font-size: 1.25rem; margin-bottom: 0.6rem; }
.stock-card-body p { font-size: 0.92rem; color: #475569; margin-bottom: 1.2rem; }
.stock-list { list-style: none; display: grid; gap: 8px; margin-bottom: 1.4rem; }
.stock-list li {
  font-size: 0.88rem;
  color: #334155;
  display: flex;
  align-items: center;
  gap: 8px;
  font-weight: 500;
}
.stock-list li svg { width: 16px; height: 16px; color: #2563eb; flex-shrink: 0; }

/* ── QUALITY ASSURANCE & LAB REPORT SECTION ── */
.lab-section { padding: 90px 24px; background: #ffffff; }
.lab-console-card {
  max-width: 1200px;
  margin: 0 auto;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.06);
}
.lab-console-topbar {
  background: #0b1523;
  padding: 16px 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 12px;
}
.lab-status-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: #7dd3fc;
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}
.pulse-indicator {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #38bdf8;
  box-shadow: 0 0 10px #38bdf8;
}
.lab-accreditation-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: rgba(255, 255, 255, 0.85);
  font-size: 0.82rem;
  font-weight: 600;
}
.lab-accreditation-pill svg { width: 16px; height: 16px; fill: currentColor; }
.lab-console-body {
  padding: 44px;
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: 48px;
  align-items: center;
}
.lab-console-heading { font-size: 1.6rem; color: #0f172a; margin-bottom: 0.4rem; }
.lab-console-sub { font-size: 0.95rem; color: #1d4ed8; font-weight: 700; margin-bottom: 1.2rem; }
.lab-console-text { font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 1.8rem; }
.lab-metric-chips { display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 1.6rem; }
.lab-chip {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 8px;
  padding: 10px 16px;
  display: flex;
  flex-direction: column;
}
.chip-label { font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase; }
.chip-val { font-family: 'Sora', sans-serif; font-size: 1.15rem; font-weight: 800; color: #1d4ed8; }

.lab-console-hub {
  background: #f0f7ff;
  border: 1px solid #bae6fd;
  border-radius: 14px;
  padding: 32px 28px;
  text-align: center;
  display: flex;
  flex-direction: column;
  gap: 16px;
}
.doc-preview-head {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-size: 0.84rem;
  font-weight: 700;
  color: #0369a1;
  text-transform: uppercase;
}
.doc-preview-head svg { width: 18px; height: 18px; fill: currentColor; }
.doc-badge-live {
  background: #0284c7;
  color: #ffffff;
  font-size: 0.68rem;
  padding: 2px 7px;
  border-radius: 4px;
}

/* ── APPLICATIONS ── */
.applications-section { padding: 90px 24px; background: #0b1523; }
.applications-section .section-header .eyebrow { color: #7dd3fc; background: rgba(125, 211, 252, 0.12); border-color: rgba(125, 211, 252, 0.25); }
.applications-section .section-header h2 { color: #ffffff; }
.applications-section .section-desc { color: rgba(255, 255, 255, 0.75); }
.app-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.app-card {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 14px;
  padding: 32px 26px;
  transition: background 0.25s, border-color 0.25s, transform 0.2s;
}
.app-card:hover {
  background: rgba(37, 99, 235, 0.2);
  border-color: rgba(125, 211, 252, 0.4);
  transform: translateY(-3px);
}
.app-icon {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: rgba(37, 99, 235, 0.25);
  color: #7dd3fc;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 16px;
}
.app-icon svg { width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.app-card h3 { color: #ffffff; margin-bottom: 0.6rem; font-size: 1.15rem; }
.app-card p { color: rgba(255, 255, 255, 0.75); font-size: 0.92rem; line-height: 1.65; }

/* ── FAQ SECTION ── */
.faq-section { padding: 90px 24px; background: #f8fafc; border-top: 1px solid #e2e8f0; }
.faq-list { max-width: 820px; margin: 0 auto; }
.faq-item {
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  margin-bottom: 14px;
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
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
  font-size: 1.02rem;
  font-weight: 700;
  color: #0f172a;
  transition: background 0.15s, color 0.15s;
}
.faq-q:hover { background: #f8fafc; }
.faq-q[aria-expanded="true"] { background: #f0f7ff; color: #1d4ed8; }
.faq-chevron {
  flex-shrink: 0;
  width: 26px;
  height: 26px;
  border: 1.5px solid #2563eb;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #2563eb;
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
.faq-a p { font-size: 0.95rem; color: #475569; line-height: 1.75; }

/* ── CTA STRIP ── */
.cta-strip {
  background: linear-gradient(135deg, #0b1523 0%, #1e3a8a 100%);
  padding: 80px 24px;
  text-align: center;
}
.cta-strip h2 { color: #ffffff; margin-bottom: 0.85rem; }
.cta-strip p {
  color: rgba(255, 255, 255, 0.92);
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
  color: #1e3a8a;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.96rem;
  text-decoration: none;
  transition: transform 0.15s, box-shadow 0.15s;
}
.btn-white:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
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
  .detail-grid { grid-template-columns: 1fr; }
  .specs-grid { grid-template-columns: 1fr; }
  .lab-console-body { grid-template-columns: 1fr; }
  .app-grid { grid-template-columns: repeat(2, 1fr); }
  .overview-inner { grid-template-columns: repeat(2, 1fr); }
  .overview-item:nth-child(2) { border-right: none; }
  .overview-item:nth-child(-n+2) { border-bottom: 1px solid #e2e8f0; }
}
@media (max-width: 768px) {
  .app-grid { grid-template-columns: 1fr; }
  .hero-bg-text { display: none; }
  .overview-inner { grid-template-columns: 1fr; }
  .overview-item { border-right: none; border-bottom: 1px solid #e2e8f0; }
  .overview-item:last-child { border-bottom: none; }
  .lab-console-body { padding: 30px 20px; }
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
<section class="page-hero" aria-label="Zinc Ingot product header">
  <div class="hero-bg-text" aria-hidden="true">ZnINGOT</div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo site_url('/'); ?>">Home</a>
      <span>›</span>
      <a href="<?php echo site_url('/products/'); ?>">Products</a>
      <span>›</span>
      <span aria-current="page">Zinc Ingot</span>
    </nav>
    <div class="eyebrow">
      Primary Industrial Metal
    </div>
    <h1>Zinc Ingot<br>&ge; 99.95% Purity</h1>
    <p class="hero-desc">
      Bhatti Chemicals Industry supplies commercial-grade and high-purity Zinc Ingots (≥99.95% Zn). Engineered for hot-dip galvanizing kettles, precision die casting, brass foundry alloying, and chemical production.
    </p>
    <div class="hero-tag-row">
      <span class="hero-tag highlight">ISO 9001:2015 Certified</span>
      <span class="hero-tag">&ge; 99.95% Purity Guaranteed</span>
      <span class="hero-tag">~25 kg Solid Ingot Bars</span>
      <span class="hero-tag">Strapped ~1,000 kg Bundles</span>
      <span class="hero-tag">In-House QC Lab &amp; SGS Tested</span>
    </div>
    <div class="hero-ctas">
      <a href="#inquiry" class="btn-blue">Request Ingot Pricing</a>
      <button type="button" 
              class="btn-ghost-hero btn-view-lab-report"
              data-lab-pdf="<?php echo site_url('/assets/lab-reports/Secondary-ZINC-INGOT-Lab-Test-Report-BHATTIZINC.pdf'); ?>"
              data-lab-title="Official In-House Quality Assurance Test Report — Zinc Ingot"
              data-lab-subtitle="Generated by the Bhatti Chemicals Industry Quality Control Laboratory (Gujranwala Facility)"
              data-lab-badge="In-House Laboratory Certificate of Analysis">
        <span>View Official Lab Report</span>
      </button>
      <a href="#specifications" class="btn-ghost-hero">Technical Specifications</a>
    </div>
  </div>
</section>

<!-- OVERVIEW STATS STRIP -->
<div class="overview-strip" role="region" aria-label="Zinc Ingot key specifications">
  <div class="overview-inner">
    <div class="overview-item">
      <span class="overview-label">Chemical Assay</span>
      <span class="overview-value">&ge; 99.95%</span>
      <span class="overview-note">Zinc (Zn) purity</span>
    </div>
    <div class="overview-item">
      <span class="overview-label">Bar Weight</span>
      <span class="overview-value">~25 kg</span>
      <span class="overview-note">&plusmn;1 kg per ingot bar</span>
    </div>
    <div class="overview-item">
      <span class="overview-label">Bundle Weight</span>
      <span class="overview-value">~1,000 kg</span>
      <span class="overview-note">Steel-strapped pallets</span>
    </div>
    <div class="overview-item">
      <span class="overview-label">Compliance</span>
      <span class="overview-value">ISO 9001</span>
      <span class="overview-note">:2015 + Lab certified</span>
    </div>
  </div>
</div>

<!-- DETAIL SECTION -->
<section class="detail-section" id="about">
  <div class="detail-grid">
    <div class="detail-text reveal">
      <div class="eyebrow">Product Overview</div>
      <h2>High-Purity Zinc Metal for Heavy Industrial Manufacturing</h2>
      <p>
        Zinc Ingots are the fundamental raw material for modern metallurgy and corrosion-resistant surface engineering. Bhatti Chemicals Industry supplies refined Zinc Ingots with ≥99.95% purity, ensuring ultra-low concentrations of critical tramp elements like iron, lead, cadmium, and copper.
      </p>
      <p>
        Low iron content prevents premature bottom dross buildup in hot-dip galvanizing kettles, while controlled lead and cadmium fractions ensure seamless compliance for automotive die casting and copper-zinc brass melting.
      </p>
      <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-blue">Request Ingot Quote</a>
    </div>

    <div class="detail-img-card reveal">
      <img src="<?php echo site_url('/assets/images/products/zinc-ingot.webp'); ?>" 
           alt="High-purity zinc ingots stacked in warehouse" 
           width="660" height="405" loading="lazy" decoding="async">
      <div class="detail-img-badge">
        <span>Standard Bar Form: ~25 kg &bull; ≥99.95% Zn Purity</span>
      </div>
    </div>
  </div>
</section>

<!-- QUALITY ASSURANCE & LAB REPORT SHOWCASE -->
<section class="lab-section">
  <div class="lab-console-card reveal">
    <div class="lab-console-topbar">
      <div class="lab-status-badge">
        <span class="pulse-indicator"></span>
        <span>In-House Laboratory Tested &bull; Gujranwala Industrial Complex</span>
      </div>
      <div class="lab-accreditation-pill">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
        <span>ISO 9001:2015 &bull; SGS Standard Compatible</span>
      </div>
    </div>

    <div class="lab-console-body">
      <div>
        <h3 class="lab-console-heading">Official In-House Quality Assurance Test Report</h3>
        <p class="lab-console-sub">Guaranteed &ge; 99.95% Zinc Assay &bull; Low Impurity Profile</p>
        <p class="lab-console-text">
          Every heat and ingot batch is tested at our Gujranwala facility using optical emission spectrometry and titration to verify exact elemental purity. Independent SGS third-party testing reports can be furnished upon request.
        </p>

        <div class="lab-metric-chips">
          <div class="lab-chip">
            <span class="chip-label">Zinc Assay</span>
            <span class="chip-val">&ge; 99.95%</span>
          </div>
          <div class="lab-chip">
            <span class="chip-label">Lead (Pb)</span>
            <span class="chip-val">&le; 0.003%</span>
          </div>
          <div class="lab-chip">
            <span class="chip-label">Iron (Fe)</span>
            <span class="chip-val">&le; 0.002%</span>
          </div>
          <div class="lab-chip">
            <span class="chip-label">Cadmium (Cd)</span>
            <span class="chip-val">&le; 0.003%</span>
          </div>
        </div>
      </div>

      <div class="lab-console-hub">
        <div class="doc-preview-head">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
          <span>Laboratory Test Report</span>
          <span class="doc-badge-live">PDF</span>
        </div>

        <button type="button" 
                class="btn-view-lab-report btn-console-view-large"
                data-lab-pdf="<?php echo site_url('/assets/lab-reports/Secondary-ZINC-INGOT-Lab-Test-Report-BHATTIZINC.pdf'); ?>"
                data-lab-title="Official In-House Quality Assurance Test Report — Zinc Ingot"
                data-lab-subtitle="Generated by the Bhatti Chemicals Industry Quality Control Laboratory (Gujranwala Facility)"
                data-lab-badge="In-House Laboratory Certificate of Analysis"
                aria-label="View official Zinc Ingot test report">
          <span class="btn-console-shell">
            <span class="btn-console-icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
              </svg>
            </span>
            <span class="btn-console-content">
              <span class="btn-console-title">VIEW LAB REPORT</span>
              <span class="btn-console-sub">Open Interactive PDF Viewer</span>
            </span>
          </span>
        </button>

        <a href="<?php echo site_url('/assets/lab-reports/Secondary-ZINC-INGOT-Lab-Test-Report-BHATTIZINC.pdf'); ?>" 
           download="Secondary-ZINC-INGOT-Lab-Test-Report-BHATTIZINC.pdf" 
           class="btn-console-download"
           title="Download Zinc Ingot test report PDF">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
          <span>Download Official PDF (174 KB)</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- SPECIFICATIONS & STOCK -->
<section class="specs-section" id="specifications">
  <div class="specs-grid">
    <div class="reveal">
      <div class="eyebrow">Technical Parameters</div>
      <h2>Zinc Ingot Chemical &amp; Physical Specifications</h2>
      <p style="margin-bottom: 1.6rem;">
        Certified quality parameters for Zinc Ingots as supplied by Bhatti Chemicals Industry. Fully compliant with international ASTM B6 and ISO 752 guidelines.
      </p>

      <table class="specs-table" aria-label="Zinc Ingot quality specifications">
        <thead>
          <tr>
            <th scope="col">Parameter</th>
            <th scope="col">Typical Specification</th>
            <th scope="col">Industrial Significance</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Zinc (Zn) Purity</td>
            <td class="good">&ge; 99.95%</td>
            <td>High-grade purity for galvanizing &amp; casting</td>
          </tr>
          <tr>
            <td>Physical Form</td>
            <td>Solid Ingot Bar</td>
            <td>Convenient for furnace melting &amp; manual handling</td>
          </tr>
          <tr>
            <td>Standard Bar Weight</td>
            <td>~25 kg (&plusmn;1 kg)</td>
            <td>Industry-standard ingot handling unit</td>
          </tr>
          <tr>
            <td>Bundle Weight</td>
            <td>~1,000 kg</td>
            <td>Strapped with heavy steel bands for forklift transport</td>
          </tr>
          <tr>
            <td>Lead (Pb) Content</td>
            <td>&le; 0.003%</td>
            <td>Prevents brittleness in die-cast components</td>
          </tr>
          <tr>
            <td>Iron (Fe) Content</td>
            <td>&le; 0.002%</td>
            <td>Minimizes kettle dross in galvanizing baths</td>
          </tr>
          <tr>
            <td>Cadmium (Cd) Content</td>
            <td>&le; 0.003%</td>
            <td>Meets international environmental safety thresholds</td>
          </tr>
          <tr>
            <td>Surface Appearance</td>
            <td>Shiny metallic silver</td>
            <td>Free from heavy oxide crusts or foreign inclusions</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="stock-card reveal">
      <img src="<?php echo site_url('/assets/images/products/zinc-ingot-stock.webp'); ?>" 
           alt="Bundled zinc ingot stock ready for dispatch" 
           width="660" height="400" loading="lazy" decoding="async">
      <div class="stock-card-body">
        <h3>Consistent Stock Ready for Dispatch</h3>
        <p>
          We maintain dedicated buffer stock at our Gujranwala facility to ensure rapid dispatch for urgent factory replenishments and container shipments.
        </p>
        <ul class="stock-list">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Guaranteed &ge; 99.95% chemical assay</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Uniform ~25 kg bar weights for easy charging</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Export-ready steel strapping &amp; palletization</span>
          </li>
        </ul>
        <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-blue" style="width: 100%; justify-content: center;">Check Current Availability</a>
      </div>
    </div>
  </div>
</section>

<!-- APPLICATIONS SECTION -->
<section class="applications-section">
  <div class="container">
    <div class="section-header reveal">
      <div class="eyebrow">Downstream Processes</div>
      <h2>Key Industrial Applications of Zinc Ingot</h2>
      <p class="section-desc">
        Essential metallic raw material for corrosion prevention, precision component manufacturing, and chemical synthesis.
      </p>
    </div>

    <div class="app-grid">
      <div class="app-card reveal">
        <div class="app-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        </div>
        <h3>Hot-Dip Galvanizing</h3>
        <p>Melted into galvanizing kettles to form metallurgical zinc-iron alloy coatings protecting structural steel beams, guardrails, and transmission towers.</p>
      </div>

      <div class="app-card reveal">
        <div class="app-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
        </div>
        <h3>Precision Die Casting</h3>
        <p>Used as the virgin base metal for formulating ZAMAK 3, 5, and 7 alloys to produce complex automotive hardware and electronic casings.</p>
      </div>

      <div class="app-card reveal">
        <div class="app-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
        </div>
        <h3>Brass &amp; Bronze Foundry</h3>
        <p>Alloyed with molten copper to produce brass billets and castings for plumbing fixtures, valves, musical instruments, and electrical switches.</p>
      </div>

      <div class="app-card reveal">
        <div class="app-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M10 2v7.31L4.14 19.46A2 2 0 0 0 5.86 22h12.28a2 2 0 0 0 1.72-2.54L14 9.31V2h-4z"></path></svg>
        </div>
        <h3>Zinc Oxide Production</h3>
        <p>Direct thermal feedstock vaporized in French Process indirect retorts to yield pharmaceutical and industrial grade ZnO powders.</p>
      </div>

      <div class="app-card reveal">
        <div class="app-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><rect x="1" y="6" width="18" height="12" rx="2"></rect><line x1="23" y1="13" x2="23" y2="11"></line></svg>
        </div>
        <h3>Battery Anode Manufacturing</h3>
        <p>Cast into high-surface-area anodes or extruded foils for alkaline, zinc-air, and rechargeable zinc-ion energy storage systems.</p>
      </div>

      <div class="app-card reveal">
        <div class="app-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
        </div>
        <h3>Zinc Chemical Synthesis</h3>
        <p>Acid-digested to produce high-purity zinc sulphate, zinc chloride, and zinc stearate for rubber vulcanization and agriculture.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
  <div class="container">
    <div class="section-header reveal">
      <div class="eyebrow">Frequently Asked Questions</div>
      <h2>Zinc Ingot Procurement FAQs</h2>
      <p class="section-desc">Key technical and purchasing questions about Zinc Ingot supply from Bhatti Chemicals Industry.</p>
    </div>

    <div class="faq-list">
      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ingot-1">
          <span>What is the purity specification of your Zinc Ingots?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ingot-1" class="faq-a" role="region">
          <p>Bhatti Chemicals Industry supplies Zinc Ingots guaranteed at ≥99.95% zinc (Zn) purity with ultra-low trace impurities (Lead Pb ≤ 0.003%, Iron Fe ≤ 0.002%, Cadmium Cd ≤ 0.003%). A certified Certificate of Analysis is provided for every production batch.</p>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ingot-2">
          <span>What are the standard weight and dimensions of each Zinc Ingot?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ingot-2" class="faq-a" role="region">
          <p>Each standard Zinc Ingot bar weighs approximately 25 kg (±1 kg) with dimensions of approximately 450 mm × 100 mm × 45 mm. Ingots are stacked into steel-strapped bundles weighing approximately 1,000 kg for secure forklift handling.</p>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ingot-3">
          <span>Which industries utilize your Zinc Ingots?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ingot-3" class="faq-a" role="region">
          <p>Our Zinc Ingots are used extensively in hot-dip galvanizing of structural steel, precision zinc die casting (ZAMAK formulation base), brass and bronze billet foundry casting, battery anode production, and as primary chemical feedstock for high-purity zinc oxide manufacturing.</p>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-ingot-4">
          <span>Can Bhatti Chemicals Industry supply Zinc Ingots for international export?</span>
          <span class="faq-chevron" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div id="faq-ingot-4" class="faq-a" role="region">
          <p>Yes. We supply containerized Zinc Ingot shipments (typically 20–25 MT per 20ft FCL) to international buyers across the Middle East, Asia, and Europe with full commercial export documentation and optional third-party SGS inspection.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONVERSION CTA STRIP -->
<section class="cta-strip" id="inquiry" aria-label="Zinc Ingot quotation request">
  <div class="container">
    <h2>Secure Guaranteed Zinc Ingot Pricing Today</h2>
    <p>
      Share your required monthly tonnage and destination facility. We offer fast quotation, verified laboratory certificates, and reliable logistics support.
    </p>
    <div class="cta-btn-row">
      <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-white">Request Ingot Quote</a>
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
