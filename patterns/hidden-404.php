<?php
/**
 * Title: 404
 * Slug: cartiva/hidden-404
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '';
?>
<!-- wp:group {"className":"cartiva-404","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group cartiva-404" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","className":"cartiva-404-code","style":{"typography":{"fontSize":"clamp(5rem, 18vw, 10rem)","fontWeight":"800","letterSpacing":"-0.06em"}}} -->
	<p class="has-text-align-center cartiva-404-code" style="font-size:clamp(5rem, 18vw, 10rem);font-weight:800;letter-spacing:-0.06em">404</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'This page wandered off', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'The page you are looking for does not exist or has moved. Search the store or head back to somewhere familiar.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'cartiva' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'What are you looking for?', 'search placeholder', 'cartiva' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'cartiva' ); ?>"<?php echo cartiva_is_woocommerce_active() ? ',"query":{"post_type":"product"}' : ''; ?>} /-->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-cartiva-pill"} -->
		<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
		<?php if ( $cartiva_shop_url ) : ?>
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Browse the shop', 'cartiva' ); ?></a></div>
		<!-- /wp:button -->
		<?php endif; ?>
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<?php if ( cartiva_is_woocommerce_active() ) : ?>
<!-- wp:pattern {"slug":"cartiva/best-sellers"} /-->
<?php endif; ?>
