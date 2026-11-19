<?php
/**
 * Title: Header
 * Slug: cartiva/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"cartiva-topbar","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull cartiva-topbar has-base-color has-contrast-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:0;padding-bottom:0">
	<!-- wp:group {"align":"wide","className":"cartiva-topbar__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide cartiva-topbar__inner">
		<!-- wp:paragraph {"className":"cartiva-topbar__aside"} -->
		<p class="cartiva-topbar__aside"><?php esc_html_e( 'Need help?', 'cartiva' ); ?> <a href="#"><?php esc_html_e( 'Contact us', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-topbar__message","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="cartiva-topbar__message" style="font-weight:600"><?php esc_html_e( 'Free shipping on orders over $50 · 30-day easy returns', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-topbar__aside cartiva-topbar__links"} -->
		<p class="cartiva-topbar__aside cartiva-topbar__links"><a href="<?php echo esc_url( $cartiva_account_url ); ?>"><?php esc_html_e( 'Track order', 'cartiva' ); ?></a> <a href="#"><?php esc_html_e( 'Help center', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

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
