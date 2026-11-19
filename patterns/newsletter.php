<?php
/**
 * Title: Newsletter: centered
 * Slug: cartiva/newsletter
 * Categories: cartiva-newsletter, call-to-action
 * Keywords: newsletter, subscribe, email
 * Viewport width: 1400
 * Description: Newsletter sign-up section. Replace the button with the form block from your newsletter or form plugin.
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Get 10% off your first order', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Join our newsletter for early access to new drops, restocks and members-only deals.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-cartiva-pill"} -->
		<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Subscribe', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
