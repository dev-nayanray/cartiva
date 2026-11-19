<?php
/**
 * Helpers shared by product patterns.
 *
 * @package Cartiva
 * @since 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output a Product Collection section with a heading and "View all" link.
 *
 * @param array $args {
 *     @type string $heading    Section heading (already translated).
 *     @type string $collection Product collection slug (e.g. best-sellers).
 *     @type int    $query_id   Unique query ID for the block.
 *     @type int    $per_page   Number of products.
 *     @type int    $columns    Grid columns.
 *     @type string $order_by   Query orderBy value.
 *     @type bool   $on_sale    Only on-sale products.
 *     @type bool   $featured   Only featured products.
 *     @type string $background Optional background color slug.
 * }
 */
function cartiva_product_section( $args ) {
	$args = wp_parse_args(
		$args,
		array(
			'heading'    => '',
			'collection' => 'new-arrivals',
			'query_id'   => 100,
			'per_page'   => 4,
			'columns'    => 4,
			'order_by'   => 'date',
			'on_sale'    => false,
			'featured'   => false,
			'background' => '',
		)
	);

	$query = array(
		'perPage'                      => (int) $args['per_page'],
		'pages'                        => 1,
		'offset'                       => 0,
		'postType'                     => 'product',
		'order'                        => 'desc',
		'orderBy'                      => $args['order_by'],
		'search'                       => '',
		'exclude'                      => array(),
		'inherit'                      => false,
		'taxQuery'                     => array(),
		'isProductCollectionBlock'     => true,
		'featured'                     => (bool) $args['featured'],
		'woocommerceOnSale'            => (bool) $args['on_sale'],
		'woocommerceStockStatus'       => array( 'instock', 'outofstock', 'onbackorder' ),
		'woocommerceAttributes'        => array(),
		'woocommerceHandPickedProducts' => array(),
	);

	$collection_attrs = array(
		'queryId'       => (int) $args['query_id'],
		'query'         => $query,
		'tagName'       => 'div',
		'displayLayout' => array(
			'type'          => 'flex',
			'columns'       => (int) $args['columns'],
			'shrinkColumns' => true,
		),
		'collection'    => 'woocommerce/product-collection/' . $args['collection'],
		'hideControls'  => array( 'inherit' ),
		'align'         => 'wide',
	);

	$group_attrs = array(
		'align'  => 'full',
		'style'  => array(
			'spacing' => array(
				'padding' => array(
					'top'    => 'var:preset|spacing|60',
					'bottom' => 'var:preset|spacing|60',
				),
			),
		),
		'layout' => array( 'type' => 'constrained' ),
	);
	$group_class = 'wp-block-group alignfull';
	if ( $args['background'] ) {
		$group_attrs['backgroundColor'] = $args['background'];
		$group_class                   .= ' has-' . sanitize_html_class( $args['background'] ) . '-background-color has-background';
	}

	$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
	?>
<!-- wp:group <?php echo wp_json_encode( $group_attrs, JSON_UNESCAPED_SLASHES ); ?> -->
<div class="<?php echo esc_attr( $group_class ); ?>" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php echo esc_html( $args['heading'] ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'View all', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection <?php echo wp_json_encode( $collection_attrs, JSON_UNESCAPED_SLASHES ); ?> -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"showSaleBadge":true,"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
			<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
	<?php
}
