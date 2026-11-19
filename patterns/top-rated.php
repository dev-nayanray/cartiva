<?php
/**
 * Title: Products: top rated
 * Slug: cartiva/top-rated
 * Categories: cartiva-products
 * Keywords: top rated, reviews, best, products, woocommerce
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
		'heading'    => __( 'Top rated', 'cartiva' ),
		'collection' => 'top-rated',
		'query_id'   => 15,
		'order_by'   => 'rating',
	)
);
