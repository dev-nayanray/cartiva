<?php
/**
 * Title: Landing: product hero
 * Slug: cartiva/landing-hero
 * Categories: cartiva-landing, banner
 * Keywords: landing, sales page, hero, product, offer, order
 * Viewport width: 1400
 * Description: Product headline with offer, key points and an order button that jumps to the #order section.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_points = array( __( 'Free delivery in 2-3 days', 'cartiva' ), __( 'Cash on delivery available', 'cartiva' ), __( '7-day easy returns', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"52%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:paragraph {"className":"cartiva-label cartiva-label--accent","fontSize":"x-small"} -->
			<p class="cartiva-label cartiva-label--accent has-x-small-font-size"><?php esc_html_e( 'Limited offer: 30% off', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'The one product your day was missing.', 'cartiva' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
			<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Say in one sentence what problem it solves and why it is better. Keep it short and clear.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"cartiva-check-list"} -->
			<ul class="wp-block-list cartiva-check-list">
				<?php foreach ( $cartiva_points as $cartiva_point ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $cartiva_point ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:button {"className":"is-style-cartiva-pill"} -->
				<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="#order"><?php esc_html_e( 'Order now', 'cartiva' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"cartiva-spotlight-image","style":{"border":{"radius":"24px"}}} -->
			<figure class="wp-block-image size-full has-custom-border cartiva-spotlight-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-electronics.webp' ); ?>" alt="" style="border-radius:24px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
