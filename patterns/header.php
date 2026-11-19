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

?>
<!-- wp:group {"className":"is-style-cartiva-sticky","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-cartiva-sticky has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"fontSize":"x-small"} -->
	<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-x-small-font-size" style="padding-top:0.5rem;padding-bottom:0.5rem">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Free shipping on orders over $50 · 30-day easy returns', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->
				<!-- wp:site-title {"level":0} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'cartiva' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search products…', 'search placeholder', 'cartiva' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'cartiva' ); ?>","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true<?php echo cartiva_is_woocommerce_active() ? ',"query":{"post_type":"product"}' : ''; ?>} /-->
				<?php if ( cartiva_is_woocommerce_active() ) : ?>
				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon"} /-->
				<!-- wp:woocommerce/mini-cart /-->
				<?php endif; ?>
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
