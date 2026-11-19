<?php
/**
 * Title: Hero: slider
 * Slug: cartiva/hero-slider
 * Categories: cartiva-hero, banner
 * Keywords: slider, carousel, hero, slideshow, banner
 * Viewport width: 1400
 * Description: Full-width slider with three slides. Swipe, arrows, dots and autoplay that pauses on hover. Add, remove or reorder slides (Cover blocks) inside the slider group.
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-slider","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull cartiva-slider" style="margin-top:0;margin-bottom:0">
<?php
cartiva_cover_open( array( 'image' => 'slide-1.webp', 'height' => 640, 'class' => 'cartiva-slide' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'New season', 'cartiva' ), 'heading' => __( 'Everyday essentials, made to last.', 'cartiva' ), 'text' => __( 'Quality products at honest prices, with free returns on every order.', 'cartiva' ), 'primary' => __( 'Shop new in', 'cartiva' ), 'secondary' => __( 'Browse categories', 'cartiva' ) ) );
cartiva_cover_close();
cartiva_cover_open( array( 'image' => 'slide-2.webp', 'height' => 640, 'class' => 'cartiva-slide' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'The edit', 'cartiva' ), 'heading' => __( 'Soft layers for slow weekends.', 'cartiva' ), 'text' => __( 'Natural fabrics and relaxed shapes in warm, easy colors.', 'cartiva' ), 'primary' => __( 'Shop the collection', 'cartiva' ), 'secondary' => '' ) );
cartiva_cover_close();
cartiva_cover_open( array( 'image' => 'slide-3.webp', 'height' => 640, 'class' => 'cartiva-slide' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Home & living', 'cartiva' ), 'heading' => __( 'Made for the way you live.', 'cartiva' ), 'text' => __( 'Solid wood furniture and handmade decor, delivered free.', 'cartiva' ), 'primary' => __( 'Explore home', 'cartiva' ), 'secondary' => __( 'See the lookbook', 'cartiva' ) ) );
cartiva_cover_close();
?>
</div>
<!-- /wp:group -->
