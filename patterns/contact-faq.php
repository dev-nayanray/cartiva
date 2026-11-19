<?php
/**
 * Title: Contact: questions and contact
 * Slug: cartiva/contact-faq
 * Categories: cartiva-contact, contact
 * Keywords: contact, faq, questions, help
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_faqs = array(
	array( __( 'How long does delivery take?', 'cartiva' ), __( 'Most orders arrive within 3–5 business days.', 'cartiva' ) ),
	array( __( 'Can I change my order?', 'cartiva' ), __( 'Yes, until it ships. Contact us with your order number as soon as possible.', 'cartiva' ) ),
	array( __( 'How do returns work?', 'cartiva' ), __( 'Return unused items within 30 days for a full refund.', 'cartiva' ) ),
	array( __( 'Do you ship internationally?', 'cartiva' ), __( 'Yes, to most countries. Costs and times are shown at checkout.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:38%">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class=" has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Help', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Questions? Start here.', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Quick answers to the questions we hear most. Still stuck? Our team is one message away.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-cartiva-pill"} -->
				<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( cartiva_page_url( 'contact', 'mailto:hello@example.com' ) ); ?>"><?php esc_html_e( 'Contact us', 'cartiva' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
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
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
