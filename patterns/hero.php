<?php
/**
 * Title: Hero – Shop banner
 * Slug: cartiva/hero
 * Categories: cartiva-shop, banner
 * Keywords: hero, banner, shop, cover
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
			<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'New season collection', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Everyday essentials, made to last.', 'cartiva' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
			<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Discover quality products at honest prices. Fast delivery, secure checkout and free returns on every order.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"className":"is-style-cartiva-pill"} -->
				<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop now', 'cartiva' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#cartiva-categories"><?php esc_html_e( 'Browse categories', 'cartiva' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-cartiva-zoom"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero.webp" alt="<?php esc_attr_e( 'Product arrangement on a soft background', 'cartiva' ); ?>" style="border-radius:20px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
