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
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
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

/**
 * Permalink of a page by slug, or a fallback when it does not exist yet.
 *
 * Lets the header and footer link to Contact, FAQ, etc. as soon as the
 * store owner creates those pages.
 *
 * @param string $slug     Page slug (path).
 * @param string $fallback URL used when the page does not exist.
 * @return string
 */
function cartiva_page_url( $slug, $fallback = '#' ) {
	$page = get_page_by_path( $slug );
	if ( $page instanceof WP_Post && 'publish' === $page->post_status ) {
		return get_permalink( $page );
	}
	return $fallback;
}

/**
 * Output a page header (eyebrow, title, intro) for page patterns.
 *
 * @param string $eyebrow Small label above the title.
 * @param string $title   Page title.
 * @param string $text    Intro text.
 */
function cartiva_page_hero( $eyebrow, $title, $text ) {
	?>
<!-- wp:group {"align":"full","className":"cartiva-page-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cartiva-page-hero has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
		<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html( $eyebrow ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html( $title ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
		<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html( $text ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
	<?php
}

/**
 * Output a closing call-to-action band used at the end of page patterns.
 *
 * @param string $title  Heading.
 * @param string $text   Supporting text.
 * @param string $button Button label.
 * @param string $url    Button URL.
 */
function cartiva_page_cta( $title, $text, $button, $url ) {
	?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","className":"cartiva-cta-band","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide cartiva-cta-band has-base-color has-contrast-background-color has-text-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textColor":"base","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><?php echo esc_html( $title ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#ffffffb3"}}} -->
			<p class="has-text-color" style="color:#ffffffb3"><?php echo esc_html( $text ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-cartiva-pill"} -->
			<div class="wp-block-button is-style-cartiva-pill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $button ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
	<?php
}

/**
 * Output an icon card (used on Contact, About and Help Center).
 *
 * @param string $icon  Icon slug (see .cartiva-icon-card--* in style.css).
 * @param string $title Card title.
 * @param string $text  Card text.
 * @param string $link  Optional link label.
 * @param string $url   Optional link URL.
 */
function cartiva_icon_card( $icon, $title, $text, $link = '', $url = '' ) {
	$icon = sanitize_html_class( $icon );
	?>
		<!-- wp:group {"className":"cartiva-icon-card cartiva-icon-card--<?php echo esc_attr( $icon ); ?>","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-icon-card cartiva-icon-card--<?php echo esc_attr( $icon ); ?>">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $title ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $text ); ?></p>
			<!-- /wp:paragraph -->
			<?php if ( $link ) : ?>
			<!-- wp:paragraph {"className":"cartiva-icon-card__link","fontSize":"small"} -->
			<p class="cartiva-icon-card__link has-small-font-size"><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $link ); ?></a></p>
			<!-- /wp:paragraph -->
			<?php endif; ?>
		</div>
		<!-- /wp:group -->
	<?php
}

/**
 * Output a FAQ group (heading + Details blocks).
 *
 * @param string $heading Group heading.
 * @param array  $items   List of array( question, answer ).
 */
function cartiva_faq_group( $heading, $items ) {
	?>
		<!-- wp:group {"className":"cartiva-faq-group","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group cartiva-faq-group">
			<!-- wp:heading {"level":2,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<h2 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html( $heading ); ?></h2>
			<!-- /wp:heading -->
			<?php foreach ( $items as $item ) : ?>
			<!-- wp:details {"className":"is-style-cartiva-faq"} -->
			<details class="wp-block-details is-style-cartiva-faq"><summary><?php echo esc_html( $item[0] ); ?></summary>
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color"><?php echo esc_html( $item[1] ); ?></p>
				<!-- /wp:paragraph -->
			</details>
			<!-- /wp:details -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->
	<?php
}
