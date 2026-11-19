<?php
/**
 * Title: Hero: centered with image row
 * Slug: cartiva/hero-centered
 * Categories: cartiva-hero, banner
 * Keywords: hero, centered, banner, images
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_images = array( 'cat-1.webp', 'hero-fashion.webp', 'cat-3.webp', 'hero-grocery.webp' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">
<?php
cartiva_hero_text( array( 'eyebrow' => __( 'Welcome to the store', 'cartiva' ), 'heading' => __( 'Find something you will love.', 'cartiva' ), 'text' => __( 'Thoughtfully designed products for every day, delivered fast with free returns.', 'cartiva' ), 'primary' => __( 'Start shopping', 'cartiva' ), 'secondary' => __( 'New arrivals', 'cartiva' ), 'level' => 1, 'align' => 'center' ) );
?>
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"10rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_images as $cartiva_image ) : ?>
		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom"} -->
		<figure class="wp-block-image size-full is-style-cartiva-zoom"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $cartiva_image ); ?>" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
