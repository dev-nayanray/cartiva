<?php
/**
 * WooCommerce compatibility. Loaded only when WooCommerce is active.
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sensible image sizes for a modern product grid (square, crisp on retina).
 *
 * @param array $size Image size settings.
 * @return array
 */
function cartiva_wc_thumbnail_size( $size ) {
	return array(
		'width'  => 600,
		'height' => 600,
		'crop'   => 1,
	);
}
add_filter( 'woocommerce_get_image_size_thumbnail', 'cartiva_wc_thumbnail_size' );

/**
 * Remove the legacy "classic" WooCommerce stylesheets.
 * Cartiva renders the store with WooCommerce blocks, which ship their own
 * scoped CSS, so the classic sheets are dead weight on most pages.
 *
 * Child themes can restore them with:
 * add_filter( 'cartiva_disable_classic_wc_styles', '__return_false' );
 *
 * @param array $styles Registered WooCommerce styles.
 * @return array
 */
function cartiva_wc_enqueue_styles( $styles ) {
	if ( ! apply_filters( 'cartiva_disable_classic_wc_styles', true ) ) {
		return $styles;
	}
	unset( $styles['woocommerce-layout'], $styles['woocommerce-smallscreen'] );
	return $styles;
}
add_filter( 'woocommerce_enqueue_styles', 'cartiva_wc_enqueue_styles' );
