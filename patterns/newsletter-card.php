<?php
/**
 * Title: Newsletter: card with perks
 * Slug: cartiva/newsletter-card
 * Categories: cartiva-newsletter, call-to-action
 * Keywords: newsletter, subscribe, card, benefits
 * Viewport width: 1400
 * Description: Newsletter sign-up section. Replace the button with the form block from your newsletter or form plugin.
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"className":"cartiva-newsletter-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"20px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
	<div class="wp-block-group cartiva-newsletter-card has-surface-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Join the club', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php esc_html_e( 'Members get more from every visit. Joining takes ten seconds and costs nothing.', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:list {"className":"cartiva-check-list","fontSize":"small"} -->
<ul class="wp-block-list cartiva-check-list has-small-font-size">
	<!-- wp:list-item -->
	<li><?php esc_html_e( '10% off your first order', 'cartiva' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item -->
	<li><?php esc_html_e( 'Early access to new drops and sales', 'cartiva' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item -->
	<li><?php esc_html_e( 'One email a week, unsubscribe any time', 'cartiva' ); ?></li>
	<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
		<!-- wp:buttons -->
<div class="wp-block-buttons">
	<!-- wp:button {"className":"is-style-cartiva-pill"} -->
	<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Become a member', 'cartiva' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
