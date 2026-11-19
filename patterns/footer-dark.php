<?php
/**
 * Title: Footer: dark
 * Slug: cartiva/footer-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-footer cartiva-footer--dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-footer cartiva-footer--dark has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:site-title {"level":0} /-->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Thoughtfully made products, delivered fast. Built with Cartiva — a free, lightweight block theme for WooCommerce.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"youtube"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"fontSize":"small"} -->
			<h2 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Shop', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'New arrivals', 'cartiva' ); ?>","url":"<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '#' ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Best sellers', 'cartiva' ); ?>","url":"<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '#' ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Sale', 'cartiva' ); ?>","url":"<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '#' ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"fontSize":"small"} -->
			<h2 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Help', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Shipping', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'shipping-returns' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Returns', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'shipping-returns' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'contact' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Track order', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'track-order' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'FAQ', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'faq' ) ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"fontSize":"small"} -->
			<h2 class="wp-block-heading has-small-font-size"><?php esc_html_e( 'Company', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'about' ) ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Blog', 'cartiva' ); ?>","url":"<?php echo esc_url( get_option( 'page_for_posts' ) ? get_permalink( (int) get_option( 'page_for_posts' ) ) : '#' ); ?>"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Privacy', 'cartiva' ); ?>","url":"<?php echo esc_url( get_privacy_policy_url() ? get_privacy_policy_url() : '#' ); ?>"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
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
		<!-- wp:paragraph {"className":"cartiva-payments","fontSize":"x-small"} -->
		<p class="cartiva-payments has-x-small-font-size"><span>VISA</span><span>Mastercard</span><span>PayPal</span><span>Apple Pay</span><span>G Pay</span></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted","fontSize":"x-small"} -->
		<p class="has-muted-color has-text-color has-x-small-font-size">
		<?php
		printf(
			/* translators: %s: WordPress link. */
			esc_html__( 'Designed with %s', 'cartiva' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'cartiva' ) ) . '" rel="nofollow">WordPress</a>'
		);
		?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
