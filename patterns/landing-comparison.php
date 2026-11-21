<?php
/**
 * Title: Landing: comparison table
 * Slug: cartiva/landing-comparison
 * Categories: cartiva-landing
 * Keywords: landing, comparison, table, versus, why us
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_rows = array(
	array( __( 'Quality checked before shipping', 'cartiva' ), '✓', '–' ),
	array( __( 'Cash on delivery', 'cartiva' ), '✓', '–' ),
	array( __( '7-day returns', 'cartiva' ), '✓', '–' ),
	array( __( 'Delivery in 2-3 days', 'cartiva' ), '✓', __( '5-7 days', 'cartiva' ) ),
	array( __( 'Support every day', 'cartiva' ), '✓', '–' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small","align":"center"} -->
	<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'The difference', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"xx-large","textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Why choose us', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:table {"className":"cartiva-compare-table"} -->
	<figure class="wp-block-table cartiva-compare-table"><table><thead><tr><th><?php esc_html_e( 'What you get', 'cartiva' ); ?></th><th><?php esc_html_e( 'Us', 'cartiva' ); ?></th><th><?php esc_html_e( 'Others', 'cartiva' ); ?></th></tr></thead><tbody><?php foreach ( $cartiva_rows as $cartiva_row ) : ?><tr><td><?php echo esc_html( $cartiva_row[0] ); ?></td><td><?php echo esc_html( $cartiva_row[1] ); ?></td><td><?php echo esc_html( $cartiva_row[2] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
	<!-- /wp:table -->
</div>
<!-- /wp:group -->
