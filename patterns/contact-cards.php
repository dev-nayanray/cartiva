<?php
/**
 * Title: Contact: contact cards
 * Slug: cartiva/contact-cards
 * Categories: cartiva-contact, contact
 * Keywords: contact, email, phone, address, cards
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class="alignwide has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Contact', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"align":"wide","level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Get in touch', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'mail', __( 'Email us', 'cartiva' ), __( 'hello@example.com', 'cartiva' ), __( 'Send an email →', 'cartiva' ), 'mailto:hello@example.com' );
cartiva_icon_card( 'phone', __( 'Call us', 'cartiva' ), __( '+1 (555) 010-2030 · Mon–Fri, 9am–6pm', 'cartiva' ), __( 'Call now →', 'cartiva' ), 'tel:+15550102030' );
cartiva_icon_card( 'pin', __( 'Visit the studio', 'cartiva' ), __( '12 Market Street, Springfield', 'cartiva' ) );
cartiva_icon_card( 'chat', __( 'Order help', 'cartiva' ), __( 'Track an order, start a return or change an address.', 'cartiva' ), __( 'Track your order →', 'cartiva' ), cartiva_page_url( 'track-order' ) );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
