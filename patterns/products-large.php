<?php
/**
 * Title: Products: large cards
 * Slug: cartiva/products-large
 * Categories: cartiva-products
 * Keywords: products, large, two columns, featured, editorial
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
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'Featured picks', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'View all', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:woocommerce/product-collection {"queryId":23,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":2,"shrinkColumns":true},"collection":"woocommerce/product-collection/featured","hideControls":["inherit"],"align":"wide","className":"cartiva-products-large"} -->
	<div class="wp-block-woocommerce-product-collection alignwide cartiva-products-large">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"showSaleBadge":true,"saleBadgeAlign":"left","imageSizing":"single","isDescendentOfQueryLoop":true} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:post-excerpt {"excerptLength":18,"textColor":"muted","fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-summary"} /-->
			<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
