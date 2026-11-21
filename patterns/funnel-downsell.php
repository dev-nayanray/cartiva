<?php
/**
 * Title: Funnel: downsell offer
 * Slug: cartiva/funnel-downsell
 * Categories: cartiva-landing
 * Keywords: funnel, downsell, offer
 * Viewport width: 1200
 * Description: A smaller offer shown when the upsell is declined. Needs the Cartiva Commerce plugin.
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'How about this instead?', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__( 'A smaller offer at an even better price, added to the same order with one click.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:cartiva-commerce/offer /-->
</div>
<!-- /wp:group -->
