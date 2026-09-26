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

    <meta name="description" content="Buy 99.99% pure Zinc Oxide (ZnO) direct from Pakistan manufacturer. French process, 5000 MT capacity, in-house lab &amp; SGS tested 25 kg bags for rubber, paint &amp; ceramics.">
    <meta name="keywords" content="Zinc Oxide Pakistan, 99.99% zinc oxide, zinc oxide manufacturer Pakistan, French process zinc oxide, 5000 MT zinc oxide, zinc oxide Gujranwala, pure ZnO Pakistan, SGS tested zinc oxide, zinc oxide rubber tyres, zinc oxide ceramics paints">
    <link rel="canonical" href="https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php">

    <!-- Open Graph -->
    <meta property="og:type" content="product">
    <meta property="og:site_name" content="Bhatti Chemicals Industry">
    <meta property="og:title" content="Zinc Oxide Manufacturer in Pakistan | 99.99% Pure ZnO | Bhatti Chemicals">
    <meta property="og:description" content="Buy 99.99% pure Zinc Oxide (ZnO) direct from Pakistan manufacturer. French process, 5000 MT capacity, in-house lab &amp; SGS tested 25 kg bags for rubber, paint &amp; ceramics.">
    <meta property="og:image" content="https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp">
    <meta property="og:url" content="https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
    <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

    <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('/assets/css/lab-report-btn.css'); ?>">
    <link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>

    <!-- Google Analytics -->
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

    <title>Zinc Oxide Manufacturer in Pakistan | 99.99% Pure ZnO | Bhatti Chemicals</title>

    <!-- Product Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "@id": "https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php#product",
      "name": "Zinc Oxide (ZnO) — 99.99% Purity Guaranteed",
      "description": "High-purity 99.99% Zinc Oxide manufactured by Bhatti Chemicals Industry in Gujranwala, Pakistan using French Indirect Process technology and automated Chinese plant machinery. 5,000 MT annual production capacity, in-house laboratory certified and SGS verified. Packed in 25 kg bags for rubber vulcanization, tyres, ceramics, paints, pharmaceuticals, and agricultural applications.",
      "image": "https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php",
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
        { "@type": "PropertyValue", "name": "Purity Guarantee", "value": "≥ 99.99% Pure ZnO" },
        { "@type": "PropertyValue", "name": "Annual Production Capacity", "value": "5,000 MT" },
        { "@type": "PropertyValue", "name": "Manufacturing Technology", "value": "French Indirect Process with Chinese Automated Plant Lines" },
        { "@type": "PropertyValue", "name": "Physical Form", "value": "Fine white powder (325 mesh)" },
        { "@type": "PropertyValue", "name": "Pack Size", "value": "25 kg moisture-proof valve bags" },
        { "@type": "PropertyValue", "name": "Quality Documentation", "value": "In-House Quality Control Lab COA and SGS Third-Party Reports" },
        { "@type": "PropertyValue", "name": "CAS Number", "value": "1314-13-2" },
        { "@type": "PropertyValue", "name": "Molecular Formula", "value": "ZnO" }
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
        {"@type":"ListItem","position":1,"name":"Home","item":"https://bhattichemicalsindustry.com.pk/"},
        {"@type":"ListItem","position":2,"name":"Products","item":"https://bhattichemicalsindustry.com.pk/products/"},
        {"@type":"ListItem","position":3,"name":"Zinc Oxide","item":"https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php"}
      ]
    }
    </script>
    <!-- WebPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "@id": "https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php#webpage",
      "name": "Zinc Oxide Manufacturer in Pakistan | 99.99% Pure ZnO",
      "description": "Buy 99.99% pure Zinc Oxide (ZnO) direct from Pakistan manufacturer. French process, 5000 MT capacity, in-house lab & SGS tested 25 kg bags for rubber, paint & ceramics.",
      "url": "https://bhattichemicalsindustry.com.pk/products/zinc-oxide.php",
      "dateModified": "2026-09-25",
      "publisher": {
        "@type": "Organization",
        "name": "Bhatti Chemicals Industry",
        "url": "https://bhattichemicalsindustry.com.pk/"
      }
    }
    </script>
    <!-- Structured Data: FAQPage Schema (AEO) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Zinc Oxide (ZnO) and what are its key chemical identifiers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Zinc Oxide (ZnO) is an inorganic compound produced as a fine white powder through the oxidation of vaporized high-grade zinc metal. Key identifiers include CAS Number 1314-13-2, Molecular Formula ZnO, Molecular Weight 81.38 g/mol, and EINECS 215-222-5. It is thermally stable, insoluble in water, and serves as an essential functional additive across rubber vulcanization, ceramics, paints, pharmaceuticals, sunscreens, and agriculture."
          }
        },
        {
          "@type": "Question",
          "name": "What purity grade of Zinc Oxide does Bhatti Chemicals Industry supply?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bhatti Chemicals Industry guarantees ≥ 99.99% purity (White Seal / Gold Seal Grade), manufactured via the French Indirect Process. Our Zinc Oxide features ultra-low heavy metal content (Lead Pb ≤ 0.002%, Cadmium Cd ≤ 0.001%, Iron Fe ≤ 0.001%, Copper Cu ≤ 0.0005%) and passing 325 mesh (45 µm) at ≥ 99.95%. Every batch is assayed at our in-house QC laboratory in Gujranwala and verified by independent accredited third-party testing (SGS)."
          }
        },
        {
          "@type": "Question",
          "name": "Where is your Zinc Oxide manufactured and what is the production capacity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Zinc Oxide is manufactured at our industrial manufacturing facility in Gujranwala, Punjab, Pakistan. The plant is equipped with automated Chinese vaporization furnaces operating on the French Indirect Process, boasting an annual production capacity of 5,000 Metric Tons (MT). This guarantees a continuous, scalable supply for domestic industrial clients across Pakistan and international export shipments."
          }
        },
        {
          "@type": "Question",
          "name": "Can I view or verify the batch Certificate of Analysis (COA) online before ordering?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Bhatti Chemicals Industry provides an interactive digital Lab Report and Certificate of Analysis viewer directly on this product page. Quality managers, procurement officers, and compounding chemists can click the 'VIEW LAB REPORT' button to inspect authenticated batch test reports—including purity assay percentages, trace elemental spectrometry (Pb, Cd, Fe), and particle fineness—or download the official signed PDF report instantly."
          }
        },
        {
          "@type": "Question",
          "name": "Why is the French Indirect Process superior to the Direct (American) Process for Zinc Oxide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The French (Indirect) Process vaporizes pure Special High Grade (SHG) refined zinc metal in high-temperature crucibles and oxidizes the vapor in a separate combustion chamber. This produces sub-micron, homogeneous particles with ≥ 99.99% purity and ultra-low heavy metal residues. In contrast, the Direct (American) Process roasts unrefined zinc ores with coal, resulting in lower purity (96–99%) and high lead/cadmium impurities unsuitable for tyre compounding, pharmaceuticals, and high-gloss glazes."
          }
        },
        {
          "@type": "Question",
          "name": "What industries and applications utilize Bhatti Chemicals Zinc Oxide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Zinc Oxide is engineered for six core industries: 1) Rubber & Tyres as an essential vulcanization activator and thermal heat dissipator; 2) Paints & Protective Coatings for anti-corrosion, UV polymer stabilization, and non-leaching mildew resistance; 3) Ceramics & Glazes as a low-expansion flux and gloss enhancer; 4) Pharmaceuticals & Ointments as an antiseptic and wound-healing active in USP/BP compliant formulations; 5) Cosmetics & Skincare as a broad-spectrum, non-nano physical mineral UV filter; and 6) Agriculture & Animal Feed as a bioavailable zinc micronutrient."
          }
        },
        {
          "@type": "Question",
          "name": "What packaging options and bulk supply configurations are available?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Zinc Oxide is supplied in standard 25 kg multi-wall moisture-proof kraft valve paper bags with inner sealed polyethylene (PE) liners to prevent atmospheric carbonation. Bags are palletized on heat-treated, fumigated export pallets (40 bags / 1,000 kg per pallet) with heavy-duty stretch film wrap. For high-volume automated industrial hoppers, we also provide 500 kg and 1,000 kg FIBC jumbo bulk bags with top filling and bottom discharge spouts."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Minimum Order Quantity (MOQ) and sample request policy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our minimum order quantity (MOQ) is 25 kg (one standard bag), making it accessible for trial testing, formula validation, and ongoing industrial manufacturing. Qualified industrial manufacturers can also request complimentary testing sample batches (500g to 2 kg) complete with lot-specific Certificate of Analysis for pilot runs and plant evaluations."
          }
        },
        {
          "@type": "Question",
          "name": "What physical and technical specifications are provided on your Technical Data Sheet (TDS)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Technical Data Sheet guarantees: Purity (ZnO) ≥ 99.99%, Specific Surface Area (BET) 4.0–6.0 m²/g, Bulk Density 0.45–0.65 g/cm³ (apparent) / 5.61 g/cm³ (true), Sieve Fineness through 325 mesh (45 µm) ≥ 99.95%, Volatile Matter at 105°C ≤ 0.20%, Loss on Ignition (LOI) ≤ 0.20%, Water Soluble Salts ≤ 0.10%, and Refractive Index 2.01."
          }
        },
        {
          "@type": "Question",
          "name": "How can I request a quotation or arrange industrial delivery across Pakistan or for export?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Quotations can be requested by submitting an RFQ on our website, emailing info@bhattichemicalsindustry.com.pk, or messaging our commercial sales team on WhatsApp at +92 304 1462460. We dispatch within 24 to 48 hours to major industrial hubs including Karachi, Lahore, Faisalabad, Gujranwala, Sialkot, and Rawalpindi, as well as handling full container load (FCL) export logistics."
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
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }
    .why-card {
      background: #ffffff; border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 16px; padding: 34px 28px;
      box-shadow: 0 4px 18px -2px rgba(0,0,0,0.04), 0 2px 6px -1px rgba(0,0,0,0.02);
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s;
      position: relative;
    }
    .why-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 28px;
      right: 28px;
      height: 3px;
      background: linear-gradient(90deg, #007b5e, #4ade9e);
      border-radius: 0 0 4px 4px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .why-card:hover::before {
      opacity: 1;
    }
    .why-card:hover {
      box-shadow: 0 16px 36px -4px rgba(0, 123, 94, 0.14);
      border-color: rgba(0, 123, 94, 0.35);
      transform: translateY(-5px);
    }
    .why-icon { color: #007b5e; margin-bottom: 16px; }
    .why-icon svg { width: 34px; height: 34px; fill: currentColor; display: block; }
    .why-card h3 { color: #0f172a; margin-bottom: 0.75rem; font-size: 1.12rem; font-weight: 700; line-height: 1.35; }
    .why-card p { font-size: 0.94rem; color: #475569; line-height: 1.7; margin-bottom: 0; }

    /* ── QUALITY & SPECIFICATIONS ── */
    .quality-section {
      padding: 96px 24px;
      background: #f4f6f4;
    }
    .quality-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Purity Bento Architecture */
    .purity-bento {
      display: grid;
      grid-template-columns: 1.15fr 0.85fr;
      gap: 28px;
      align-items: stretch;
      margin-bottom: 48px;
    }
    .purity-hero-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.16);
      border-radius: 18px;
      padding: 38px 34px;
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.04);
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
    }
    .purity-hero-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #007b5e, #4ade9e);
    }
    .purity-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(0, 123, 94, 0.08);
      border: 1px solid rgba(0, 123, 94, 0.22);
      color: #007b5e;
      padding: 5px 14px;
      border-radius: 9999px;
      font-size: 0.76rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 20px;
      align-self: flex-start;
    }
    .purity-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #007b5e;
      box-shadow: 0 0 0 3px rgba(0, 123, 94, 0.2);
    }
    .purity-stat {
      display: flex;
      align-items: baseline;
      gap: 12px;
      margin-bottom: 14px;
    }
    .purity-num {
      font-family: 'Sora', sans-serif;
      font-size: clamp(2.8rem, 4vw, 3.8rem);
      font-weight: 800;
      color: #007b5e;
      line-height: 1;
      letter-spacing: -0.03em;
    }
    .purity-unit {
      font-size: 1.25rem;
      font-weight: 700;
      color: #1e293b;
      letter-spacing: -0.01em;
    }
    .purity-hero-card h3 {
      font-size: 1.35rem;
      color: #0f172a;
      margin-bottom: 12px;
      font-weight: 700;
      font-family: 'Sora', sans-serif;
    }
    .purity-hero-card p {
      font-size: 0.98rem;
      color: #475569;
      line-height: 1.75;
      margin-bottom: 24px;
    }
    .purity-highlights {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: auto;
      padding-top: 18px;
      border-top: 1px solid #edf2f0;
    }
    .purity-hl-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 0.88rem;
      color: #334155;
      line-height: 1.55;
    }
    .purity-hl-item svg {
      width: 18px;
      height: 18px;
      fill: #007b5e;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* Quality Metrics Card */
    .quality-metrics-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 18px;
      padding: 30px 28px;
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.04);
      display: flex;
      flex-direction: column;
    }
    .metrics-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      padding-bottom: 14px;
      border-bottom: 1px solid #edf2f0;
    }
    .metrics-title {
      font-family: 'Sora', sans-serif;
      font-size: 0.96rem;
      font-weight: 700;
      color: #0f172a;
    }
    .metrics-badge {
      font-size: 0.72rem;
      font-weight: 700;
      color: #007b5e;
      background: rgba(0, 123, 94, 0.08);
      padding: 3px 10px;
      border-radius: 9999px;
    }
    .metrics-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      flex: 1;
    }
    .metric-box {
      background: #f8faf9;
      border: 1px solid rgba(0, 123, 94, 0.09);
      border-radius: 12px;
      padding: 14px 16px;
      display: flex;
      flex-direction: column;
      transition: background 0.2s, border-color 0.2s;
    }
    .metric-box:hover {
      background: #f0f6f3;
      border-color: rgba(0, 123, 94, 0.25);
    }
    .metric-label {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: #64748b;
      margin-bottom: 4px;
    }
    .metric-val {
      font-family: 'Sora', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: #0f172a;
      line-height: 1.2;
      margin-bottom: 4px;
    }
    .metric-val.highlight {
      color: #007b5e;
    }
    .metric-note {
      font-size: 0.74rem;
      color: #64748b;
    }

    /* ── LIGHT THEME QUALITY ASSURANCE LAB CONSOLE ── */
    .lab-showcase-section {
      margin-bottom: 56px;
    }
    .lab-console-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.16);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px -4px rgba(0, 50, 38, 0.05), 0 2px 6px -1px rgba(0, 0, 0, 0.02);
      position: relative;
    }
    .lab-console-card::before {
      content: '';
      position: absolute;
      top: -30%;
      right: -15%;
      width: 450px;
      height: 450px;
      background: radial-gradient(circle, rgba(0, 123, 94, 0.04) 0%, transparent 70%);
      pointer-events: none;
    }

    /* Top Console Bar (Light Theme) */
    .lab-console-topbar {
      position: relative;
      z-index: 1;
      padding: 13px 32px;
      background: #f8faf9;
      border-bottom: 1px solid #edf2f0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }
    .lab-status-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.74rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #007b5e;
    }
    .pulse-indicator {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #007b5e;
      box-shadow: 0 0 0 3px rgba(0, 123, 94, 0.22);
    }
    .lab-accreditation-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.74rem;
      font-weight: 600;
      color: #4b5563;
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.16);
      padding: 4px 12px;
      border-radius: 9999px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.02);
    }
    .lab-accreditation-pill svg {
      width: 14px;
      height: 14px;
      fill: #007b5e;
    }

    /* Console Body (Light Theme) */
    .lab-console-body {
      position: relative;
      z-index: 1;
      padding: 34px 34px;
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 34px;
      align-items: center;
    }

    /* Left: Lab Info & Credentials */
    .lab-console-main {
      display: flex;
      flex-direction: column;
    }
    .lab-console-heading {
      font-family: 'Sora', sans-serif;
      font-size: clamp(1.35rem, 2.2vw, 1.65rem);
      font-weight: 700;
      color: #0f172a;
      margin: 0 0 6px;
      letter-spacing: -0.01em;
      line-height: 1.25;
    }
    .lab-console-sub {
      font-size: 0.88rem;
      color: #007b5e;
      font-weight: 600;
      margin: 0 0 16px;
      letter-spacing: 0.02em;
    }
    .lab-console-text {
      font-size: 0.95rem;
      color: #475569;
      line-height: 1.7;
      margin-bottom: 22px;
    }
    .lab-console-text strong {
      color: #0f172a;
    }

    /* Metric Chips (Light Theme) */
    .lab-metric-chips {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-bottom: 22px;
    }
    .lab-chip {
      background: #f8faf9;
      border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 12px;
      padding: 12px 14px;
      display: flex;
      flex-direction: column;
      gap: 3px;
      transition: background 0.2s, border-color 0.2s, transform 0.15s;
    }
    .lab-chip:hover {
      background: #f0f7f4;
      border-color: rgba(0, 123, 94, 0.28);
      transform: translateY(-1px);
    }
    .chip-label {
      font-size: 0.7rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #64748b;
    }
    .chip-val {
      font-family: 'Sora', sans-serif;
      font-size: 1.1rem;
      font-weight: 700;
      color: #007b5e;
      line-height: 1.2;
    }
    .chip-sub {
      font-size: 0.72rem;
      color: #64748b;
    }

    /* Verification Badges (Light Theme) */
    .lab-cert-row {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .cert-pill {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 6px 14px;
      border-radius: 8px;
      font-size: 0.78rem;
      font-weight: 600;
    }
    .cert-pill svg {
      width: 14px;
      height: 14px;
      fill: currentColor;
    }
    .cert-pill.inhouse {
      background: #f0f7f4;
      color: #007b5e;
      border: 1px solid rgba(0, 123, 94, 0.22);
    }
    .cert-pill.sgs {
      background: #ecfdf5;
      color: #065f46;
      border: 1px solid #a7f3d0;
    }
    .cert-pill.purity {
      background: #eff6ff;
      color: #1e40af;
      border: 1px solid #bfdbfe;
    }

    /* Right: Interactive Action Hub (Light Theme) */
    .lab-console-hub {
      background: #f8faf9;
      border: 1px solid rgba(0, 123, 94, 0.15);
      border-radius: 16px;
      padding: 24px;
      display: flex;
      flex-direction: column;
      gap: 14px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
    }
    .doc-preview-head {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.8rem;
      font-weight: 700;
      color: #1e293b;
      padding-bottom: 12px;
      border-bottom: 1px solid #e2e8f0;
    }
    .doc-preview-head svg {
      width: 16px;
      height: 16px;
      fill: #007b5e;
    }
    .doc-badge-live {
      margin-left: auto;
      font-size: 0.68rem;
      font-weight: 700;
      text-transform: uppercase;
      color: #007b5e;
      background: rgba(0, 123, 94, 0.1);
      padding: 2px 7px;
      border-radius: 4px;
    }

    /* Button & Download styles → loaded from shared /assets/css/lab-report-btn.css */

    .doc-security-note {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 0.74rem;
      color: #64748b;
      line-height: 1.4;
    }
    .doc-security-note svg {
      width: 13px;
      height: 13px;
      fill: #007b5e;
      flex-shrink: 0;
    }

    @media (max-width: 1024px) {
      .lab-console-body {
        grid-template-columns: 1fr;
        padding: 28px 22px;
        gap: 26px;
      }
    }
    @media (max-width: 640px) {
      .lab-metric-chips {
        grid-template-columns: 1fr;
      }
      .lab-console-topbar {
        padding: 12px 18px;
      }
      .lab-console-heading {
        font-size: 1.25rem;
      }
    }

    /* Adjusted Photographic Media Grid */
    .quality-images-section {
      margin-bottom: 56px;
    }
    .section-subheader {
      margin-bottom: 24px;
    }
    .section-subheader h3 {
      font-size: 1.35rem;
      color: #0f172a;
      margin-bottom: 6px;
      font-weight: 700;
      font-family: 'Sora', sans-serif;
    }
    .section-subheader p {
      font-size: 0.95rem;
      color: #64748b;
    }
    .quality-media-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .quality-media-card {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.12);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 18px -2px rgba(0, 0, 0, 0.04);
      display: flex;
      flex-direction: column;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s;
    }
    .quality-media-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 34px -4px rgba(0, 123, 94, 0.14);
      border-color: rgba(0, 123, 94, 0.3);
    }
    .quality-media-wrapper {
      position: relative;
      width: 100%;
      aspect-ratio: 16 / 11;
      overflow: hidden;
      background: #edf2f0;
    }
    .quality-media-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .quality-media-card:hover .quality-media-wrapper img {
      transform: scale(1.04);
    }
    .media-tag {
      position: absolute;
      top: 12px;
      left: 12px;
      background: rgba(13, 31, 25, 0.82);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      color: #4ade9e;
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 4px 10px;
      border-radius: 6px;
      border: 1px solid rgba(255, 255, 255, 0.15);
    }
    .quality-media-card figcaption {
      padding: 18px 20px;
      display: flex;
      flex-direction: column;
      gap: 6px;
      flex: 1;
    }
    .quality-media-card figcaption strong {
      font-family: 'Sora', sans-serif;
      font-size: 0.98rem;
      color: #0f172a;
    }
    .quality-media-card figcaption span {
      font-size: 0.84rem;
      color: #64748b;
      line-height: 1.55;
    }

    .production-video-frame {
      position: relative;
      max-width: 1200px;
      margin: 20px auto 0;
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
        margin-top: 36px;
      }
      .production-video-frame video {
        aspect-ratio: 16 / 7;
      }
    }

    /* ── PROCESS SECTION ── */
    .process-section {
      padding: 96px 24px;
      background: #ffffff;
    }
    .process-container {
      max-width: 1200px;
      margin: 0 auto;
    }
    .tech-highlight-strip {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      background: #f8faf9;
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 16px;
      padding: 24px 28px;
      margin-bottom: 48px;
    }
    .tech-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
    }
    .tech-icon {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: rgba(0, 123, 94, 0.1);
      color: #007b5e;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .tech-icon svg {
      width: 22px;
      height: 22px;
      fill: currentColor;
    }
    .tech-item strong {
      display: block;
      font-family: 'Sora', sans-serif;
      font-size: 0.95rem;
      color: #0f172a;
      margin-bottom: 3px;
    }
    .tech-item span {
      font-size: 0.82rem;
      color: #64748b;
      line-height: 1.5;
      display: block;
    }
    .process-steps {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }
    .process-step {
      background: #ffffff;
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 4px 18px -2px rgba(0, 0, 0, 0.04);
      display: flex;
      flex-direction: column;
      transition: box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s;
    }
    .process-step:hover {
      box-shadow: 0 16px 36px -4px rgba(0, 123, 94, 0.15);
      border-color: rgba(0, 123, 94, 0.35);
      transform: translateY(-5px);
    }
    .process-step-media {
      position: relative;
      width: 100%;
      aspect-ratio: 16 / 10;
      background: #edf2f0;
      overflow: hidden;
    }
    .process-step-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .process-step:hover .process-step-media img {
      transform: scale(1.05);
    }
    .step-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      background: #007b5e;
      color: #ffffff;
      font-family: 'Sora', sans-serif;
      font-size: 0.76rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 5px 12px;
      border-radius: 9999px;
      box-shadow: 0 4px 12px rgba(0, 123, 94, 0.35);
    }
    .process-step-body {
      padding: 24px 24px 28px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .process-step-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }
    .process-step-header .process-icon {
      color: #007b5e;
      flex-shrink: 0;
      margin-bottom: 0;
    }
    .process-step-header .process-icon svg {
      width: 22px;
      height: 22px;
      fill: currentColor;
    }
    .process-step-body h3 {
      font-family: 'Sora', sans-serif;
      font-size: 1.06rem;
      color: #0f172a;
      line-height: 1.35;
    }
    .process-step-body p {
      font-size: 0.91rem;
      color: #4a5568;
      line-height: 1.7;
      margin-top: 4px;
    }
    .process-step-body strong {
      color: #0f172a;
    }

    /* Pakistan Supply Clickable App Links */
    .supply-app-link {
      color: #007b5e;
      font-weight: 700;
      text-decoration: underline;
      text-decoration-color: rgba(0, 123, 94, 0.4);
      text-underline-offset: 3px;
      transition: color 0.2s, text-decoration-color 0.2s;
    }
    .supply-app-link:hover {
      color: #004d3b;
      text-decoration-color: #004d3b;
    }

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
      text-decoration: none;
      color: inherit;
      cursor: pointer;
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
      background: linear-gradient(180deg, #ffffff 0%, #f8fbf9 50%, #ffffff 100%);
      position: relative;
    }
    .faq-list { max-width: 900px; margin: 0 auto; }
    .faq-item {
      border: 1px solid rgba(0, 123, 94, 0.14);
      border-radius: 14px;
      margin-bottom: 14px;
      background: #ffffff;
      overflow: hidden;
      transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
    }
    .faq-item:hover {
      border-color: rgba(0, 123, 94, 0.35);
      box-shadow: 0 8px 24px rgba(0, 123, 94, 0.08);
      transform: translateY(-1px);
    }
    .faq-item.active {
      border-color: #007b5e;
      box-shadow: 0 10px 28px rgba(0, 123, 94, 0.12);
    }
    .faq-q {
      width: 100%; background: none; border: none;
      display: flex; justify-content: space-between; align-items: center; gap: 18px;
      padding: 22px 28px; text-align: left; cursor: pointer;
      font-family: 'Sora', sans-serif; font-size: 1.05rem; font-weight: 600;
      color: #0f172a; transition: background 0.2s, color 0.2s;
    }
    .faq-q:hover { background: #f4f8f6; color: #007b5e; }
    .faq-q[aria-expanded="true"] {
      background: #f0f7f4;
      color: #007b5e;
    }
    .faq-chevron {
      flex-shrink: 0; width: 28px; height: 28px;
      border: 1.5px solid rgba(0, 123, 94, 0.3); border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      color: #007b5e; font-size: 0.78rem; background: #ffffff;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background 0.2s, border-color 0.2s, color 0.2s;
    }
    .faq-q:hover .faq-chevron {
      border-color: #007b5e;
      background: #e6f4ef;
    }
    .faq-q[aria-expanded="true"] .faq-chevron {
      transform: rotate(180deg);
      background: #007b5e;
      color: #ffffff;
      border-color: #007b5e;
    }
    .faq-a {
      padding: 0 28px; max-height: 0; overflow: hidden;
      transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), padding 0.25s ease;
    }
    .faq-a.open { max-height: 1000px; padding: 6px 28px 26px; }
    .faq-a p { font-size: 0.96rem; color: #475569; line-height: 1.8; margin-bottom: 0.75rem; }
    .faq-a p:last-child { margin-bottom: 0; }
    .faq-a a { color: #007b5e; font-weight: 600; text-decoration: underline; text-underline-offset: 3px; transition: color 0.2s; }
    .faq-a a:hover { color: #005a45; }
    .faq-a ul { margin: 8px 0 12px 20px; color: #475569; font-size: 0.95rem; line-height: 1.75; }
    .faq-a li { margin-bottom: 6px; }
    .faq-a strong { color: #0f172a; font-weight: 600; }
    .faq-coa-action {
      display: inline-flex; align-items: center; gap: 8px; margin-top: 10px;
      padding: 9px 18px; background: #f0f7f4; border: 1.5px solid rgba(0, 123, 94, 0.25);
      border-radius: 8px; color: #007b5e; font-family: 'Sora', sans-serif; font-size: 0.88rem;
      font-weight: 700; cursor: pointer; transition: all 0.2s ease; text-decoration: none;
    }
    .faq-coa-action:hover {
      background: #007b5e; color: #ffffff; border-color: #007b5e;
      box-shadow: 0 4px 12px rgba(0, 123, 94, 0.25);
    }
    .faq-coa-action svg { flex-shrink: 0; }

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
      .purity-bento { grid-template-columns: 1fr; }
      .tech-highlight-strip { grid-template-columns: 1fr; }
      .overview-inner { grid-template-columns: 1fr 1fr; }
      .process-steps { grid-template-columns: 1fr 1fr; }
      .related-grid { grid-template-columns: 1fr 1fr; }
      .applications-list { grid-template-columns: repeat(2, 1fr); gap: 22px; }
      .why-grid { grid-template-columns: 1fr 1fr; }
      .packaging-grid { grid-template-columns: 1fr; }
      .qa-grid { grid-template-columns: 1fr 1fr; }
      .quality-media-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 768px) {
      .overview-inner { grid-template-columns: 1fr 1fr; }
      .overview-item { border-right: none; border-bottom: 1px solid #edf2f0; }
      .metrics-grid { grid-template-columns: 1fr; }
      .lab-iframe-viewport { height: 400px; }
      .process-steps { grid-template-columns: 1fr; }
      .quality-media-grid { grid-template-columns: 1fr; }
      .related-grid { grid-template-columns: 1fr; }
      .applications-list { grid-template-columns: 1fr; gap: 20px; }
      .why-grid { grid-template-columns: 1fr; }
      .qa-grid { grid-template-columns: 1fr; }
      .lab-frame-header { flex-direction: column; align-items: flex-start; }
    }
    @media (max-width: 480px) {
      .overview-inner { grid-template-columns: 1fr; }
      .hero-zno { display: none; }
      .market-section { padding: 58px 18px; }
      .market-panel { padding: 20px; }
      .purity-hero-card { padding: 26px 20px; }
      .quality-metrics-card { padding: 22px 18px; }
      .lab-frame-header { padding: 18px 20px; }
      .lab-iframe-viewport { height: 340px; }
      .modal-close {
        width: 36px;
        height: 36px;
        font-size: 1.5rem;
      }
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
      <span class="overview-label">Guaranteed Purity</span>
      <span class="overview-value">99.99%</span>
      <span class="overview-note">Ultra-pure Zinc Oxide (ZnO)</span>
    </div>
    <div class="overview-item" role="listitem">
      <span class="overview-label">Annual Capacity</span>
      <span class="overview-value">5,000 MT</span>
      <span class="overview-note">French Process &amp; Chinese Plant</span>
    </div>
    <div class="overview-item" role="listitem">
      <span class="overview-label">Pack Size</span>
      <span class="overview-value">25 kg</span>
      <span class="overview-note">Multi-wall sealed bags (MOQ: 25 kg)</span>
    </div>
    <div class="overview-item" role="listitem">
      <span class="overview-label">Quality Standard</span>
      <span class="overview-value">In-House + SGS</span>
      <span class="overview-note">ISO 9001:2015 + SGS verified</span>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════
     WHY CHOOSE A PAKISTANI ZINC OXIDE MANUFACTURER
════════════════════════════════════════════════ -->
<section class="why-section" id="why-choose" aria-labelledby="why-choose-heading">
  <div class="section-header reveal">
    <p class="eyebrow">Direct Manufacturer Advantage &bull; 99.99% Purity Guaranteed</p>
    <h2 id="why-choose-heading">Why Choose Bhatti Chemicals Industry?<span style="display:block; font-size:clamp(1.15rem, 2.2vw, 1.45rem); font-weight:700; color:#007b5e; margin-top:8px;">Top Zinc Oxide Manufacturer in Pakistan</span></h2>
  </div>
  <div class="why-intro reveal">
    <p>
      <strong>Bhatti Chemicals Industry is widely recognized as Pakistan's top Zinc Oxide manufacturer</strong>, delivering guaranteed <strong>99.99% pure Zinc Oxide (ZnO)</strong> backed by complete quality testing and international certifications. Operating an advanced French Indirect Process facility with automated Chinese plant machinery in Gujranwala, Pakistan, we control the entire manufacturing lifecycle from virgin zinc intake to automated moisture-proof packaging.
    </p>
    <p>
      Unlike chemical traders, we unequivocally guarantee chemical purity across every batch. Our product purity is tested in our <strong>own on-site analytical laboratory</strong> and certified by <strong>internationally recognized testing laboratories, including SGS (Société Générale de Surveillance)</strong> and PCSIR. Industrial buyers work directly with our engineering and dispatch teams for certified batch COAs, custom packaging, and dependable long-term supply.
    </p>
  </div>
  <div class="why-grid">
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
      </div>
      <h3>Guaranteed 99.99% Purity • Top Manufacturer</h3>
      <p>As Pakistan's top Zinc Oxide manufacturer, Bhatti Chemicals Industry guarantees 99.99% chemical purity across every single production lot. Synthesized via the French indirect thermal vaporization process from virgin special high-grade (SHG) metallic zinc, our Zinc Oxide features ultra-low heavy metals (Pb &le; 50 ppm, Fe &le; 0.003%, Cd &le; 10 ppm) to ensure optimal reactivity, thermal dissipation, and scorch safety for tyres, rubber, ceramics, and pharmaceuticals.</p>
    </div>
    
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v5l5 8.7A2.9 2.9 0 0 1 16.5 22h-9A2.9 2.9 0 0 1 5 17.7L10 9V4H9V2Zm2.8 8-5 8.7c-.3.6.1 1.3.7 1.3h9c.6 0 1-.7.7-1.3l-5-8.7h-.4Z"/></svg>
      </div>
      <h3>Certified On-Site &amp; SGS Laboratory Testing</h3>
      <p>We guarantee chemical purity with dual-tier laboratory verification: comprehensive lot analysis performed in our dedicated on-site analytical laboratory in Gujranwala, complemented by certified third-party testing from internationally recognized inspection bodies such as SGS and PCSIR. Every shipment is accompanied by an official, lot-numbered Certificate of Analysis (COA) validating purity, assay, and sieve residue.</p>
    </div>
    
    <div class="why-card reveal">
      <div class="why-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
      </div>
      <h3>5,000 MT Scale, Direct Supply &amp; Global Export</h3>
      <p>Operating with an annual manufacturing capacity of 5,000 metric tons and automated Chinese packing lines, industrial clients procure directly from our factory with zero broker markups. We supply standard 25 kg moisture-proof valve bags and 1 MT jumbo totes with rapid nationwide dispatch across Pakistan and containerized maritime export (FOB Karachi / CIF) to 15+ countries worldwide.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SPECIFICATIONS & QUALITY
════════════════════════════════════════════════ -->
<section class="quality-section" id="specifications" aria-labelledby="specs-heading">
  <div class="quality-container">
    <div class="section-header reveal">
      <p class="eyebrow">Product Quality &amp; Laboratory Verification</p>
      <h2 id="specs-heading">99.99% Pure Zinc Oxide Quality &amp; Laboratory Testing</h2>
      <p class="section-desc">
        Bhatti Chemicals Industry guarantees 99.99% ultra-pure Zinc Oxide (ZnO) across every commercial production batch. Manufactured at our Gujranwala facility, every consignment is tested in our own on-site laboratory and backed by accredited SGS third-party testing reports.
      </p>
    </div>

    <!-- Purity Guarantee & Technical Credentials Bento -->
    <div class="purity-bento reveal">
      <div class="purity-hero-card">
        <div class="purity-badge-pill">
          <span class="purity-dot"></span> Guaranteed Assay Purity
        </div>
        <div class="purity-stat">
          <span class="purity-num">99.99%</span>
          <span class="purity-unit">Pure ZnO</span>
        </div>
        <h3>Guaranteed Zinc Oxide Chemical Purity</h3>
        <p>
          We manufacture pure <strong>99.99% Zinc Oxide (ZnO)</strong> and unequivocally guarantee its chemical assay across all industrial supply grades. Sourced from high-grade virgin zinc metal and refined through continuous thermal oxidation, our Zinc Oxide features ultra-low heavy metal concentrations (Pb ≤ 50 ppm, Fe ≤ 0.003%, Cd ≤ 10 ppm) to ensure optimal reactivity, superior dispersion, and batch-to-batch consistency.
        </p>
        <div class="purity-highlights">
          <div class="purity-hl-item">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
            <span><strong>Zero Compromise:</strong> Tested for critical rubber, ceramics, coating &amp; pharma applications.</span>
          </div>
          <div class="purity-hl-item">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
            <span><strong>Dual Lab Verification:</strong> Internal laboratory analysis combined with SGS independent testing.</span>
          </div>
        </div>
      </div>

      <div class="quality-metrics-card">
        <div class="metrics-header">
          <span class="metrics-title">Certified Chemical &amp; Physical Parameters</span>
          <span class="metrics-badge">Standard Commercial Batch</span>
        </div>
        <div class="metrics-grid">
          <div class="metric-box">
            <span class="metric-label">Zinc Oxide (ZnO) Content</span>
            <span class="metric-val highlight">≥ 99.99%</span>
            <span class="metric-note">Primary assay content guaranteed</span>
          </div>
          <div class="metric-box">
            <span class="metric-label">Lead Content (Pb)</span>
            <span class="metric-val">≤ 50 ppm</span>
            <span class="metric-note">Heavy metal compliance</span>
          </div>
          <div class="metric-box">
            <span class="metric-label">Iron Content (Fe)</span>
            <span class="metric-val">≤ 0.003%</span>
            <span class="metric-note">Whiteness &amp; color stability</span>
          </div>
          <div class="metric-box">
            <span class="metric-label">Loss on Ignition / Moisture</span>
            <span class="metric-val">≤ 0.3%</span>
            <span class="metric-note">Dry, non-hygroscopic fine powder</span>
          </div>
          <div class="metric-box">
            <span class="metric-label">Mesh Sieve Fineness</span>
            <span class="metric-val">99.9% / 325 Mesh</span>
            <span class="metric-note">Sub-micron rapid dispersion</span>
          </div>
          <div class="metric-box">
            <span class="metric-label">Standard Pack Size</span>
            <span class="metric-val">25 kg Bags</span>
            <span class="metric-note">Moisture-barrier valve packaging</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Redesigned Quality Assurance Lab Console with Large Bold Button & Download Action -->
    <div class="lab-showcase-section reveal">
      <div class="lab-console-card">
        
        <!-- Top Status Bar -->
        <div class="lab-console-topbar">
          <div class="lab-status-badge">
            <span class="pulse-indicator"></span>
            <span>On-Site Testing Laboratory &bull; Gujranwala Industrial Complex</span>
          </div>
          <div class="lab-accreditation-pill">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            <span>ISO 9001:2015 &bull; SGS Standard Compatible</span>
          </div>
        </div>

        <!-- Main Body: 2 Columns -->
        <div class="lab-console-body">
          <div class="lab-console-main">
            <h3 class="lab-console-heading">Official In-House Quality Assurance Test Report</h3>
            <p class="lab-console-sub">Batch Analytical Assay &amp; Spectrophotometric Testing Documentation</p>
            <p class="lab-console-text">
              Every production lot of our <strong>99.99% Pure Zinc Oxide (ZnO)</strong> undergoes complete internal chemical assay, EDTA titration, and spectrophotometric testing at our on-site QC laboratory in Gujranwala, Pakistan. We guarantee ultra-low heavy metal concentrations (Pb &le; 50 ppm, Fe &le; 0.003%, Cd &le; 10 ppm) and optimal 325 mesh fineness. For multinational audits and export verification, independent <strong>SGS (Société Générale de Surveillance)</strong> testing reports are provided with every order.
            </p>

            <!-- Key Metric Chips -->
            <div class="lab-metric-chips">
              <div class="lab-chip">
                <span class="chip-label">Chemical Assay</span>
                <span class="chip-val">&ge; 99.99% Pure</span>
                <span class="chip-sub">Guaranteed by Lot</span>
              </div>
              <div class="lab-chip">
                <span class="chip-label">Lead Content (Pb)</span>
                <span class="chip-val">&le; 50 ppm</span>
                <span class="chip-sub">Heavy Metal Free</span>
              </div>
              <div class="lab-chip">
                <span class="chip-label">Mesh Fineness</span>
                <span class="chip-val">325 Mesh / 99.9%</span>
                <span class="chip-sub">Instant Dispersion</span>
              </div>
            </div>

            <!-- Dual Lab Verification Badges -->
            <div class="lab-cert-row">
              <div class="cert-pill inhouse">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span>In-House Lab Certified</span>
              </div>
              <div class="cert-pill sgs">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span>SGS Verification Available</span>
              </div>
              <div class="cert-pill purity">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg>
                <span>99.99% Purity Guaranteed</span>
              </div>
            </div>
          </div>

          <!-- Interactive Action Hub -->
          <div class="lab-console-hub">
            <div class="doc-preview-head">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
              <span>Quality Control COA Certificate</span>
              <span class="doc-badge-live">Live</span>
            </div>

            <!-- Large Bold Button to VIEW Lab Report (Redesigned Haptic Island Architecture) -->
            <button type="button" 
                    class="btn-view-lab-report btn-console-view-large"
                    data-lab-pdf="<?php echo site_url('/assets/lab-reports/Zinc-OXIDE-Lab-Test-Report-BHATTIZINC.pdf'); ?>"
                    data-lab-title="Official In-House Quality Assurance Test Report — Zinc Oxide (ZnO)"
                    data-lab-subtitle="Bhatti Chemicals Industry QC Laboratory (Gujranwala Facility) — Batch Assay &ge; 99.99%"
                    data-lab-badge="In-House Laboratory COA"
                    aria-haspopup="dialog"
                    aria-label="View official Zinc Oxide laboratory test report in interactive viewer">
              <span class="btn-console-shell">
                <span class="btn-console-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                  </svg>
                  <span class="btn-icon-pulse"></span>
                </span>
                <span class="btn-console-content">
                  <span class="btn-console-top-tag">
                    <span class="btn-tag-dot"></span>
                    <span>Verified Batch COA</span>
                  </span>
                  <span class="btn-console-title">VIEW LAB REPORT</span>
                  <span class="btn-console-sub">Open Interactive PDF Viewer</span>
                </span>
                <span class="btn-console-action-circle" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </span>
            </button>

            <!-- Download Button -->
            <a href="<?php echo site_url('/assets/lab-reports/Zinc-OXIDE-Lab-Test-Report-BHATTIZINC.pdf'); ?>"
               download="Zinc-OXIDE-Lab-Test-Report-BHATTIZINC.pdf"
               class="btn-console-download"
               title="Download Zinc Oxide Lab Test Report PDF (159 KB)">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/>
              </svg>
              <span>Download Official Report (PDF)</span>
            </a>

            <div class="doc-security-note">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
              <span>Verified Authentic QC Document &bull; Instant Access</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Adjusted Images Layout Design -->
    <div class="quality-images-section reveal">
      <div class="section-subheader">
        <h3>Product Inspection &amp; Facility Gallery</h3>
        <p>Inspect our high-purity Zinc Oxide powder, standard 25 kg multi-wall packaging, and dedicated manufacturing facility.</p>
      </div>
      <div class="quality-media-grid">
        <figure class="quality-media-card">
          <div class="quality-media-wrapper">
            <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>"
                 alt="High-purity 99.99% Zinc Oxide fine white powder physical appearance"
                 width="400" height="342" loading="lazy" decoding="async">
            <span class="media-tag">Physical Appearance</span>
          </div>
          <figcaption>
            <strong>99.99% Pure Zinc Oxide Powder</strong>
            <span>Ultra-fine, high-whiteness powder demonstrating consistent texture and immediate dispersion.</span>
          </figcaption>
        </figure>

        <figure class="quality-media-card">
          <div class="quality-media-wrapper">
            <img src="<?php echo site_url('/assets/images/products/zinc-oxide-bag.jpg'); ?>"
                 alt="Bhatti Chemicals Industry 25 kg bag packaging for 99.99% Zinc Oxide"
                 width="853" height="1316" loading="lazy" decoding="async">
            <span class="media-tag">Standard Packaging</span>
          </div>
          <figcaption>
            <strong>Sealed 25 KG Export Bags</strong>
            <span>Multi-wall moisture-barrier valve packaging engineered to prevent contamination and caking during transit.</span>
          </figcaption>
        </figure>

        <figure class="quality-media-card">
          <div class="quality-media-wrapper">
            <img src="<?php echo site_url('/assets/images/misc/zinc-oxide-production-facility.webp'); ?>"
                 alt="Zinc Oxide manufacturing, packing, and quality facility at Bhatti Chemicals Industry Gujranwala"
                 width="960" height="640" loading="lazy" decoding="async">
            <span class="media-tag">Manufacturing Facility</span>
          </div>
          <figcaption>
            <strong>Production &amp; Bagging Plant</strong>
            <span>Modern manufacturing plant in Gujranwala, Pakistan with dedicated furnaces and testing infrastructure.</span>
          </figcaption>
        </figure>
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
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MANUFACTURING PROCESS
════════════════════════════════════════════════ -->
<section class="process-section" id="manufacturing" aria-labelledby="process-heading">
  <div class="process-container">
    <div class="section-header reveal">
      <p class="eyebrow">Advanced Industrial Manufacturing</p>
      <h2 id="process-heading">Zinc Oxide Manufacturing Process: French Technology &amp; Chinese Plant</h2>
      <p class="section-desc">
        Bhatti Chemicals Industry combines world-class <strong>French Indirect Process technology</strong> with high-precision <strong>automated Chinese plant machinery</strong>, operating at an annual production capacity of <strong>5,000 MT (Metric Tons)</strong> to produce pure 99.99% Zinc Oxide.
      </p>
    </div>

    <!-- Plant & Technology Highlight Strip -->
    <div class="tech-highlight-strip reveal">
      <div class="tech-item">
        <div class="tech-icon"><svg viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5zm0 9L4.2 7 12 3.1 19.8 7 12 11zm-8 4.8L2 17l10 5 10-5-2-1.2-8 4-8-4zm0-4L2 13l10 5 10-5-2-1.2-8 4-8-4z"/></svg></div>
        <div>
          <strong>French Process Technology</strong>
          <span>Indirect high-temperature thermal vaporization for maximum ZnO chemical purity</span>
        </div>
      </div>
      <div class="tech-item">
        <div class="tech-icon"><svg viewBox="0 0 24 24"><path d="m12 2 10 5v15h-2V8.2l-8-4-8 4V22H2V7l10-5Zm-6 9h12v11h-2v-3H8v3H6V11Zm2 2v4h8v-4H8Z"/></svg></div>
        <div>
          <strong>Automated Chinese Plant</strong>
          <span>High-efficiency induction furnaces, automated oxidation chambers &amp; precision bagging lines</span>
        </div>
      </div>
      <div class="tech-item">
        <div class="tech-icon"><svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14-5-5 1.41-1.41L12 14.17l5.59-5.59L19 10l-7 7z"/></svg></div>
        <div>
          <strong>5,000 MT Annual Capacity</strong>
          <span>Continuous industrial manufacturing capacity supporting Pakistan domestic supply &amp; global export</span>
        </div>
      </div>
    </div>

    <!-- 6-Step Visual Process Grid with Images -->
    <div class="process-steps">
      <div class="process-step reveal">
        <div class="process-step-media">
          <img src="<?php echo site_url('/assets/images/products/zinc-ingot.webp'); ?>"
               alt="Step 1 Raw Material Selection: High-purity zinc metal ingots"
               width="660" height="405" loading="lazy" decoding="async">
          <span class="step-badge">Step 01</span>
        </div>
        <div class="process-step-body">
          <div class="process-step-header">
            <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M10 4a6 6 0 1 0 3.7 10.7L19 20l1-1-5.3-5.3A6 6 0 0 0 10 4Zm0 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8Z"/></svg></div>
            <h3>Raw Material Selection &amp; Intake</h3>
          </div>
          <p>
            The process starts with rigorous chemical selection. We feed high-purity Special High Grade (SHG) metallic zinc ingots into our production line, pre-screened to ensure non-ferrous purity and zero lead or iron contamination.
          </p>
        </div>
      </div>

      <div class="process-step reveal">
        <div class="process-step-media">
          <img src="<?php echo site_url('/assets/images/misc/thermal-vaporization-french-process.jpg'); ?>"
               alt="Step 2 French Process Thermal Vaporization at high furnace temperatures"
               width="800" height="500" loading="lazy" decoding="async">
          <span class="step-badge">Step 02</span>
        </div>
        <div class="process-step-body">
          <div class="process-step-header">
            <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M13.5 2s.6 3-1.8 5.3C9.5 9.4 8 11.1 8 14a4 4 0 0 0 8 0c0-1.4-.5-2.8-1.4-4 2.7 1.6 4.4 4.3 4.4 7a7 7 0 0 1-14 0c0-5 4.2-8.2 8.5-15Z"/></svg></div>
            <h3>Thermal Vaporization (French Process)</h3>
          </div>
          <p>
            Applying classical <strong>French indirect technology</strong>, pure zinc is heated in specialized retort furnaces past its boiling point (> 907°C). The metallic zinc vaporizes, leaving behind any residual heavy non-volatile impurities.
          </p>
        </div>
      </div>

      <div class="process-step reveal">
        <div class="process-step-media">
          <img src="<?php echo site_url('/assets/images/misc/zinc-oxide-production-facility.webp'); ?>"
               alt="Step 3 Controlled Oxidation Chamber in Chinese automated plant"
               width="960" height="640" loading="lazy" decoding="async">
          <span class="step-badge">Step 03</span>
        </div>
        <div class="process-step-body">
          <div class="process-step-header">
            <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg></div>
            <h3>Controlled Oxidation (Chinese Plant)</h3>
          </div>
          <p>
            In our advanced <strong>Chinese automated oxidation chambers</strong>, metallic zinc vapor mixes with controlled, pre-heated air streams. Spontaneous exothermic oxidation yields ultra-pure, sub-micron Zinc Oxide (ZnO) particles.
          </p>
        </div>
      </div>

      <div class="process-step reveal">
        <div class="process-step-media">
          <img src="<?php echo site_url('/assets/images/products/zinc-oxide-appearance-400.webp'); ?>"
               alt="Step 4 Aerodynamic Cooling and Sub-Micron Collection"
               width="400" height="342" loading="lazy" decoding="async">
          <span class="step-badge">Step 04</span>
        </div>
        <div class="process-step-body">
          <div class="process-step-header">
            <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 7h10a3 3 0 1 0-3-3h2a1 1 0 1 1 1 1H3v2Zm0 4h15a3 3 0 1 1-3 3h2a1 1 0 1 0 1-1H3v-2Zm0 6h8v2H3v-2Z"/></svg></div>
            <h3>Aerodynamic Cooling &amp; Collection</h3>
          </div>
          <p>
            The fine Zinc Oxide aerosol is drawn into multi-stage cooling ducts and high-efficiency filtration baghouses. This aerodynamic system fractions particles into uniform particle sizes with high surface activity.
          </p>
        </div>
      </div>

      <div class="process-step reveal">
        <div class="process-step-media">
          <img src="<?php echo site_url('/assets/images/misc/in-house-lab-sgs-testing.jpg'); ?>"
               alt="Step 5 In-House Laboratory Chemical Testing and SGS Verification"
               width="800" height="500" loading="lazy" decoding="async">
          <span class="step-badge">Step 05</span>
        </div>
        <div class="process-step-body">
          <div class="process-step-header">
            <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6v2h-1v5l5 8.7A2.9 2.9 0 0 1 16.5 22h-9A2.9 2.9 0 0 1 5 17.7L10 9V4H9V2Zm2.8 8-5 8.7c-.3.6.1 1.3.7 1.3h9c.6 0 1-.7.7-1.3l-5-8.7h-.4Z"/></svg></div>
            <h3>In-House Lab &amp; SGS Verification</h3>
          </div>
          <p>
            Every production batch is sampled and tested in our <strong>own on-site laboratory</strong> to verify 99.99% assay purity, mesh fineness, and low trace metals. Independent <strong>SGS testing reports</strong> are co-issued for third-party validation.
          </p>
        </div>
      </div>

      <div class="process-step reveal">
        <div class="process-step-media">
          <img src="<?php echo site_url('/assets/images/products/zinc-oxide-bag.jpg'); ?>"
               alt="Step 6 Automated 25kg Bagging and 5,000 MT Warehouse Dispatch"
               width="853" height="1316" loading="lazy" decoding="async">
          <span class="step-badge">Step 06</span>
        </div>
        <div class="process-step-body">
          <div class="process-step-header">
            <div class="process-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 2 9 4.5v11L12 22l-9-4.5v-11L12 2Zm0 2.2L6.2 7.1 12 10l5.8-2.9L12 4.2ZM5 8.7v7.6l6 3v-7.6l-6-3Zm8 10.6 6-3V8.7l-6 3v7.6Z"/></svg></div>
            <h3>Automated Bagging &amp; 5,000 MT Logistics</h3>
          </div>
          <p>
            Using automated packaging machinery, the finished ZnO powder is hermetically packed into 25 kg multi-ply moisture-sealed bags. Backed by our <strong>5,000 MT annual production capacity</strong>, shipments are dispatched across Pakistan and worldwide.
          </p>
        </div>
      </div>
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
    <p class="section-desc">Bhatti Chemicals Industry manufactures high-purity 99.99% Zinc Oxide engineered to be the purest, best, and most suitable formulation for diverse manufacturing sectors worldwide.</p>
  </div>
  <div class="applications-list">
    
    <!-- Application 1: Rubber and Tyres (Full Card Link) -->
    <a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>" class="application-card reveal" aria-label="Explore Zinc Oxide for Rubber and Tyre Manufacturing">
      <div class="application-media">
        <img src="<?php echo site_url('/assets/images/stock/unsplash/1578844251758-2f71da64c96f.webp'); ?>" alt="Zinc Oxide used in rubber and tyre manufacturing — Bhatti Chemicals Industry" class="application-img" width="800" height="500" loading="lazy" decoding="async">
      </div>
      <div class="application-body">
        <span class="app-badge">Rubber &amp; Tyres</span>
        <h3>Rubber and Tyre Manufacturing</h3>
        <p>Bhatti Chemicals Industry's 99.99% Zinc Oxide is the <strong>best, purest, and most suitable</strong> activating agent for rubber vulcanization and tyre compounding. Its ultra-fine 325 mesh particle size provides perfect cross-linking with stearic acid, superior heat dissipation, and extended tread wear life for passenger and heavy-duty tyres.</p>
        <span class="app-link">
          Explore Rubber &amp; Tyre Applications &rarr;
        </span>
      </div>
    </a>

    <!-- Application 2: Paints and Coatings (Full Card Link) -->
    <a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>" class="application-card reveal" aria-label="Explore Zinc Oxide for Paints and Protective Coatings">
      <div class="application-media">
        <img src="<?php echo site_url('/assets/images/stock/unsplash/1589939705384-5185137a7f0f.webp'); ?>" alt="Zinc Oxide used in paints and coatings — Bhatti Chemicals Industry" class="application-img" width="800" height="500" loading="lazy" decoding="async">
      </div>
      <div class="application-body">
        <span class="app-badge">Paints &amp; Coatings</span>
        <h3>Paints and Protective Coatings</h3>
        <p>Bhatti Chemicals Industry produces the <strong>purest and most effective</strong> Zinc Oxide for architectural paints, marine coatings, and anti-corrosive industrial primers. With exceptional whiteness and high chemical purity, it is the <strong>perfect additive</strong> for UV shielding, mold inhibition, and long-lasting anti-corrosion protection.</p>
        <span class="app-link">
          Explore Paints &amp; Coatings Applications &rarr;
        </span>
      </div>
    </a>

    <!-- Application 3: Ceramics and Glass (Full Card Link) -->
    <a href="<?php echo site_url('/zinc-oxide-applications/ceramics-and-glass.php'); ?>" class="application-card reveal" aria-label="Explore Zinc Oxide for Ceramics and Glass Manufacturing">
      <div class="application-media">
        <img src="<?php echo site_url('/assets/images/stock/unsplash/1565193566173-7a0ee3dbe261.webp'); ?>" alt="Zinc Oxide used in ceramics and glass manufacturing — Bhatti Chemicals Industry" class="application-img" width="800" height="500" loading="lazy" decoding="async">
      </div>
      <div class="application-body">
        <span class="app-badge">Ceramics &amp; Glass</span>
        <h3>Ceramics and Glass Manufacturing</h3>
        <p>For ceramic glazes, porcelain tiles, and specialty glassware, Bhatti Chemicals Industry's Zinc Oxide is the <strong>perfect and most suitable</strong> fluxing agent. It lowers firing temperatures, prevents glaze crazing, and imparts brilliant surface gloss, color stability, and superior thermal shock resistance.</p>
        <span class="app-link">
          Explore Ceramics &amp; Glass Applications &rarr;
        </span>
      </div>
    </a>

    <!-- Application 4: Pharmaceuticals (Full Card Link) -->
    <a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>" class="application-card reveal" aria-label="Explore Zinc Oxide for Pharmaceuticals and Ointments">
      <div class="application-media">
        <img src="<?php echo site_url('/assets/images/stock/unsplash/1584308666744-24d5c474f2ae.webp'); ?>" alt="Zinc Oxide used in pharmaceuticals and ointments — Bhatti Chemicals Industry" class="application-img" width="800" height="500" loading="lazy" decoding="async">
      </div>
      <div class="application-body">
        <span class="app-badge">Pharmaceuticals</span>
        <h3>Pharmaceuticals and Ointments</h3>
        <p>Bhatti Chemicals Industry delivers the <strong>purest pharmaceutical-grade Zinc Oxide</strong>, meticulously refined with heavy metals strictly below pharmacopeial limits (Pb ≤ 50 ppm, Cd ≤ 10 ppm). It is the <strong>best and most trusted</strong> choice for calamine lotions, antiseptic creams, and medicated skin barrier formulations.</p>
        <span class="app-link">
          Explore Pharmaceutical Applications &rarr;
        </span>
      </div>
    </a>

    <!-- Application 5: Cosmetics & Skincare (Full Card Link) -->
    <a href="<?php echo site_url('/zinc-oxide-applications/cosmetics-and-skincare.php'); ?>" class="application-card reveal" aria-label="Explore Zinc Oxide for Cosmetics and Skincare Products">
      <div class="application-media">
        <img src="<?php echo site_url('/assets/images/stock/unsplash/1556228720-195a672e8a03.webp'); ?>" alt="Zinc Oxide used in cosmetics and skincare — Bhatti Chemicals Industry" class="application-img" width="800" height="500" loading="lazy" decoding="async">
      </div>
      <div class="application-body">
        <span class="app-badge">Cosmetics &amp; Skincare</span>
        <h3>Cosmetics and Skincare Products</h3>
        <p>Our ultra-pure non-nano Zinc Oxide is the <strong>best and safest</strong> physical broad-spectrum UV blocker (UVA/UVB) for mineral sunscreens, foundation powders, and baby lotions. Bhatti Chemicals Industry guarantees <strong>perfect dispersion</strong>, gentle skin soothing, and complete irritation-free compatibility.</p>
        <span class="app-link">
          Explore Cosmetics &amp; Skincare Applications &rarr;
        </span>
      </div>
    </a>

    <!-- Application 6: Agriculture & Animal Feed (Full Card Link) -->
    <a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>" class="application-card reveal" aria-label="Explore Zinc Oxide for Animal Feed and Agricultural Fertilizers">
      <div class="application-media">
        <img src="<?php echo site_url('/assets/images/stock/unsplash/1625246333195-78d9c38ad449.webp'); ?>" alt="Zinc Oxide used in animal feed and agriculture — Bhatti Chemicals Industry" class="application-img" width="800" height="500" loading="lazy" decoding="async">
      </div>
      <div class="application-body">
        <span class="app-badge">Agriculture &amp; Animal Feed</span>
        <h3>Animal Feed and Agricultural Fertilizers</h3>
        <p>Bhatti Chemicals Industry's Zinc Oxide is the <strong>most suitable and bio-available</strong> zinc micronutrient for animal feed premixes and agricultural fertilizers. It provides <strong>perfect elemental bioavailability</strong> for livestock immune health and growth, while rapidly correcting zinc-deficient soils for higher crop yields.</p>
        <span class="app-link">
          Explore Agriculture &amp; Feed Applications &rarr;
        </span>
      </div>
    </a>

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
      <p class="eyebrow">Pakistan Nationwide Supply</p>
      <h2 id="zinc-oxide-pakistan">Zinc Oxide Supply Across Pakistan</h2>
      <p>
        <strong>Bhatti Chemicals Industry is the top Zinc Oxide manufacturer in Pakistan</strong>, supplying industrial clients nationwide with guaranteed <strong>99.99% pure Zinc Oxide</strong> directly from our Gujranwala manufacturing facility. Utilizing world-class French indirect process technology and high-precision automated Chinese plant machinery, we maintain an annual production capacity of <strong>5,000 MT</strong> to fulfill large-scale industrial demand with zero supply bottlenecks.
      </p>
      <p>
        Whether you need <strong><a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>" class="supply-app-link">Zinc Oxide for rubber manufacturing</a></strong>, <strong><a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>" class="supply-app-link">tyre production</a></strong>, <strong><a href="<?php echo site_url('/zinc-oxide-applications/ceramics-and-glass.php'); ?>" class="supply-app-link">ceramics</a></strong>, <strong><a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>" class="supply-app-link">paints</a></strong>, <strong><a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>" class="supply-app-link">coatings</a></strong>, <strong><a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>" class="supply-app-link">pharmaceuticals</a></strong>, or <strong><a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>" class="supply-app-link">agricultural applications</a></strong>, our manufacturing plant provides dependable 25 kg moisture-proof packaging, verified on-site laboratory testing reports, and certified third-party documentation from internationally recognized laboratories like SGS.
      </p>
      <a href="<?php echo site_url('/contact-us.php'); ?>" class="btn-primary" style="margin-top:0.5rem;">Contact for Pakistan Supply</a>
    </div>
    <aside class="market-panel reveal" aria-label="Pakistan supply strengths">
      <h3>Supply Capabilities &amp; Plant Strengths</h3>
      <ul class="market-list">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span><strong>Top Manufacturer with 99.99% Purity:</strong> Guaranteed assay purity tested on-site and verified by SGS.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span><strong>French Technology &amp; Chinese Plant:</strong> Continuous thermal vaporization infrastructure.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span><strong>5,000 MT Annual Capacity:</strong> Unmatched local production scale ensuring non-stop industrial supply.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span><strong>Standard 25 kg Moisture-Proof Bags:</strong> Ready for palletized domestic transport or export containers.</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 16.2-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4Z"/></svg><span><strong>Certified Testing &amp; Direct Pricing:</strong> Factory-direct quotations with zero intermediary broker markups.</span></li>
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
    <p class="eyebrow">Technical &amp; Procurement FAQ</p>
    <h2 id="faq-heading">Zinc Oxide — Frequently Asked Questions</h2>
    <p class="section-desc">Authoritative answers on 99.99% purity specifications, French Process manufacturing in Gujranwala, verified batch COA testing, industrial applications, and commercial supply terms.</p>
  </div>
  <div class="faq-list">

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-1" aria-expanded="false" aria-controls="faq-a-1">
        <span>What is Zinc Oxide (ZnO) and what are its key chemical identifiers?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-1" aria-labelledby="faq-q-1" hidden>
        <p><strong>Zinc Oxide (ZnO)</strong> is an inorganic chemical compound produced as an odorless, micro-fine white powder through the controlled vaporization and oxidation of high-grade zinc metal. Its internationally standardized chemical identifiers include:</p>
        <ul>
          <li><strong>Chemical Formula:</strong> ZnO</li>
          <li><strong>CAS Registry Number:</strong> 1314-13-2</li>
          <li><strong>Molecular Weight:</strong> 81.38 g/mol</li>
          <li><strong>EINECS Number:</strong> 215-222-5</li>
          <li><strong>Crystal Structure:</strong> Hexagonal Wurtzite</li>
        </ul>
        <p>Zinc Oxide is insoluble in water and alcohol but readily dissolves in dilute mineral acids and strong alkaline solutions. It is widely employed as a multi-functional active ingredient and inorganic activator across rubber compounding, ceramics, protective coatings, pharmaceuticals, cosmetics, and animal nutrition.</p>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-2" aria-expanded="false" aria-controls="faq-a-2">
        <span>What purity grade of Zinc Oxide does Bhatti Chemicals Industry supply?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-2" aria-labelledby="faq-q-2" hidden>
        <p>Bhatti Chemicals Industry guarantees <strong>&ge; 99.99% purity</strong> (French Process White Seal / Gold Seal Grade). Our product is engineered specifically to meet the stringent demands of high-specification industrial compounding, adhering to rigorous trace element thresholds:</p>
        <ul>
          <li><strong>Zinc Oxide (ZnO) Assay:</strong> &ge; 99.99%</li>
          <li><strong>Lead (Pb):</strong> &le; 0.002% (20 ppm max)</li>
          <li><strong>Cadmium (Cd):</strong> &le; 0.001% (10 ppm max)</li>
          <li><strong>Iron (Fe):</strong> &le; 0.001% (10 ppm max)</li>
          <li><strong>Copper (Cu):</strong> &le; 0.0005% (5 ppm max)</li>
          <li><strong>Sieve Fineness (passing 325 mesh / 45 &mu;m):</strong> &ge; 99.95%</li>
        </ul>
        <p>Each batch undergoes rigorous in-house laboratory testing alongside regular independent audits by accredited third-party inspection agencies including SGS Pakistan.</p>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-3" aria-expanded="false" aria-controls="faq-a-3">
        <span>Where is your Zinc Oxide manufactured and what is your annual production capacity?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-3" aria-labelledby="faq-q-3" hidden>
        <p>Our Zinc Oxide is manufactured exclusively at our heavy industrial manufacturing plant located in <strong>Gujranwala, Punjab, Pakistan</strong>. The facility operates advanced Chinese-engineered automated furnace and distillation lines utilizing the <strong>French Indirect Process</strong>.</p>
        <p>With an annual production capacity of <strong>5,000 Metric Tons (MT)</strong>, Bhatti Chemicals Industry is one of Pakistan's leading domestic producers, maintaining substantial finished goods inventory for rapid nationwide dispatch and reliable multi-container export shipments.</p>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-4" aria-expanded="false" aria-controls="faq-a-4">
        <span>Can I view or verify the batch Certificate of Analysis (COA) online before ordering?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-4" aria-labelledby="faq-q-4" hidden>
        <p><strong>Yes.</strong> Bhatti Chemicals Industry provides an interactive digital Lab Report and Certificate of Analysis viewer directly on this product page. Quality managers, procurement officers, and plant chemists can inspect live authenticated laboratory test reports—including batch assay purity percentages, trace elemental spectrometry (Pb, Cd, Fe), and particle fineness—or download the official signed PDF report directly.</p>
        <p>You can launch the live viewer immediately using the button below:</p>
        <button type="button" 
                class="btn-view-lab-report faq-coa-action"
                data-lab-pdf="<?php echo site_url('/assets/lab-reports/Zinc-OXIDE-Lab-Test-Report-BHATTIZINC.pdf'); ?>"
                data-lab-title="Official In-House Quality Assurance Test Report — Zinc Oxide (ZnO)"
                data-lab-subtitle="Bhatti Chemicals Industry QC Laboratory (Gujranwala Facility) — Batch Assay &ge; 99.99%"
                data-lab-badge="In-House Laboratory COA"
                aria-haspopup="dialog"
                aria-label="Open interactive Zinc Oxide lab test report modal">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
          </svg>
          <span>View Verified Batch COA &amp; Lab Report</span>
        </button>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-5" aria-expanded="false" aria-controls="faq-a-5">
        <span>Why is the French Indirect Process superior to the Direct (American) Process?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-5" aria-labelledby="faq-q-5" hidden>
        <p>The manufacturing process determines the chemical purity, particle morphology, and heavy metal profile of Zinc Oxide:</p>
        <ul>
          <li><strong>French (Indirect) Process (Used by Bhatti Chemicals):</strong> Vaporizes refined Special High Grade (SHG) zinc metal (> 99.995% Zn) in high-temperature crucibles and oxidizes the purified metallic vapor with preheated air. This guarantees superior purity (&ge; 99.99%), controlled sub-micron nodular particles, high reactivity, and negligible heavy metal contamination.</li>
          <li><strong>Direct (American) Process:</strong> Roasts unrefined zinc ores or furnace residues directly with coal or anthracite. This introduces elevated lead, cadmium, arsenic, and siliceous grit, yielding a lower purity product (96%–99%) unsuitable for high-speed tyre compounds, pharmaceutical creams, or high-gloss glazes.</li>
        </ul>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-6" aria-expanded="false" aria-controls="faq-a-6">
        <span>What industries and applications utilize Bhatti Chemicals Zinc Oxide?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-6" aria-labelledby="faq-q-6" hidden>
        <p>Our high-purity Zinc Oxide is formulated as a functional additive across six core industries:</p>
        <ul>
          <li><a href="<?php echo site_url('/zinc-oxide-applications/rubber-and-tyres.php'); ?>"><strong>Rubber &amp; Tyres:</strong></a> Essential vulcanization activator coordinating with stearic acid and sulfur accelerators; enhances thermal heat dissipation, flex fatigue resistance, and prevents tyre tread reversion.</li>
          <li><a href="<?php echo site_url('/zinc-oxide-applications/ceramics-and-glass.php'); ?>"><strong>Ceramics &amp; Glazes:</strong></a> Low thermal expansion flux preventing glaze crazing; produces high-gloss sanitaryware finishes, crystalline glaze textures, and opacifying whiteness.</li>
          <li><a href="<?php echo site_url('/zinc-oxide-applications/paints-and-coatings.php'); ?>"><strong>Paints &amp; Coatings:</strong></a> Absorbs actinic UV radiation below 385 nm to prevent binder chalking; acts as a permanent, non-leaching fungistat against mold and delivers cathodic anti-corrosive primer protection.</li>
          <li><a href="<?php echo site_url('/zinc-oxide-applications/pharmaceuticals-and-ointments.php'); ?>"><strong>Pharmaceuticals &amp; Ointments:</strong></a> Antiseptic, astringent, and protective active ingredient for calamine lotions, zinc paste, wound dressing, and barrier ointments compliant with USP/BP purity standards.</li>
          <li><a href="<?php echo site_url('/zinc-oxide-applications/cosmetics-and-skincare.php'); ?>"><strong>Cosmetics &amp; Skincare:</strong></a> Broad-spectrum, non-nano physical mineral UV filter for reef-safe sunscreens, foundation powders, and sensitive skin formulations.</li>
          <li><a href="<?php echo site_url('/zinc-oxide-applications/agriculture-and-animal-feed.php'); ?>"><strong>Agriculture &amp; Animal Feed:</strong></a> High-bioavailability dietary zinc supplement (~80.34% elemental Zn) for dairy cattle hoof integrity, poultry eggshell hardness, and crop micronutrient fertilizer blends.</li>
        </ul>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-7" aria-expanded="false" aria-controls="faq-a-7">
        <span>What packaging options and bulk supply configurations are available?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-7" aria-labelledby="faq-q-7" hidden>
        <p>We supply Zinc Oxide in industrial-grade, moisture-barrier packaging tailored for safe transport and prolonged storage:</p>
        <ul>
          <li><strong>Standard 25 kg Bags:</strong> Multi-ply kraft paper valve bags equipped with a hermetically sealed polyethylene (PE) inner liner to prevent atmospheric moisture pickup and carbonation.</li>
          <li><strong>Palletized Shipments:</strong> 40 bags (1,000 kg / 1 MT) stacked on ISPM-15 heat-treated, fumigated export wooden pallets, protected with heavy-gauge stretch wrap and corner protectors.</li>
          <li><strong>Jumbo FIBC Bags:</strong> 500 kg and 1,000 kg bulk bags fitted with top filling spouts and bottom discharge chutes for automated pneumatic feeding systems.</li>
        </ul>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-8" aria-expanded="false" aria-controls="faq-a-8">
        <span>What is the Minimum Order Quantity (MOQ) and sample request policy?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-8" aria-labelledby="faq-q-8" hidden>
        <p>Our commercial terms accommodate both testing and large-scale industrial procurement:</p>
        <ul>
          <li><strong>Minimum Order Quantity (MOQ):</strong> 25 kg (one bag) for pilot trials, formulation R&amp;D, or preliminary manufacturing batches.</li>
          <li><strong>Commercial Supply Contracts:</strong> Scheduled blanket deliveries from 5 MT up to 200+ MT per month for domestic tyre plants, ceramic tile manufacturers, and chemical distributors.</li>
          <li><strong>Complimentary Lab Samples:</strong> Factory testing sample packs (typically 500g to 2 kg) accompanied by an authenticated batch COA are provided free of charge to verified manufacturing facilities and quality testing labs.</li>
        </ul>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-9" aria-expanded="false" aria-controls="faq-a-9">
        <span>What physical and technical specifications are provided on your Technical Data Sheet (TDS)?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-9" aria-labelledby="faq-q-9" hidden>
        <p>Our official Technical Data Sheet (TDS) provides verified chemical and physical baseline parameters for compounding formulation:</p>
        <ul>
          <li><strong>Specific Surface Area (BET):</strong> 4.0 &ndash; 6.0 m&sup2;/g</li>
          <li><strong>Apparent Bulk Density:</strong> 0.45 &ndash; 0.65 g/cm&sup3;</li>
          <li><strong>True Crystal Density:</strong> 5.61 g/cm&sup3;</li>
          <li><strong>Residue on 325 Mesh (45 &mu;m):</strong> &le; 0.05%</li>
          <li><strong>Volatile Matter (105&deg;C):</strong> &le; 0.20%</li>
          <li><strong>Loss on Ignition (LOI at 950&deg;C):</strong> &le; 0.20%</li>
          <li><strong>Water Soluble Matter:</strong> &le; 0.10%</li>
          <li><strong>pH Value (Aqueous Suspension):</strong> 6.8 &ndash; 7.4</li>
        </ul>
        <p>To request the complete unredacted TDS document for your QA department, contact our technical team directly.</p>
      </div>
    </div>

    <div class="faq-item reveal">
      <button class="faq-q" id="faq-q-10" aria-expanded="false" aria-controls="faq-a-10">
        <span>How can I request a quotation or arrange delivery across Pakistan or for export?</span>
        <span class="faq-chevron" aria-hidden="true">&#9660;</span>
      </button>
      <div class="faq-a" id="faq-a-10" aria-labelledby="faq-q-10" hidden>
        <p>Trade inquiries and purchase orders can be initiated through any of our direct commercial channels:</p>
        <ul>
          <li><strong>WhatsApp Hotline:</strong> Message our commercial desk at <a href="https://wa.me/923041462460" target="_blank" rel="noopener">+92 304 1462460</a> for immediate factory-direct pricing.</li>
          <li><strong>Email:</strong> Send technical RFQs and tenders to <a href="mailto:info@bhattichemicalsindustry.com.pk">info@bhattichemicalsindustry.com.pk</a>.</li>
          <li><strong>Online RFQ Form:</strong> Submit requirements via our <a href="<?php echo site_url('/contact-us.php'); ?>">Request a Quote page</a>.</li>
        </ul>
        <p>We dispatch warehouse stock within 24 to 48 hours to all major industrial centers across Pakistan—including Karachi, Lahore, Faisalabad, Gujranwala, Sialkot, and Rawalpindi—and coordinate Full Container Load (FCL) export shipments with complete customs and phytosanitary clearance.</p>
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
    <button type="button" class="modal-close" onclick="document.getElementById('imgModal').classList.remove('open')" aria-label="Close">&times;</button>
  </div>
  <img id="modalImg" src="" alt="Full screen view">
</div>

<script>
// Zoom images
const modal = document.getElementById('imgModal');
const modalImg = document.getElementById('modalImg');

function openImageModal(src) {
  modalImg.src = src;
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
    openImageModal(this.dataset.img);
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
        const item = b.closest('.faq-item');
        if (item) item.classList.remove('active');
        const a = b.nextElementSibling;
        if (a) {
          a.classList.remove('open');
          a.hidden = true;
        }
      });
      if(!expanded){
        this.setAttribute('aria-expanded','true');
        const item = this.closest('.faq-item');
        if (item) item.classList.add('active');
        const ans = this.nextElementSibling;
        if (ans) {
          ans.hidden = false;
          requestAnimationFrame(() => ans.classList.add('open'));
        }
      }
    });
  });
})();

</script>
</body>
</html>
