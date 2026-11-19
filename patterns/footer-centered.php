<?php
/**
 * Title: Footer: centered
 * Slug: cartiva/footer-centered
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '#';
?>
<!-- wp:group {"align":"full","className":"cartiva-footer cartiva-footer--centered","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull cartiva-footer cartiva-footer--centered has-surface-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":44,"shouldSyncIcon":true,"align":"center"} /-->
		<!-- wp:site-title {"level":0,"textAlign":"center","fontSize":"x-large"} /-->
		<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
		<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Thoughtfully made products, delivered fast.', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small"} -->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Shop', 'cartiva' ); ?>","url":"<?php echo esc_url( $cartiva_shop_url ); ?>"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'about' ) ); ?>"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'FAQ', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'faq' ) ); ?>"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Shipping', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'shipping-returns' ) ); ?>"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'cartiva' ); ?>","url":"<?php echo esc_url( cartiva_page_url( 'contact' ) ); ?>"} /-->
	<!-- /wp:navigation -->
	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#111111","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only">
		<!-- wp:social-link {"url":"#","service":"facebook"} /-->
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		<!-- wp:social-link {"url":"#","service":"x"} /-->
		<!-- wp:social-link {"url":"#","service":"youtube"} /-->
	</ul>
	<!-- /wp:social-links -->
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"x-small"} -->
	<p class="has-text-align-center has-muted-color has-text-color has-x-small-font-size">
	<?php
	printf(
		/* translators: 1: Current year, 2: Site name, 3: WordPress link. */
		esc_html__( '© %1$s %2$s. Designed with %3$s', 'cartiva' ),
		esc_html( wp_date( 'Y' ) ),
		esc_html( get_bloginfo( 'name' ) ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'cartiva' ) ) . '" rel="nofollow">WordPress</a>'
	);
	?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
