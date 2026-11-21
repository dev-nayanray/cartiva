<?php
/**
 * Title: Funnel: upsell offer
 * Slug: cartiva/funnel-upsell
 * Categories: cartiva-landing
 * Keywords: funnel, upsell, one click, offer
 * Viewport width: 1200
 * Description: One-click upsell shown right after the order. Needs the Cartiva Commerce plugin.
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Wait! Your order is not complete yet', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__( 'Add this to the same order now at a special price. This offer is only on this page.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:cartiva-commerce/offer /-->
</div>
<!-- /wp:group -->
