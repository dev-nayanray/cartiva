<?php
/**
 * Title: Newsletter: dark band
 * Slug: cartiva/newsletter-dark
 * Categories: cartiva-newsletter, call-to-action
 * Keywords: newsletter, subscribe, dark, band
 * Viewport width: 1400
 * Description: Newsletter sign-up section. Replace the button with the form block from your newsletter or form plugin.
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-newsletter-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignfull cartiva-newsletter-dark has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.14em","fontWeight":"700"}},"fontSize":"x-small"} -->
	<p class="has-text-align-center has-x-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Newsletter', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","textColor":"base","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Good things, delivered weekly', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffffb3"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#ffffffb3"><?php esc_html_e( 'New products, restocks and members-only deals. No spam, ever.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
	<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
	<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Subscribe', 'cartiva' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
