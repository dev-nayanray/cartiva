<?php
/**
 * Title: Newsletter: split with image
 * Slug: cartiva/newsletter-split
 * Categories: cartiva-newsletter, call-to-action
 * Keywords: newsletter, subscribe, email, image
 * Viewport width: 1400
 * Description: Newsletter sign-up section. Replace the button with the form block from your newsletter or form plugin.
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"cartiva-newsletter-split","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center cartiva-newsletter-split">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/look-1.webp' ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Be the first to know', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Sign up for new arrivals, exclusive offers and styling tips from our team.', 'cartiva' ); ?></p>
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
	<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Subscribe', 'cartiva' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
