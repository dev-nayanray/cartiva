<?php
/**
 * Title: Landing: offer bar
 * Slug: cartiva/landing-offer
 * Categories: cartiva-landing, banner
 * Keywords: landing, offer, discount, banner, promo
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-landing-offer","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull cartiva-landing-offer has-base-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
	<p style="font-weight:700"><?php esc_html_e( 'Today only: free delivery and 30% off', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"cartiva-landing-offer__link","style":{"typography":{"fontWeight":"700"}}} -->
	<p class="cartiva-landing-offer__link" style="font-weight:700"><a href="#order"><?php esc_html_e( 'Order now →', 'cartiva' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
