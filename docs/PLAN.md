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
- Requires at least / Tested up to: 6.9 / 7.1 (current major is 7.1, 7.2 due December 2026).
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
- [x] Lookbook pattern
- [x] Translation template (.pot)
- [x] Product filters sidebar layout
- [x] Typography presets with locally bundled OFL fonts (DM Sans, Lora)
- [x] Distraction-free checkout header + cart/checkout templates

### v1.2 — Starter sites (as patterns)
- [x] Fashion, Electronics, Grocery, Furniture homepages as full-page patterns
- Section style variations (block style variations in theme.json)

### Scope decision: theme only
Cartiva is a design-only theme. WordPress.org does not allow plugin functionality in themes (custom post types, shortcodes, custom blocks, data features), so quick view, wishlist, swatches and AJAX search are out of scope. Store owners can add any WordPress.org plugin for those; the theme styles WooCommerce's own blocks.

### v1.4 — WordPress.org submission
- [ ] Theme Check clean with WP_DEBUG on
- [ ] Theme Unit Test data + WooCommerce sample products
- [ ] Keyboard and contrast check in all style variations
- [ ] Create the `godevs` WordPress.org account (readme Contributors) and upload

## 4. Quality checklist before each release
- PHP lint and WPThemeReview PHPCS ruleset
- No PHP notices with `WP_DEBUG` on
- Keyboard navigation and visible focus; colour contrast AA in all variations
- RTL check, with and without WooCommerce
