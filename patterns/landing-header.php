<?php
/**
 * Title: Landing header (distraction-free)
 * Slug: cartiva/landing-header
 * Categories: header
 * Block Types: core/template-part/landing-header
 * Inserter: no
 * Description: Logo, a call-to-order number and a cash-on-delivery note, with no menu, for sales pages and funnel steps.
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-landing-header","style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-landing-header" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"cartiva-landing-header__meta","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
		<div class="wp-block-group cartiva-landing-header__meta has-small-font-size">
			<!-- wp:paragraph {"textColor":"success","style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-success-color has-text-color" style="font-weight:600"><?php esc_html_e( '✓ Cash on delivery', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
			<p style="font-weight:700"><?php esc_html_e( 'Call to order:', 'cartiva' ); ?> <a href="tel:+8801000000000">01XXX-XXXXXX</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
