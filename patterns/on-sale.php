<?php
/**
 * Title: On sale product grid
 * Slug: cartiva/on-sale
 * Categories: cartiva-shop
 * Keywords: sale, discount, products, woocommerce
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
		'heading'    => __( 'On sale now', 'cartiva' ),
		'collection' => 'on-sale',
		'query_id'   => 13,
		'on_sale'    => true,
		'background' => 'surface',
	)
);
