<?php
/**
 * Title: Starter: Grocery store
 * Slug: cartiva/starter-grocery
 * Categories: cartiva-starter
 * Keywords: grocery, food, organic, supermarket, homepage, starter
 * Template Types: front-page, home
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.3.0
 */

cartiva_hero_section(
	array(
		'eyebrow' => __( 'Fresh every morning', 'cartiva' ),
		'heading' => __( 'Groceries delivered in an hour.', 'cartiva' ),
		'text'    => __( 'Seasonal produce, pantry staples and local favourites, picked fresh and brought to your door.', 'cartiva' ),
		'button'  => __( 'Start shopping', 'cartiva' ),
		'image'   => 'hero-grocery.webp',
		'alt'     => __( 'Fresh fruit on a green background', 'cartiva' ),
		'bg'      => 'surface',
	)
);

cartiva_category_section(
	__( 'Shop by category', 'cartiva' ),
	array(
		array( 'cat-4.webp', __( 'Fruit & veg', 'cartiva' ) ),
		array( 'cat-1.webp', __( 'Bakery', 'cartiva' ) ),
		array( 'cat-2.webp', __( 'Dairy & eggs', 'cartiva' ) ),
		array( 'cat-3.webp', __( 'Pantry', 'cartiva' ) ),
	)
);

if ( cartiva_is_woocommerce_active() ) {
	cartiva_product_section(
		array(
			'heading'    => __( 'This week\'s offers', 'cartiva' ),
			'collection' => 'on-sale',
			'query_id'   => 80,
			'order_by'   => 'date',
			'on_sale'    => true,
			'featured'   => false,
		)
	);

	cartiva_product_section(
		array(
			'heading'    => __( 'Customer favourites', 'cartiva' ),
			'collection' => 'best-sellers',
			'query_id'   => 81,
			'order_by'   => 'popularity',
			'on_sale'    => false,
			'featured'   => false,
		)
	);
}
?>
<!-- wp:pattern {"slug":"cartiva/trust-badges"} /-->
<!-- wp:pattern {"slug":"cartiva/split-promo"} /-->
<!-- wp:pattern {"slug":"cartiva/newsletter"} /-->
