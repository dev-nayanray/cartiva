<?php
/**
 * Title: Shop with filter sidebar
 * Slug: cartiva/template-shop-sidebar
 * Categories: cartiva-shop
 * Keywords: shop, sidebar, filters, archive, woocommerce
 * Template Types: archive-product, taxonomy-product_cat, taxonomy-product_tag
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! cartiva_is_woocommerce_active() ) {
	return;
}
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:woocommerce/breadcrumbs {"align":"wide"} /-->
	<!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide"} /-->
	<!-- wp:term-description {"align":"wide","textColor":"muted"} /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"260px"} -->
		<div class="wp-block-column" style="flex-basis:260px">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"className":"cartiva-shop-sidebar","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group cartiva-shop-sidebar">
				<!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters","heading":"<?php echo esc_attr__( 'Active filters', 'cartiva' ); ?>"} -->
				<div class="wp-block-woocommerce-filter-wrapper">
					<!-- wp:heading {"level":3,"fontSize":"small"} -->
					<h3 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Active filters', 'cartiva' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/active-filters {"heading":"","lock":{"remove":true}} -->
					<div class="wp-block-woocommerce-active-filters is-loading"><span aria-hidden="true" class="wc-block-active-filters__placeholder"></span></div>
					<!-- /wp:woocommerce/active-filters -->
				</div>
				<!-- /wp:woocommerce/filter-wrapper -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"fontSize":"small"} -->
					<h3 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Categories', 'cartiva' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/product-categories {"hasCount":true,"isHierarchical":true,"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"<?php echo esc_attr__( 'Price', 'cartiva' ); ?>"} -->
				<div class="wp-block-woocommerce-filter-wrapper">
					<!-- wp:heading {"level":3,"fontSize":"small"} -->
					<h3 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Price', 'cartiva' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
					<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
					<!-- /wp:woocommerce/price-filter -->
				</div>
				<!-- /wp:woocommerce/filter-wrapper -->

				<!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"<?php echo esc_attr__( 'Availability', 'cartiva' ); ?>"} -->
				<div class="wp-block-woocommerce-filter-wrapper">
					<!-- wp:heading {"level":3,"fontSize":"small"} -->
					<h3 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Availability', 'cartiva' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true}} -->
					<div class="wp-block-woocommerce-stock-filter is-loading"></div>
					<!-- /wp:woocommerce/stock-filter -->
				</div>
				<!-- /wp:woocommerce/filter-wrapper -->

				<!-- wp:woocommerce/filter-wrapper {"filterType":"rating-filter","heading":"<?php echo esc_attr__( 'Rating', 'cartiva' ); ?>"} -->
				<div class="wp-block-woocommerce-filter-wrapper">
					<!-- wp:heading {"level":3,"fontSize":"small"} -->
					<h3 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Rating', 'cartiva' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/rating-filter {"lock":{"remove":true}} -->
					<div class="wp-block-woocommerce-rating-filter is-loading"></div>
					<!-- /wp:woocommerce/rating-filter -->
				</div>
				<!-- /wp:woocommerce/filter-wrapper -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
			<!-- wp:woocommerce/product-results-count /-->
			<!-- wp:woocommerce/catalog-sorting /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:woocommerce/store-notices /-->

			<!-- wp:woocommerce/product-collection {"queryId":31,"query":{"perPage":12,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":true,"taxQuery":[],"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true}} -->
			<div class="wp-block-woocommerce-product-collection">
			<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"showSaleBadge":true,"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
			<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
			<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
			<!-- /wp:woocommerce/product-template -->

			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->

			<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'No products were found matching your selection.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- /wp:woocommerce/product-collection-no-results -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->
