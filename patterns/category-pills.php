<?php
/**
 * Title: Categories: pills
 * Slug: cartiva/category-pills
 * Categories: cartiva-categories
 * Keywords: categories, pills, chips, tags, quick links
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_pills = array(
	__( 'New in', 'cartiva' ),
	__( 'Clothing', 'cartiva' ),
	__( 'Shoes', 'cartiva' ),
	__( 'Bags', 'cartiva' ),
	__( 'Jewelry', 'cartiva' ),
	__( 'Home', 'cartiva' ),
	__( 'Kitchen', 'cartiva' ),
	__( 'Beauty', 'cartiva' ),
	__( 'Tech', 'cartiva' ),
	__( 'Outdoor', 'cartiva' ),
	__( 'Kids', 'cartiva' ),
	__( 'Gifts', 'cartiva' ),
	__( 'Sale', 'cartiva' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Popular right now', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"className":"cartiva-chips cartiva-chips--large","style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group cartiva-chips cartiva-chips--large">
		<?php foreach ( $cartiva_pills as $cartiva_pill ) : ?>
		<!-- wp:paragraph {"className":"cartiva-chip"} -->
		<p class="cartiva-chip"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php echo esc_html( $cartiva_pill ); ?></a></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
