<?php
/**
 * Title: Categories: circles
 * Slug: cartiva/category-circles
 * Categories: cartiva-categories
 * Keywords: categories, circles, round, icons
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_cats = array(
	array( 'cat-1.webp', __( 'Home', 'cartiva' ) ),
	array( 'hero-fashion.webp', __( 'Fashion', 'cartiva' ) ),
	array( 'cat-3.webp', __( 'Tech', 'cartiva' ) ),
	array( 'cat-4.webp', __( 'Wellness', 'cartiva' ) ),
	array( 'hero-grocery.webp', __( 'Grocery', 'cartiva' ) ),
	array( 'cat-2.webp', __( 'Accessories', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide","textAlign":"center"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Shop by category', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","className":"cartiva-category-circles","layout":{"type":"grid","columnCount":6,"minimumColumnWidth":"7rem"}} -->
	<div class="wp-block-group alignwide cartiva-category-circles">
		<?php foreach ( $cartiva_cats as $cartiva_cat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-rounded"} -->
			<figure class="wp-block-image size-full is-style-rounded"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_cat[0] ); ?>" alt="<?php echo esc_attr( $cartiva_cat[1] ); ?>" style="aspect-ratio:1;object-fit:cover"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php echo esc_html( $cartiva_cat[1] ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
