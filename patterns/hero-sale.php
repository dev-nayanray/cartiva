<?php
/**
 * Title: Hero: big sale
 * Slug: cartiva/hero-sale
 * Categories: cartiva-hero, banner, call-to-action
 * Keywords: sale, discount, promo, black friday, hero
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"cartiva-hero-sale","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-hero-sale has-base-color has-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:paragraph {"className":"cartiva-hero-sale__number","style":{"typography":{"fontSize":"clamp(6rem, 16vw, 13rem)","fontWeight":"800","letterSpacing":"-0.06em","lineHeight":"0.9"}}} -->
			<p class="cartiva-hero-sale__number" style="font-size:clamp(6rem, 16vw, 13rem);font-weight:800;letter-spacing:-0.06em;line-height:0.9"><?php echo esc_html__( '-50%', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.14em","fontWeight":"700"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Season sale · This week only', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"textColor":"base","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Up to half off hundreds of favorites.', 'cartiva' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( 'Free shipping on every sale order. While stocks last.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
				<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop the sale', 'cartiva' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
