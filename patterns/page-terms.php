<?php
/**
 * Title: Terms & conditions page
 * Slug: cartiva/page-terms
 * Categories: cartiva-pages
 * Keywords: terms, conditions, legal, policy
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Structure for a terms and conditions page with sample sections to replace. Publish with the slug "terms".
 *
 * @package Cartiva
 * @since 1.7.0
 */

cartiva_page_hero( __( 'Legal', 'cartiva' ), __( 'Terms & conditions', 'cartiva' ), __( 'Please read these terms carefully before placing an order.', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","className":"cartiva-legal","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull cartiva-legal" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"className":"cartiva-legal__note","fontSize":"small"} -->
	<p class="cartiva-legal__note has-small-font-size"><?php esc_html_e( 'Sample text: replace these sections with your store\'s own terms. This template is not legal advice.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( sprintf( /* translators: 1: Section number, 2: Section title. */ __( '%1$d. %2$s', 'cartiva' ), 1, __( 'Overview', 'cartiva' ) ) ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'These terms apply to every purchase made on this website. By placing an order you agree to them.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( sprintf( /* translators: 1: Section number, 2: Section title. */ __( '%1$d. %2$s', 'cartiva' ), 2, __( 'Orders', 'cartiva' ) ) ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'We confirm every order by email. We may decline or cancel an order if a product is unavailable or a price was shown in error, and will refund any payment in full.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( sprintf( /* translators: 1: Section number, 2: Section title. */ __( '%1$d. %2$s', 'cartiva' ), 3, __( 'Prices and payment', 'cartiva' ) ) ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'Prices are shown in the store currency and include applicable taxes unless stated otherwise. Payment is taken when your order is placed.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( sprintf( /* translators: 1: Section number, 2: Section title. */ __( '%1$d. %2$s', 'cartiva' ), 4, __( 'Delivery', 'cartiva' ) ) ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'Delivery times are estimates. Risk passes to you once the order has been delivered to the address you provided.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( sprintf( /* translators: 1: Section number, 2: Section title. */ __( '%1$d. %2$s', 'cartiva' ), 5, __( 'Returns', 'cartiva' ) ) ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'You can return unused items within 30 days of delivery. See our Shipping & returns page for details.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( sprintf( /* translators: 1: Section number, 2: Section title. */ __( '%1$d. %2$s', 'cartiva' ), 6, __( 'Contact', 'cartiva' ) ) ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'Questions about these terms? Contact us and we will be happy to help.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
