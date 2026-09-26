<?php
/**
 * Bhatti Chemicals Industry — Universal Lab Report Lightbox / Modal
 * 
 * Reusable across all product pages (Zinc Oxide, Zinc Ash, Zinc Ingot, Zinc Dross, Zinc Dust, etc.)
 * Provides a high-performance, compact modal iframe viewer with download capability for official
 * In-House Laboratory Certificates of Analysis (COA) and SGS verification reports.
 */
include_once __DIR__ . '/helpers.php';
?>
<!-- Universal Lab Report Lightbox Modal -->
<div id="bciLabReportModal" class="bci-lab-modal-overlay" role="dialog" aria-modal="true" aria-labelledby="bciLabModalTitle" hidden>
  <div class="bci-lab-modal-backdrop" data-close-lab-modal></div>
  <div class="bci-lab-modal-container">
    <div class="bci-lab-frame-wrapper" id="bciLabFrameWrapper">

      <!-- Compact Header Chrome (Small Height) -->
      <div class="bci-lab-header">
        <div class="bci-lab-header-main">
          <div class="bci-lab-live-badge">
            <span class="bci-pulse-dot"></span>
            <span id="bciLabModalBadge">In-House Laboratory COA</span>
          </div>
          <div class="bci-lab-title-wrap">
            <h3 id="bciLabModalTitle">Official In-House Quality Assurance Test Report</h3>
            <span class="bci-lab-divider" aria-hidden="true">&bull;</span>
            <p id="bciLabModalSubtitle">Bhatti Chemicals Industry QC Laboratory (Gujranwala Facility)</p>
          </div>
        </div>

        <div class="bci-lab-header-actions">
          <div class="bci-lab-cert-pills">
            <div class="bci-cert-pill inhouse">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>In-House Certified</span>
            </div>
            <div class="bci-cert-pill sgs">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>SGS Verified</span>
            </div>
          </div>

          <!-- Download Button in Iframe Header -->
          <a id="bciLabDownloadBtn" 
             href="#" 
             download="Bhatti-Chemicals-Lab-Report.pdf" 
             class="bci-lab-download-btn" 
             title="Download official laboratory test report PDF"
             aria-label="Download lab test report PDF">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/>
            </svg>
            <span>Download</span>
          </a>

          <!-- Close Button -->
          <button type="button" class="bci-lab-close-btn" data-close-lab-modal aria-label="Close Lab Report Viewer" title="Close viewer (Esc)">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
          </button>
        </div>
      </div>

      <!-- Maximized Height iFrame Viewport -->
      <div class="bci-lab-viewport">
        <div class="bci-lab-loader" id="bciLabIframeLoader" aria-hidden="true">
          <div class="bci-lab-spinner"></div>
          <span>Loading Certificate of Analysis...</span>
        </div>
        <iframe id="bciLabReportIframe"
                src=""
                title="Bhatti Chemicals Quality Control Laboratory Test Report"
                class="bci-lab-pdf-iframe"
                loading="lazy">
        </iframe>
      </div>

      <!-- Compact Footer (Small Height) -->
      <div class="bci-lab-footer">
        <div class="bci-lab-footer-inner">
          <div class="bci-lab-footer-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
          </div>
          <div class="bci-lab-footer-text">
            <p id="bciLabModalFooterNote">
              <strong>Laboratory Certification:</strong> Official batch analysis from Bhatti Chemicals Industry on-site QC Laboratory (Gujranwala). Independent <strong>SGS inspection reports</strong> are also supplied for global export &amp; commercial compliance.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<style>
/* ── Universal Lab Report Modal Styles (Compact Chrome) ── */
body.bci-modal-open {
  overflow: hidden !important;
}

.bci-lab-modal-overlay {
  position: fixed;
  inset: 0;
  z-index: 99999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.25s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

.bci-lab-modal-overlay.active {
  opacity: 1;
  visibility: visible;
}

.bci-lab-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(3, 14, 10, 0.85);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}

.bci-lab-modal-container {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1060px;
  max-height: 96vh;
  display: flex;
  flex-direction: column;
  transform: translateY(14px) scale(0.98);
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

.bci-lab-modal-overlay.active .bci-lab-modal-container {
  transform: translateY(0) scale(1);
}

.bci-lab-frame-wrapper {
  background: #ffffff;
  border: 1px solid rgba(74, 222, 158, 0.38);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 24px 60px -12px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(74, 222, 158, 0.22);
  display: flex;
  flex-direction: column;
  max-height: 96vh;
}

/* Compact Chrome Header (Small Height: ~50-54px) */
.bci-lab-header {
  background: linear-gradient(135deg, #0a241c 0%, #061712 100%);
  padding: 10px 18px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 14px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  flex-shrink: 0;
}

.bci-lab-header-main {
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
  min-width: 0;
}

.bci-lab-title-wrap {
  display: flex;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
  min-width: 0;
}

.bci-lab-header-main h3 {
  font-family: 'Sora', sans-serif;
  font-size: 1.02rem;
  font-weight: 700;
  color: #ffffff;
  margin: 0;
  letter-spacing: -0.01em;
  white-space: nowrap;
}

.bci-lab-divider {
  color: rgba(255, 255, 255, 0.35);
  font-size: 0.8rem;
}

.bci-lab-header-main p {
  font-size: 0.78rem;
  color: rgba(255, 255, 255, 0.65);
  margin: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.bci-lab-live-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: #4ade9e;
  background: rgba(74, 222, 158, 0.12);
  border: 1px solid rgba(74, 222, 158, 0.28);
  padding: 2px 8px;
  border-radius: 9999px;
  flex-shrink: 0;
}

.bci-pulse-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #4ade9e;
  box-shadow: 0 0 0 2.5px rgba(74, 222, 158, 0.35);
}

.bci-lab-header-actions {
  display: flex;
  align-items: center;
  gap: 10px;
  flex-shrink: 0;
}

.bci-lab-cert-pills {
  display: flex;
  gap: 8px;
}

.bci-cert-pill {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 0.72rem;
  font-weight: 600;
}

.bci-cert-pill svg {
  width: 13px;
  height: 13px;
  fill: currentColor;
}

.bci-cert-pill.inhouse {
  background: rgba(255, 255, 255, 0.08);
  color: #ffffff;
  border: 1px solid rgba(255, 255, 255, 0.16);
}

.bci-cert-pill.sgs {
  background: rgba(0, 123, 94, 0.4);
  color: #4ade9e;
  border: 1px solid rgba(74, 222, 158, 0.3);
}

/* Download Button in Modal Header */
.bci-lab-download-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 14px;
  background: linear-gradient(135deg, #007b5e 0%, #005a45 100%);
  color: #ffffff;
  border: 1px solid rgba(74, 222, 158, 0.4);
  border-radius: 8px;
  font-size: 0.78rem;
  font-weight: 700;
  text-decoration: none;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(0, 123, 94, 0.3);
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  white-space: nowrap;
}

.bci-lab-download-btn:hover {
  background: linear-gradient(135deg, #009673 0%, #006b52 100%);
  border-color: #4ade9e;
  color: #ffffff;
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(0, 123, 94, 0.45);
}

.bci-lab-download-btn svg {
  width: 15px;
  height: 15px;
  fill: currentColor;
}

.bci-lab-close-btn {
  width: 34px;
  height: 34px;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.18);
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  flex-shrink: 0;
  padding: 0;
}

.bci-lab-close-btn:hover {
  background: rgba(239, 68, 68, 0.85);
  border-color: #ef4444;
  transform: rotate(90deg);
  color: #ffffff;
}

.bci-lab-close-btn svg {
  width: 17px;
  height: 17px;
  fill: currentColor;
}

/* Maximized Viewport for PDF Iframe */
.bci-lab-viewport {
  width: 100%;
  height: 590px;
  max-height: calc(88vh - 96px);
  background: #2b3137;
  position: relative;
  overflow: hidden;
  flex: 1 1 auto;
}

.bci-lab-pdf-iframe {
  width: 100%;
  height: 100%;
  border: none;
  display: block;
  background: #ffffff;
}

.bci-lab-loader {
  position: absolute;
  inset: 0;
  background: #1e293b;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 12px;
  color: #94a3b8;
  font-size: 0.85rem;
  z-index: 1;
  transition: opacity 0.2s, visibility 0.2s;
}

.bci-lab-loader.loaded {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
}

.bci-lab-spinner {
  width: 32px;
  height: 32px;
  border: 3px solid rgba(74, 222, 158, 0.2);
  border-top-color: #4ade9e;
  border-radius: 50%;
  animation: bciSpin 0.75s linear infinite;
}

@keyframes bciSpin {
  to { transform: rotate(360deg); }
}

/* Compact Chrome Footer (Small Height: ~34px) */
.bci-lab-footer {
  background: #f8faf9;
  padding: 7px 18px;
  border-top: 1px solid #edf2f0;
  flex-shrink: 0;
}

.bci-lab-footer-inner {
  display: flex;
  align-items: center;
  gap: 10px;
}

.bci-lab-footer-icon {
  color: #007b5e;
  flex-shrink: 0;
  display: flex;
  align-items: center;
}

.bci-lab-footer-icon svg {
  width: 16px;
  height: 16px;
  fill: currentColor;
}

.bci-lab-footer-text p {
  font-size: 0.76rem;
  color: #475569;
  line-height: 1.4;
  margin: 0;
}

.bci-lab-footer-text strong {
  color: #0f172a;
}

/* Responsive Breakpoints */
@media (max-width: 900px) {
  .bci-lab-header {
    padding: 10px 14px;
    flex-wrap: wrap;
  }
  .bci-lab-header-actions {
    margin-left: auto;
  }
  .bci-lab-cert-pills {
    display: none; /* Hide badges on tablet/mobile to preserve space */
  }
  .bci-lab-viewport {
    height: 480px;
  }
}

@media (max-width: 600px) {
  .bci-lab-modal-overlay {
    padding: 8px;
  }
  .bci-lab-header-main h3 {
    font-size: 0.92rem;
  }
  .bci-lab-header-main p {
    display: none;
  }
  .bci-lab-divider {
    display: none;
  }
  .bci-lab-viewport {
    height: 400px;
  }
  .bci-lab-download-btn span {
    display: none; /* Icon-only on very narrow mobile */
  }
  .bci-lab-download-btn {
    padding: 6px 10px;
  }
}
</style>

<script>
/**
 * Universal Lab Report Lightbox Controller
 * Automatically handles triggers with class .btn-view-lab-report, [data-lab-pdf],
 * and product lab report cards. Also configures direct download.
 */
(function() {
  const modal = document.getElementById('bciLabReportModal');
  const iframe = document.getElementById('bciLabReportIframe');
  const loader = document.getElementById('bciLabIframeLoader');
  const modalTitle = document.getElementById('bciLabModalTitle');
  const modalSubtitle = document.getElementById('bciLabModalSubtitle');
  const modalBadge = document.getElementById('bciLabModalBadge');
  const modalFooterNote = document.getElementById('bciLabModalFooterNote');
  const downloadBtn = document.getElementById('bciLabDownloadBtn');

  if (!modal || !iframe) return;

  let lastActiveElement = null;

  function openLabReportModal(options) {
    if (!options || !options.pdfUrl) return;

    lastActiveElement = document.activeElement;

    // Set texts
    if (modalTitle && options.title) modalTitle.textContent = options.title;
    if (modalSubtitle && options.subtitle) modalSubtitle.textContent = options.subtitle;
    if (modalBadge && options.badge) modalBadge.textContent = options.badge;
    if (modalFooterNote && options.footerNote) modalFooterNote.innerHTML = options.footerNote;

    // Clean URL
    const cleanPdfUrl = options.pdfUrl.split('#')[0];

    // Configure Download Button
    if (downloadBtn) {
      downloadBtn.href = cleanPdfUrl;
      const filename = cleanPdfUrl.substring(cleanPdfUrl.lastIndexOf('/') + 1) || 'Bhatti-Chemicals-Lab-Report.pdf';
      downloadBtn.setAttribute('download', filename);
    }

    // Show loader
    if (loader) loader.classList.remove('loaded');

    // Build URL with clean viewer parameters (no toolbar, no navpanes)
    let finalUrl = cleanPdfUrl + '#toolbar=0&navpanes=0&scrollbar=1';

    // Set iframe src
    iframe.src = finalUrl;

    // Handle iframe load event
    iframe.onload = function() {
      if (loader) loader.classList.add('loaded');
    };

    // Open modal
    modal.hidden = false;
    requestAnimationFrame(function() {
      modal.classList.add('active');
      document.body.classList.add('bci-modal-open');
    });

    // Focus close button
    const closeBtn = modal.querySelector('.bci-lab-close-btn');
    if (closeBtn) closeBtn.focus();
  }

  function closeLabReportModal() {
    modal.classList.remove('active');
    document.body.classList.remove('bci-modal-open');

    setTimeout(function() {
      modal.hidden = true;
      // Clear iframe to stop background rendering/memory
      iframe.src = '';
      if (lastActiveElement && typeof lastActiveElement.focus === 'function') {
        lastActiveElement.focus();
      }
    }, 250);
  }

  // Expose global helper
  window.openBciLabReport = openLabReportModal;
  window.closeBciLabReport = closeLabReportModal;

  // Global event delegation for trigger clicks
  document.addEventListener('click', function(e) {
    const trigger = e.target.closest('.btn-view-lab-report, [data-lab-pdf], .open-lab-report');
    if (!trigger) return;

    e.preventDefault();

    const pdfUrl = trigger.getAttribute('data-lab-pdf') || trigger.getAttribute('href');
    if (!pdfUrl) return;

    const title = trigger.getAttribute('data-lab-title') || 'Official In-House Quality Assurance Test Report';
    const subtitle = trigger.getAttribute('data-lab-subtitle') || 'Bhatti Chemicals Industry QC Laboratory (Gujranwala Facility)';
    const badge = trigger.getAttribute('data-lab-badge') || 'In-House Laboratory COA';
    const footerNote = trigger.getAttribute('data-lab-footernote') || null;

    openLabReportModal({
      pdfUrl: pdfUrl,
      title: title,
      subtitle: subtitle,
      badge: badge,
      footerNote: footerNote
    });
  });

  // Close handlers
  modal.addEventListener('click', function(e) {
    if (e.target.hasAttribute('data-close-lab-modal') || e.target.closest('[data-close-lab-modal]')) {
      e.preventDefault();
      closeLabReportModal();
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeLabReportModal();
    }
  });
})();
</script>
