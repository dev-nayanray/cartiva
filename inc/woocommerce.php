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
	$items = wc_get_account_menu_items();
	unset( $items['dashboard'], $items['customer-logout'] );

	$meta = array(
		'orders'          => __( 'Track, return or buy again', 'cartiva' ),
		'downloads'       => __( 'Your digital products', 'cartiva' ),
		'edit-address'    => __( 'Billing and shipping', 'cartiva' ),
		'payment-methods' => __( 'Saved cards and wallets', 'cartiva' ),
		'edit-account'    => __( 'Name, email and password', 'cartiva' ),
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
