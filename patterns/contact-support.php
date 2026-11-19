<?php
/**
 * Title: Contact: support band
 * Slug: cartiva/contact-support
 * Categories: cartiva-contact, contact, call-to-action
 * Keywords: contact, support, help, dark, call to action
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"base","fontSize":"x-small"} -->
	<p class=" has-base-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Support', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"base"} -->
	<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Need a hand? We are here.', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#ffffffb3"}}} -->
			<p class="has-text-color" style="color:#ffffffb3"><?php esc_html_e( 'Real people, quick answers: we reply within one business day.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
			<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Email support', 'cartiva' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="tel:+15550102030"><?php esc_html_e( 'Call us', 'cartiva' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
