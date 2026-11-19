<?php
/**
 * Title: Featured products grid
 * Slug: cartiva/featured-products
 * Categories: cartiva-shop
 * Keywords: featured, products, woocommerce
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.1.0
 */

if ( ! cartiva_is_woocommerce_active() ) {
	return;
}

cartiva_product_section(
	array(
		'heading'    => __( 'Featured picks', 'cartiva' ),
		'collection' => 'featured',
		'query_id'   => 14,
		'featured'   => true,
		'per_page'   => 3,
		'columns'    => 3,
	)
);
