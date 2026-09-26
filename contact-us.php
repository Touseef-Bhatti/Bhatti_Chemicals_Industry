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
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Contact Bhatti Chemicals Industry — Zinc Oxide manufacturer and Zinc Ash exporter in Gujranwala, Pakistan. Reach our CEO and Managing Director, request a quote, or find our office address, email, and WhatsApp contact.">
<meta name="keywords" content="contact Bhatti Chemicals Industry, zinc oxide manufacturer contact, Gujranwala chemical company contact, zinc exporter Pakistan contact, request quote zinc oxide, Bhatti Chemicals Industry email phone">
<link rel="canonical" href="https://bhattichemicalsindustry.com.pk/contact-us.php">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Bhatti Chemicals Industry">
<meta property="og:title" content="Contact Bhatti Chemicals Industry | Zinc Oxide Manufacturer, Pakistan">
<meta property="og:description" content="Get in touch with Bhatti Chemicals Industry for Zinc Oxide and Zinc Ash inquiries. Office in Gujranwala, Pakistan. Email, WhatsApp, and quotation requests.">
<meta property="og:url" content="https://bhattichemicalsindustry.com.pk/contact-us.php">
<link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48"><link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>"><link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>"><link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">
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
<title>Contact Us | Bhatti Chemicals Industry — Zinc Oxide Manufacturer, Gujranwala Pakistan</title>

<!-- ContactPage + LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Bhatti Chemicals Industry",
  "url": "https://bhattichemicalsindustry.com.pk/contact-us.php",
  "mainEntity": {
    "@type": "Organization",
    "name": "Bhatti Chemicals Industry",
    "url": "https://bhattichemicalsindustry.com.pk/",
    "logo": "https://bhattichemicalsindustry.com.pk/assets/images/logo/bhatti-chemicals-logo.gif",
    "email": ["info@bhattichemicalsindustry.com.pk","bhattichemicalsindustry@gmail.com"],
    "telephone": ["+92-304-1462460","+92-55-4295107"],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Bhatti Chemicals Industry",
      "addressLocality": "Gujranwala",
      "addressRegion": "Punjab",
      "addressCountry": "PK"
    },
    "sameAs": [
      "https://www.facebook.com/profile.php?id=61567839302531",
      "https://www.linkedin.com/in/bhatti-chemicals-industry?originalSubdomain=pk"
    ],
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "contactType": "sales",
        "email": "info@bhattichemicalsindustry.com.pk",
        "telephone": "+92-304-1462460",
        "areaServed": "Worldwide",
        "availableLanguage": ["English", "Urdu"]
      }
    ]
  }
}
</script>
<!-- Person Schema: Leadership -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "M. Ashraf Bhatti",
  "jobTitle": "Chief Executive Officer",
  "worksFor": { "@type": "Organization", "name": "Bhatti Chemicals Industry" },
  "image": "https://bhattichemicalsindustry.com.pk/assets/images/team/ceo-ashraf-bhatti.jpeg"
}
</script>
<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"How can I request a quotation from Bhatti Chemicals Industry?","acceptedAnswer":{"@type":"Answer","text":"Email us at info@bhattichemicalsindustry.com.pk or message us on WhatsApp at +92 304 1462460 with your required product, quantity, and destination. Our team responds to trade inquiries promptly."}},
    {"@type":"Question","name":"Where is Bhatti Chemicals Industry located?","acceptedAnswer":{"@type":"Answer","text":"Our facility is located in Gujranwala, Punjab, Pakistan — a major industrial manufacturing hub. Full address details are provided to confirmed business inquiries."}},
    {"@type":"Question","name":"Does Bhatti Chemicals Industry respond to international inquiries?","acceptedAnswer":{"@type":"Answer","text":"Yes. We regularly respond to inquiries from international buyers and export Zinc Ash and other zinc products to more than 15 countries."}},
    {"@type":"Question","name":"Can I speak directly with company leadership?","acceptedAnswer":{"@type":"Answer","text":"For significant partnership or bulk order discussions, inquiries can be escalated to our CEO or Managing Director. Mention this in your initial message and our team will arrange the appropriate contact."}}
  ]
}
</script>

<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;scroll-padding-top:82px}
body{font-family:'Inter',system-ui,sans-serif;color:#1a1a1a;background:#fafafa;overflow-x:hidden;-webkit-font-smoothing:antialiased}
h1,h2,h3{font-family:'Sora',sans-serif;line-height:1.15}
h1{font-size:clamp(2rem,4.5vw,3.2rem);font-weight:800}
h2{font-size:clamp(1.5rem,3vw,2.2rem);font-weight:700}
h3{font-size:1.1rem;font-weight:600}
p{line-height:1.8;color:#4a5568}
.eyebrow{font-size:.76rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:#007b5e;margin-bottom:.5rem}
.section-header{text-align:center;margin-bottom:3rem}
.section-header h2{color:#1a1a1a;margin-bottom:.6rem}
.section-desc{font-size:1rem;max-width:660px;margin:0 auto;color:#4a5568}

/* HERO */
.page-hero{position:relative;min-height:48vh;background:#0d1f19;display:flex;align-items:flex-end;padding:120px 24px 60px;overflow:hidden}
.page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 65% 60% at 75% 35%,rgba(0,123,94,.28) 0%,transparent 65%)}
.page-hero-bg-text{position:absolute;right:0;top:50%;transform:translateY(-50%);font-family:'Sora',sans-serif;font-size:clamp(100px,15vw,240px);font-weight:800;color:rgba(255,255,255,.03);pointer-events:none;user-select:none;white-space:nowrap}
.page-hero-inner{position:relative;z-index:2;max-width:1200px;margin:0 auto;width:100%}
.breadcrumb{display:flex;align-items:center;gap:8px;margin-bottom:1.2rem;font-size:.8rem;color:rgba(255,255,255,.45)}
.breadcrumb a{color:rgba(255,255,255,.55);text-decoration:none}.breadcrumb a:hover{color:#4ade9e}.breadcrumb span{color:rgba(255,255,255,.25)}
.page-hero-inner h1{color:#fff;margin-bottom:1rem}
.page-hero-inner p{color:rgba(255,255,255,.7);font-size:clamp(.95rem,1.5vw,1.1rem);max-width:620px;line-height:1.75}

/* QUICK CONTACT STRIP */
.quick-contact-strip{background:#fff;border-bottom:1px solid #e2e8e0}
.quick-contact-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(4,1fr)}
.quick-contact-item{padding:26px 24px;border-right:1px solid #e2e8e0;display:flex;align-items:center;gap:14px;text-decoration:none;transition:background .2s}
.quick-contact-item:hover{background:#f0f2f0}
.quick-contact-item:last-child{border-right:none}
.qc-icon{width:44px;height:44px;border-radius:10px;background:rgba(0,123,94,.08);display:flex;align-items:center;justify-content:center;font-size:1.3rem;flex-shrink:0;color:#007b5e}
.qc-icon svg{display:block;width:22px;height:22px;fill:currentColor}
.qc-text strong{display:block;font-family:'Sora',sans-serif;font-size:.92rem;color:#1a1a1a;margin-bottom:2px}
.qc-text span{font-size:.82rem;color:#6b7280}

/* LEADERSHIP */
.leadership-section{padding:90px 24px;background:#f0f2f0}
.leadership-grid{max-width:1100px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:28px}
.leader-card{background:#fff;border:1px solid #e2e8e0;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.06);display:flex;flex-direction:column}
.leader-photo-wrap{position:relative;aspect-ratio:16/11;overflow:hidden;background:#e2e8e0}
.leader-photo-wrap img{width:100%;height:100%;object-fit:cover;display:block}
.leader-photo-placeholder{width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#0d1f19,#1a3d30);color:rgba(255,255,255,.3);font-family:'Sora',sans-serif;font-size:3rem;font-weight:800}
.leader-role-badge{position:absolute;top:14px;left:14px;background:rgba(0,123,94,.92);color:#fff;font-size:.7rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:5px 12px;border-radius:5px}
.leader-body{padding:26px 28px 28px}
.leader-body h3{font-size:1.25rem;color:#1a1a1a;margin-bottom:2px}
.leader-title{font-size:.85rem;color:#007b5e;font-weight:600;margin-bottom:14px}
.leader-body blockquote{font-size:.92rem;color:#4a5568;line-height:1.75;font-style:italic;border-left:3px solid #007b5e;padding-left:14px;margin-bottom:16px}
.leader-contact-row{display:flex;flex-direction:column;gap:8px;padding-top:14px;border-top:1px solid #f0f2f0}
.leader-contact-row a{display:flex;align-items:center;gap:8px;font-size:.85rem;color:#374151;text-decoration:none;font-weight:500}
.leader-contact-row a:hover{color:#007b5e}
.sample-data-note{display:inline-block;margin-top:12px;background:#fef3c7;color:#92400e;font-size:.72rem;font-weight:600;padding:4px 10px;border-radius:5px}

/* CONTACT + FORM SECTION */
.contact-main-section{padding:90px 24px;background:#fff}
.contact-main-grid{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1.1fr;gap:56px;align-items:start}

.contact-info-block h2{color:#1a1a1a;margin-bottom:1rem}
.contact-info-block > p{margin-bottom:1.8rem;font-size:1rem}

.info-card{display:flex;gap:16px;padding:18px 0;border-bottom:1px solid #e2e8e0}
.info-card:last-of-type{border-bottom:none}
.info-icon{width:46px;height:46px;border-radius:10px;background:#f0f2f0;color:#007b5e;display:flex;align-items:center;justify-content:center;font-size:1.3rem;flex-shrink:0}
.info-icon svg{display:block;width:22px;height:22px;fill:currentColor}
.info-card-body strong{display:block;font-family:'Sora',sans-serif;font-size:.95rem;color:#1a1a1a;margin-bottom:4px}
.info-card-body a,.info-card-body span{font-size:.9rem;color:#4a5568;text-decoration:none;line-height:1.6}
.info-card-body a:hover{color:#007b5e}

.hours-table{margin-top:1.5rem;background:#f0f2f0;border-radius:10px;padding:18px 20px}
.hours-table h3{font-size:.95rem;margin-bottom:10px;color:#1a1a1a}
.hours-row{display:flex;justify-content:space-between;font-size:.87rem;color:#4a5568;padding:5px 0}
.hours-row strong{color:#1a1a1a;font-weight:600}
.hours-note{font-size:.76rem;color:#9ca3af;margin-top:8px}

/* FORM */
.contact-form-card{background:#f0f2f0;border:1px solid #e2e8e0;border-radius:16px;padding:36px;scroll-margin-top:100px}
.contact-form-card h2{font-size:1.5rem;color:#1a1a1a;margin-bottom:.4rem}
.contact-form-card > p{font-size:.9rem;margin-bottom:1.8rem}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:14px}
.form-group{display:flex;flex-direction:column;gap:6px}
.form-group.full{grid-column:1/-1}
.form-group label{font-size:.82rem;font-weight:600;color:#374151}
.form-group input,.form-group select,.form-group textarea{
  padding:12px 14px;border:1px solid #d1d5db;border-radius:8px;
  font-family:'Inter',sans-serif;font-size:.9rem;color:#1a1a1a;background:#fff;
  transition:border-color .2s;
}
.form-group input:focus,.form-group select:focus,.form-group textarea:focus{outline:none;border-color:#007b5e}
.form-group textarea{resize:vertical;min-height:110px}
.btn-submit{
  width:100%;padding:14px;background:#007b5e;color:#fff;border:none;
  border-radius:8px;font-family:'Inter',sans-serif;font-weight:700;font-size:.95rem;
  cursor:pointer;transition:background .2s,transform .15s;margin-top:6px;
}
.btn-submit:hover{background:#005a45;transform:translateY(-1px)}
.form-alt-contact{margin-top:16px;text-align:center;font-size:.85rem;color:#6b7280}
.form-alt-contact a{color:#007b5e;font-weight:600;text-decoration:none}

/* MAP */
.map-section{padding:0 24px 90px;background:#fff}
.map-wrap{max-width:1200px;margin:0 auto;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08);border:1px solid #e2e8e0}
.map-wrap iframe{width:100%;height:400px;border:0;display:block}

/* FAQ */
.faq-section{padding:90px 24px;background:#f0f2f0}
.faq-list{max-width:820px;margin:0 auto}
.faq-item{border:1px solid #e2e8e0;border-radius:10px;margin-bottom:12px;background:#fff;overflow:hidden}
.faq-q{width:100%;background:none;border:none;display:flex;justify-content:space-between;align-items:center;gap:16px;padding:20px 24px;text-align:left;cursor:pointer;font-family:'Sora',sans-serif;font-size:1rem;font-weight:600;color:#1a1a1a;transition:background .15s}
.faq-q:hover{background:#f0f2f0}
.faq-q[aria-expanded="true"]{background:#f0f2f0;color:#007b5e}
.faq-chevron{flex-shrink:0;width:22px;height:22px;border:2px solid #007b5e;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#007b5e;font-size:.85rem;transition:transform .25s}
.faq-q[aria-expanded="true"] .faq-chevron{transform:rotate(180deg)}
.faq-a{padding:0 24px;max-height:0;overflow:hidden;transition:max-height .35s ease,padding .25s}
.faq-a.open{max-height:300px;padding:0 24px 20px}
.faq-a p{font-size:.95rem;color:#4a5568;line-height:1.75}
.faq-a a{color:#007b5e}

/* RESPONSIVE */
@media(max-width:1024px){
  .contact-main-grid{grid-template-columns:1fr}
  .leadership-grid{grid-template-columns:1fr}
  .quick-contact-inner{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .form-row{grid-template-columns:1fr}
  .quick-contact-inner{grid-template-columns:1fr}
  .quick-contact-item{border-right:none;border-bottom:1px solid #e2e8e0}
  .quick-contact-item:last-child{border-bottom:none}
  .page-hero-bg-text{display:none}
  .contact-form-card{padding:26px 22px}
}

.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease}
.reveal.visible{opacity:1;transform:none}
@media(prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none}}
</style>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>
<?php include __DIR__ . '/includes/whatsapp-widget.php'; ?>

<main id="main-content">

<!-- ════════════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════════════ -->
<section class="page-hero" aria-label="Contact Bhatti Chemicals Industry">
  <div class="page-hero-bg-text" aria-hidden="true">Contact</div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo site_url('/'); ?>">Home</a><span>›</span><span aria-current="page">Contact Us</span>
    </nav>
    <p class="eyebrow" style="color:#4ade9e;">Get In Touch</p>
    <h1>Contact Bhatti Chemicals Industry</h1>
    <p>Reach our team for product inquiries, quotation requests, or export partnerships. Our leadership and trade desk respond promptly to all business inquiries.</p>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     QUICK CONTACT STRIP
════════════════════════════════════════════════ -->
<div class="quick-contact-strip">
  <div class="quick-contact-inner">
    <a href="mailto:info@bhattichemicalsindustry.com.pk" class="quick-contact-item">
      <div class="qc-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M3 5h18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm0 2v.5l9 5.6 9-5.6V7H3Zm18 10V9.9l-8.47 5.27a1 1 0 0 1-1.06 0L3 9.9V17h18Z"/></svg></div>
      <div class="qc-text"><strong>Email Us</strong><span>info@bhattichemicalsindustry.com.pk</span></div>
    </a>
    <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer" class="quick-contact-item">
      <div class="qc-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.6 4.1 1.6 5.8L.2 24l6.5-1.7a11.8 11.8 0 0 0 5.4 1.3h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.2-6.1-3.5-8.3ZM12.2 21.6h-.1c-1.7 0-3.4-.5-4.8-1.4l-.3-.2-3.9 1 1-3.8-.2-.3a9.8 9.8 0 0 1-1.5-5.2c0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 6.9 2.9a9.7 9.7 0 0 1 2.9 6.9c0 5.5-4.4 9.9-9.8 9.9Zm5.4-7.4c-.3-.2-1.7-.8-2-.9-.3-.1-.5-.2-.7.2-.2.3-.7.9-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.4-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.4-.5c.1-.2.2-.4.3-.5.1-.2 0-.4 0-.6-.1-.2-.6-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.7.4-.2.3-1 1-1 2.5s1 2.9 1.2 3.1c.2.2 2 3.2 5 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.3.2-1.4 0-.2-.2-.3-.5-.4Z"/></svg></div>
      <div class="qc-text"><strong>WhatsApp</strong><span>+92 304 1462 460</span></div>
    </a>
    <a href="tel:+92554295107" class="quick-contact-item">
      <div class="qc-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M6.6 2.5 9.2 2l2.1 5.1-2.4 1.7a15.2 15.2 0 0 0 6.3 6.3l1.7-2.4 5.1 2.1-.5 2.6a3.1 3.1 0 0 1-3.4 2.5C10.6 18.9 5.1 13.4 4.1 5.9a3.1 3.1 0 0 1 2.5-3.4Z"/></svg></div>
      <div class="qc-text"><strong>Call Us (UAN)</strong><span>+92 55 4295107</span></div>
    </a>
    <a href="https://maps.app.goo.gl/UDxLEqWJWLsdq5UZ9" target="_blank" rel="noopener noreferrer" class="quick-contact-item">
      <div class="qc-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M12 23s8-7.2 8-13A8 8 0 0 0 4 10c0 5.8 8 13 8 13Zm0-9.5A3.5 3.5 0 1 1 12 6a3.5 3.5 0 0 1 0 7.5Z"/></svg></div>
      <div class="qc-text"><strong>Visit Us</strong><span>Gujranwala, Pakistan</span></div>
    </a>
  </div>
</div>

<!-- ════════════════════════════════════════════════
     LEADERSHIP
════════════════════════════════════════════════ -->
<section class="leadership-section" id="leadership">
  <div class="section-header reveal">
    <p class="eyebrow">Company Leadership</p>
    <h2>Speak With Our Leadership Team</h2>
    <p class="section-desc">For significant partnerships, bulk export orders, or strategic inquiries, our leadership team is directly accessible.</p>
  </div>
  <div class="leadership-grid">

    <!-- CEO -->
    <div class="leader-card reveal">
      <div class="leader-photo-wrap">
        <img src="<?php echo site_url('/assets/images/team/ceo-ashraf-bhatti.jpeg'); ?>" alt="M. Ashraf Bhatti, CEO of Bhatti Chemicals Industry" loading="lazy">
        <span class="leader-role-badge">Chief Executive Officer</span>
      </div>
      <div class="leader-body">
        <h3>M. Ashraf Bhatti</h3>
        <p class="leader-title">Chief Executive Officer</p>
        <blockquote>"Our vision is to continuously innovate and provide the highest quality Zinc Oxide products, meeting global standards and exceeding customer expectations."</blockquote>
        <div class="leader-contact-row">
          <a href="mailto:info@bhattichemicalsindustry.com.pk"><span aria-hidden="true"><i class="fa-solid fa-envelope"></i></span> info@bhattichemicalsindustry.com.pk</a>
          <a href="https://wa.me/923206881487" target="_blank" rel="noopener noreferrer"><span aria-hidden="true"><i class="fa-brands fa-whatsapp"></i></span> WhatsApp: +92 320 6881 487</a>
        </div>
      </div>
    </div>

    <!-- Managing Director -->
    <div class="leader-card reveal">
      <div class="leader-photo-wrap">
        <div class="leader-photo-placeholder" aria-hidden="true">MD</div>
        <span class="leader-role-badge" style="background:rgba(200,146,42,.92);">Managing Director</span>
      </div>
      <div class="leader-body">
        <h3>Nafees Qamar</h3>
        <p class="leader-title">Managing Director</p>
        <blockquote>"We are committed to disciplined operations, consistent quality, and dependable service that builds lasting trust with every customer and business partner."</blockquote>
        <div class="leader-contact-row">
          <a href="mailto:info@bhattichemicalsindustry.com.pk"><span aria-hidden="true"><i class="fa-solid fa-envelope"></i></span> info@bhattichemicalsindustry.com.pk</a>
          <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer"><span aria-hidden="true"><i class="fa-brands fa-whatsapp"></i></span> WhatsApp: +92 304 1462 460</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ════════════════════════════════════════════════
     CONTACT INFO + FORM
════════════════════════════════════════════════ -->
<section class="contact-main-section">
  <div class="contact-main-grid">

    <div class="contact-info-block reveal">
      <p class="eyebrow">Contact Information</p>
      <h2>How to Reach Us</h2>
      <p>Whether you're requesting a quotation, asking about product specifications, or exploring an export partnership, here's how to reach the right team.</p>

      <div class="info-card">
        <div class="info-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M3 5h18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm0 2v.5l9 5.6 9-5.6V7H3Zm18 10V9.9l-8.47 5.27a1 1 0 0 1-1.06 0L3 9.9V17h18Z"/></svg></div>
        <div class="info-card-body">
          <strong>Email</strong>
          <a href="mailto:info@bhattichemicalsindustry.com.pk">info@bhattichemicalsindustry.com.pk</a><br>
          <a href="mailto:bhattichemicalsindustry@gmail.com">bhattichemicalsindustry@gmail.com</a>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.6 4.1 1.6 5.8L.2 24l6.5-1.7a11.8 11.8 0 0 0 5.4 1.3h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.2-6.1-3.5-8.3ZM12.2 21.6h-.1c-1.7 0-3.4-.5-4.8-1.4l-.3-.2-3.9 1 1-3.8-.2-.3a9.8 9.8 0 0 1-1.5-5.2c0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 6.9 2.9a9.7 9.7 0 0 1 2.9 6.9c0 5.5-4.4 9.9-9.8 9.9Zm5.4-7.4c-.3-.2-1.7-.8-2-.9-.3-.1-.5-.2-.7.2-.2.3-.7.9-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.4-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.4-.5c.1-.2.2-.4.3-.5.1-.2 0-.4 0-.6-.1-.2-.6-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.7.4-.2.3-1 1-1 2.5s1 2.9 1.2 3.1c.2.2 2 3.2 5 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.3.2-1.4 0-.2-.2-.3-.5-.4Z"/></svg></div>
        <div class="info-card-body">
          <strong>WhatsApp</strong>
          <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer">+92 304 1462 460</a>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M6.6 2.5 9.2 2l2.1 5.1-2.4 1.7a15.2 15.2 0 0 0 6.3 6.3l1.7-2.4 5.1 2.1-.5 2.6a3.1 3.1 0 0 1-3.4 2.5C10.6 18.9 5.1 13.4 4.1 5.9a3.1 3.1 0 0 1 2.5-3.4Z"/></svg></div>
        <div class="info-card-body">
          <strong>Phone (UAN)</strong>
          <a href="tel:+92554295107">+92 55 4295107</a>
        </div>
      </div>
      <div class="info-card">
        <div class="info-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M12 23s8-7.2 8-13A8 8 0 0 0 4 10c0 5.8 8 13 8 13Zm0-9.5A3.5 3.5 0 1 1 12 6a3.5 3.5 0 0 1 0 7.5Z"/></svg></div>
        <div class="info-card-body">
          <strong>Address</strong>
          <span>Bhatti Chemicals Industry, Gujranwala, Punjab, Pakistan</span>
        </div>
      </div>

      <div class="hours-table">
        <h3>Business Hours <span class="sample-data-note" style="margin-top:0;margin-left:6px;">Sample — confirm actual hours</span></h3>
        <div class="hours-row"><span>Monday – Saturday</span><strong>9:00 AM – 6:00 PM (PKT)</strong></div>
        <div class="hours-row"><span>Sunday</span><strong>Closed</strong></div>
        <p class="hours-note">WhatsApp inquiries are monitored outside business hours for urgent trade matters.</p>
      </div>
    </div>

    <div class="contact-form-card reveal" id="quote">
      <h2>Request a Quotation</h2>
      <p>Fill in your requirements and our trade team will respond with pricing, availability, and next steps.</p>
      <form id="quoteForm" action="mailto:info@bhattichemicalsindustry.com.pk" method="POST" enctype="text/plain">
        <div class="form-row">
          <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="Full Name" required autocomplete="name">
          </div>
          <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" id="company" name="Company" autocomplete="organization">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="Email" required autocomplete="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone / WhatsApp</label>
            <input type="tel" id="phone" name="Phone" autocomplete="tel">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="product">Product of Interest</label>
            <select id="product" name="Product">
              <option value="Zinc Oxide">Zinc Oxide (ZnO)</option>
              <option value="Zinc Ash Fine">Zinc Ash Fine</option>
              <option value="Zinc Ingot">Zinc Ingot</option>
              <option value="Zinc Dross">Zinc Dross</option>
              <option value="Zinc Dust (APCD)">Zinc Dust (APCD)</option>
              <option value="Zinc Alloy">Zinc Alloy</option>
              <option value="Not Sure / Multiple">Not Sure / Multiple Products</option>
            </select>
          </div>
          <div class="form-group">
            <label for="country">Destination Country</label>
            <input type="text" id="country" name="Country" placeholder="e.g., Pakistan, UAE, India">
          </div>
        </div>
        <div class="form-group full" style="margin-bottom:14px">
          <label for="quantity">Required Quantity</label>
          <input type="text" id="quantity" name="Quantity" placeholder="e.g., 500 kg, 5 tons, 1 container">
        </div>
        <div class="form-group full" style="margin-bottom:14px">
          <label for="message">Additional Details</label>
          <textarea id="message" name="Message" placeholder="Tell us about your specific requirements, timeline, or any questions..."></textarea>
        </div>
        <button type="submit" class="btn-submit">Send Quotation Request</button>
      </form>
      <p class="form-alt-contact">Prefer WhatsApp? <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer">Message us directly →</a></p>
    </div>

  </div>
</section>

<!-- ════════════════════════════════════════════════
     MAP
════════════════════════════════════════════════ -->
<section class="map-section" id="map">
  <div class="map-wrap reveal">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d54067.18762354118!2d74.13955611745686!3d32.11792147687348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x391f2b8ad536f219%3A0x6e4401f638f9b3f1!2sBHATTI%20CHEMICALS%20INDUSTRY%20(Zinc%20Oxide%20Manufacturer%20in%20Gujranwala%2C%20Punjab%2C%20Pakistan)%2C%20Kacha%20Khiali%20Rd%2C%20Mian%20Sansi%2C%20Gujranwala%2C%2052550%2C%20Pakistan!3m2!1d32.1404576!2d74.17919789999999!5e0!3m2!1sen!2s!4v1790418352301!5m2!1sen!2s"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="Bhatti Chemicals Industry location — Gujranwala, Pakistan">
    </iframe>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════ -->
<section class="faq-section">
  <div class="section-header reveal">
    <p class="eyebrow">Common Questions</p>
    <h2>Contact — Frequently Asked Questions</h2>
  </div>
  <div class="faq-list">
    <?php
    $faqs = [
      ["How can I request a quotation from Bhatti Chemicals Industry?", "Email us at <a href=\"mailto:info@bhattichemicalsindustry.com.pk\">info@bhattichemicalsindustry.com.pk</a> or message us on WhatsApp at +92 304 1462 460 with your required product, quantity, and destination. You can also use the quotation form above. Our team responds to trade inquiries promptly."],
      ["Where is Bhatti Chemicals Industry located?", "Our facility is located in Gujranwala, Punjab, Pakistan — a major industrial manufacturing hub. Full address details are shared with confirmed business inquiries."],
      ["Does Bhatti Chemicals Industry respond to international inquiries?", "Yes. We regularly respond to inquiries from international buyers and export Zinc Ash and other zinc products to more than 15 countries worldwide."],
      ["Can I speak directly with company leadership?", "For significant partnership discussions or bulk export orders, inquiries can be escalated to our CEO or Managing Director. Mention this in your initial message and our team will arrange the appropriate contact."],
      ["What information should I include in a quotation request?", "Please include the product name, required quantity, destination country, and any specific quality or packaging requirements. This helps us respond with accurate pricing and lead times."],
    ];
    foreach ($faqs as $faq): ?>
    <div class="faq-item reveal">
      <button class="faq-q" aria-expanded="false"><?= $faq[0] ?><span class="faq-chevron" aria-hidden="true">&#9660;</span></button>
      <div class="faq-a" hidden><p><?= $faq[1] ?></p></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
(function(){const els=document.querySelectorAll('.reveal');const io=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');io.unobserve(e.target);}});},{threshold:.08});els.forEach(el=>io.observe(el));})();
(function(){document.querySelectorAll('.faq-q').forEach(btn=>{btn.addEventListener('click',function(){const expanded=this.getAttribute('aria-expanded')==='true';document.querySelectorAll('.faq-q').forEach(b=>{b.setAttribute('aria-expanded','false');const a=b.nextElementSibling;a.classList.remove('open');a.hidden=true;});if(!expanded){this.setAttribute('aria-expanded','true');const ans=this.nextElementSibling;ans.hidden=false;requestAnimationFrame(()=>ans.classList.add('open'));}});});})();
window.onload=function(){window.scrollTo(0,0);};
</script>
</body>
</html>
