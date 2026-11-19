<?php
/**
 * Title: Promo banner – sale
 * Slug: cartiva/promo-banner
 * Categories: cartiva-shop, call-to-action
 * Keywords: sale, promo, discount, banner
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-base-color has-primary-background-color has-text-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textColor":"base","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Up to 40% off', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( 'Our biggest seasonal sale. Limited stock — while it lasts.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
			<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop the sale', 'cartiva' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
