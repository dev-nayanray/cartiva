<?php
/**
 * Title: Category grid
 * Slug: cartiva/category-grid
 * Categories: cartiva-shop
 * Keywords: categories, grid, shop
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_categories = array(
	array( 'cat-1.webp', __( 'Home & Living', 'cartiva' ) ),
	array( 'cat-2.webp', __( 'Accessories', 'cartiva' ) ),
	array( 'cat-3.webp', __( 'Tech & Gadgets', 'cartiva' ) ),
	array( 'cat-4.webp', __( 'Wellness', 'cartiva' ) ),
);
?>
<!-- wp:group {"anchor":"cartiva-categories","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div id="cartiva-categories" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'Shop by category', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="#"><?php esc_html_e( 'View all', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_categories as $cartiva_cat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-cartiva-zoom"} -->
			<figure class="wp-block-image size-full is-style-cartiva-zoom"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_cat[0] ); ?>" alt="" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><a href="#"><?php echo esc_html( $cartiva_cat[1] ); ?></a></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
