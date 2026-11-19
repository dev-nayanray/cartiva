<?php
/**
 * Title: Blog: magazine grid
 * Slug: cartiva/blog-magazine
 * Categories: cartiva-blog, query
 * Keywords: blog, posts, magazine, editorial, grid
 * Viewport width: 1400
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_blog_url = get_option( 'page_for_posts' ) ? get_permalink( (int) get_option( 'page_for_posts' ) ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'The magazine', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( $cartiva_blog_url ); ?>"><?php esc_html_e( 'All articles →', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"queryId":58,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"cartiva-blog-magazine"} -->
	<div class="wp-block-query alignwide cartiva-blog-magazine">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"14px"}}} /-->
			<!-- wp:post-terms {"term":"category","className":"cartiva-post-cats","fontSize":"x-small"} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} /-->
			<!-- wp:post-excerpt {"excerptLength":24,"textColor":"muted","fontSize":"small","className":"cartiva-blog-magazine__excerpt"} /-->
			<!-- wp:post-date {"textColor":"muted","fontSize":"x-small"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
