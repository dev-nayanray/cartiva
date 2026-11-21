<?php
/**
 * Title: Funnel: thank you
 * Slug: cartiva/funnel-thankyou
 * Categories: cartiva-landing
 * Keywords: funnel, thank you, order received, confirmation
 * Viewport width: 1200
 * Description: Thank-you step with the order details and next steps. Needs the Cartiva Commerce plugin.
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Thank you, your order is placed!', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__( 'We will call you soon to confirm it. Keep your phone close.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:cartiva-commerce/order-details /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' ) ); ?>"><?php echo esc_html__( 'Continue shopping', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
