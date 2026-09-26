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

  <title>Chemical Laboratory Services in Pakistan | Bhatti Chemicals Industry</title>
  <meta name="description" content="Bhatti Chemicals Industry provides in-house chemical laboratory services in Gujranwala, Pakistan for zinc, metals recycling, quality control and chemical manufacturing, supported by SGS Pakistan certification and trusted laboratory collaboration.">
  <meta name="keywords" content="chemical laboratory services Pakistan, industrial laboratory Gujranwala, zinc testing laboratory Pakistan, metals recycling laboratory, chemical analysis Pakistan, SGS Pakistan certified laboratory, Bhatti Chemicals Industry laboratory, zinc oxide quality testing">
  <link rel="canonical" href="https://bhattichemicalsindustry.com.pk/services.php">

  <meta name="geo.region" content="PK-PB">
  <meta name="geo.placename" content="Gujranwala, Punjab, Pakistan">
  <meta name="language" content="English">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Bhatti Chemicals Industry">
  <meta property="og:title" content="Chemical Laboratory Services in Pakistan | Bhatti Chemicals Industry">
  <meta property="og:description" content="In-house laboratory services for zinc, metals recycling and chemical manufacturing in Gujranwala, Pakistan, with SGS Pakistan certification and specialist collaboration.">
  <meta property="og:url" content="https://bhattichemicalsindustry.com.pk/services.php">
  <meta property="og:image" content="https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Industrial Chemical Laboratory Services | Bhatti Chemicals Industry">
  <meta name="twitter:description" content="Chemical testing, zinc analysis, metals recycling research and batch quality control from Gujranwala, Pakistan.">
  <meta name="twitter:image" content="https://bhattichemicalsindustry.com.pk/assets/images/products/zinc-oxide-appearance.webp">

  <link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
  <link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
  <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
  <link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">

  <link rel="stylesheet" href="<?php echo site_url('/assets/css/header.css'); ?>">
  <link rel="stylesheet" href="<?php echo site_url('/assets/css/services.css'); ?>">
  <link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>

  <script>
  (function(){
    if(location.hostname!=='bhattichemicalsindustry.com.pk')return;
    function loadAnalytics(){
      window.dataLayer=window.dataLayer||[];
      window.gtag=function(){dataLayer.push(arguments);};
      gtag('js',new Date());gtag('config','G-F1BD95KL8M');
      var script=document.createElement('script');
      script.async=true;script.src='https://www.googletagmanager.com/gtag/js?id=G-F1BD95KL8M';
      document.head.appendChild(script);
    }
    window.addEventListener('load',function(){
      if('requestIdleCallback' in window){requestIdleCallback(loadAnalytics,{timeout:3000});}
      else{setTimeout(loadAnalytics,1500);}
    });
  })();
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://bhattichemicalsindustry.com.pk/services.php#laboratory-service",
        "name": "Industrial Chemical Laboratory Services",
        "serviceType": [
          "Chemical analysis",
          "Zinc and zinc-material testing",
          "Metals recycling analysis",
          "Batch quality control",
          "Research and formulation support"
        ],
        "description": "In-house industrial laboratory services for zinc, metals recycling and chemical manufacturing, supported by SGS Pakistan certification and collaboration with trusted laboratories, technical experts and researchers.",
        "provider": {
          "@type": "Organization",
          "name": "Bhatti Chemicals Industry",
          "url": "https://bhattichemicalsindustry.com.pk/",
          "telephone": "+92-304-1462460",
          "email": "info@bhattichemicalsindustry.com.pk",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Gujranwala",
            "addressRegion": "Punjab",
            "addressCountry": "PK"
          }
        },
        "areaServed": [
          {"@type": "Country", "name": "Pakistan"},
          {"@type": "AdministrativeArea", "name": "Punjab"}
        ],
        "audience": {
          "@type": "BusinessAudience",
          "audienceType": "Chemical manufacturers, metal recyclers, zinc processors, exporters and industrial buyers"
        }
      },
      {
        "@type": "WebPage",
        "@id": "https://bhattichemicalsindustry.com.pk/services.php#webpage",
        "url": "https://bhattichemicalsindustry.com.pk/services.php",
        "name": "Chemical Laboratory Services in Pakistan",
        "isPartOf": {
          "@type": "WebSite",
          "name": "Bhatti Chemicals Industry",
          "url": "https://bhattichemicalsindustry.com.pk/"
        },
        "about": {"@id": "https://bhattichemicalsindustry.com.pk/services.php#laboratory-service"},
        "inLanguage": "en-PK"
      }
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Does Bhatti Chemicals Industry have its own laboratory in Pakistan?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Bhatti Chemicals Industry operates an in-house industrial laboratory in Gujranwala, Pakistan, focused on zinc materials, metals recycling, chemical manufacturing, batch quality control and product development."
        }
      },
      {
        "@type": "Question",
        "name": "Is the Bhatti Chemicals Industry laboratory certified by SGS Pakistan?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Bhatti Chemicals Industry states that its laboratory is certified through SGS Pakistan. Certification and supporting quality documents can be requested directly from the company for buyer or partner review."
        }
      },
      {
        "@type": "Question",
        "name": "What laboratory services does Bhatti Chemicals Industry provide?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Services include zinc and zinc-bearing material analysis, metals recycling evaluation, raw-material inspection, in-process testing, finished-batch quality control, certificate-of-analysis support, research collaboration and custom formulation guidance."
        }
      },
      {
        "@type": "Question",
        "name": "Does the laboratory collaborate with researchers and other laboratories?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. The company collaborates with chemical manufacturing specialists, metals recycling experts, researchers and trusted independent laboratories in Pakistan when additional expertise or third-party verification is required."
        }
      }
    ]
  }
  </script>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>
<?php include __DIR__ . '/includes/whatsapp-widget.php'; ?>

<main>
  <section class="services-hero" aria-labelledby="services-title">
    <div class="hero-grid">
      <div class="hero-copy">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo site_url('/'); ?>">Home</a>
          <span aria-hidden="true">/</span>
          <span>Services</span>
        </nav>
        <p class="hero-eyebrow">In-house laboratory | Gujranwala, Pakistan</p>
        <h1 id="services-title">Chemical Laboratory &amp; Technical Services</h1>
        <p class="hero-lead">
          Bhatti Chemicals Industry operates one of Pakistan's largest industry-focused in-house laboratory operations for zinc, metals recycling and chemical manufacturing. Our laboratory supports production quality, material analysis, research and industrial problem-solving.
        </p>
        <div class="hero-actions">
          <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-primary">Request Laboratory Support</a>
          <a href="#capabilities" class="btn-outline">Explore Capabilities</a>
        </div>
      </div>

      <div class="hero-lab-panel" aria-label="Laboratory quality overview">
        <div class="panel-topline">
          <span class="panel-status"><span></span> Laboratory active</span>
          <span>BCI LAB / PK</span>
        </div>
        <div class="panel-symbol">Zn</div>
        <div class="panel-content">
          <p>Core laboratory focus</p>
          <strong>Zinc &amp; Recycled Metals Analysis</strong>
        </div>
        <div class="panel-metrics">
          <div><strong>SGS</strong><span>Pakistan certified</span></div>
          <div><strong>In-house</strong><span>Quality control</span></div>
          <div><strong>R&amp;D</strong><span>Expert collaboration</span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="proof-strip" aria-label="Laboratory credentials">
    <div class="proof-grid">
      <div class="proof-item">
        <span class="proof-symbol" aria-hidden="true">◆</span>
        <div><strong>Company-owned laboratory</strong><span>Integrated with manufacturing operations</span></div>
      </div>
      <div class="proof-item">
        <span class="proof-symbol" aria-hidden="true">✓</span>
        <div><strong>SGS Pakistan certified</strong><span>Documentation available for review</span></div>
      </div>
      <div class="proof-item">
        <span class="proof-symbol" aria-hidden="true">◎</span>
        <div><strong>Specialist network</strong><span>Labs, experts and researchers</span></div>
      </div>
      <div class="proof-item">
        <span class="proof-symbol" aria-hidden="true">●</span>
        <div><strong>Gujranwala, Pakistan</strong><span>Serving local and international industry</span></div>
      </div>
    </div>
  </section>

  <section class="answer-section">
    <div class="answer-grid">
      <div>
        <p class="eyebrow">Direct Answer</p>
        <h2>Industrial laboratory services built around real manufacturing</h2>
      </div>
      <div class="answer-copy">
        <p>
          Bhatti Chemicals Industry's laboratory is a company-owned technical facility in Gujranwala, Punjab. It supports chemical manufacturing, zinc processing and metals recycling with testing, quality assurance, research and documentation services.
        </p>
        <p>
          According to company certification records, the laboratory is certified through SGS Pakistan. Bhatti Chemicals Industry is also affiliated and works with trusted quality laboratories in Pakistan, allowing specialist and independent analysis to be coordinated when a project requires additional verification.
        </p>
      </div>
    </div>
  </section>

  <section class="capabilities-section" id="capabilities">
    <div class="section-heading">
      <p class="eyebrow">Laboratory Capabilities</p>
      <h2>Testing and technical support for chemical industries</h2>
      <p>Services are designed for manufacturers, recyclers, processors, exporters and industrial buyers that need reliable material information and consistent product quality.</p>
    </div>

    <div class="capabilities-grid">
      <article class="capability-card">
        <span class="card-number">01</span>
        <div class="capability-icon" aria-hidden="true">⚗</div>
        <h3>Chemical &amp; Material Analysis</h3>
        <p>Analysis of zinc oxide, zinc ash, zinc dross, zinc dust, zinc ingot, alloys, raw materials and other zinc-bearing industrial samples.</p>
      </article>
      <article class="capability-card">
        <span class="card-number">02</span>
        <div class="capability-icon" aria-hidden="true">↻</div>
        <h3>Metals Recycling Evaluation</h3>
        <p>Technical evaluation of recyclable zinc materials to support recovery decisions, process planning, grading and responsible industrial reuse.</p>
      </article>
      <article class="capability-card">
        <span class="card-number">03</span>
        <div class="capability-icon" aria-hidden="true">◉</div>
        <h3>Batch Quality Control</h3>
        <p>Raw-material, in-process and finished-product checks to monitor composition, purity, consistency and key physical characteristics.</p>
      </article>
      <article class="capability-card">
        <span class="card-number">04</span>
        <div class="capability-icon" aria-hidden="true">✓</div>
        <h3>Reports &amp; Verification</h3>
        <p>Laboratory findings, certificates of analysis and coordination with trusted external laboratories when third-party verification is required.</p>
      </article>
      <article class="capability-card">
        <span class="card-number">05</span>
        <div class="capability-icon" aria-hidden="true">✦</div>
        <h3>Research &amp; Development</h3>
        <p>Collaborative work on chemical formulations, zinc products, process improvement, recovery efficiency and new industrial applications.</p>
      </article>
      <article class="capability-card">
        <span class="card-number">06</span>
        <div class="capability-icon" aria-hidden="true">◇</div>
        <h3>Technical Consultation</h3>
        <p>Practical guidance from chemical manufacturing and metals recycling professionals for sourcing, production and material-use decisions.</p>
      </article>
    </div>
  </section>

  <section class="collaboration-section">
    <div class="collaboration-grid">
      <div class="collaboration-copy">
        <p class="eyebrow">Expert Collaboration</p>
        <h2>A laboratory connected to Pakistan's quality and research community</h2>
        <p>
          Complex industrial questions often need more than one discipline. Bhatti Chemicals Industry brings together in-house laboratory staff, chemical manufacturing specialists, metals recycling experts and researchers to review materials and improve processes.
        </p>
        <p>
          For specialist methods or independent confirmation, the company collaborates with trusted laboratories in Pakistan. This wider network helps industrial partners access appropriate expertise without separating laboratory work from real production needs.
        </p>
        <ul class="check-list">
          <li>Chemical manufacturing specialists</li>
          <li>Metals recycling and recovery experts</li>
          <li>Independent and affiliated quality laboratories</li>
          <li>Industrial researchers and technical consultants</li>
        </ul>
      </div>

      <div class="collaboration-visual">
        <div class="network-center">
          <span class="network-symbol" aria-hidden="true">⚗</span>
          <strong>BCI Lab</strong>
          <span>Gujranwala</span>
        </div>
        <div class="network-node node-one"><span class="network-symbol" aria-hidden="true">▥</span><span>Manufacturing</span></div>
        <div class="network-node node-two"><span class="network-symbol" aria-hidden="true">↻</span><span>Recycling</span></div>
        <div class="network-node node-three"><span class="network-symbol" aria-hidden="true">◎</span><span>Researchers</span></div>
        <div class="network-node node-four"><span class="network-symbol" aria-hidden="true">⚗</span><span>Trusted Labs</span></div>
      </div>
    </div>
  </section>

  <section class="process-section">
    <div class="section-heading">
      <p class="eyebrow">How It Works</p>
      <h2>From sample to useful technical decision</h2>
      <p>A structured laboratory workflow keeps testing connected to the buyer's specification, manufacturing process or recycling objective.</p>
    </div>
    <ol class="process-grid">
      <li>
        <span>1</span>
        <h3>Requirement Review</h3>
        <p>We confirm the material, intended use, required parameters and reporting needs.</p>
      </li>
      <li>
        <span>2</span>
        <h3>Sample Assessment</h3>
        <p>The sample is identified, prepared and assigned the appropriate analysis route.</p>
      </li>
      <li>
        <span>3</span>
        <h3>Testing &amp; Validation</h3>
        <p>In-house testing is completed, with external laboratory support where required.</p>
      </li>
      <li>
        <span>4</span>
        <h3>Report &amp; Guidance</h3>
        <p>Results are documented and translated into practical quality or process guidance.</p>
      </li>
    </ol>
  </section>

  <section class="industries-section">
    <div class="industries-inner">
      <div>
        <p class="eyebrow">Industries Supported</p>
        <h2>Laboratory expertise across zinc and chemical value chains</h2>
      </div>
      <div class="industry-tags" aria-label="Industries supported">
        <span>Zinc Oxide Manufacturing</span>
        <span>Metals Recycling</span>
        <span>Galvanizing</span>
        <span>Rubber &amp; Tyres</span>
        <span>Paints &amp; Coatings</span>
        <span>Ceramics &amp; Glass</span>
        <span>Agriculture</span>
        <span>Chemical Processing</span>
      </div>
    </div>
  </section>

  <section class="faq-section" id="laboratory-faq">
    <div class="section-heading">
      <p class="eyebrow">Frequently Asked Questions</p>
      <h2>About Bhatti Chemicals laboratory services</h2>
    </div>
    <div class="faq-list">
      <details>
        <summary>Does Bhatti Chemicals Industry have its own laboratory?</summary>
        <p>Yes. Bhatti Chemicals Industry operates a company-owned industrial laboratory in Gujranwala, Pakistan. It is integrated with the company's zinc and chemical manufacturing operations and supports material analysis, quality control, research and technical development.</p>
      </details>
      <details>
        <summary>Is the laboratory certified by SGS Pakistan?</summary>
        <p>Bhatti Chemicals Industry states that its laboratory is certified through SGS Pakistan. Qualified buyers and partners may contact the company to request the relevant certification and supporting quality documentation for review.</p>
      </details>
      <details>
        <summary>What materials can the laboratory evaluate?</summary>
        <p>The laboratory focuses on zinc oxide, zinc ash, zinc dross, zinc dust, zinc ingot, zinc alloys, recyclable zinc-bearing materials and related chemical-manufacturing samples. The exact testing scope is confirmed after reviewing the material and required parameters.</p>
      </details>
      <details>
        <summary>Can Bhatti Chemicals arrange independent laboratory verification?</summary>
        <p>Yes. Bhatti Chemicals Industry works with trusted laboratories in Pakistan and can coordinate specialist or third-party analysis when a buyer, research project or quality program requires additional verification.</p>
      </details>
      <details>
        <summary>Do experts and researchers collaborate with the laboratory?</summary>
        <p>Yes. Chemical manufacturing professionals, metals recycling experts, researchers and technical consultants collaborate with Bhatti Chemicals Industry on product quality, recovery processes, formulations and industrial research requirements.</p>
      </details>
    </div>
  </section>

  <section class="services-cta">
    <div>
      <p class="eyebrow">Discuss Your Requirement</p>
      <h2>Need chemical testing, material analysis or research support?</h2>
      <p>Send the material name, project objective and required parameters. Our team will review the request and recommend the appropriate laboratory or collaboration route.</p>
    </div>
    <div class="cta-actions">
      <a href="<?php echo site_url('/contact-us.php#quote'); ?>" class="btn-light">Contact the Laboratory Team</a>
      <a href="mailto:info@bhattichemicalsindustry.com.pk" class="btn-text">info@bhattichemicalsindustry.com.pk</a>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
(function () {
  const items = document.querySelectorAll('.capability-card, .process-grid li, .proof-item');
  if (!('IntersectionObserver' in window)) {
    items.forEach(item => item.classList.add('is-visible'));
    return;
  }
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  items.forEach(item => observer.observe(item));
})();
</script>
</body>
</html>
