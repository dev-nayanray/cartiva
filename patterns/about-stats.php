<?php
/**
 * Title: About: numbers band
 * Slug: cartiva/about-stats
 * Categories: cartiva-about, about
 * Keywords: about, stats, numbers, facts, dark
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_stats = array(
	array( '2018', __( 'Founded in a small studio', 'cartiva' ) ),
	array( '50k+', __( 'Happy customers', 'cartiva' ) ),
	array( '120+', __( 'Products designed in-house', 'cartiva' ) ),
	array( '4.9/5', __( 'Average review score', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","className":"cartiva-stats cartiva-stats--light","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"10rem"}} -->
	<div class="wp-block-group alignwide cartiva-stats cartiva-stats--light">
		<?php foreach ( $cartiva_stats as $cartiva_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"cartiva-stats__number","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.03em"}},"fontSize":"huge"} -->
			<p class="cartiva-stats__number has-huge-font-size" style="font-weight:800;letter-spacing:-0.03em"><?php echo esc_html( $cartiva_stat[0] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#ffffffb3"}},"fontSize":"small"} -->
			<p class="has-text-color has-small-font-size" style="color:#ffffffb3"><?php echo esc_html( $cartiva_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
