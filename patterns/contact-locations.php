<?php
/**
 * Title: Contact: store locations
 * Slug: cartiva/contact-locations
 * Categories: cartiva-contact, contact
 * Keywords: contact, stores, locations, addresses, map
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_locations = array(
	array( __( 'Springfield', 'cartiva' ), __( '12 Market Street', 'cartiva' ), __( 'Mon–Sat 10:00–18:00', 'cartiva' ), '+1 (555) 010-2030' ),
	array( __( 'Riverside', 'cartiva' ), __( '48 Harbor Road', 'cartiva' ), __( 'Mon–Sat 10:00–19:00', 'cartiva' ), '+1 (555) 010-4050' ),
	array( __( 'Hillcrest', 'cartiva' ), __( '7 Garden Lane', 'cartiva' ), __( 'Tue–Sun 11:00–17:00', 'cartiva' ), '+1 (555) 010-6070' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class="alignwide has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Locations', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"align":"wide","level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Visit our stores', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_locations as $cartiva_loc ) : ?>
		<!-- wp:group {"className":"cartiva-location","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-location">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $cartiva_loc[0] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"cartiva-contact-list__row cartiva-contact-list__row--pin","fontSize":"small"} -->
			<p class="cartiva-contact-list__row cartiva-contact-list__row--pin has-small-font-size"><?php echo esc_html( $cartiva_loc[1] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"cartiva-contact-list__row cartiva-contact-list__row--clock","fontSize":"small"} -->
			<p class="cartiva-contact-list__row cartiva-contact-list__row--clock has-small-font-size"><?php echo esc_html( $cartiva_loc[2] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"cartiva-contact-list__row cartiva-contact-list__row--phone","fontSize":"small"} -->
			<p class="cartiva-contact-list__row cartiva-contact-list__row--phone has-small-font-size"><?php echo esc_html( $cartiva_loc[3] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
