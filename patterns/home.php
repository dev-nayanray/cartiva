<?php
/**
 * Title: Shop homepage
 * Slug: cartiva/home
 * Categories: cartiva-shop
 * Keywords: home, homepage, shop, landing
 * Viewport width: 1400
 * Template Types: front-page, home
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:pattern {"slug":"cartiva/hero"} /-->
<!-- wp:pattern {"slug":"cartiva/trust-badges"} /-->
<!-- wp:pattern {"slug":"cartiva/category-grid"} /-->
<?php if ( cartiva_is_woocommerce_active() ) : ?>
<!-- wp:pattern {"slug":"cartiva/new-arrivals"} /-->
<?php endif; ?>
<!-- wp:pattern {"slug":"cartiva/split-promo"} /-->
<?php if ( cartiva_is_woocommerce_active() ) : ?>
<!-- wp:pattern {"slug":"cartiva/best-sellers"} /-->
<?php endif; ?>
<!-- wp:pattern {"slug":"cartiva/promo-banner"} /-->
<!-- wp:pattern {"slug":"cartiva/brands"} /-->
<!-- wp:pattern {"slug":"cartiva/faq"} /-->
<!-- wp:pattern {"slug":"cartiva/newsletter"} /-->
