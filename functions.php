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
		add_editor_style( array( 'style.css', 'assets/css/sections.css' ) );

		// WooCommerce: declare support so WooCommerce uses the block templates.
		// Default image sizes only: store owners can still change them in their WooCommerce settings.
		add_theme_support(
			'woocommerce',
			array(
				'thumbnail_image_width' => 600,
				'single_image_width'    => 1000,
			)
		);
		// Product gallery features, controlled in Appearance > Cartiva Settings.
		if ( cartiva_get_setting( 'gallery_zoom' ) ) {
			add_theme_support( 'wc-product-gallery-zoom' );
		}
		if ( cartiva_get_setting( 'gallery_lightbox' ) ) {
			add_theme_support( 'wc-product-gallery-lightbox' );
		}
		if ( 'grid' !== cartiva_get_setting( 'gallery_layout' ) ) {
			add_theme_support( 'wc-product-gallery-slider' );
		}
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
 * Classes that need the pattern section styles (assets/css/sections.css).
 *
 * Keep in sync with the root classes used in sections.css.
 *
 * @return string[]
 */
function cartiva_section_style_classes() {
	$classes = array(
		'cartiva-badge',
		'cartiva-banner-cover',
		'cartiva-blog-featured',
		'cartiva-blog-list',
		'cartiva-blog-magazine',
		'cartiva-blog-minimal',
		'cartiva-blog-side',
		'cartiva-card-carousel',
		'cartiva-category-auto',
		'cartiva-category-card',
		'cartiva-category-circles',
		'cartiva-category-list',
		'cartiva-category-mosaic',
		'cartiva-category-tile',
		'cartiva-check-list',
		'cartiva-chip',
		'cartiva-chips',
		'cartiva-contact-card',
		'cartiva-contact-list',
		'cartiva-cover-wide',
		'cartiva-cta-band',
		'cartiva-faq-group',
		'cartiva-faq-page',
		'cartiva-hero-banners',
		'cartiva-hours',
		'cartiva-icon-card',
		'cartiva-label',
		'cartiva-legal',
		'cartiva-location',
		'cartiva-mission',
		'cartiva-landing-step',
		'cartiva-compare-table',
		'cartiva-landing-offer',
		'cartiva-landing-guarantee',
		'cartiva-landing-order',
		'cartiva-product-landing',
		'cartiva-mosaic',
		'cartiva-mosaic-large',
		'cartiva-newsletter-card',
		'cartiva-newsletter-inline',
		'cartiva-newsletter-split',
		'cartiva-page-hero',
		'cartiva-post-cats',
		'cartiva-post-overlay',
		'cartiva-products-banner',
		'cartiva-signature',
		'cartiva-slider',
		'cartiva-spotlight-image',
		'cartiva-stats',
		'cartiva-step',
		'cartiva-table',
		'cartiva-team-card',
		'cartiva-timeline',
	);
	/**
	 * Filters the block classes that load the section styles.
	 *
	 * @param string[] $classes Class names.
	 */
	return (array) apply_filters( 'cartiva_section_style_classes', $classes );
}

/**
 * Load the section styles only when a block on the page uses one of them.
 *
 * Block templates are rendered before the page head is printed, so the
 * stylesheet still lands in the head.
 *
 * @param string $content Block HTML.
 * @param array  $block   Parsed block.
 * @return string
 */
function cartiva_maybe_enqueue_section_styles( $content, $block ) {
	static $pattern = null;
	if ( empty( $block['attrs']['className'] ) || wp_style_is( 'cartiva-sections', 'enqueued' ) ) {
		return $content;
	}
	if ( null === $pattern ) {
		$pattern = '/(^|\s)(' . implode( '|', array_map( 'preg_quote', cartiva_section_style_classes() ) ) . ')(\s|$|--|__)/';
	}
	if ( preg_match( $pattern, (string) $block['attrs']['className'] ) ) {
		wp_enqueue_style( 'cartiva-sections', CARTIVA_URI . '/assets/css/sections.css', array( 'cartiva-style' ), CARTIVA_VERSION );
	}
	return $content;
}
add_filter( 'render_block', 'cartiva_maybe_enqueue_section_styles', 10, 2 );

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
	$cartiva_categories = array(
		'cartiva-hero'       => array( __( 'Cartiva: Hero', 'cartiva' ), __( 'Hero banners and the hero slider.', 'cartiva' ) ),
		'cartiva-products'   => array( __( 'Cartiva: Products', 'cartiva' ), __( 'Product grids and carousels.', 'cartiva' ) ),
		'cartiva-categories' => array( __( 'Cartiva: Categories', 'cartiva' ), __( 'Ways to show your shop categories.', 'cartiva' ) ),
		'cartiva-blog'       => array( __( 'Cartiva: Blog', 'cartiva' ), __( 'Blog and journal sections.', 'cartiva' ) ),
		'cartiva-newsletter' => array( __( 'Cartiva: Newsletter', 'cartiva' ), __( 'Newsletter and sign-up sections.', 'cartiva' ) ),
		'cartiva-about'      => array( __( 'Cartiva: About', 'cartiva' ), __( 'Brand story, numbers, values, team and timeline sections.', 'cartiva' ) ),
		'cartiva-contact'    => array( __( 'Cartiva: Contact', 'cartiva' ), __( 'Contact details, locations, hours and support sections.', 'cartiva' ) ),
		'cartiva-landing'    => array( __( 'Cartiva: Landing', 'cartiva' ), __( 'Sales page sections for a single product: hero, benefits, steps, comparison, guarantee, questions and order band.', 'cartiva' ) ),
	);
	foreach ( $cartiva_categories as $cartiva_slug => $cartiva_category ) {
		register_block_pattern_category(
			$cartiva_slug,
			array(
				'label'       => $cartiva_category[0],
				'description' => $cartiva_category[1],
			)
		);
	}
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
require_once CARTIVA_DIR . '/inc/settings.php';
require_once CARTIVA_DIR . '/inc/site-features.php';
require_once CARTIVA_DIR . '/inc/integrations.php';

if ( cartiva_is_woocommerce_active() ) {
	require_once CARTIVA_DIR . '/inc/woocommerce.php';
	require_once CARTIVA_DIR . '/inc/wishlist.php';
	require_once CARTIVA_DIR . '/inc/store-features.php';
}

/**
 * Hide store-only patterns when WooCommerce is not active, so the inserter
 * never shows empty previews.
 */
function cartiva_unregister_store_patterns() {
	if ( cartiva_is_woocommerce_active() || ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
		return;
	}
	$slugs    = array( 'best-sellers', 'featured-products', 'category-auto', 'new-arrivals', 'on-sale', 'product-deal', 'product-carousel', 'products-banner', 'products-large', 'products-lists', 'top-rated', 'template-shop-sidebar', 'starter-electronics', 'starter-fashion', 'starter-furniture', 'starter-grocery' );
	$registry = WP_Block_Patterns_Registry::get_instance();
	foreach ( $slugs as $slug ) {
		if ( $registry->is_registered( 'cartiva/' . $slug ) ) {
			unregister_block_pattern( 'cartiva/' . $slug );
		}
	}
}
add_action( 'init', 'cartiva_unregister_store_patterns', 20 );

/**
 * Funnel patterns use blocks from the Cartiva Commerce plugin: hide them
 * when it is not active.
 */
function cartiva_unregister_funnel_patterns() {
	if ( defined( 'CARTIVA_COMMERCE_VERSION' ) || ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
		return;
	}
	$registry = WP_Block_Patterns_Registry::get_instance();
	foreach ( array( 'funnel-checkout', 'funnel-upsell', 'funnel-downsell', 'funnel-thankyou' ) as $slug ) {
		if ( $registry->is_registered( 'cartiva/' . $slug ) ) {
			unregister_block_pattern( 'cartiva/' . $slug );
		}
	}
}
add_action( 'init', 'cartiva_unregister_funnel_patterns', 20 );

/**
 * Live search for the header Search block.
 *
 * A small, deferred script that shows results in a dropdown after two
 * characters. It reads the WooCommerce Store API (or the core REST API when
 * WooCommerce is not active) and adds no server-side code. Disable it with:
 * add_filter( 'cartiva_live_search', '__return_false' );
 */
function cartiva_enqueue_live_search() {
	if ( ! apply_filters( 'cartiva_live_search', (bool) cartiva_get_setting( 'live_search' ) ) ) {
		return;
	}

	$has_products = cartiva_is_woocommerce_active();

	wp_enqueue_script(
		'cartiva-live-search',
		CARTIVA_URI . '/assets/js/live-search.js',
		array(),
		CARTIVA_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	$config = array(
		'products'    => $has_products,
		'productsUrl' => esc_url_raw( rest_url( 'wc/store/v1/products' ) ),
		'searchUrl'   => esc_url_raw( rest_url( 'wp/v2/search' ) ),
		'minChars'    => 2,
		'limit'       => absint( cartiva_get_setting( 'search_limit' ) ),
		'selector'    => '.cartiva-header form.wp-block-search',
		'i18n'        => array(
			'results'    => __( 'Search results', 'cartiva' ),
			'searching'  => __( 'Searching…', 'cartiva' ),
			/* translators: %s: Search query. */
			'noResults'  => __( 'No results for “%s”', 'cartiva' ),
			/* translators: %s: Search query. */
			'viewAll'    => __( 'See all results for “%s”', 'cartiva' ),
			'oneResult'  => __( '1 result found', 'cartiva' ),
			/* translators: %d: Number of results. */
			'results_n'  => __( '%d results found', 'cartiva' ),
			'outOfStock' => __( 'Out of stock', 'cartiva' ),
		),
	);

	wp_add_inline_script(
		'cartiva-live-search',
		'window.cartivaLiveSearch = ' . wp_json_encode( $config ) . ';',
		'before'
	);
}
add_action( 'wp_enqueue_scripts', 'cartiva_enqueue_live_search' );

/**
 * Load the slider script only on pages that render a slider or product carousel.
 *
 * Block templates are rendered before the page head is printed, so enqueueing
 * here still prints the script in the footer.
 *
 * @param string $content Block HTML.
 * @param array  $block   Parsed block.
 * @return string
 */
function cartiva_maybe_enqueue_slider( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'cartiva-slider' ) && false === strpos( $class, 'cartiva-product-carousel' ) && false === strpos( $class, 'cartiva-card-carousel' ) ) {
		return $content;
	}
	if ( ! wp_script_is( 'cartiva-slider', 'enqueued' ) ) {
		wp_enqueue_style( 'cartiva-slider', CARTIVA_URI . '/assets/css/slider.css', array(), CARTIVA_VERSION );
		wp_enqueue_script(
			'cartiva-slider',
			CARTIVA_URI . '/assets/js/slider.js',
			array(),
			CARTIVA_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
		wp_add_inline_script(
			'cartiva-slider',
			'window.cartivaSlider = ' . wp_json_encode(
				array(
					'i18n' => array(
						'carousel' => __( 'carousel', 'cartiva' ),
						'slide'    => __( 'slide', 'cartiva' ),
						/* translators: 1: Slide number, 2: Number of slides. */
						'ofLabel'  => __( '%1$s of %2$s', 'cartiva' ),
						'previous' => __( 'Previous', 'cartiva' ),
						'next'     => __( 'Next', 'cartiva' ),
						/* translators: %s: Slide number. */
						'goTo'     => __( 'Go to slide %s', 'cartiva' ),
						'featured' => __( 'Featured', 'cartiva' ),
						'products' => __( 'Products', 'cartiva' ),
						'items'    => __( 'Items', 'cartiva' ),
					),
				)
			) . ';',
			'before'
		);
	}
	return $content;
}
add_filter( 'render_block_core/group', 'cartiva_maybe_enqueue_slider', 10, 2 );
add_filter( 'render_block_woocommerce/product-collection', 'cartiva_maybe_enqueue_slider', 10, 2 );
add_filter( 'render_block_core/query', 'cartiva_maybe_enqueue_slider', 10, 2 );
