<?php
/**
 * Wishlist plugin compatibility.
 *
 * Cartiva does not store wishlists itself (that is plugin territory). When one
 * of these free plugins is active, the theme adds a header heart with a count,
 * heart buttons on product cards and product pages, an account menu link and
 * matching styles:
 *
 * - YITH WooCommerce Wishlist
 * - TI WooCommerce Wishlist
 * - WPC Smart Wishlist for WooCommerce
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Which supported wishlist plugin is active.
 *
 * @return string 'yith', 'ti', 'wpc' or '' when none.
 */
function cartiva_wishlist_provider() {
	static $provider = null;
	if ( null !== $provider ) {
		return $provider;
	}
	$provider = '';
	if ( function_exists( 'YITH_WCWL' ) && shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
		$provider = 'yith';
	} elseif ( shortcode_exists( 'ti_wishlists_addtowishlist' ) ) {
		$provider = 'ti';
	} elseif ( shortcode_exists( 'woosw' ) ) {
		$provider = 'wpc';
	}
	/**
	 * Filters the detected wishlist plugin.
	 *
	 * @param string $provider 'yith', 'ti', 'wpc' or ''.
	 */
	$provider = (string) apply_filters( 'cartiva_wishlist_provider', $provider );
	return $provider;
}

/**
 * The "Add to wishlist" button markup from the active plugin.
 *
 * @param int  $product_id Product ID.
 * @param bool $loop       True inside product lists.
 * @return string
 */
function cartiva_wishlist_button( $product_id, $loop = true ) {
	$product_id = absint( $product_id );
	if ( ! $product_id ) {
		return '';
	}
	switch ( cartiva_wishlist_provider() ) {
		case 'yith':
			$shortcode = '[yith_wcwl_add_to_wishlist product_id="' . $product_id . '"]';
			break;
		case 'ti':
			$shortcode = '[ti_wishlists_addtowishlist product_id="' . $product_id . '"' . ( $loop ? ' loop="yes"' : '' ) . ']';
			break;
		case 'wpc':
			$shortcode = '[woosw id="' . $product_id . '"]';
			break;
		default:
			return '';
	}
	return do_shortcode( $shortcode );
}

/**
 * Wishlist page URL and item count (YITH only; the other plugins render
 * their own counter markup).
 *
 * @return array{url:string,count:int}
 */
function cartiva_wishlist_yith_data() {
	$url   = '';
	$count = 0;
	if ( function_exists( 'YITH_WCWL' ) ) {
		$wcwl = YITH_WCWL();
		if ( is_object( $wcwl ) && method_exists( $wcwl, 'get_wishlist_url' ) ) {
			$url = (string) $wcwl->get_wishlist_url();
		}
	}
	if ( function_exists( 'yith_wcwl_count_all_products' ) ) {
		$count = (int) yith_wcwl_count_all_products();
	}
	return array(
		'url'   => $url,
		'count' => $count,
	);
}

/**
 * Header heart: printed just before the Mini-Cart block, so it follows the
 * header even after it has been customized in the Site Editor.
 *
 * @param string $content Mini-Cart block HTML.
 * @return string
 */
function cartiva_wishlist_header_icon( $content ) {
	static $done = false;
	if ( $done || is_admin() || ! cartiva_get_setting( 'wishlist_header' ) ) {
		return $content;
	}
	$provider = cartiva_wishlist_provider();
	$label    = __( 'Wishlist', 'cartiva' );
	$inner    = '';

	if ( 'yith' === $provider ) {
		$data = cartiva_wishlist_yith_data();
		if ( '' === $data['url'] ) {
			return $content;
		}
		$inner = sprintf(
			'<a class="cartiva-wishlist-link" href="%1$s" aria-label="%2$s"><span class="cartiva-wishlist-link__count%3$s" aria-hidden="true">%4$s</span></a>',
			esc_url( $data['url'] ),
			/* translators: %s: number of items in the wishlist. */
			esc_attr( sprintf( _n( 'Wishlist, %s item', 'Wishlist, %s items', $data['count'], 'cartiva' ), number_format_i18n( $data['count'] ) ) ),
			$data['count'] > 0 ? ' has-items' : '',
			esc_html( number_format_i18n( $data['count'] ) )
		);
	} elseif ( 'ti' === $provider ) {
		$inner = do_shortcode( '[ti_wishlist_products_counter]' );
	} elseif ( 'wpc' === $provider ) {
		$inner = do_shortcode( '[woosw_link]' );
	}

	if ( '' === trim( wp_strip_all_tags( $inner, true ) ) && false === strpos( $inner, '<a' ) ) {
		return $content;
	}
	$done = true;
	return '<div class="cartiva-wishlist-header cartiva-wishlist-header--' . esc_attr( $provider ) . '" title="' . esc_attr( $label ) . '">' . $inner . '</div>' . $content;
}

/**
 * Heart button over the product image in product lists.
 *
 * @param string   $content  Block HTML.
 * @param array    $block    Parsed block.
 * @param WP_Block $instance Block instance.
 * @return string
 */
function cartiva_wishlist_card_button( $content, $block, $instance = null ) {
	if ( is_admin() || ! cartiva_get_setting( 'wishlist_buttons' ) || empty( $block['attrs']['isDescendentOfQueryLoop'] ) ) {
		return $content;
	}
	$product_id = ( $instance instanceof WP_Block && ! empty( $instance->context['postId'] ) ) ? (int) $instance->context['postId'] : get_the_ID();
	if ( 'product' !== get_post_type( $product_id ) ) {
		return $content;
	}
	$button = cartiva_wishlist_button( $product_id, true );
	if ( '' === $button ) {
		return $content;
	}
	$html = '<div class="cartiva-wishlist-card">' . $button . '</div>';
	$pos  = strrpos( $content, '</div>' );
	if ( false === $pos ) {
		return $content . $html;
	}
	return substr_replace( $content, $html, $pos, 0 );
}

/**
 * Heart button after the add to cart form on the single product page,
 * unless the plugin already printed one there.
 *
 * @param string $content Block HTML.
 * @return string
 */
function cartiva_wishlist_single_button( $content ) {
	if ( is_admin() || ! cartiva_get_setting( 'wishlist_buttons' ) || ! is_product() ) {
		return $content;
	}
	foreach ( array( 'yith-wcwl-add-to-wishlist', 'tinv-wraper', 'woosw-btn' ) as $existing ) {
		if ( false !== strpos( $content, $existing ) ) {
			return $content;
		}
	}
	$button = cartiva_wishlist_button( get_the_ID(), false );
	if ( '' === $button ) {
		return $content;
	}
	return $content . '<div class="cartiva-wishlist-single">' . $button . '</div>';
}

/**
 * "Wishlist" in the My Account menu (YITH does not add one itself).
 *
 * @param array $items Menu items.
 * @return array
 */
function cartiva_wishlist_account_item( $items ) {
	if ( 'yith' !== cartiva_wishlist_provider() || ! cartiva_get_setting( 'wishlist_account' ) || isset( $items['cartiva-wishlist'] ) ) {
		return $items;
	}
	$new = array();
	foreach ( $items as $key => $label ) {
		if ( 'customer-logout' === $key ) {
			$new['cartiva-wishlist'] = __( 'Wishlist', 'cartiva' );
		}
		$new[ $key ] = $label;
	}
	if ( ! isset( $new['cartiva-wishlist'] ) ) {
		$new['cartiva-wishlist'] = __( 'Wishlist', 'cartiva' );
	}
	return $new;
}

/**
 * URL for the account menu "Wishlist" item.
 *
 * @param string $url      Endpoint URL.
 * @param string $endpoint Endpoint key.
 * @return string
 */
function cartiva_wishlist_account_url( $url, $endpoint ) {
	if ( 'cartiva-wishlist' !== $endpoint ) {
		return $url;
	}
	$data = cartiva_wishlist_yith_data();
	return '' !== $data['url'] ? $data['url'] : $url;
}

/**
 * Styles, and a tiny count updater for YITH (which already loads jQuery).
 */
function cartiva_wishlist_assets() {
	$provider = cartiva_wishlist_provider();
	if ( '' === $provider ) {
		return;
	}
	wp_enqueue_style( 'cartiva-wishlist', CARTIVA_URI . '/assets/css/wishlist.css', array(), CARTIVA_VERSION );

	if ( 'yith' === $provider && cartiva_get_setting( 'wishlist_header' ) ) {
		wp_register_script( 'cartiva-wishlist', false, array( 'jquery' ), CARTIVA_VERSION, array( 'in_footer' => true ) );
		wp_enqueue_script( 'cartiva-wishlist' );
		wp_add_inline_script(
			'cartiva-wishlist',
			'jQuery(function($){$(document.body).on("added_to_wishlist removed_from_wishlist",function(e){$(".cartiva-wishlist-link__count").each(function(){var n=Math.max(0,(parseInt(this.textContent,10)||0)+("added_to_wishlist"===e.type?1:-1));this.textContent=n;this.classList.toggle("has-items",n>0);});});});'
		);
	}
}

/**
 * Hook everything up once plugins have registered their shortcodes.
 */
function cartiva_wishlist_init() {
	if ( '' === cartiva_wishlist_provider() ) {
		return;
	}
	add_filter( 'render_block_woocommerce/mini-cart', 'cartiva_wishlist_header_icon' );
	add_filter( 'render_block_woocommerce/product-image', 'cartiva_wishlist_card_button', 10, 3 );
	add_filter( 'render_block_woocommerce/add-to-cart-form', 'cartiva_wishlist_single_button' );
	add_filter( 'woocommerce_account_menu_items', 'cartiva_wishlist_account_item', 30 );
	add_filter( 'woocommerce_get_endpoint_url', 'cartiva_wishlist_account_url', 10, 2 );
	add_action( 'wp_enqueue_scripts', 'cartiva_wishlist_assets', 20 );
}
add_action( 'init', 'cartiva_wishlist_init', 20 );
