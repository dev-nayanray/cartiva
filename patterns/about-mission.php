<?php
/**
 * Title: About: mission statement
 * Slug: cartiva/about-mission
 * Categories: cartiva-about, about
 * Keywords: about, mission, statement, quote
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Our mission', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"cartiva-mission__statement","style":{"typography":{"fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.02em"}},"fontSize":"xx-large"} -->
	<p class="has-text-align-center cartiva-mission__statement has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.02em;line-height:1.2"><?php esc_html_e( 'To make well-made, honest products easy to find, fair to buy and good to live with.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"fontSize":"small"} -->
	<div class="wp-block-group has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"className":"cartiva-mission__point"} -->
		<p class="cartiva-mission__point"><?php esc_html_e( 'Designed to last', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-mission__point"} -->
		<p class="cartiva-mission__point"><?php esc_html_e( 'Fairly priced', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-mission__point"} -->
		<p class="cartiva-mission__point"><?php esc_html_e( 'Responsibly made', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
