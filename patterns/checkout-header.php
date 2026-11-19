<?php
/**
 * Title: Checkout header (distraction-free)
 * Slug: cartiva/checkout-header
 * Categories: header
 * Block Types: core/template-part/checkout-header
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
		<div class="wp-block-group has-small-font-size">
			<!-- wp:paragraph {"textColor":"success","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-success-color has-text-color" style="font-weight:600"><?php esc_html_e( '🔒 Secure checkout', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="<?php echo esc_url( $cartiva_cart_url ); ?>"><?php esc_html_e( '← Back to cart', 'cartiva' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
