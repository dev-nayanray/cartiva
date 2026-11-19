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
	array( '🚚', __( 'Free shipping', 'cartiva' ), __( 'On all orders over $50.', 'cartiva' ) ),
	array( '↩', __( 'Easy returns', 'cartiva' ), __( '30 days, no questions asked.', 'cartiva' ) ),
	array( '🔒', __( 'Secure checkout', 'cartiva' ), __( 'Encrypted payments, always.', 'cartiva' ) ),
	array( '💬', __( 'Real support', 'cartiva' ), __( 'Friendly humans, 7 days a week.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_badges as $cartiva_badge ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"x-large"} -->
			<p class="has-x-large-font-size" aria-hidden="true"><?php echo esc_html( $cartiva_badge[0] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"fontSize":"small"} -->
				<h3 class="wp-block-heading has-small-font-size"><?php echo esc_html( $cartiva_badge[1] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"x-small"} -->
				<p class="has-muted-color has-text-color has-x-small-font-size"><?php echo esc_html( $cartiva_badge[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
