<?php
/**
 * Title: Categories: carousel
 * Slug: cartiva/category-carousel
 * Categories: cartiva-categories
 * Keywords: categories, carousel, slider, scroll, cards
 * Viewport width: 1400
 * Description: Swipeable category cards with arrows. Add or remove cards inside the carousel group.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_cats = array(
	array( 'cat-1.webp', __( 'Home', 'cartiva' ), __( '150 products', 'cartiva' ) ),
	array( 'hero-fashion.webp', __( 'Fashion', 'cartiva' ), __( '128 products', 'cartiva' ) ),
	array( 'cat-3.webp', __( 'Tech', 'cartiva' ), __( '64 products', 'cartiva' ) ),
	array( 'cat-4.webp', __( 'Wellness', 'cartiva' ), __( '47 products', 'cartiva' ) ),
	array( 'hero-grocery.webp', __( 'Grocery', 'cartiva' ), __( '210 products', 'cartiva' ) ),
	array( 'cat-2.webp', __( 'Accessories', 'cartiva' ), __( '92 products', 'cartiva' ) ),
	array( 'hero-furniture.webp', __( 'Furniture', 'cartiva' ), __( '58 products', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Shop by category', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","className":"cartiva-card-carousel is-cols-5","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide cartiva-card-carousel is-cols-5">
		<?php foreach ( $cartiva_cats as $cartiva_cat ) : ?>
		<!-- wp:group {"className":"cartiva-category-tile","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-category-tile">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-cartiva-zoom","style":{"border":{"radius":"16px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-cartiva-zoom"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_cat[0] ); ?>" alt="" style="border-radius:16px;aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
			<p style="font-weight:700"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php echo esc_html( $cartiva_cat[1] ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"x-small"} -->
			<p class="has-muted-color has-text-color has-x-small-font-size"><?php echo esc_html( $cartiva_cat[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
