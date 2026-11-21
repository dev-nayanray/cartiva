<?php
/**
 * Title: Funnel: checkout step
 * Slug: cartiva/funnel-checkout
 * Categories: cartiva-landing
 * Keywords: funnel, checkout, order form, cod, cash on delivery
 * Viewport width: 1200
 * Description: Heading, the Cartiva Commerce order form and trust points. Needs the Cartiva Commerce plugin.
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Complete your order', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__( 'Fill in your details below. You pay when the parcel arrives.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:cartiva-commerce/order-form /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'box', __( 'Pay on delivery', 'cartiva' ), __( 'Check the parcel first, then pay.', 'cartiva' ), '', '', 2 );
cartiva_icon_card( 'truck', __( 'Fast delivery', 'cartiva' ), __( 'Delivered to your door in a few days.', 'cartiva' ), '', '', 2 );
cartiva_icon_card( 'return', __( 'Easy returns', 'cartiva' ), __( 'Not happy? Return it within 7 days.', 'cartiva' ), '', '', 2 );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
