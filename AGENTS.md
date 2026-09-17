# Bhatti Chemicals Industry — Agent Guidelines & Skills Reference

This repository contains the codebase for **Bhatti Chemicals Industry**. All AI agents operating in this workspace must reference and utilize the curated agent skills located in the global skills store at `C:\Users\touse\.agents\skills`.

Whenever performing SEO, GEO (Generative Engine Optimization / AI Search), or UI/UX Design and CSS styling tasks, agents must consult and follow the procedures defined in the corresponding `SKILL.md` files linked below before writing or modifying code.

---

## 1. Skill Registry & Reference Paths

### 🔍 Search Engine Optimization (SEO) Skills
Use these skills to audit, structure, optimize, and rank web pages across organic search engines:

| Skill | Description | Direct SKILL.md Path |
| :--- | :--- | :--- |
| **`seo`** | Comprehensive umbrella audit across technical SEO, on-page SEO, schema, sitemaps, and content quality. | [seo/SKILL.md](file:///C:/Users/touse/.agents/skills/seo/SKILL.md) |
| **`seo-technical`** | Crawlability, indexability, security, Core Web Vitals, robots.txt, canonicalization, and JS rendering. | [seo-technical/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-technical/SKILL.md) |
| **`seo-schema`** | Schema.org structured data detection, generation, and validation (JSON-LD markup). | [seo-schema/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-schema/SKILL.md) |
| **`seo-audit`** | Deep diagnostic auditing to detect indexation issues, 404s, broken links, and ranking bottlenecks. | [seo-audit/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-audit/SKILL.md) |
| **`seo-meta-optimizer`** | High-CTR title tags, meta descriptions, open graph tags, and social metadata optimization. | [seo-meta-optimizer/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-meta-optimizer/SKILL.md) |
| **`seo-sitemap`** | XML sitemap structure, hierarchy, validation, and submission configuration. | [seo-sitemap/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-sitemap/SKILL.md) |
| **`seo-content-writer`** | High-intent, keyword-rich copy adhering to search engine quality raters guidelines (E-E-A-T). | [seo-content-writer/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-content-writer/SKILL.md) |
| **`seo-aeo-keyword-research`** | Keyword research with AEO conversational questions, search intent, and volume priority. | [seo-aeo-keyword-research/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-aeo-keyword-research/SKILL.md) |
| **`frontend-seo`** | Framework-agnostic frontend metadata patterns, social cards, and canonical management. | [frontend-seo/SKILL.md](file:///C:/Users/touse/.agents/skills/frontend-seo/SKILL.md) |
| **`programmatic-seo`** | Scalable architecture for high-volume, data-driven landing pages and directory routing. | [programmatic-seo/SKILL.md](file:///C:/Users/touse/.agents/skills/programmatic-seo/SKILL.md) |

---

### 🌐 Generative Engine Optimization (GEO) & AEO Skills
Use these skills to optimize Bhatti Chemicals Industry content for citation and visibility in AI search engines (Google AI Overviews, ChatGPT, Claude, Perplexity, Copilot):

| Skill | Description | Direct SKILL.md Path |
| :--- | :--- | :--- |
| **`geo-fundamentals`** | Core principles of Generative Engine Optimization: citability, quotation-ready statistics, and passage clarity. | [geo-fundamentals/SKILL.md](file:///C:/Users/touse/.agents/skills/geo-fundamentals/SKILL.md) |
| **`seo-geo`** | Passage-level citability, AI overview optimization, `llms.txt` readiness, and LLM crawler access. | [seo-geo/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-geo/SKILL.md) |
| **`ai-seo`** | Answer Engine Optimization (AEO) to maximize citations across Perplexity, Gemini, ChatGPT, and Claude. | [ai-seo/SKILL.md](file:///C:/Users/touse/.agents/skills/ai-seo/SKILL.md) |
| **`clarvia-aeo-check`** | Direct diagnostic audit checking if content meets AI answer engine indexing criteria. | [clarvia-aeo-check/SKILL.md](file:///C:/Users/touse/.agents/skills/clarvia-aeo-check/SKILL.md) |
| **`seo-aeo-content-cluster`** | Builds topical cluster architectures specifically formatted for AI answer synthesis. | [seo-aeo-content-cluster/SKILL.md](file:///C:/Users/touse/.agents/skills/seo-aeo-content-cluster/SKILL.md) |

---

### 🎨 Design, UI/UX & CSS Styling Skills
Use these skills to implement world-class, premium aesthetics, responsive layouts, motion, and industrial-grade web design:

| Skill | Description | Direct SKILL.md Path |
| :--- | :--- | :--- |
| **`antigravity-design-expert`** | Advanced UI/UX engineering: glassmorphism, 3D CSS, micro-interactions, and motion design. | [antigravity-design-expert/SKILL.md](file:///C:/Users/touse/.agents/skills/antigravity-design-expert/SKILL.md) |
| **`frontend-design`** | High-agency frontend designer-engineer principles: anti-generic, production-grade bespoke styling. | [frontend-design/SKILL.md](file:///C:/Users/touse/.agents/skills/frontend-design/SKILL.md) |
| **`design-system`** | Token architecture, typography scales, contrast standards, and color semantics. | [design-system/SKILL.md](file:///C:/Users/touse/.agents/skills/design-system/SKILL.md) |
| **`design-taste-frontend`** | Calibrated color palettes, spacing rhythm, responsive fluid layouts, and refined typography. | [design-taste-frontend/SKILL.md](file:///C:/Users/touse/.agents/skills/design-taste-frontend/SKILL.md) |
| **`high-end-visual-design`** | Agency-grade visual polish: deep layering, subtle borders, ambient lighting, and sleek dark modes. | [high-end-visual-design/SKILL.md](file:///C:/Users/touse/.agents/skills/high-end-visual-design/SKILL.md) |
| **`web-design-guidelines`** | Compliance checks against modern web interface standards, usability, and accessible contrast. | [web-design-guidelines/SKILL.md](file:///C:/Users/touse/.agents/skills/web-design-guidelines/SKILL.md) |
| **`ui-ux-designer`** | User journey architecture, wireframing, call-to-action placement, and UX conversion patterns. | [ui-ux-designer/SKILL.md](file:///C:/Users/touse/.agents/skills/ui-ux-designer/SKILL.md) |
| **`stitch-ui-design`** | Component prompt engineering and modern layout generation standards. | [stitch-ui-design/SKILL.md](file:///C:/Users/touse/.agents/skills/stitch-ui-design/SKILL.md) |

---

## 2. Agent Execution Protocol

When an agent receives a prompt touching any of these three disciplines:
1. **Identify the relevant skill** from the tables above based on the task scope.
2. **Inspect the `SKILL.md`** using `view_file` at its absolute path `file:///C:/Users/touse/.agents/skills/<skill>/SKILL.md`.
3. **Apply the guidelines**:
   - For **SEO**: Verify meta title length (50-60 chars), descriptions (140-160 chars), JSON-LD schema correctness, canonical URLs, semantic `<h1>`-`<h6>` hierarchy, and alt text.
   - For **GEO**: Format key business facts, chemical specifications (Zinc Oxide, Zinc Dust), purity grades, and industrial applications into distinct, quotable data tables and definition snippets that LLMs can extract verbatim.
   - For **Design/Styling**: Adhere to curated color palettes, modern typography, glassmorphism, responsive grids, and clean CSS (no generic templates).
