<?php
/**
 * Cartiva functions and definitions.
 *
 * Cartiva is a block theme: layout and design live in theme.json, templates
 * and patterns. PHP is kept to the minimum needed for setup and performance.
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CARTIVA_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'CARTIVA_DIR', get_template_directory() );
define( 'CARTIVA_URI', get_template_directory_uri() );

if ( ! function_exists( 'cartiva_setup' ) ) :
	/**
	 * Theme setup.
	 */
	function cartiva_setup() {
		load_theme_textdomain( 'cartiva', CARTIVA_DIR . '/languages' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );

		// WooCommerce: declare support so WooCommerce uses the block templates.
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
endif;
add_action( 'after_setup_theme', 'cartiva_setup' );

/**
 * Enqueue the (tiny) global stylesheet.
 */
function cartiva_enqueue_styles() {
	wp_enqueue_style(
		'cartiva-style',
		get_stylesheet_uri(),
		array(),
		CARTIVA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'cartiva_enqueue_styles' );

/**
 * Per-block styles: each file loads only on pages where that block is rendered.
 * This keeps CSS payload near zero on pages that do not need it.
 */
function cartiva_enqueue_block_styles() {
	$blocks = array(
		'core/navigation',
		'core/details',
		'woocommerce/product-collection',
		'woocommerce/mini-cart',
		'woocommerce/add-to-cart-form',
		'woocommerce/product-image-gallery',
		'woocommerce/product-details',
		'woocommerce/catalog-sorting',
		'woocommerce/cart',
		'woocommerce/checkout',
		'woocommerce/order-confirmation-summary',
	);

	foreach ( $blocks as $block ) {
		$slug = str_replace( '/', '-', $block );
		$path = CARTIVA_DIR . '/assets/css/blocks/' . $slug . '.css';

		if ( ! file_exists( $path ) ) {
			continue;
		}

		wp_enqueue_block_style(
			$block,
			array(
				'handle' => 'cartiva-' . $slug,
				'src'    => CARTIVA_URI . '/assets/css/blocks/' . $slug . '.css',
				'path'   => $path,
				'ver'    => CARTIVA_VERSION,
			)
		);
	}
}
add_action( 'init', 'cartiva_enqueue_block_styles' );

/**
 * Register custom block styles.
 */
function cartiva_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'cartiva-card',
			'label' => __( 'Card', 'cartiva' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'cartiva-sticky',
			'label' => __( 'Sticky', 'cartiva' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'cartiva-pill',
			'label' => __( 'Pill', 'cartiva' ),
		)
	);
	register_block_style(
		'core/details',
		array(
			'name'  => 'cartiva-faq',
			'label' => __( 'FAQ', 'cartiva' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'cartiva-zoom',
			'label' => __( 'Zoom on hover', 'cartiva' ),
		)
	);
}
add_action( 'init', 'cartiva_register_block_styles' );

/**
 * Register pattern categories.
 */
function cartiva_register_pattern_categories() {
	register_block_pattern_category(
		'cartiva-shop',
		array(
			'label'       => __( 'Cartiva: Shop', 'cartiva' ),
			'description' => __( 'Store sections such as product grids, categories and promos.', 'cartiva' ),
		)
	);
	register_block_pattern_category(
		'cartiva-starter',
		array(
			'label'       => __( 'Cartiva: Starter homepages', 'cartiva' ),
			'description' => __( 'Complete homepages for different kinds of stores.', 'cartiva' ),
		)
	);
	register_block_pattern_category(
		'cartiva-pages',
		array(
			'label'       => __( 'Cartiva: Pages', 'cartiva' ),
			'description' => __( 'Complete page layouts: Contact, About, FAQ, Shipping & returns, Help center, Terms, Track order.', 'cartiva' ),
		)
	);
	register_block_pattern_category(
		'cartiva-sections',
		array(
			'label'       => __( 'Cartiva: Sections', 'cartiva' ),
			'description' => __( 'General page sections.', 'cartiva' ),
		)
	);
}
add_action( 'init', 'cartiva_register_pattern_categories' );

/**
 * Helper: is WooCommerce active?
 *
 * @return bool
 */
function cartiva_is_woocommerce_active() {
	return class_exists( 'WooCommerce' );
}

require_once CARTIVA_DIR . '/inc/pattern-helpers.php';
require_once CARTIVA_DIR . '/inc/header.php';

if ( cartiva_is_woocommerce_active() ) {
	require_once CARTIVA_DIR . '/inc/woocommerce.php';
}
