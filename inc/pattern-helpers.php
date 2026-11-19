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

/**
 * Output a split hero section.
 *
 * @param array $args {
 *     @type string $eyebrow  Small label above the heading.
 *     @type string $heading  Main heading.
 *     @type string $text     Supporting paragraph.
 *     @type string $button   Primary button label.
 *     @type string $image    Image file name inside assets/images.
 *     @type string $alt      Image alt text.
 *     @type string $bg       Background color slug.
 * }
 */
function cartiva_hero_section( $args ) {
	$args = wp_parse_args(
		$args,
		array(
			'eyebrow' => '',
			'heading' => '',
			'text'    => '',
			'button'  => __( 'Shop now', 'cartiva' ),
			'image'   => 'hero.webp',
			'alt'     => '',
			'bg'      => 'surface',
		)
	);
	$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
	$bg       = sanitize_html_class( $args['bg'] );
	?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"<?php echo esc_attr( $bg ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-<?php echo esc_attr( $bg ); ?>-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
			<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html( $args['eyebrow'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php echo esc_html( $args['heading'] ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
			<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html( $args['text'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"className":"is-style-cartiva-pill"} -->
				<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $shop_url ); ?>"><?php echo esc_html( $args['button'] ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-cartiva-zoom","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border is-style-cartiva-zoom"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $args['image'] ); ?>" alt="<?php echo esc_attr( $args['alt'] ); ?>" style="border-radius:20px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
	<?php
}

/**
 * Output a category grid section.
 *
 * @param string $heading    Section heading.
 * @param array  $categories List of array( image file, label ).
 */
function cartiva_category_section( $heading, $categories ) {
	?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php echo esc_html( $heading ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $categories as $category ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-cartiva-zoom"} -->
			<figure class="wp-block-image size-full is-style-cartiva-zoom"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $category[0] ); ?>" alt="" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><a href="#"><?php echo esc_html( $category[1] ); ?></a></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
	<?php
}
