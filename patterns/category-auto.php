<?php
/**
 * Title: Categories: your store categories
 * Slug: cartiva/category-auto
 * Categories: cartiva-categories
 * Keywords: categories, automatic, woocommerce, product categories
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
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Shop by category', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"wide","textColor":"muted","fontSize":"small"} -->
	<p class="alignwide has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Updates automatically with your product categories and their images.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:woocommerce/product-categories {"hasCount":true,"hasImage":true,"hasEmpty":false,"isHierarchical":false,"align":"wide","className":"cartiva-category-auto"} /-->
</div>
<!-- /wp:group -->
