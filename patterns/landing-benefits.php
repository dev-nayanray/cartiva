<?php
/**
 * Title: Landing: benefits
 * Slug: cartiva/landing-benefits
 * Categories: cartiva-landing
 * Keywords: landing, benefits, features, why, icons
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small","align":"center"} -->
	<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Benefits', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"xx-large","textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Why customers love it', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'star', __( 'Premium quality', 'cartiva' ), __( 'Made from durable materials and checked by hand before it ships.', 'cartiva' ) );
cartiva_icon_card( 'truck', __( 'Fast delivery', 'cartiva' ), __( 'At your door in 2-3 days, with tracking on every order.', 'cartiva' ) );
cartiva_icon_card( 'return', __( 'Easy returns', 'cartiva' ), __( 'Not happy? Return it within 7 days for a full refund.', 'cartiva' ) );
cartiva_icon_card( 'chat', __( 'Real support', 'cartiva' ), __( 'Call or message us any day. A real person answers.', 'cartiva' ) );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
