<?php
/**
 * Title: Newsletter call to action
 * Slug: cartiva/newsletter
 * Categories: cartiva-sections, call-to-action
 * Keywords: newsletter, subscribe, email
 * Viewport width: 1400
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
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Join our newsletter for early access to drops, restocks and members-only deals. Add your favourite newsletter form block here.', 'cartiva' ); ?></p>
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
