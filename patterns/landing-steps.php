<?php
/**
 * Title: Landing: how it works
 * Slug: cartiva/landing-steps
 * Categories: cartiva-landing
 * Keywords: landing, steps, how it works, process, order
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_steps = array(
	array( '1', __( 'Place your order', 'cartiva' ), __( 'Fill in your name, phone number and address. It takes one minute.', 'cartiva' ) ),
	array( '2', __( 'We confirm by phone', 'cartiva' ), __( 'Our team calls to confirm your order and delivery time.', 'cartiva' ) ),
	array( '3', __( 'Pay when it arrives', 'cartiva' ), __( 'Check the product at your door, then pay the courier.', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small","align":"center"} -->
	<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( '3 easy steps', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"xx-large","textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'How it works', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_steps as $cartiva_step ) : ?>
		<!-- wp:group {"className":"cartiva-landing-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-landing-step">
			<!-- wp:paragraph {"className":"cartiva-landing-step__number"} -->
			<p class="cartiva-landing-step__number"><?php echo esc_html( $cartiva_step[0] ); ?></p>
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
