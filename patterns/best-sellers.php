<?php
/**
 * Title: Products: best sellers
 * Slug: cartiva/best-sellers
 * Categories: cartiva-products
 * Keywords: best sellers, popular, products, woocommerce
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
		'heading'    => __( 'Best sellers', 'cartiva' ),
		'collection' => 'best-sellers',
		'query_id'   => 12,
		'order_by'   => 'popularity',
	)
);
