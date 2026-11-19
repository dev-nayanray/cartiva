<?php
/**
 * Title: Single product
 * Slug: cartiva/template-single-product
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:woocommerce/breadcrumbs {"align":"wide"} /-->
	<!-- wp:woocommerce/store-notices {"align":"wide"} /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"55%","className":"cartiva-product-media"} -->
		<div class="wp-block-column cartiva-product-media" style="flex-basis:55%">
			<!-- wp:woocommerce/product-image-gallery /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","className":"cartiva-product-summary","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column cartiva-product-summary" style="flex-basis:45%">
			<!-- wp:post-title {"level":1,"fontSize":"x-large","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
			<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"large"} /-->
			<!-- wp:post-excerpt {"excerptLength":100,"textColor":"muted","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->
			<!-- wp:woocommerce/add-to-cart-form /-->
			<!-- wp:pattern {"slug":"cartiva/hidden-product-trust"} /-->
			<!-- wp:woocommerce/product-meta -->
			<div class="wp-block-woocommerce-product-meta">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"x-small","textColor":"muted"} -->
				<div class="wp-block-group has-muted-color has-text-color has-x-small-font-size">
					<!-- wp:woocommerce/product-sku /-->
					<!-- wp:post-terms {"term":"product_cat","prefix":"<?php echo esc_attr__( 'Category: ', 'cartiva' ); ?>"} /-->
					<!-- wp:post-terms {"term":"product_tag","prefix":"<?php echo esc_attr__( 'Tags: ', 'cartiva' ); ?>"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:woocommerce/product-meta -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->

	<!-- wp:woocommerce/related-products {"align":"wide"} -->
	<div class="wp-block-woocommerce-related-products alignwide">
		<!-- wp:woocommerce/product-collection {"queryId":41,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"align":"wide"} -->
		<div class="wp-block-woocommerce-product-collection alignwide">
			<!-- wp:heading {"fontSize":"large"} -->
			<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'You may also like', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/product-template -->
				<!-- wp:woocommerce/product-image {"showSaleBadge":true,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
				<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
			<!-- /wp:woocommerce/product-template -->
		</div>
		<!-- /wp:woocommerce/product-collection -->
	</div>
	<!-- /wp:woocommerce/related-products -->
</main>
<!-- /wp:group -->
