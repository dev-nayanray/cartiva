<?php
/**
 * Header markup shared by the header patterns.
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output a header.
 *
 * @param array $args {
 *     @type bool   $topbar Show the top bar.
 *     @type string $layout default | centered | categories.
 * }
 */
function cartiva_header( $args = array() ) {
	$args = wp_parse_args(
		$args,
		array(
			'topbar' => true,
			'layout' => 'default',
		)
	);
	$cartiva_track_url = function_exists( 'cartiva_wc_track_order_url' ) ? cartiva_wc_track_order_url() : home_url( '/' );

	if ( $args['topbar'] ) :
		?>
<!-- wp:group {"align":"full","className":"cartiva-topbar","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull cartiva-topbar has-base-color has-contrast-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:0;padding-bottom:0">
	<!-- wp:group {"align":"wide","className":"cartiva-topbar__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide cartiva-topbar__inner">
		<!-- wp:paragraph {"className":"cartiva-topbar__aside"} -->
		<p class="cartiva-topbar__aside"><?php esc_html_e( 'Need help?', 'cartiva' ); ?> <a href="<?php echo esc_url( cartiva_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Contact us', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-topbar__message","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="cartiva-topbar__message" style="font-weight:600"><?php esc_html_e( 'Free shipping on orders over $50 · 30-day easy returns', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-topbar__aside cartiva-topbar__links"} -->
		<p class="cartiva-topbar__aside cartiva-topbar__links"><a href="<?php echo esc_url( $cartiva_track_url ); ?>"><?php esc_html_e( 'Track order', 'cartiva' ); ?></a> <a href="<?php echo esc_url( cartiva_page_url( 'help-center', cartiva_page_url( 'faq' ) ) ); ?>"><?php esc_html_e( 'Help center', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
		<?php
	endif;

	if ( 'centered' === $args['layout'] ) :
		?>
<!-- wp:group {"align":"full","className":"cartiva-header","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-header has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px">
	<!-- wp:group {"align":"wide","className":"cartiva-header__row cartiva-header__row--centered","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide cartiva-header__row cartiva-header__row--centered" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

		<!-- wp:group {"className":"cartiva-header__side","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group cartiva-header__side">
			<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'cartiva' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search products…', 'search placeholder', 'cartiva' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'cartiva' ); ?>","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"cartiva-header__search"<?php echo cartiva_is_woocommerce_active() ? ',"query":{"post_type":"product"}' : ''; ?>} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cartiva-header__brand","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group cartiva-header__brand">
			<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"cartiva-header__actions","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group cartiva-header__actions">
			<?php if ( cartiva_is_woocommerce_active() ) : ?>
			<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","className":"cartiva-header__account"} /-->
			<!-- wp:woocommerce/mini-cart {"className":"cartiva-header__cart"} /-->
			<?php endif; ?>
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"cartiva-header-nav-row","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-header-nav-row has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:navigation {"className":"cartiva-header__nav","overlayBackgroundColor":"base","overlayTextColor":"contrast","icon":"menu","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
		<?php
	else :
		?>
<!-- wp:group {"align":"full","className":"cartiva-header","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-header has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px">
	<!-- wp:group {"align":"wide","className":"cartiva-header__row","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide cartiva-header__row" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

		<!-- wp:group {"className":"cartiva-header__brand","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group cartiva-header__brand">
			<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"className":"cartiva-header__nav","overlayBackgroundColor":"base","overlayTextColor":"contrast","icon":"menu","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

		<!-- wp:group {"className":"cartiva-header__actions","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group cartiva-header__actions">
			<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'cartiva' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search products…', 'search placeholder', 'cartiva' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'cartiva' ); ?>","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"cartiva-header__search"<?php echo cartiva_is_woocommerce_active() ? ',"query":{"post_type":"product"}' : ''; ?>} /-->
			<?php if ( cartiva_is_woocommerce_active() ) : ?>
			<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","className":"cartiva-header__account"} /-->
			<!-- wp:woocommerce/mini-cart {"className":"cartiva-header__cart"} /-->
			<?php endif; ?>
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
		<?php
		if ( 'categories' === $args['layout'] ) :
			?>
<!-- wp:group {"align":"full","className":"cartiva-category-bar","backgroundColor":"surface","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull cartiva-category-bar has-surface-background-color has-background has-small-font-size">
	<!-- wp:navigation {"overlayMenu":"never","className":"cartiva-category-bar__nav","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'New in', 'cartiva' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Women', 'cartiva' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Men', 'cartiva' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Home & Living', 'cartiva' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Tech', 'cartiva' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Beauty', 'cartiva' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Sale', 'cartiva' ); ?>","url":"#","className":"cartiva-category-bar__sale"} /-->
	<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
			<?php
		endif;
	endif;
}
