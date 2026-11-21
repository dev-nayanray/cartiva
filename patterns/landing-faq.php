<?php
/**
 * Title: Landing: questions
 * Slug: cartiva/landing-faq
 * Categories: cartiva-landing, text
 * Keywords: landing, faq, questions, answers
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_faqs = array(
	array( __( 'How long does delivery take?', 'cartiva' ), __( 'Most orders arrive in 2-3 days in the city and 3-5 days elsewhere.', 'cartiva' ) ),
	array( __( 'Can I pay on delivery?', 'cartiva' ), __( 'Yes. Pay the courier when the product arrives. Other payment methods are shown at checkout.', 'cartiva' ) ),
	array( __( 'What if I do not like it?', 'cartiva' ), __( 'Return it within 7 days in its original condition for a full refund.', 'cartiva' ) ),
	array( __( 'How do I know my order is confirmed?', 'cartiva' ), __( 'We call or message you after you order, and you can track it any time on the Track order page.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small","align":"center"} -->
	<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'FAQ', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"xx-large","textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Questions before you order', 'cartiva' ); ?></h2>
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
