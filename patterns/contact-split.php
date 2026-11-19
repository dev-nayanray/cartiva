<?php
/**
 * Title: Contact: details with image
 * Slug: cartiva/contact-split
 * Categories: cartiva-contact, contact
 * Keywords: contact, details, address, hours, image
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_rows = array(
	array( 'mail', __( 'Email', 'cartiva' ), __( 'hello@example.com', 'cartiva' ) ),
	array( 'phone', __( 'Phone', 'cartiva' ), __( '+1 (555) 010-2030', 'cartiva' ) ),
	array( 'pin', __( 'Address', 'cartiva' ), __( '12 Market Street, Springfield', 'cartiva' ) ),
	array( 'clock', __( 'Hours', 'cartiva' ), __( 'Mon–Fri 9:00–18:00 · Sat 10:00–16:00', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class=" has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Visit or write', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Come say hello', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Questions about an order, a product or a partnership? We answer every message within one business day.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"cartiva-contact-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group cartiva-contact-list">
				<?php foreach ( $cartiva_rows as $cartiva_row ) : ?>
				<!-- wp:paragraph {"className":"cartiva-contact-list__row cartiva-contact-list__row--<?php echo esc_attr( $cartiva_row[0] ); ?>"} -->
				<p class="cartiva-contact-list__row cartiva-contact-list__row--<?php echo esc_attr( $cartiva_row[0] ); ?>"><strong><?php echo esc_html( $cartiva_row[1] ); ?></strong> <?php echo esc_html( $cartiva_row[2] ); ?></p>
				<!-- /wp:paragraph -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-furniture.webp' ); ?>" alt="" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
