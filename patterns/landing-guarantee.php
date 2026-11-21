<?php
/**
 * Title: Landing: guarantee band
 * Slug: cartiva/landing-guarantee
 * Categories: cartiva-landing
 * Keywords: landing, guarantee, trust, cod, returns, delivery
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-landing-guarantee","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-landing-guarantee" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'return', __( 'Money-back guarantee', 'cartiva' ), __( 'Full refund within 7 days if you are not happy.', 'cartiva' ) );
cartiva_icon_card( 'box', __( 'Check before you pay', 'cartiva' ), __( 'Open the parcel, check the product, then pay.', 'cartiva' ) );
cartiva_icon_card( 'truck', __( 'Delivery everywhere', 'cartiva' ), __( 'We deliver to every city and district.', 'cartiva' ) );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
