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
<meta name="description" content="Terms and Conditions for using the Bhatti Chemicals Industry website — Zinc Oxide manufacturer and Zinc Ash exporter, Gujranwala, Pakistan.">
<meta name="keywords" content="Terms and Conditions, Bhatti Chemicals Industry, legal, user agreement, Pakistan">
<link rel="canonical" href="https://bhattichemicalsindustry.com.pk/terms-and-conditions.php">
<link rel="icon" type="image/png" href="<?php echo site_url('/assets/favicon/favicon-48x48.png'); ?>" sizes="48x48">
<link rel="icon" type="image/svg+xml" href="<?php echo site_url('/assets/favicon/favicon.svg'); ?>">
<link rel="shortcut icon" href="<?php echo site_url('/assets/favicon/favicon.ico'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/assets/favicon/apple-touch-icon.png'); ?>">
<link rel="manifest" href="<?php echo site_url('/assets/favicon/site.webmanifest'); ?>">
<link rel="stylesheet" href="<?php echo site_url('/assets/css/header.min.css'); ?>">
<link rel="preload" href="<?php echo site_url('/assets/css/footer.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo site_url('/assets/css/footer.css'); ?>"></noscript>
<title>Terms &amp; Conditions | Bhatti Chemicals Industry</title>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Inter',system-ui,sans-serif;color:#1a1a1a;background:#fafafa;overflow-x:hidden}
h1,h2{font-family:'Sora',sans-serif;line-height:1.2}
h1{font-size:clamp(2rem,4vw,2.8rem);font-weight:800;color:#fff}
h2{font-size:1.3rem;font-weight:700;color:#1a1a1a;margin-bottom:.7rem}
p{line-height:1.8;color:#4a5568;margin-bottom:1.4rem;font-size:.97rem}
.page-hero{background:#0d1f19;padding:130px 24px 60px;position:relative;overflow:hidden}
.page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 70% at 80% 30%,rgba(0,123,94,.25) 0%,transparent 65%)}
.page-hero-inner{position:relative;z-index:1;max-width:800px;margin:0 auto}
.breadcrumb{display:flex;gap:8px;margin-bottom:1rem;font-size:.8rem;color:rgba(255,255,255,.45)}
.breadcrumb a{color:rgba(255,255,255,.55);text-decoration:none}.breadcrumb a:hover{color:#4ade9e}
.legal-content{max-width:800px;margin:0 auto;padding:70px 24px;background:#fff}
.legal-updated{font-size:.82rem;color:#475569;margin-bottom:2rem}
</style>
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>
<?php include __DIR__ . '/includes/whatsapp-widget.php'; ?>

<main id="main-content">

<section class="page-hero">
  <div class="page-hero-inner">
    <nav class="breadcrumb"><a href="<?php echo site_url('/'); ?>">Home</a><span>›</span><span>Terms &amp; Conditions</span></nav>
    <h1>Terms &amp; Conditions</h1>
  </div>
</section>

<section class="legal-content">
  <p class="legal-updated">Last updated: 2025</p>
  <p>These Terms and Conditions govern your use of the Bhatti Chemicals Industry website. By accessing or using our website, you agree to comply with and be bound by these terms.</p>

  <h2>Website Use</h2>
  <p>You may use our website for lawful purposes only. You agree not to use the site in any way that may damage, disable, overburden, or impair the website or interfere with any other party's use of the site.</p>

  <h2>Intellectual Property</h2>
  <p>All content on this website, including text, images, logos, and graphics, is the property of Bhatti Chemicals Industry or its licensors and is protected by applicable copyright and trademark laws. You may not reproduce, distribute, or use any content without our prior written permission.</p>

  <h2>Product Information</h2>
  <p>Product specifications, quality parameters, and certifications listed on this website reflect our standard offerings. Buyers requiring guaranteed specifications for a specific order should confirm details directly with our team and request a certificate of analysis for that shipment.</p>

  <h2>Disclaimer</h2>
  <p>The information provided on this website is for general informational purposes only. We make no warranties or representations about the accuracy or completeness of the content. Your use of the website is at your own risk.</p>

  <h2>Limitation of Liability</h2>
  <p>Bhatti Chemicals Industry shall not be liable for any damages arising out of or in connection with your use of this website. This includes, without limitation, direct, indirect, incidental, or consequential damages.</p>

  <h2>Changes to Terms</h2>
  <p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Continued use of the website constitutes acceptance of any changes.</p>
</section>


</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
