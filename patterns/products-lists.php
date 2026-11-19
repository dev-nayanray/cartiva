<?php
/**
 * Title: Products: three lists
 * Slug: cartiva/products-lists
 * Categories: cartiva-products
 * Keywords: products, list, compact, new, best sellers, sale
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! cartiva_is_woocommerce_active() ) {
	return;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"cartiva-list-heading","fontSize":"large"} -->
			<h3 class="wp-block-heading cartiva-list-heading has-large-font-size"><?php esc_html_e( 'New arrivals', 'cartiva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/product-collection {"queryId":18,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"list","columns":1,"shrinkColumns":true},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit"],"className":"cartiva-product-list"} -->
			<div class="wp-block-woocommerce-product-collection cartiva-product-list">
				<!-- wp:woocommerce/product-template -->
					<!-- wp:group {"className":"cartiva-mini-product","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group cartiva-mini-product">
						<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"84px","height":"84px","aspectRatio":"1"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
							<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:woocommerce/product-template -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"cartiva-list-heading","fontSize":"large"} -->
			<h3 class="wp-block-heading cartiva-list-heading has-large-font-size"><?php esc_html_e( 'Best sellers', 'cartiva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/product-collection {"queryId":19,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"list","columns":1,"shrinkColumns":true},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit"],"className":"cartiva-product-list"} -->
			<div class="wp-block-woocommerce-product-collection cartiva-product-list">
				<!-- wp:woocommerce/product-template -->
					<!-- wp:group {"className":"cartiva-mini-product","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group cartiva-mini-product">
						<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"84px","height":"84px","aspectRatio":"1"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
							<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:woocommerce/product-template -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"className":"cartiva-list-heading","fontSize":"large"} -->
			<h3 class="wp-block-heading cartiva-list-heading has-large-font-size"><?php esc_html_e( 'On sale', 'cartiva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/product-collection {"queryId":20,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"list","columns":1,"shrinkColumns":true},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit"],"className":"cartiva-product-list"} -->
			<div class="wp-block-woocommerce-product-collection cartiva-product-list">
				<!-- wp:woocommerce/product-template -->
					<!-- wp:group {"className":"cartiva-mini-product","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group cartiva-mini-product">
						<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"84px","height":"84px","aspectRatio":"1"} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
							<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:woocommerce/product-template -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
