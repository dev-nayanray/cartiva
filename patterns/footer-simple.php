<?php
/**
 * Title: Footer: simple
 * Slug: cartiva/footer-simple
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.6.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-footer" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small"} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Shop', 'cartiva' ); ?>","url":"<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '#' ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Shipping', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'shipping-returns' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Returns', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'shipping-returns' ) ); ?>"} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'contact' ) ); ?>"} /-->
		<!-- /wp:navigation -->
		<!-- wp:paragraph {"textColor":"muted","fontSize":"x-small"} -->
		<p class="has-muted-color has-text-color has-x-small-font-size">
		<?php
		printf(
			/* translators: 1: Current year, 2: Site name. */
			esc_html__( '© %1$s %2$s. All rights reserved.', 'cartiva' ),
			esc_html( wp_date( 'Y' ) ),
			esc_html( get_bloginfo( 'name' ) )
		);
		?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
