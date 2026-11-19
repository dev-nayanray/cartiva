<?php
/**
 * Title: Contact page
 * Slug: cartiva/page-contact
 * Categories: cartiva-pages
 * Keywords: contact, support, email, phone, address, hours
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Contact details, opening hours and quick answers. Publish with the slug "contact" for the matching full-width layout.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_faq_url = cartiva_page_url( 'faq' );

cartiva_page_hero( __( 'Contact', 'cartiva' ), __( 'We would love to hear from you', 'cartiva' ), __( 'Questions about an order, a product or a partnership? Our team answers every message within one business day.', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'mail', __( 'Email us', 'cartiva' ), __( 'hello@example.com', 'cartiva' ), __( 'Send an email →', 'cartiva' ), 'mailto:hello@example.com', 2 );
cartiva_icon_card( 'phone', __( 'Call us', 'cartiva' ), __( '+1 (555) 010-2030 · Mon–Fri, 9am–6pm', 'cartiva' ), __( 'Call now →', 'cartiva' ), 'tel:+15550102030', 2 );
cartiva_icon_card( 'pin', __( 'Visit the studio', 'cartiva' ), __( '12 Market Street, Springfield · Sat 10am–4pm', 'cartiva' ), '', '', 2 );
cartiva_icon_card( 'chat', __( 'Order help', 'cartiva' ), __( 'Track an order, start a return or change an address.', 'cartiva' ), __( 'Track your order →', 'cartiva' ), cartiva_page_url( 'track-order' ), 2 );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:group {"className":"cartiva-contact-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group cartiva-contact-card">
				<!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Send us a message', 'cartiva' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color"><?php esc_html_e( 'Tell us your order number if you have one, and we will get back to you with everything we can find.', 'cartiva' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"cartiva-check-list"} -->
				<ul class="wp-block-list cartiva-check-list">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Replies within one business day', 'cartiva' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Real people, no bots', 'cartiva' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Help in English and Spanish', 'cartiva' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-cartiva-pill"} -->
					<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Write to us', 'cartiva' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:group {"className":"cartiva-hours","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group cartiva-hours">
				<!-- wp:heading {"fontSize":"medium"} -->
				<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Opening hours', 'cartiva' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:table {"className":"cartiva-hours__table","fontSize":"small"} -->
				<figure class="wp-block-table cartiva-hours__table has-small-font-size"><table><tbody><tr><td><?php esc_html_e( 'Monday – Friday', 'cartiva' ); ?></td><td><?php esc_html_e( '9:00 – 18:00', 'cartiva' ); ?></td></tr><tr><td><?php esc_html_e( 'Saturday', 'cartiva' ); ?></td><td><?php esc_html_e( '10:00 – 16:00', 'cartiva' ); ?></td></tr><tr><td><?php esc_html_e( 'Sunday', 'cartiva' ); ?></td><td><?php esc_html_e( 'Closed', 'cartiva' ); ?></td></tr></tbody></table></figure>
				<!-- /wp:table -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h2 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Quick answers', 'cartiva' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:details {"className":"is-style-cartiva-faq"} -->
				<details class="wp-block-details is-style-cartiva-faq"><summary><?php esc_html_e( 'How long does delivery take?', 'cartiva' ); ?></summary>
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Most orders arrive in 3–5 business days.', 'cartiva' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->
				<!-- wp:details {"className":"is-style-cartiva-faq"} -->
				<details class="wp-block-details is-style-cartiva-faq"><summary><?php esc_html_e( 'Can I change my order?', 'cartiva' ); ?></summary>
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Yes, until it ships. Email us with your order number as soon as possible.', 'cartiva' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->
				<!-- wp:paragraph {"fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontWeight":"600"}}} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);font-weight:600"><a href="<?php echo esc_url( $cartiva_faq_url ); ?>"><?php esc_html_e( 'See all FAQs →', 'cartiva' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
