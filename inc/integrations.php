<?php
/**
 * Integration with the free Cartiva Commerce plugin (optional).
 *
 * The theme works fully without the plugin. When it is active, the header
 * and mobile bar carts open its slide-out cart, and its funnel patterns are
 * available. When it is not, the theme suggests it once on the Themes screen.
 *
 * @package Cartiva
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Is the Cartiva Commerce slide-out cart on?
 *
 * @return bool
 */
function cartiva_commerce_drawer_active() {
	return function_exists( 'cartiva_commerce_setting' ) && (bool) cartiva_commerce_setting( 'side_cart' );
}

/**
 * Header mini cart opens the slide-out cart instead of its own drawer.
 *
 * @param string $content Block HTML.
 * @return string
 */
function cartiva_integration_mini_cart( $content ) {
	if ( ! cartiva_commerce_drawer_active() || is_admin() ) {
		return $content;
	}
	return preg_replace( '/^(\s*<div\b)/', '$1 data-cartiva-open-cart', $content, 1 );
}
add_filter( 'render_block_woocommerce/mini-cart', 'cartiva_integration_mini_cart' );

/**
 * Recommend the plugin once on the Themes screen (dismissible for good).
 */
function cartiva_integration_notice() {
	$screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
	if ( ! $screen || 'themes' !== $screen->id || defined( 'CARTIVA_COMMERCE_VERSION' ) || ! class_exists( 'WooCommerce' ) || ! current_user_can( 'install_plugins' ) || get_user_meta( get_current_user_id(), 'cartiva_hide_commerce_notice', true ) ) {
		return;
	}
	?>
	<div class="notice notice-info">
		<p><strong><?php esc_html_e( 'Get more from Cartiva with the free Cartiva Commerce plugin', 'cartiva' ); ?></strong></p>
		<p><?php esc_html_e( 'Sales funnels, one-page order forms for Cash on delivery, upsells, order bumps, abandoned checkout recovery and a slide-out cart, made to match this theme. Optional: the theme works fully without it.', 'cartiva' ); ?></p>
		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'plugin-install.php?s=cartiva-commerce&tab=search&type=term' ) ); ?>"><?php esc_html_e( 'Find the plugin', 'cartiva' ); ?></a>
			<a class="button-link" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'cartiva_hide_commerce_notice', '1' ), 'cartiva_hide_commerce_notice' ) ); ?>"><?php esc_html_e( 'Dismiss', 'cartiva' ); ?></a>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'cartiva_integration_notice' );

/**
 * Remember that the notice was dismissed.
 */
function cartiva_integration_dismiss() {
	if ( isset( $_GET['cartiva_hide_commerce_notice'] ) && current_user_can( 'install_plugins' ) && check_admin_referer( 'cartiva_hide_commerce_notice' ) ) {
		update_user_meta( get_current_user_id(), 'cartiva_hide_commerce_notice', 1 );
		wp_safe_redirect( remove_query_arg( array( 'cartiva_hide_commerce_notice', '_wpnonce' ) ) );
		exit;
	}
}
add_action( 'admin_init', 'cartiva_integration_dismiss' );
