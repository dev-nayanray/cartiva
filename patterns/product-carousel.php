<?php
/**
 * Title: Products: carousel
 * Slug: cartiva/product-carousel
 * Categories: cartiva-products
 * Keywords: carousel, slider, products, scroll, woocommerce
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! cartiva_is_woocommerce_active() ) {
	return;
}

cartiva_product_section(
	array(
		'heading'    => __( 'Trending now', 'cartiva' ),
		'collection' => 'best-sellers',
		'query_id'   => 16,
		'order_by'   => 'popularity',
		'per_page'   => 10,
		'columns'    => 4,
		'class'      => 'cartiva-product-carousel',
	)
);
