<?php
/**
 * Shared Quality Assurance Lab Report Showcase Card
 * Bhatti Chemicals Industry
 * 
 * Embeds a light-themed, high-converting Quality Assurance Console
 * with Large Bold "VIEW LAB REPORT" button (opening universal iframe modal)
 * and direct PDF download link.
 */
include_once __DIR__ . '/helpers.php';
$targetApp = isset($appLabTitle) ? $appLabTitle : 'Industrial Applications';
$targetSub = isset($appLabSub) ? $appLabSub : 'Guaranteed 99.99% Pure Zinc Oxide (ZnO) Batch Certification';
?>
<link rel="stylesheet" href="<?php echo site_url('/assets/css/lab-report-btn.css'); ?>">
<!-- Quality Assurance Lab Console (Light Theme) -->
<div class="lab-showcase-section reveal">
  <div class="lab-console-card">
    
    <!-- Top Status Ribbon -->
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

    <!-- Main Console Body (2 Columns) -->
    <div class="lab-console-body">
      <div class="lab-console-main">
        <h3 class="lab-console-heading">Official In-House Quality Assurance Test Report</h3>
        <p class="lab-console-sub"><?php echo htmlspecialchars($targetSub); ?></p>
        <p class="lab-console-text">
          Bhatti Chemicals Industry guarantees <strong>99.99% pure Zinc Oxide (ZnO)</strong> engineered specifically for <strong><?php echo htmlspecialchars($targetApp); ?></strong>. Every commercial production batch is tested in our dedicated on-site analytical laboratory in Gujranwala, Pakistan, utilizing spectrophotometry, EDTA titration, and sub-micron sieve analysis to verify optimal reactivity and ultra-low heavy metal concentrations (Pb &le; 50 ppm, Fe &le; 0.003%, Cd &le; 10 ppm). For domestic procurement and multinational export orders, independent <strong>SGS (Société Générale de Surveillance)</strong> testing reports are provided upon request.
        </p>

        <!-- Metric Chips -->
        <div class="lab-metric-chips">
          <div class="lab-chip">
            <span class="chip-label">Chemical Assay</span>
            <span class="chip-val">&ge; 99.99% Pure</span>
            <span class="chip-sub">Guaranteed by Lot</span>
          </div>
          <div class="lab-chip">
            <span class="chip-label">Heavy Metals (Pb)</span>
            <span class="chip-val">&le; 50 ppm</span>
            <span class="chip-sub">Heavy Metal Free</span>
          </div>
          <div class="lab-chip">
            <span class="chip-label">Mesh Fineness</span>
            <span class="chip-val">325 Mesh / 99.9%</span>
            <span class="chip-sub">Instant Dispersion</span>
          </div>
        </div>

        <!-- Verification Badges -->
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

      <!-- Action Hub -->
      <div class="lab-console-hub">
        <div class="doc-preview-head">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
          <span>Official Lab Report (COA)</span>
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

        <!-- Direct Download Button -->
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

<style>
/* ── LIGHT THEME QUALITY ASSURANCE LAB CONSOLE (REUSABLE) ── */
.lab-showcase-section {
  margin: 48px auto;
  max-width: 1200px;
  padding: 0 16px;
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
.lab-console-body {
  position: relative;
  z-index: 1;
  padding: 34px 34px;
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 34px;
  align-items: center;
}
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
/* Button & Download styles loaded from shared lab-report-btn.css */
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
</style>
