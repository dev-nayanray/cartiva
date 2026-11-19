<?php
/**
 * Title: Help center page
 * Slug: cartiva/page-help-center
 * Categories: cartiva-pages
 * Keywords: help, support, center, topics
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Help topics linking to tracking, shipping, returns, account, FAQ and contact. Publish with the slug "help-center".
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/' );

cartiva_page_hero( __( 'Help center', 'cartiva' ), __( 'How can we help?', 'cartiva' ), __( 'Find answers, follow your order or get in touch with our team.', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'truck', __( 'Track an order', 'cartiva' ), __( 'See where your parcel is with your order ID and email.', 'cartiva' ), __( 'Track order →', 'cartiva' ), cartiva_page_url( 'track-order' ), 2 );
cartiva_icon_card( 'box', __( 'Shipping & delivery', 'cartiva' ), __( 'Delivery options, times and costs.', 'cartiva' ), __( 'Shipping info →', 'cartiva' ), cartiva_page_url( 'shipping-returns' ), 2 );
cartiva_icon_card( 'return', __( 'Returns & refunds', 'cartiva' ), __( 'Start a return and learn how refunds work.', 'cartiva' ), __( 'Returns policy →', 'cartiva' ), cartiva_page_url( 'shipping-returns' ), 2 );
cartiva_icon_card( 'user', __( 'My account', 'cartiva' ), __( 'Orders, addresses, password and account details.', 'cartiva' ), __( 'Go to my account →', 'cartiva' ), $cartiva_account_url, 2 );
cartiva_icon_card( 'question', __( 'FAQ', 'cartiva' ), __( 'Quick answers to the most common questions.', 'cartiva' ), __( 'Read the FAQ →', 'cartiva' ), cartiva_page_url( 'faq' ), 2 );
cartiva_icon_card( 'chat', __( 'Contact us', 'cartiva' ), __( 'Email, phone and opening hours.', 'cartiva' ), __( 'Get in touch →', 'cartiva' ), cartiva_page_url( 'contact' ), 2 );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<?php
cartiva_page_cta( __( 'Can\'t find what you need?', 'cartiva' ), __( 'Send us a message and we will get back to you within one business day.', 'cartiva' ), __( 'Contact us', 'cartiva' ), cartiva_page_url( 'contact' ) );
