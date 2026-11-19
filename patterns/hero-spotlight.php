<?php
/**
 * Title: Hero: product spotlight
 * Slug: cartiva/hero-spotlight
 * Categories: cartiva-hero, banner
 * Keywords: hero, product, spotlight, launch, feature
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_points = array(
	__( 'All-day battery life', 'cartiva' ),
	__( 'Fast wireless charging', 'cartiva' ),
	__( 'Free 2-year warranty', 'cartiva' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"48%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:paragraph {"className":"cartiva-label","fontSize":"x-small"} -->
			<p class="cartiva-label has-x-small-font-size"><?php esc_html_e( 'New launch', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"huge"} -->
			<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Tech that keeps up with you.', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
			<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Our thinnest, lightest devices yet, built for work, play and everything in between.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"cartiva-check-list"} -->
			<ul class="wp-block-list cartiva-check-list">
				<?php foreach ( $cartiva_points as $cartiva_point ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $cartiva_point ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800"}},"fontSize":"x-large"} -->
				<p class="has-x-large-font-size" style="font-weight:800"><?php esc_html_e( '$499', 'cartiva' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-cartiva-pill"} -->
					<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop now', 'cartiva' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"cartiva-spotlight-image","style":{"border":{"radius":"24px"}}} -->
			<figure class="wp-block-image size-full has-custom-border cartiva-spotlight-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-electronics.webp' ); ?>" alt="" style="border-radius:24px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
