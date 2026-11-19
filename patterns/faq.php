<?php
/**
 * Title: FAQ – shipping & returns
 * Slug: cartiva/faq
 * Categories: cartiva-sections, text
 * Keywords: faq, questions, accordion, details, shipping, returns
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_faqs = array(
	array( __( 'How long does shipping take?', 'cartiva' ), __( 'Most orders ship within 1–2 business days and arrive in 3–5 business days. You will receive a tracking link by email.', 'cartiva' ) ),
	array( __( 'What is your return policy?', 'cartiva' ), __( 'You can return unused items within 30 days of delivery for a full refund. Start a return from your account page.', 'cartiva' ) ),
	array( __( 'Which payment methods do you accept?', 'cartiva' ), __( 'We accept all major cards and popular digital wallets. Every payment is processed over an encrypted connection.', 'cartiva' ) ),
	array( __( 'Do you ship internationally?', 'cartiva' ), __( 'Yes, we ship to most countries. Shipping costs and delivery times are shown at checkout.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Frequently asked questions', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<?php foreach ( $cartiva_faqs as $cartiva_faq ) : ?>
	<!-- wp:details {"className":"is-style-cartiva-faq"} -->
	<details class="wp-block-details is-style-cartiva-faq"><summary><?php echo esc_html( $cartiva_faq[0] ); ?></summary>
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php echo esc_html( $cartiva_faq[1] ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
