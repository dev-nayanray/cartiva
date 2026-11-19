<?php
/**
 * Title: Starter: Furniture store
 * Slug: cartiva/starter-furniture
 * Categories: cartiva-starter
 * Keywords: furniture, home, interior, decor, homepage, starter
 * Template Types: front-page, home
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.3.0
 */

cartiva_hero_section(
	array(
		'eyebrow' => __( 'The living room edit', 'cartiva' ),
		'heading' => __( 'Made for slow living.', 'cartiva' ),
		'text'    => __( 'Solid wood furniture and handmade decor, built to be lived with and loved for years.', 'cartiva' ),
		'button'  => __( 'Explore furniture', 'cartiva' ),
		'image'   => 'hero-furniture.webp',
		'alt'     => __( 'Wooden sofa on a warm background', 'cartiva' ),
		'bg'      => 'surface',
	)
);

cartiva_category_section(
	__( 'Shop by category', 'cartiva' ),
	array(
		array( 'cat-1.webp', __( 'Living room', 'cartiva' ) ),
		array( 'cat-3.webp', __( 'Bedroom', 'cartiva' ) ),
		array( 'cat-4.webp', __( 'Dining', 'cartiva' ) ),
		array( 'cat-2.webp', __( 'Decor', 'cartiva' ) ),
	)
);

if ( cartiva_is_woocommerce_active() ) {
	cartiva_product_section(
		array(
			'heading'    => __( 'New arrivals', 'cartiva' ),
			'collection' => 'new-arrivals',
			'query_id'   => 90,
			'order_by'   => 'date',
			'on_sale'    => false,
			'featured'   => false,
		)
	);

	cartiva_product_section(
		array(
			'heading'    => __( 'Designer picks', 'cartiva' ),
			'collection' => 'featured',
			'query_id'   => 91,
			'order_by'   => 'date',
			'on_sale'    => false,
			'featured'   => true,
		)
	);
}
?>
<!-- wp:pattern {"slug":"cartiva/split-promo"} /-->
<!-- wp:pattern {"slug":"cartiva/trust-badges"} /-->
<!-- wp:pattern {"slug":"cartiva/faq"} /-->
