<?php
/**
 * Title: Starter: Electronics store
 * Slug: cartiva/starter-electronics
 * Categories: cartiva-starter
 * Keywords: electronics, tech, gadgets, homepage, starter
 * Template Types: front-page, home
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.3.0
 */

cartiva_hero_section(
	array(
		'eyebrow' => __( 'Just launched', 'cartiva' ),
		'heading' => __( 'Tech that keeps up with you.', 'cartiva' ),
		'text'    => __( 'Laptops, tablets, audio and smart home gear with fast shipping and a two-year warranty.', 'cartiva' ),
		'button'  => __( 'Shop tech', 'cartiva' ),
		'image'   => 'hero-electronics.webp',
		'alt'     => __( 'Laptop and tablet on a blue background', 'cartiva' ),
		'bg'      => 'surface',
	)
);

cartiva_category_section(
	__( 'Shop by category', 'cartiva' ),
	array(
		array( 'cat-3.webp', __( 'Laptops & tablets', 'cartiva' ) ),
		array( 'cat-2.webp', __( 'Audio', 'cartiva' ) ),
		array( 'cat-4.webp', __( 'Smart home', 'cartiva' ) ),
		array( 'cat-1.webp', __( 'Accessories', 'cartiva' ) ),
	)
);

if ( cartiva_is_woocommerce_active() ) {
	cartiva_product_section(
		array(
			'heading'    => __( 'Featured deals', 'cartiva' ),
			'collection' => 'featured',
			'query_id'   => 70,
			'order_by'   => 'date',
			'on_sale'    => false,
			'featured'   => true,
		)
	);

	cartiva_product_section(
		array(
			'heading'    => __( 'Flash sale', 'cartiva' ),
			'collection' => 'on-sale',
			'query_id'   => 71,
			'order_by'   => 'date',
			'on_sale'    => true,
			'featured'   => false,
		)
	);

	cartiva_product_section(
		array(
			'heading'    => __( 'Top rated', 'cartiva' ),
			'collection' => 'best-sellers',
			'query_id'   => 72,
			'order_by'   => 'popularity',
			'on_sale'    => false,
			'featured'   => false,
		)
	);
}
?>
<!-- wp:pattern {"slug":"cartiva/trust-badges"} /-->
<!-- wp:pattern {"slug":"cartiva/brands"} /-->
<!-- wp:pattern {"slug":"cartiva/faq"} /-->
