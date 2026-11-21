<?php
/**
 * Title: Order confirmation
 * Slug: cartiva/template-order-confirmation
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"tagName":"main","className":"cartiva-order-confirmation","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"880px"}} -->
<main class="wp-block-group cartiva-order-confirmation" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:woocommerce/order-confirmation-status {"fontSize":"x-large"} /-->

	<!-- wp:woocommerce/order-confirmation-summary /-->

	<!-- wp:heading {"level":2,"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Order details', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/order-confirmation-totals /-->

	<!-- wp:woocommerce/order-confirmation-downloads /-->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Delivery address', 'cartiva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/order-confirmation-shipping-address /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Billing address', 'cartiva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/order-confirmation-billing-address /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:woocommerce/order-confirmation-additional-information /-->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' ) ); ?>"><?php esc_html_e( 'Continue shopping', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( function_exists( 'cartiva_wc_track_order_url' ) ? cartiva_wc_track_order_url() : home_url( '/' ) ); ?>"><?php esc_html_e( 'Track your order', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</main>
<!-- /wp:group -->
