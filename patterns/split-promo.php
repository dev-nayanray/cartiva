<?php
/**
 * Title: Split promo – two cards
 * Slug: cartiva/split-promo
 * Categories: cartiva-shop, call-to-action
 * Keywords: promo, banner, collection, two columns
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_promos = array(
	array( 'cat-1.webp', 'surface', __( 'The home edit', 'cartiva' ), __( 'Warm textures for cosy spaces.', 'cartiva' ), __( 'Shop home', 'cartiva' ) ),
	array( 'cat-3.webp', 'contrast', __( 'Tech that fits', 'cartiva' ), __( 'Smart gear for every day.', 'cartiva' ), __( 'Shop tech', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $cartiva_promos as $cartiva_promo ) : ?>
		<?php $cartiva_text = ( 'contrast' === $cartiva_promo[1] ) ? 'base' : 'contrast'; ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_promo[0] ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":420,"contentPosition":"bottom left","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:20px;min-height:420px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_promo[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"elements":{"link":{"color":{"text":"var:preset|color|<?php echo esc_attr( $cartiva_text ); ?>"}}}},"backgroundColor":"<?php echo esc_attr( $cartiva_promo[1] ); ?>","textColor":"<?php echo esc_attr( $cartiva_text ); ?>","layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group has-<?php echo esc_attr( $cartiva_text ); ?>-color has-<?php echo esc_attr( $cartiva_promo[1] ); ?>-background-color has-text-color has-background has-link-color" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
					<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $cartiva_promo[2] ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p><?php echo esc_html( $cartiva_promo[3] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-weight:700"><a href="#"><?php echo esc_html( $cartiva_promo[4] ); ?> →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
