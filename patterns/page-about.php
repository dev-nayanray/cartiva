<?php
/**
 * Title: About page
 * Slug: cartiva/page-about
 * Categories: cartiva-pages
 * Keywords: about, story, mission, values, brand
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Brand story, numbers, values and a call to action. Publish with the slug "about" for the matching full-width layout.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' );
$cartiva_stats    = array(
	array( '2018', __( 'Founded', 'cartiva' ) ),
	array( '50k+', __( 'Happy customers', 'cartiva' ) ),
	array( '120+', __( 'Products designed in-house', 'cartiva' ) ),
	array( '4.9/5', __( 'Average review score', 'cartiva' ) ),
);

cartiva_page_hero( __( 'About us', 'cartiva' ), __( 'Good things, made to last', 'cartiva' ), __( 'We started with one simple idea: everyday products should be beautiful, honest and built to be used for years.', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/look-1.webp' ); ?>" alt="<?php esc_attr_e( 'Our studio', 'cartiva' ); ?>" style="border-radius:20px;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Our story', 'cartiva' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( 'What began as a small workshop is now a team of designers, makers and friendly support people who care about every order.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'We work directly with a handful of trusted makers, choose durable materials and keep our prices fair by selling only online. Every product is tested by our team before it reaches you.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Thank you for being part of the story.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","className":"cartiva-stats","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"10rem"}} -->
	<div class="wp-block-group alignwide cartiva-stats">
		<?php foreach ( $cartiva_stats as $cartiva_stat ) : ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"cartiva-stats__number","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.03em"}},"fontSize":"xx-large"} -->
			<p class="cartiva-stats__number has-xx-large-font-size" style="font-weight:800;letter-spacing:-0.03em"><?php echo esc_html( $cartiva_stat[0] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $cartiva_stat[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'What we stand for', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
<?php
cartiva_icon_card( 'star', __( 'Quality first', 'cartiva' ), __( 'Durable materials and careful finishing, tested by our team before anything goes on sale.', 'cartiva' ) );
cartiva_icon_card( 'leaf', __( 'Kinder to the planet', 'cartiva' ), __( 'Recycled packaging, carbon-neutral delivery and products designed to be repaired, not replaced.', 'cartiva' ) );
cartiva_icon_card( 'chat', __( 'People who care', 'cartiva' ), __( 'A real support team that knows the products and is happy to help before and after you buy.', 'cartiva' ) );
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<?php
cartiva_page_cta( __( 'Find something you will love', 'cartiva' ), __( 'Browse the full collection, with free shipping on orders over $50.', 'cartiva' ), __( 'Shop now', 'cartiva' ), $cartiva_shop_url );
