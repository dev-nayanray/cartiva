<?php
/**
 * Title: Starter: Fashion store
 * Slug: cartiva/starter-fashion
 * Categories: cartiva-starter
 * Keywords: fashion, clothing, apparel, homepage, starter
 * Template Types: front-page, home
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

cartiva_hero_section(
	array(
		'eyebrow' => __( 'Spring / Summer drop', 'cartiva' ),
		'heading' => __( 'Wear what feels like you.', 'cartiva' ),
		'text'    => __( 'Effortless pieces in natural fabrics, designed to mix, match and last for seasons.', 'cartiva' ),
		'button'  => __( 'Shop the collection', 'cartiva' ),
		'image'   => 'hero-fashion.webp',
		'alt'     => __( 'Dress on a pink background', 'cartiva' ),
		'bg'      => 'surface',
	)
);

cartiva_category_section(
	__( 'Shop by category', 'cartiva' ),
	array(
		array( 'cat-1.webp', __( 'Women', 'cartiva' ) ),
		array( 'cat-2.webp', __( 'Men', 'cartiva' ) ),
		array( 'cat-3.webp', __( 'Shoes', 'cartiva' ) ),
		array( 'cat-4.webp', __( 'Accessories', 'cartiva' ) ),
	)
);

if ( cartiva_is_woocommerce_active() ) {
	cartiva_product_section(
		array(
			'heading'    => __( 'New in', 'cartiva' ),
			'collection' => 'new-arrivals',
			'query_id'   => 60,
			'order_by'   => 'date',
			'on_sale'    => false,
			'featured'   => false,
		)
	);

	cartiva_product_section(
		array(
			'heading'    => __( 'Most loved', 'cartiva' ),
			'collection' => 'best-sellers',
			'query_id'   => 61,
			'order_by'   => 'popularity',
			'on_sale'    => false,
			'featured'   => false,
		)
	);
}
?>
<!-- wp:pattern {"slug":"cartiva/lookbook"} /-->
<!-- wp:pattern {"slug":"cartiva/promo-banner"} /-->
<!-- wp:pattern {"slug":"cartiva/newsletter"} /-->
