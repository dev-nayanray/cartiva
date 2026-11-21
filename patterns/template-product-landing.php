<?php
/**
 * Title: Product landing page
 * Slug: cartiva/template-product-landing
 * Keywords: template, landing, product
 * Inserter: no
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","align":"full","className":"cartiva-product-landing","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull cartiva-product-landing">
	<!-- wp:pattern {"slug":"cartiva/landing-offer"} /-->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:woocommerce/store-notices {"align":"wide"} /-->
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"52%","className":"cartiva-product-media"} -->
			<div class="wp-block-column cartiva-product-media" style="flex-basis:52%">
				<!-- wp:woocommerce/product-image-gallery /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"48%","className":"cartiva-product-summary","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column cartiva-product-summary" style="flex-basis:48%">
				<!-- wp:post-title {"level":1,"fontSize":"xx-large","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
				<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->
				<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"x-large"} /-->
				<!-- wp:post-excerpt {"excerptLength":60,"textColor":"muted","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->
				<!-- wp:group {"anchor":"order","className":"cartiva-landing-order","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div id="order" class="wp-block-group cartiva-landing-order">
					<!-- wp:woocommerce/add-to-cart-form /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:pattern {"slug":"cartiva/hidden-product-trust"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"cartiva/landing-benefits"} /-->
	<!-- wp:pattern {"slug":"cartiva/landing-steps"} /-->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Details and reviews', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"cartiva/landing-guarantee"} /-->
	<!-- wp:pattern {"slug":"cartiva/landing-faq"} /-->
	<!-- wp:pattern {"slug":"cartiva/landing-cta"} /-->
</main>
<!-- /wp:group -->
