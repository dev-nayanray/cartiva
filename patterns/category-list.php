<?php
/**
 * Title: Categories: list with image
 * Slug: cartiva/category-list
 * Categories: cartiva-categories
 * Keywords: categories, list, links, arrows, image
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_cats = array(
	array( __( 'Clothing', 'cartiva' ), __( '128 products', 'cartiva' ) ),
	array( __( 'Shoes', 'cartiva' ), __( '64 products', 'cartiva' ) ),
	array( __( 'Bags & accessories', 'cartiva' ), __( '92 products', 'cartiva' ) ),
	array( __( 'Home & living', 'cartiva' ), __( '150 products', 'cartiva' ) ),
	array( __( 'Beauty', 'cartiva' ), __( '47 products', 'cartiva' ) ),
	array( __( 'Gifts', 'cartiva' ), __( '36 products', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/look-2.webp' ); ?>" alt="" style="border-radius:20px;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Find what you need', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:group {"className":"cartiva-category-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group cartiva-category-list">
				<?php foreach ( $cartiva_cats as $cartiva_cat ) : ?>
				<!-- wp:paragraph {"className":"cartiva-category-list__item","fontSize":"large"} -->
				<p class="cartiva-category-list__item has-large-font-size"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php echo esc_html( $cartiva_cat[0] ); ?> <span class="cartiva-category-list__count"><?php echo esc_html( $cartiva_cat[1] ); ?></span></a></p>
				<!-- /wp:paragraph -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
