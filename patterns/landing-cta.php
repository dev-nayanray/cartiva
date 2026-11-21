<?php
/**
 * Title: Landing: order now band
 * Slug: cartiva/landing-cta
 * Categories: cartiva-landing, call-to-action
 * Keywords: landing, order, call to action, cta, dark
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"base","fontSize":"x-small","align":"center"} -->
	<p class="has-text-align-center has-base-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Last chance', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"xx-large","textAlign":"center","textColor":"base"} -->
	<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Ready to order?', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffffb3"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#ffffffb3"><?php esc_html_e( 'Stock is limited at this price. Order now and pay when it arrives.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
		<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="#order"><?php esc_html_e( 'Order now', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
