=== Cartiva ===
Contributors: godevs
Requires at least: 6.9
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightweight, modern and fast WooCommerce block theme for the Site Editor.

== Description ==

Cartiva is a free, lightweight and modern WooCommerce block theme built entirely for the WordPress Site Editor (Full Site Editing).

* 100% blocks: no page builder, no jQuery, no theme options panel.
* Fast by default: a native system font stack, with optional bundled DM Sans and Lora fonts that load only when selected.
* Per-block CSS: styles load only on pages where the block is used.
* WooCommerce ready: shop, product, category, tag and product search templates built with WooCommerce blocks, plus a header with mini-cart and account icon.
* Homepage patterns: hero, trust badges, category grid, new arrivals, best sellers, on sale, featured products, split promo, brands, FAQ, promo banner and newsletter.
* Style variations: Default, Midnight (dark), Sand and Fresh, plus three typography presets.
* Starter homepages: Fashion, Electronics, Grocery and Furniture.
* Shop layout with a filter sidebar and a distraction-free checkout.
* A modern My Account area: dashboard tiles, icon navigation, order and address cards.
* Ready-made pages: Contact, About, FAQ, Shipping & returns, Help center, Terms and Track order.
* Four header designs, three footer designs and section color styles you can switch in the Site Editor.
* Live search in the header: product suggestions with image and price appear after two characters, with full keyboard support.
* Works without WooCommerce as a clean blog/business theme.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click Add New.
2. Search for "Cartiva", then click Install and Activate.
3. (Optional) Install and activate WooCommerce.
4. Go to Appearance > Editor to customise templates, patterns and styles.

== Frequently Asked Questions ==

= Does Cartiva require WooCommerce? =

No. Store templates and patterns are used only when WooCommerce is active.

= Does Cartiva include quick view, wishlist or swatches? =

No. Under the WordPress.org theme guidelines those are plugin features, so Cartiva focuses on design and layout. You can add any WooCommerce plugin from WordPress.org for them.

= How do I use the shop layout with filters? =

Go to Appearance > Editor > Templates > Product Catalog and replace the template with the "Shop with filter sidebar" pattern.

= How does the header live search work? =

After two characters, the header Search block shows matching products (image, name and price) from WooCommerce, or matching posts and pages when WooCommerce is not active. Use the arrow keys and Enter to choose a result, or press Enter to see all results. It is a small deferred script that only reads public data. To turn it off, add `add_filter( 'cartiva_live_search', '__return_false' );` to a child theme.

= How do I customize the header and footer? =

Go to Appearance > Editor > Patterns > Header (or Footer), open the template part and choose Replace to pick another design: default, centered logo, with category bar, or without top bar. Every text, link and color can then be edited in place, and colors and fonts are set under Styles.

= How do I create the Contact, About, FAQ and other pages? =

Go to Pages > Add New. In the pattern picker, open "Cartiva: Pages" and choose Contact, About, FAQ, Shipping & returns, Help center, Terms & conditions or Track order. Publish with the suggested slug (for example "contact") to get the matching full-width layout and to have the header and footer link to it automatically.

= How do I add a contact form? =

Contact forms are plugin features, so Cartiva does not include one. Install any form plugin from WordPress.org and add its block to your Contact page; it will pick up the theme's colors and fonts.

= How do I create the Track Order page? =

Go to Pages > Add New, choose the "Track order page" pattern and publish the page with the slug "track-order". It gets its own layout automatically, and the "Track order" link in the top bar points to it.

= Can I use the simplified checkout header instead? =

Yes. Go to Appearance > Editor > Templates > Page: Checkout, select the header and replace it with the "Checkout header" template part.

= How do I change the homepage? =

Go to Appearance > Editor > Templates > Front Page and edit the blocks, or insert patterns from the "Cartiva: Shop" category.

== Changelog ==

= 1.0.0 =
* Initial release.

== Copyright ==

Cartiva WordPress Theme, (C) 2026 godevs.
Cartiva is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Privacy ==

Cartiva does not collect, store or send any user data, and makes no requests to external services. All fonts and images are bundled with the theme.

== Resources ==

* DM Sans
  License: SIL Open Font License 1.1, https://openfontlicense.org
  Source: https://github.com/googlefonts/dm-fonts
  Copyright 2014 The DM Sans Project Authors. Subset to Latin for the web.

* Lora
  License: SIL Open Font License 1.1, https://openfontlicense.org
  Source: https://github.com/cyrealtype/Lora-Cyrillic
  Copyright 2011 The Lora Project Authors, with Reserved Font Name "Lora". Unmodified, packaged as WOFF.

* Images in /assets/images and screenshot.png
  License: GPLv2 or later, https://www.gnu.org/licenses/gpl-2.0.html
  Source: Created by godevs for this theme.

* Icons (inline SVG in style.css and /assets/css)
  License: GPLv2 or later, https://www.gnu.org/licenses/gpl-2.0.html
  Source: Created by godevs for this theme.
