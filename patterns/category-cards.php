<?php
/**
 * Title: Categories: image cards
 * Slug: cartiva/category-cards
 * Categories: cartiva-categories
 * Keywords: categories, cards, overlay, image
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_cards = array(
	array( 'look-1.webp', __( 'Women', 'cartiva' ), __( 'Effortless everyday pieces', 'cartiva' ) ),
	array( 'look-2.webp', __( 'Men', 'cartiva' ), __( 'Bold basics and layers', 'cartiva' ) ),
	array( 'hero-furniture.webp', __( 'Home', 'cartiva' ), __( 'Furniture and decor', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Shop the collections', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
<?php
foreach ( $cartiva_cards as $cartiva_card ) :
	cartiva_cover_open( array( 'image' => $cartiva_card[0], 'height' => 460, 'dim' => 30, 'overlay' => 'contrast', 'dark' => true, 'position' => 'bottom left', 'radius' => '20px', 'class' => 'cartiva-category-card' ) );
	?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem","padding":{"left":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><a href="#"><?php echo esc_html( $cartiva_card[1] ); ?></a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
			<p class="has-base-color has-text-color has-small-font-size"><?php echo esc_html( $cartiva_card[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	<?php
	cartiva_cover_close();
endforeach;
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
