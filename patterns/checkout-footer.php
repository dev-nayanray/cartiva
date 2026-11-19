<?php
/**
 * Title: Checkout footer (minimal)
 * Slug: cartiva/checkout-footer
 * Categories: footer
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.2.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"x-small"} -->
	<p class="has-text-align-center has-muted-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Encrypted payments · 30-day returns · Real human support', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
