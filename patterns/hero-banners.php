<?php
/**
 * Title: Hero: two banners
 * Slug: cartiva/hero-banners
 * Categories: cartiva-hero, banner
 * Keywords: hero, banners, two, split, promo, collections
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","className":"cartiva-hero-banners","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide cartiva-hero-banners">
		<!-- wp:column -->
		<div class="wp-block-column">
<?php
cartiva_cover_open( array( 'image' => 'hero-fashion.webp', 'height' => 560, 'radius' => '20px', 'position' => 'bottom left', 'class' => 'cartiva-banner-cover' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Women', 'cartiva' ), 'heading' => __( 'Light layers for warm days', 'cartiva' ), 'primary' => __( 'Shop women', 'cartiva' ), 'size' => 'xx-large' ) );
cartiva_cover_close();
?>
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
<?php
cartiva_cover_open( array( 'image' => 'hero-furniture.webp', 'height' => 560, 'radius' => '20px', 'position' => 'bottom left', 'class' => 'cartiva-banner-cover' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Home', 'cartiva' ), 'heading' => __( 'Pieces made to stay', 'cartiva' ), 'primary' => __( 'Shop home', 'cartiva' ), 'size' => 'xx-large' ) );
cartiva_cover_close();
?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
