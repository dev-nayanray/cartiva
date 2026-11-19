<?php
/**
 * Title: Products: banner with grid
 * Slug: cartiva/products-banner
 * Categories: cartiva-products
 * Keywords: banner, products, collection, promo, woocommerce
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! cartiva_is_woocommerce_active() ) {
	return;
}

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","className":"cartiva-products-banner","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide cartiva-products-banner">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
<?php
cartiva_cover_open( array( 'image' => 'look-2.webp', 'height' => 520, 'dim' => 30, 'overlay' => 'contrast', 'dark' => true, 'position' => 'bottom left', 'radius' => '20px' ) );
?>
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:paragraph {"textColor":"base","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"fontSize":"x-small"} -->
				<p class="has-base-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Collection', 'cartiva' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"textColor":"base","fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Bold basics for every day', 'cartiva' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
					<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop the collection', 'cartiva' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
<?php
cartiva_cover_close();
?>
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
<?php
cartiva_product_section(
	array(
		'heading'    => __( 'Featured in this collection', 'cartiva' ),
		'collection' => 'featured',
		'query_id'   => 17,
		'featured'   => true,
		'per_page'   => 3,
		'columns'    => 3,
		'class'      => 'cartiva-products-banner__grid',
	)
);
?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
