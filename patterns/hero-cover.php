<?php
/**
 * Title: Hero: full-screen image
 * Slug: cartiva/hero-cover
 * Categories: cartiva-hero, banner
 * Keywords: hero, cover, full screen, image, banner
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

cartiva_cover_open( array( 'image' => 'cover-dark.webp', 'height' => 82, 'unit' => 'vh', 'dim' => 30, 'overlay' => 'contrast', 'dark' => true, 'align' => 'full', 'position' => 'center left' ) );
cartiva_hero_text( array( 'eyebrow' => __( 'Limited edition', 'cartiva' ), 'heading' => __( 'Designed to stand out.', 'cartiva' ), 'text' => __( 'A small-batch collection made with the best materials we could find.', 'cartiva' ), 'primary' => __( 'Shop the drop', 'cartiva' ), 'secondary' => __( 'Learn more', 'cartiva' ), 'level' => 1, 'light' => true ) );
cartiva_cover_close();
