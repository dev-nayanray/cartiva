# Cartiva — Market Analysis & Implementation Plan

Author: godevs (https://godevs.net) · Developer: Nayan Ray

## 1. Market analysis (Nov 2026)

| Theme | Model | Strength | Weakness Cartiva targets |
|---|---|---|---|
| WoodMart | Premium (ThemeForest) | Huge shop feature set: AJAX filters, quick view, wishlist, swatches, builder | Paid, heavy, tied to Elementor/WPBakery, its own options panel |
| Astra | Freemium (1M+ installs) | Fast, many starter templates | Best Woo features are Pro-only; classic Customizer, not true FSE |
| Blocksy / Kadence | Freemium | Block-friendly, fast | Hybrid themes: header builders live outside the Site Editor |
| Ollie, Twenty Twenty-Five | Free block themes | True FSE | Not store-focused; owner must build shop layouts |
| Botiga, Storefront | Free / freemium | Woo-focused | Classic PHP templates, dated look |

**Gap:** a *true* block theme that is store-first, looks premium out of the box, and is 100% free (no locked features, no upsell).

### WordPress.org constraints that shape the product
- No bundled plugins, no locked/premium-only features in the theme, no custom post types or shortcodes (plugin territory).
- Recommending plugins is allowed only for plugins hosted on WordPress.org.
- All text translatable and escaped; all bundled assets GPL-compatible with sources listed in readme.txt.
- Block theme required files: `style.css`, `theme.json`, `templates/index.html`, `screenshot.png` (1200×900), `readme.txt`.

## 2. Positioning
"WoodMart-level store design, Twenty Twenty-Five-level weight, 100% free."

Performance budget (front page, WooCommerce active, no products cached):
- Theme CSS ≤ 10 KB, theme JS = 0 KB
- 0 font requests, 0 jQuery from theme
- Lighthouse performance ≥ 95 mobile on demo content

## 3. Roadmap

### v1.0 — WordPress.org submission (this repo)
- [x] theme.json design system (colors, fluid type, spacing, shadows, radii)
- [x] Header (announcement bar, logo, nav, search, account, mini-cart), footer
- [x] Templates: front-page, index, home, single, page (+ no-title, full-width), archive, search, 404
- [x] Woo templates: archive-product, taxonomy-product_cat/tag, product-search-results, single-product
- [x] Patterns: hero, trust badges, category grid, new arrivals, promo, newsletter, posts grid
- [x] Style variations: Midnight, Sand, Fresh
- [x] Block styles: card, sticky, pill button, image zoom
- [ ] Test with Theme Check + Theme Unit Test data + WooCommerce sample products
- [ ] Translate-ready `.pot` file (`wp i18n make-pot . languages/cartiva.pot`)
- [ ] Submit to wordpress.org/themes/upload

### v1.1 — Store depth
- [x] More patterns: best sellers, on-sale grid, featured products, split promo, brand logos, FAQ
- [ ] Lookbook pattern
- [x] Translation template (.pot)
- Product filters sidebar layout (WooCommerce Product Filters block)
- Typography presets (style variations for fonts) with locally bundled OFL fonts
- Cart & checkout header pattern (distraction-free checkout)

### v1.2 — Starter sites (as patterns)
- Fashion, Electronics, Grocery, Furniture homepages as full-page patterns
- Section style variations (block style variations in theme.json)

### Companion plugin (separate, on WordPress.org)
Features WordPress.org does not allow inside a theme — quick view, wishlist, variation swatches, sticky add-to-cart, AJAX search — go into a free "Cartiva Toolkit" plugin, recommended (not bundled) by the theme.

## 4. Quality checklist before each release
- PHP lint and WPThemeReview PHPCS ruleset
- No PHP notices with `WP_DEBUG` on
- Keyboard navigation and visible focus; colour contrast AA in all variations
- RTL check, with and without WooCommerce
