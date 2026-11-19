<?php
/**
 * Site-wide visitor features: dark mode switch and back to top button,
 * plus the small script and stylesheet shared with the store features.
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Apply a saved dark mode choice before the page paints (no flash).
 */
function cartiva_dark_mode_head() {
	if ( ! cartiva_get_setting( 'dark_toggle' ) ) {
		return;
	}
	wp_print_inline_script_tag( 'try{if("dark"===localStorage.getItem("cartiva-scheme")){document.documentElement.classList.add("cartiva-dark")}}catch(e){}' );
}
add_action( 'wp_head', 'cartiva_dark_mode_head', 1 );

/**
 * Dark mode switch, placed right after the header Search block.
 *
 * @param string $content Block HTML.
 * @param array  $block   Parsed block.
 * @return string
 */
function cartiva_dark_mode_toggle( $content, $block ) {
	static $done = false;
	if ( $done || is_admin() || ! cartiva_get_setting( 'dark_toggle' ) ) {
		return $content;
	}
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'cartiva-header__search' ) ) {
		return $content;
	}
	$done = true;
	return $content . sprintf(
		'<button type="button" class="cartiva-scheme-toggle" aria-pressed="false" aria-label="%1$s" title="%1$s"><span class="cartiva-scheme-toggle__icon" aria-hidden="true"></span></button>',
		esc_attr__( 'Dark mode', 'cartiva' )
	);
}
add_filter( 'render_block_core/search', 'cartiva_dark_mode_toggle', 20, 2 );

/**
 * Back to top button.
 */
function cartiva_back_to_top() {
	if ( ! cartiva_get_setting( 'back_to_top' ) ) {
		return;
	}
	printf(
		'<button type="button" class="cartiva-to-top" aria-label="%1$s" title="%1$s" hidden><span aria-hidden="true"></span></button>',
		esc_attr__( 'Back to top', 'cartiva' )
	);
}
add_action( 'wp_footer', 'cartiva_back_to_top', 7 );

/**
 * Shared front-end script and styles for the visitor features.
 */
function cartiva_features_assets() {
	$keys = array( 'dark_toggle', 'back_to_top', 'sticky_cart', 'hover_image', 'urgency', 'offcanvas_filters', 'mobile_bar' );
	$on   = false;
	foreach ( $keys as $key ) {
		if ( cartiva_get_setting( $key ) ) {
			$on = true;
			break;
		}
	}
	if ( ! $on ) {
		return;
	}
	wp_enqueue_style( 'cartiva-features', CARTIVA_URI . '/assets/css/features.css', array(), CARTIVA_VERSION );
	wp_enqueue_script(
		'cartiva-features',
		CARTIVA_URI . '/assets/js/features.js',
		array(),
		CARTIVA_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
	wp_localize_script(
		'cartiva-features',
		'cartivaFeatures',
		array(
			'i18n' => array(
				/* translators: Short for days in a countdown, after a number. */
				'd'       => _x( 'd', 'countdown days', 'cartiva' ),
				/* translators: Short for hours in a countdown, after a number. */
				'h'       => _x( 'h', 'countdown hours', 'cartiva' ),
				/* translators: Short for minutes in a countdown, after a number. */
				'm'       => _x( 'm', 'countdown minutes', 'cartiva' ),
				/* translators: Short for seconds in a countdown, after a number. */
				's'       => _x( 's', 'countdown seconds', 'cartiva' ),
				'filters' => __( 'Filters', 'cartiva' ),
				'close'   => __( 'Close filters', 'cartiva' ),
				'light'   => __( 'Light mode', 'cartiva' ),
				'dark'    => __( 'Dark mode', 'cartiva' ),
			),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'cartiva_features_assets' );
