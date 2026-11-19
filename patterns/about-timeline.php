<?php
/**
 * Title: About: timeline
 * Slug: cartiva/about-timeline
 * Categories: cartiva-about, about
 * Keywords: about, timeline, history, milestones
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_steps = array(
	array( '2018', __( 'The first workshop', 'cartiva' ), __( 'We opened a tiny studio and sold our first ten products to friends.', 'cartiva' ) ),
	array( '2020', __( 'Going online', 'cartiva' ), __( 'Our online store launched and orders started arriving from all over the country.', 'cartiva' ) ),
	array( '2023', __( 'A growing team', 'cartiva' ), __( 'We moved into a bigger studio and welcomed designers, makers and support staff.', 'cartiva' ) ),
	array( '2026', __( 'Today', 'cartiva' ), __( 'More than 120 products, 50,000 happy customers and the same simple idea.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class=" has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Our journey', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'How we got here', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"className":"cartiva-timeline","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group cartiva-timeline">
		<?php foreach ( $cartiva_steps as $cartiva_step ) : ?>
		<!-- wp:group {"className":"cartiva-timeline__item","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-timeline__item">
			<!-- wp:paragraph {"className":"cartiva-timeline__year","textColor":"primary","style":{"typography":{"fontWeight":"800"}},"fontSize":"small"} -->
			<p class="cartiva-timeline__year has-primary-color has-text-color has-small-font-size" style="font-weight:800"><?php echo esc_html( $cartiva_step[0] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $cartiva_step[1] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php echo esc_html( $cartiva_step[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
