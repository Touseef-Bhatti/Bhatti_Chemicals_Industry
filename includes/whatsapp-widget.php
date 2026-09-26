<?php
$whatsappNumber = '923041462460';
$whatsappMessage = rawurlencode('Hello Bhatti Chemicals Industry, I would like to enquire about your zinc products.');
?>

<aside class="whatsapp-widget" aria-label="WhatsApp contact">
  <a class="whatsapp-widget-link" href="https://wa.me/<?php echo $whatsappNumber; ?>?text=<?php echo $whatsappMessage; ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat with Bhatti Chemicals Industry on WhatsApp">
    <span class="whatsapp-widget-copy" aria-hidden="true">
      <span class="whatsapp-widget-eyebrow">Need help?</span>
      <span class="whatsapp-widget-message" id="whatsappWidgetMessage">Chat with us</span>
      <span class="whatsapp-widget-status"><span class="whatsapp-widget-status-dot"></span>Typically replies quickly</span>
    </span>
    <span class="whatsapp-widget-icon" aria-hidden="true">
      <svg viewBox="0 0 32 32" focusable="false"><path d="M16 3.5c-6.9 0-12.5 5.4-12.5 12.1 0 2.3.7 4.5 1.9 6.4L3.5 28.5l6.8-1.8c1.8 1 3.8 1.5 5.8 1.5 6.9 0 12.5-5.4 12.5-12.1S22.9 3.5 16 3.5Zm0 22.6c-1.8 0-3.5-.5-5-1.4l-.4-.2-4 1.1 1.1-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.8 0-5.5 4.6-10 10.3-10s10.3 4.5 10.3 10-4.6 10.5-10.3 10.5Zm5.7-7.5c-.3-.2-1.9-.9-2.2-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.4.3-.5.1-.2.1-.4 0-.5-.1-.2-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.3 3.2c.2.2 2.2 3.4 5.4 4.7.8.3 1.4.5 1.8.6.8.2 1.5.2 2.1.1.6-.1 1.9-.8 2.2-1.5.3-.7.3-1.4.2-1.5 0-.2-.2-.3-.5-.4Z"/></svg>
    </span>
  </a>
</aside>

<style>
  .whatsapp-widget { position: fixed; right: 24px; bottom: 24px; z-index: 1000; }
  .whatsapp-widget-link { display: inline-flex; align-items: center; gap: 12px; min-width: 230px; padding: 10px 12px 10px 16px; color: #fff; text-decoration: none; background: linear-gradient(135deg, #20c967, #128c4a); border: 1px solid rgba(255,255,255,.28); border-radius: 16px; box-shadow: 0 12px 30px rgba(18,140,74,.28), 0 3px 10px rgba(0,0,0,.16); transition: transform .2s ease, box-shadow .2s ease; }
  .whatsapp-widget-link:hover, .whatsapp-widget-link:focus-visible { color: #fff; transform: translateY(-3px); box-shadow: 0 16px 34px rgba(18,140,74,.36), 0 5px 14px rgba(0,0,0,.18); }
  .whatsapp-widget-link:focus-visible { outline: 3px solid rgba(37,211,102,.45); outline-offset: 4px; }
  .whatsapp-widget-copy { display: flex; flex: 1; min-width: 0; flex-direction: column; gap: 2px; }
  .whatsapp-widget-eyebrow, .whatsapp-widget-status { font-size: .68rem; line-height: 1.2; opacity: .82; }
  .whatsapp-widget-eyebrow { font-weight: 600; letter-spacing: .04em; text-transform: uppercase; }
  .whatsapp-widget-message { font-size: .98rem; font-weight: 750; line-height: 1.25; }
  .whatsapp-widget-status { display: inline-flex; align-items: center; gap: 5px; white-space: nowrap; }
  .whatsapp-widget-status-dot { width: 6px; height: 6px; background: #b8ffd0; border-radius: 50%; box-shadow: 0 0 0 3px rgba(184,255,208,.15); }
  .whatsapp-widget-icon { display: inline-flex; align-items: center; justify-content: center; flex: 0 0 48px; width: 48px; height: 48px; background: rgba(255,255,255,.16); border: 1px solid rgba(255,255,255,.22); border-radius: 50%; }
  .whatsapp-widget-icon svg { width: 29px; height: 29px; fill: currentColor; }
  @media (max-width: 640px) {
    .whatsapp-widget { right: 16px; bottom: 16px; }
    .whatsapp-widget-link { min-width: 0; padding: 9px 10px 9px 13px; border-radius: 14px; }
    .whatsapp-widget-icon { flex-basis: 44px; width: 44px; height: 44px; }
    .whatsapp-widget-status { display: none; }
  }
  @media (prefers-reduced-motion: reduce) { .whatsapp-widget-link { transition: none; } }
</style>

<script>
(function () {
  const message = document.getElementById('whatsappWidgetMessage');
  if (!message || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  const messages = ['Chat with us', 'Ask about pricing', 'Get product details', 'We reply quickly'];
  let index = 0;
  window.setInterval(function () { index = (index + 1) % messages.length; message.textContent = messages[index]; }, 3500);
})();
</script>
