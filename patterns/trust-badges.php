<?php
/**
 * Title: Trust badges
 * Slug: cartiva/trust-badges
 * Categories: cartiva-shop, featured
 * Keywords: shipping, returns, secure, support, features
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_badges = array(
	array( 'truck', __( 'Free shipping', 'cartiva' ), __( 'On all orders over $50.', 'cartiva' ) ),
	array( 'return', __( 'Easy returns', 'cartiva' ), __( '30 days, no questions asked.', 'cartiva' ) ),
	array( 'lock', __( 'Secure checkout', 'cartiva' ), __( 'Encrypted payments, always.', 'cartiva' ) ),
	array( 'chat', __( 'Real support', 'cartiva' ), __( 'Friendly humans, 7 days a week.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_badges as $cartiva_badge ) : ?>
		<!-- wp:group {"className":"cartiva-badge cartiva-badge--<?php echo esc_attr( $cartiva_badge[0] ); ?>","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-badge cartiva-badge--<?php echo esc_attr( $cartiva_badge[0] ); ?>">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html( $cartiva_badge[1] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"x-small"} -->
			<p class="has-muted-color has-text-color has-x-small-font-size"><?php echo esc_html( $cartiva_badge[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
