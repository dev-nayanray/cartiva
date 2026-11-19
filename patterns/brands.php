<?php
/**
 * Title: Brand logos strip
 * Slug: cartiva/brands
 * Categories: cartiva-shop, featured
 * Keywords: brands, logos, partners, as seen in
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_brands = array( 'NORDA', 'Kiro', 'Velt', 'amber&co', 'LUMA', 'Ostra' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"muted","fontSize":"x-small"} -->
	<p class="has-text-align-center has-muted-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Brands we carry', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_brands as $cartiva_brand ) : ?>
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em"}},"textColor":"muted","fontSize":"x-large"} -->
		<p class="has-muted-color has-text-color has-x-large-font-size" style="font-weight:800;letter-spacing:-0.02em"><?php echo esc_html( $cartiva_brand ); ?></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
