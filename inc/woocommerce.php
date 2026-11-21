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
 * On the My Account page, Cartiva replaces WooCommerce's classic layout
 * stylesheets with its own (assets/css/woocommerce-account.css), so they are
 * removed there only. Everywhere else they stay, so classic shortcode pages
 * (cart, checkout, order tracking) keep working.
 *
 * Child themes can keep them on the account page with:
 * add_filter( 'cartiva_disable_classic_wc_styles', '__return_false' );
 *
 * @param array $styles Registered WooCommerce styles.
 * @return array
 */
function cartiva_wc_enqueue_styles( $styles ) {
	if ( ! function_exists( 'is_account_page' ) || ! is_account_page() ) {
		return $styles;
	}
	if ( ! apply_filters( 'cartiva_disable_classic_wc_styles', true ) ) {
		return $styles;
	}
	unset( $styles['woocommerce-layout'], $styles['woocommerce-smallscreen'] );
	return $styles;
}
add_filter( 'woocommerce_enqueue_styles', 'cartiva_wc_enqueue_styles' );

/**
 * Load the My Account stylesheet only on the account page.
 *
 * WooCommerce's classic layout sheet is removed above, so the account page
 * gets its own lightweight layout and design here.
 */
function cartiva_wc_account_styles() {
	if ( ! function_exists( 'is_account_page' ) || ! is_account_page() ) {
		return;
	}
	wp_enqueue_style(
		'cartiva-woocommerce-account',
		get_template_directory_uri() . '/assets/css/woocommerce-account.css',
		array(),
		CARTIVA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'cartiva_wc_account_styles', 20 );

/**
 * Initials for the account avatar (no external avatar request).
 *
 * @param WP_User $user User.
 * @return string
 */
function cartiva_wc_account_initials( $user ) {
	$name  = trim( $user->first_name . ' ' . $user->last_name );
	$name  = $name ? $name : $user->display_name;
	$parts = preg_split( '/\s+/', $name );
	$first = isset( $parts[0] ) ? $parts[0] : '';
	$last  = count( $parts ) > 1 ? end( $parts ) : '';
	$init  = function_exists( 'mb_substr' ) ? mb_substr( $first, 0, 1 ) . mb_substr( $last, 0, 1 ) : substr( $first, 0, 1 ) . substr( $last, 0, 1 );
	return $init ? $init : '?';
}

/**
 * Profile card above the account navigation.
 */
function cartiva_wc_account_profile() {
	if ( ! cartiva_get_setting( 'account_profile' ) ) {
		return;
	}
	$user = wp_get_current_user();
	if ( ! $user->exists() ) {
		return;
	}
	$name = trim( $user->first_name . ' ' . $user->last_name );
	$name = $name ? $name : $user->display_name;
	?>
	<div class="cartiva-account-profile">
		<span class="cartiva-account-avatar" aria-hidden="true"><?php echo esc_html( cartiva_wc_account_initials( $user ) ); ?></span>
		<span class="cartiva-account-profile__text">
			<span class="cartiva-account-profile__name"><?php echo esc_html( $name ); ?></span>
			<span class="cartiva-account-profile__email"><?php echo esc_html( $user->user_email ); ?></span>
		</span>
	</div>
	<?php
}
add_action( 'woocommerce_before_account_navigation', 'cartiva_wc_account_profile' );

/**
 * Quick-link tiles on the account dashboard (links to existing account sections).
 */
function cartiva_wc_account_dashboard_tiles() {
	if ( ! cartiva_get_setting( 'account_tiles' ) ) {
		return;
	}
	$items = wc_get_account_menu_items();
	unset( $items['dashboard'], $items['customer-logout'] );

	$meta = array(
		'orders'              => __( 'Track, return or buy again', 'cartiva' ),
		'cartiva-track-order' => __( 'Check where your parcel is', 'cartiva' ),
		'cartiva-wishlist'    => __( 'Products you saved for later', 'cartiva' ),
		'downloads'           => __( 'Your digital products', 'cartiva' ),
		'edit-address'        => __( 'Billing and shipping', 'cartiva' ),
		'payment-methods'     => __( 'Saved cards and wallets', 'cartiva' ),
		'edit-account'        => __( 'Name, email and password', 'cartiva' ),
	);

	$user_id = get_current_user_id();
	if ( $user_id && isset( $items['orders'] ) && function_exists( 'wc_get_customer_order_count' ) ) {
		$count = (int) wc_get_customer_order_count( $user_id );
		/* translators: %s: number of orders. */
		$meta['orders'] = sprintf( _n( '%s order so far', '%s orders so far', $count, 'cartiva' ), number_format_i18n( $count ) );
	}
	?>
	<ul class="cartiva-account-tiles">
		<?php foreach ( $items as $endpoint => $label ) : ?>
		<li class="cartiva-account-tile cartiva-account-tile--<?php echo esc_attr( sanitize_html_class( $endpoint ) ); ?>">
			<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
				<span class="cartiva-account-tile__icon" aria-hidden="true"></span>
				<span class="cartiva-account-tile__title"><?php echo esc_html( $label ); ?></span>
				<?php if ( isset( $meta[ $endpoint ] ) ) : ?>
				<span class="cartiva-account-tile__meta"><?php echo esc_html( $meta[ $endpoint ] ); ?></span>
				<?php endif; ?>
			</a>
		</li>
		<?php endforeach; ?>
		<li class="cartiva-account-tile cartiva-account-tile--shop">
			<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">
				<span class="cartiva-account-tile__icon" aria-hidden="true"></span>
				<span class="cartiva-account-tile__title"><?php esc_html_e( 'Continue shopping', 'cartiva' ); ?></span>
				<span class="cartiva-account-tile__meta"><?php esc_html_e( 'See what is new in store', 'cartiva' ); ?></span>
			</a>
		</li>
	</ul>
	<?php
}
add_action( 'woocommerce_account_dashboard', 'cartiva_wc_account_dashboard_tiles' );

/**
 * Load the order tracking styles on pages that contain the tracking form.
 */
function cartiva_wc_track_order_styles() {
	if ( ! is_singular() ) {
		return;
	}
	$post = get_post();
	if ( ! $post || ( ! has_shortcode( $post->post_content, 'woocommerce_order_tracking' ) && 'track-order' !== $post->post_name ) ) {
		return;
	}
	wp_enqueue_style(
		'cartiva-woocommerce-track-order',
		get_template_directory_uri() . '/assets/css/woocommerce-track-order.css',
		array(),
		CARTIVA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'cartiva_wc_track_order_styles', 20 );

/**
 * The store's published "Track order" page, if it has one.
 *
 * Looks for the slugs track-order, order-tracking and track-your-order
 * (filterable with cartiva_track_order_page_slugs).
 *
 * @return WP_Post|null
 */
function cartiva_wc_track_order_page() {
	static $found = false;
	if ( false !== $found ) {
		return $found;
	}
	$found = null;
	$slugs = (array) apply_filters( 'cartiva_track_order_page_slugs', array( 'track-order', 'order-tracking', 'track-your-order' ) );
	foreach ( $slugs as $slug ) {
		$page = get_page_by_path( sanitize_title( $slug ) );
		if ( $page instanceof WP_Post && 'publish' === $page->post_status ) {
			$found = $page;
			break;
		}
	}
	return $found;
}

/**
 * URL of the "Track order" page if the store has one, otherwise My Account.
 *
 * @return string
 */
function cartiva_wc_track_order_url() {
	$page = cartiva_wc_track_order_page();
	if ( $page ) {
		return get_permalink( $page );
	}
	return wc_get_page_permalink( 'myaccount' );
}

/**
 * Add "Track order" to the My Account menu, right after Orders.
 *
 * This is a plain link to the Track order page (or to the Orders list when
 * the store has no such page); no new account endpoint is registered.
 *
 * @param array $items Menu items.
 * @return array
 */
function cartiva_wc_account_menu_track_order( $items ) {
	if ( ! cartiva_get_setting( 'account_track_link' ) || isset( $items['cartiva-track-order'] ) ) {
		return $items;
	}
	$label = __( 'Track order', 'cartiva' );
	$new   = array();
	$added = false;
	foreach ( $items as $key => $item ) {
		$new[ $key ] = $item;
		if ( 'orders' === $key ) {
			$new['cartiva-track-order'] = $label;
			$added                      = true;
		}
	}
	if ( ! $added ) {
		$logout = isset( $new['customer-logout'] ) ? $new['customer-logout'] : null;
		unset( $new['customer-logout'] );
		$new['cartiva-track-order'] = $label;
		if ( null !== $logout ) {
			$new['customer-logout'] = $logout;
		}
	}
	return $new;
}
add_filter( 'woocommerce_account_menu_items', 'cartiva_wc_account_menu_track_order', 20 );

/**
 * Point the "Track order" menu item to the right place.
 *
 * @param string $url      Endpoint URL.
 * @param string $endpoint Endpoint key.
 * @return string
 */
function cartiva_wc_track_order_endpoint_url( $url, $endpoint ) {
	if ( 'cartiva-track-order' !== $endpoint ) {
		return $url;
	}
	if ( cartiva_wc_track_order_page() ) {
		return cartiva_wc_track_order_url();
	}
	remove_filter( 'woocommerce_get_endpoint_url', 'cartiva_wc_track_order_endpoint_url', 10 );
	$orders = wc_get_account_endpoint_url( 'orders' );
	add_filter( 'woocommerce_get_endpoint_url', 'cartiva_wc_track_order_endpoint_url', 10, 2 );
	return $orders;
}
add_filter( 'woocommerce_get_endpoint_url', 'cartiva_wc_track_order_endpoint_url', 10, 2 );


/**
 * Grid gallery: every image is shown large, so use the single image size
 * instead of the small thumbnail size WooCommerce uses without the slider.
 *
 * @param string $size Image size.
 * @return string
 */
function cartiva_wc_grid_gallery_image_size( $size ) {
	return 'grid' === cartiva_get_setting( 'gallery_layout' ) ? 'woocommerce_single' : $size;
}
add_filter( 'woocommerce_gallery_image_size', 'cartiva_wc_grid_gallery_image_size' );

/**
 * Names of the payment methods enabled in WooCommerce > Settings > Payments.
 *
 * Display only: nothing about checkout or payments is changed.
 *
 * @return array<string,string> Gateway ID => title.
 */
function cartiva_wc_enabled_payment_methods() {
	static $methods = null;
	if ( null !== $methods ) {
		return $methods;
	}
	$methods = array();
	if ( ! function_exists( 'WC' ) || ! WC()->payment_gateways() ) {
		return $methods;
	}
	foreach ( WC()->payment_gateways()->payment_gateways() as $id => $gateway ) {
		if ( isset( $gateway->enabled ) && 'yes' === $gateway->enabled ) {
			$title = trim( wp_strip_all_tags( (string) $gateway->get_title() ) );
			if ( '' !== $title ) {
				$methods[ (string) $id ] = $title;
			}
		}
	}
	/**
	 * Filters the payment methods listed on product pages.
	 *
	 * @param array<string,string> $methods Gateway ID => title.
	 */
	$methods = (array) apply_filters( 'cartiva_payment_methods', $methods );
	return $methods;
}

/**
 * Icon group for a payment method: cash, bank or card.
 *
 * @param string $id Gateway ID.
 * @return string
 */
function cartiva_wc_payment_icon( $id ) {
	if ( 'cod' === $id || false !== strpos( $id, 'cash' ) ) {
		return 'cash';
	}
	if ( in_array( $id, array( 'bacs', 'cheque' ), true ) || false !== strpos( $id, 'bank' ) ) {
		return 'bank';
	}
	if ( preg_match( '/bkash|nagad|rocket|upay|mobile|wallet|momo|mpesa/', $id ) ) {
		return 'mobile';
	}
	return 'card';
}

/**
 * "We accept" row under the add to cart form.
 *
 * @param string $content Block HTML.
 * @return string
 */
function cartiva_wc_payment_methods_row( $content ) {
	if ( is_admin() || ! cartiva_get_setting( 'payment_methods' ) || ! is_product() ) {
		return $content;
	}
	$methods = cartiva_wc_enabled_payment_methods();
	if ( empty( $methods ) ) {
		return $content;
	}
	$items = '';
	foreach ( $methods as $id => $title ) {
		$items .= '<li class="cartiva-pay-methods__item cartiva-pay-methods__item--' . esc_attr( cartiva_wc_payment_icon( (string) $id ) ) . '">' . esc_html( $title ) . '</li>';
	}
	return $content . '<div class="cartiva-pay-methods"><p class="cartiva-pay-methods__label">' . esc_html__( 'We accept', 'cartiva' ) . '</p><ul class="cartiva-pay-methods__list">' . $items . '</ul></div>';
}
add_filter( 'render_block_woocommerce/add-to-cart-form', 'cartiva_wc_payment_methods_row', 30 );
