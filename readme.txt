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

Cartiva is a free, fast and modern WooCommerce block theme. You design everything visually in the WordPress Site Editor, with no page builder and no coding. It also works without WooCommerce as a clean theme for a blog or business site.

= Designs =

* 80+ patterns in the pattern library: 10 hero sections (including full-width and boxed sliders), 10 product sections, 8 category layouts, 8 blog sections, 5 newsletter, 6 about and 5 contact sections.
* 6 header designs and 5 footer designs you can swap at any time.
* 4 starter homepages: Fashion, Electronics, Grocery and Furniture.
* 7 ready-made pages: Contact, About, FAQ, Shipping & returns, Help center, Terms and Track order.
* 3 color styles (Fresh, Midnight, Sand), 3 font sets and 4 section styles.

= Store =

* Templates for shop, categories, tags, product search, product, cart, checkout and My Account, built with WooCommerce blocks.
* Live search in the header: product suggestions with image and price after two characters, with keyboard support.
* Product page: three gallery layouts, hover zoom, full-screen view, a Buy now button straight to checkout, sale countdown, low stock note and a sticky add to cart bar.
* Shop: second image on hover, discount sale badges (-25%), card styles and a filter sidebar that becomes a drawer on phones.
* A modern My Account area with a profile card, quick-link tiles, icon menu and a Track order link.
* Mobile bottom bar with Shop, Search, Wishlist, Account and Cart.
* Wishlist support for the free YITH, TI and WPC wishlist plugins.

= Settings and speed =

* Cartiva Settings (Appearance > Cartiva Settings) with a Getting started checklist and an on/off switch for every feature.
* About 5 KB of compressed CSS on every page; other styles and scripts load only where they are used.
* No jQuery, no page builder and no external requests. Fonts and images are bundled.
* Optional dark mode switch for visitors and a back to top button.
* Accessible: focus outlines, labeled icon buttons, correct heading order and reduced-motion support.

== Installation ==

1. In your dashboard, go to Appearance > Themes > Add New Theme.
2. Search for "Cartiva", then click Install and Activate. To use the zip file instead, choose Upload Theme.
3. Go to Appearance > Cartiva Settings and follow the Getting started checklist.

= Quick start =

1. Install and activate WooCommerce. Its setup wizard creates the Shop, Cart, Checkout and My Account pages.
2. Add products with a price, a main image and a few gallery images.
3. Add your logo and pick a header and footer in Appearance > Editor > Patterns.
4. Build your homepage with a starter homepage from Patterns > Cartiva: Starter homepages.
5. Choose your colors and fonts in Appearance > Editor > Styles.
6. Create the help pages with the slugs listed in the FAQ below.
7. Review Appearance > Cartiva Settings, then test a purchase on your phone and computer.

== Frequently Asked Questions ==

= Does Cartiva require WooCommerce? =

No. Store templates, patterns and settings appear only when WooCommerce is active. Without it, Cartiva works as a fast blog or business theme.

= Where are the theme settings? =

Go to Appearance > Cartiva Settings. It has sections for Design, Header, Site extras, Shop, Product page, Store extras, Wishlist and My Account, with a menu at the top to jump between them. Colors, fonts and spacing are edited in Appearance > Editor > Styles. All settings are saved in one option, cartiva_settings, and can be reset with one click.

= How do I change the header or footer? =

Go to Appearance > Editor > Patterns > Header (or Footer), select it and choose Replace. Headers: default, centered logo, with category bar, large search bar, menu left and logo center, or no top bar. Footers: default, dark, centered, with newsletter or simple.

= Which pages should I create? =

Create each page with this slug, then insert the matching pattern from Patterns > Cartiva: Pages. Cartiva gives it the right layout automatically, and the header and footer links start working.

* Track order: track-order
* Contact: contact
* About: about
* FAQ: faq
* Help center: help-center
* Shipping & returns: shipping-returns
* Terms & conditions: terms

= How do I edit the hero slider? =

Insert "Hero: slider" or "Hero: boxed slider" from Patterns > Cartiva: Hero. Each slide is a Cover block: change its image and text, duplicate it to add a slide, or delete it. On the site it becomes a slider with arrows, dots and autoplay every 6 seconds. Autoplay pauses on hover and for visitors who prefer reduced motion. Add the class "is-autoplay-off" to the slider group to turn autoplay off.

= How do I make a carousel? =

The "Categories: carousel", "Blog: post carousel" and "Products: carousel" patterns are swipeable rows with arrows. To turn any Group of cards or Query Loop into a carousel, add the class "cartiva-card-carousel" under Advanced > Additional CSS class(es). Add "is-cols-3" or "is-cols-5" to change how many cards show.

= How do I use the shop layout with filters? =

Go to Appearance > Editor > Templates > Product Catalog and insert the "Shop with filter sidebar" pattern. On phones the filters open in a slide-out drawer.

= Does Cartiva have a wishlist, quick view or swatches? =

Saving wishlists, quick view and variation swatches are plugin features under the WordPress.org theme rules. For wishlists, install the free YITH WooCommerce Wishlist, TI WooCommerce Wishlist or WPC Smart Wishlist plugin and Cartiva adds a header heart with a count, hearts on product cards and product pages, a Wishlist account link and matching styles. For quick view or swatches, use any WooCommerce plugin from WordPress.org.

= How does the Buy now button work? =

It adds the product to the cart with WooCommerce's own form and goes straight to checkout. For products with options, it waits until the shopper chooses them. Turn it off in Cartiva Settings > Product page.

= Why is there no sale countdown or low stock note on a product? =

The countdown appears when the sale has an end date (Product data > General > Schedule) within the next 31 days. The low stock note appears when Manage stock is on and stock reaches your low stock threshold in WooCommerce > Settings > Products > Inventory.

= How does the header live search work? =

After two characters, the search shows matching products with image, name and price, or posts and pages when WooCommerce is not active. Use the arrow keys and Enter, or press Enter to see all results. Turn it off in Cartiva Settings > Header.

= How do I add a contact form or newsletter sign-up? =

Forms are plugin features. Install a form plugin (for example WPForms Lite or Contact Form 7) or a newsletter plugin (for example MailPoet) and add its block to the page. Newsletter patterns include a placeholder Subscribe button to replace with that block.

= Can I use the simplified checkout header? =

Yes. Go to Appearance > Editor > Templates > Page: Checkout, select the header and replace it with the "Checkout header" template part.

= My changes do not show. What should I do? =

Clear your host cache, caching plugin and browser cache, then reload. If a pattern shows "This block contains unexpected content", click Attempt recovery, or remove the block and insert the pattern again.

= Will theme updates erase my changes? =

No. Changes made in the Site Editor and in Cartiva Settings are saved in your database. Use a child theme for code changes.

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
