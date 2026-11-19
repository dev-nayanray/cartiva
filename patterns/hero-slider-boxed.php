<?php
/**
 * Title: Hero: boxed slider
 * Slug: cartiva/hero-slider-boxed
 * Categories: cartiva-hero, banner
 * Keywords: slider, carousel, boxed, rounded, hero
 * Viewport width: 1400
 * Description: Rounded slider inside the content width. Add, remove or reorder slides (Cover blocks) inside the slider group.
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","className":"cartiva-slider cartiva-slider--boxed","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide cartiva-slider cartiva-slider--boxed">
<?php
cartiva_cover_open( array( 'image' => 'slide-2.webp', 'height' => 520, 'class' => 'cartiva-slide' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Just landed', 'cartiva' ), 'heading' => __( 'The new season edit is here.', 'cartiva' ), 'text' => __( 'Fresh colors, easy shapes and fabrics that feel good all day.', 'cartiva' ), 'primary' => __( 'Shop new in', 'cartiva' ), 'size' => 'xx-large' ) );
cartiva_cover_close();
cartiva_cover_open( array( 'image' => 'slide-3.webp', 'height' => 520, 'class' => 'cartiva-slide' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Home', 'cartiva' ), 'heading' => __( 'Make every room feel calm.', 'cartiva' ), 'text' => __( 'Solid wood, soft linen and handmade ceramics.', 'cartiva' ), 'primary' => __( 'Explore home', 'cartiva' ), 'size' => 'xx-large' ) );
cartiva_cover_close();
cartiva_cover_open( array( 'image' => 'slide-1.webp', 'height' => 520, 'class' => 'cartiva-slide' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Members', 'cartiva' ), 'heading' => __( 'Free delivery on every order.', 'cartiva' ), 'text' => __( 'Create an account and save on shipping, every time.', 'cartiva' ), 'primary' => __( 'Join now', 'cartiva' ), 'size' => 'xx-large' ) );
cartiva_cover_close();
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
