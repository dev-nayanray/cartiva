<?php
/**
 * Title: FAQ page
 * Slug: cartiva/page-faq
 * Categories: cartiva-pages
 * Keywords: faq, questions, help, answers
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Frequently asked questions grouped by topic. Publish with the slug "faq" for the matching full-width layout.
 *
 * @package Cartiva
 * @since 1.0.0
 */

cartiva_page_hero( __( 'Help', 'cartiva' ), __( 'Frequently asked questions', 'cartiva' ), __( 'Quick answers about orders, delivery, returns and your account.', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","className":"cartiva-faq-page","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull cartiva-faq-page" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
<?php
cartiva_faq_group(
	__( 'Orders & payment', 'cartiva' ),
	array(
		array( __( 'Which payment methods do you accept?', 'cartiva' ), __( 'All major credit and debit cards plus popular digital wallets. Payments are processed over an encrypted connection.', 'cartiva' ) ),
		array( __( 'Can I change or cancel my order?', 'cartiva' ), __( 'Yes, until your order ships. Contact us with your order number as soon as possible.', 'cartiva' ) ),
		array( __( 'Do I need an account to order?', 'cartiva' ), __( 'No. You can check out as a guest, or create an account to track orders and save addresses.', 'cartiva' ) ),
	)
);
cartiva_faq_group(
	__( 'Shipping & delivery', 'cartiva' ),
	array(
		array( __( 'How long does delivery take?', 'cartiva' ), __( 'Most orders ship within 1–2 business days and arrive within 3–5 business days.', 'cartiva' ) ),
		array( __( 'How much does shipping cost?', 'cartiva' ), __( 'Shipping is free on orders over $50. Below that, the cost is shown at checkout before you pay.', 'cartiva' ) ),
		array( __( 'How do I track my order?', 'cartiva' ), __( 'Use the tracking link in your shipping email, or enter your order ID and email on the Track order page.', 'cartiva' ) ),
	)
);
cartiva_faq_group(
	__( 'Returns & refunds', 'cartiva' ),
	array(
		array( __( 'What is your return policy?', 'cartiva' ), __( 'Unused items can be returned within 30 days of delivery for a full refund.', 'cartiva' ) ),
		array( __( 'How long do refunds take?', 'cartiva' ), __( 'Refunds are issued to the original payment method within 5 business days of receiving your return.', 'cartiva' ) ),
	)
);
cartiva_faq_group(
	__( 'Your account', 'cartiva' ),
	array(
		array( __( 'I forgot my password. What now?', 'cartiva' ), __( 'Use "Lost your password?" on the login page and we will email you a reset link.', 'cartiva' ) ),
		array( __( 'How do I update my address?', 'cartiva' ), __( 'Log in and go to My account > Addresses to edit your billing and shipping details.', 'cartiva' ) ),
	)
);
?>
</div>
<!-- /wp:group -->
<?php
cartiva_page_cta( __( 'Still have a question?', 'cartiva' ), __( 'Our team replies within one business day.', 'cartiva' ), __( 'Contact us', 'cartiva' ), cartiva_page_url( 'contact' ) );
