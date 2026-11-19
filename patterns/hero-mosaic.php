<?php
/**
 * Title: Hero: image mosaic
 * Slug: cartiva/hero-mosaic
 * Categories: cartiva-hero, banner
 * Keywords: hero, mosaic, collage, gallery, banner
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_dir = get_template_directory_uri() . '/assets/images/';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
<?php
cartiva_hero_text( array( 'eyebrow' => __( 'Spring collection', 'cartiva' ), 'heading' => __( 'Fresh looks for brighter days.', 'cartiva' ), 'text' => __( 'Light layers, bold colors and the essentials you will reach for all season.', 'cartiva' ), 'primary' => __( 'Shop the collection', 'cartiva' ), 'level' => 1, 'size' => 'xx-large' ) );
?>
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
			<!-- wp:group {"className":"cartiva-mosaic","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group cartiva-mosaic">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom","style":{"layout":{"columnSpan":2}}} -->
				<figure class="wp-block-image size-full is-style-cartiva-zoom"><img src="<?php echo esc_url( $cartiva_dir . 'slide-2.webp' ); ?>" alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom"} -->
				<figure class="wp-block-image size-full is-style-cartiva-zoom"><img src="<?php echo esc_url( $cartiva_dir . 'look-2.webp' ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom"} -->
				<figure class="wp-block-image size-full is-style-cartiva-zoom"><img src="<?php echo esc_url( $cartiva_dir . 'cat-2.webp' ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
