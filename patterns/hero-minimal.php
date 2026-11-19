<?php
/**
 * Title: Hero: minimal type
 * Slug: cartiva/hero-minimal
 * Categories: cartiva-hero, banner
 * Keywords: hero, minimal, typography, text, clean
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_links = array( __( 'New in', 'cartiva' ), __( 'Women', 'cartiva' ), __( 'Men', 'cartiva' ), __( 'Home', 'cartiva' ), __( 'Sale', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.14em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Spring / Summer', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2,"className":"cartiva-hero-minimal__title","style":{"typography":{"fontSize":"clamp(2.75rem, 8vw, 6.5rem)","lineHeight":"0.98","letterSpacing":"-0.045em","fontWeight":"800"}}} -->
	<h2 class="wp-block-heading has-text-align-center cartiva-hero-minimal__title" style="font-size:clamp(2.75rem, 8vw, 6.5rem);font-weight:800;letter-spacing:-0.045em;line-height:0.98"><?php esc_html_e( 'Less, but better.', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"large"} -->
	<p class="has-text-align-center has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'A small collection of things we love, made well and priced fairly.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button {"className":"is-style-cartiva-pill"} -->
		<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop the collection', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- wp:group {"className":"cartiva-chips","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group cartiva-chips" style="margin-top:var(--wp--preset--spacing--40)">
		<?php foreach ( $cartiva_links as $cartiva_link ) : ?>
		<!-- wp:paragraph {"className":"cartiva-chip","fontSize":"small"} -->
		<p class="cartiva-chip has-small-font-size"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php echo esc_html( $cartiva_link ); ?></a></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
