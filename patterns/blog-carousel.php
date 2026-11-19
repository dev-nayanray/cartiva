<?php
/**
 * Title: Blog: post carousel
 * Slug: cartiva/blog-carousel
 * Categories: cartiva-blog, query
 * Keywords: blog, posts, carousel, slider, news
 * Viewport width: 1400
 * Description: Latest posts in a swipeable row with arrows.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_blog_url = get_option( 'page_for_posts' ) ? get_permalink( (int) get_option( 'page_for_posts' ) ) : home_url( '/' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'From the journal', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( $cartiva_blog_url ); ?>"><?php esc_html_e( 'All articles →', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"queryId":56,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"cartiva-card-carousel is-cols-3"} -->
	<div class="wp-block-query alignwide cartiva-card-carousel is-cols-3">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"16px"}}} /-->
			<!-- wp:post-terms {"term":"category","className":"cartiva-post-cats","fontSize":"x-small"} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} /-->
			<!-- wp:post-date {"textColor":"muted","fontSize":"x-small"} /-->
		<!-- /wp:post-template -->
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'No posts yet.', 'cartiva' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
