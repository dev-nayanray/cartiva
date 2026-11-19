<?php
/**
 * Title: Track order page
 * Slug: cartiva/page-track-order
 * Categories: cartiva-pages, cartiva-shop
 * Keywords: track, order, tracking, status, delivery
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Order tracking form with help cards. Save the page with the slug "track-order" to use the matching template.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/' );
$cartiva_help        = array(
	array( 'cartiva-track-help--email', __( 'Where do I find my order ID?', 'cartiva' ), __( 'It is in your order confirmation email, next to "Order #".', 'cartiva' ) ),
	array( 'cartiva-track-help--account', __( 'Have an account?', 'cartiva' ), __( 'Log in to see every order and its tracking details in one place.', 'cartiva' ) ),
	array( 'cartiva-track-help--support', __( 'Still need help?', 'cartiva' ), __( 'Our support team is happy to check on your delivery for you.', 'cartiva' ) ),
);
?>
<!-- wp:columns {"align":"wide","className":"cartiva-track-order","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide cartiva-track-order">
	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">
		<!-- wp:group {"className":"cartiva-track-order__card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group cartiva-track-order__card">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Find your order', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:shortcode -->
			[woocommerce_order_tracking]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<?php foreach ( $cartiva_help as $cartiva_item ) : ?>
			<!-- wp:group {"className":"cartiva-track-help <?php echo esc_attr( $cartiva_item[0] ); ?>","layout":{"type":"constrained"}} -->
			<div class="wp-block-group cartiva-track-help <?php echo esc_attr( $cartiva_item[0] ); ?>">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $cartiva_item[1] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $cartiva_item[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endforeach; ?>
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $cartiva_account_url ); ?>"><?php esc_html_e( 'Go to my account', 'cartiva' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
