<?php
/**
 * Title: About: our values
 * Slug: cartiva/about-values
 * Categories: cartiva-about, about
 * Keywords: about, values, mission, icons, cards
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class="alignwide has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Our values', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"align":"wide","level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'What we stand for', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'star', __( 'Quality first', 'cartiva' ), __( 'Durable materials and careful finishing, tested by our team before anything goes on sale.', 'cartiva' ) );
cartiva_icon_card( 'leaf', __( 'Kinder to the planet', 'cartiva' ), __( 'Recycled packaging, carbon-neutral delivery and products designed to be repaired.', 'cartiva' ) );
cartiva_icon_card( 'chat', __( 'People who care', 'cartiva' ), __( 'A real support team that knows every product and is happy to help.', 'cartiva' ) );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
