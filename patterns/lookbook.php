<?php
/**
 * Title: Lookbook – shop the look
 * Slug: cartiva/lookbook
 * Categories: cartiva-shop, gallery
 * Keywords: lookbook, editorial, shop the look, collection
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.2.0
 */

$cartiva_looks = array(
	array( 'look-1.webp', __( 'Look 01', 'cartiva' ), __( 'Quiet layers', 'cartiva' ), __( 'Soft neutrals and relaxed shapes for slow weekends.', 'cartiva' ) ),
	array( 'look-2.webp', __( 'Look 02', 'cartiva' ), __( 'Bold basics', 'cartiva' ), __( 'Saturated colour on clean, everyday pieces.', 'cartiva' ) ),
);
$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
		<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Lookbook', 'cartiva' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'Styled for the season', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $cartiva_looks as $cartiva_look ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"9/11","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom"} -->
			<figure class="wp-block-image size-full is-style-cartiva-zoom"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_look[0] ); ?>" alt="" style="aspect-ratio:9/11;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"textColor":"muted","fontSize":"x-small"} -->
				<p class="has-muted-color has-text-color has-x-small-font-size"><?php echo esc_html( $cartiva_look[1] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $cartiva_look[2] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color"><?php echo esc_html( $cartiva_look[3] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-weight:700"><a href="<?php echo esc_url( $cartiva_shop_url ); ?>"><?php esc_html_e( 'Shop the look →', 'cartiva' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
