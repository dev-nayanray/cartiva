<?php
/**
 * Title: Categories: mosaic
 * Slug: cartiva/category-mosaic
 * Categories: cartiva-categories
 * Keywords: categories, mosaic, grid, collage
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_tiles = array(
	array( 'slide-2.webp', __( 'New season', 'cartiva' ), true ),
	array( 'cat-1.webp', __( 'Home', 'cartiva' ), false ),
	array( 'cat-3.webp', __( 'Tech', 'cartiva' ), false ),
	array( 'cat-4.webp', __( 'Wellness', 'cartiva' ), false ),
	array( 'cat-2.webp', __( 'Accessories', 'cartiva' ), false ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Explore the store', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","className":"cartiva-category-mosaic","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide cartiva-category-mosaic">
<?php
foreach ( $cartiva_tiles as $cartiva_tile ) :
	cartiva_cover_open( array( 'image' => $cartiva_tile[0], 'height' => $cartiva_tile[2] ? 520 : 250, 'dim' => 20, 'overlay' => 'contrast', 'dark' => true, 'position' => 'bottom left', 'radius' => '20px', 'class' => $cartiva_tile[2] ? 'cartiva-category-card cartiva-mosaic-large' : 'cartiva-category-card' ) );
	?>
		<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|20","bottom":"var:preset|spacing|10"}}},"fontSize":"<?php echo $cartiva_tile[2] ? 'x-large' : 'medium'; ?>"} -->
		<p class="has-base-color has-text-color has-<?php echo $cartiva_tile[2] ? 'x-large' : 'medium'; ?>-font-size" style="padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);font-weight:700"><a href="#"><?php echo esc_html( $cartiva_tile[1] ); ?> →</a></p>
		<!-- /wp:paragraph -->
	<?php
	cartiva_cover_close();
endforeach;
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
