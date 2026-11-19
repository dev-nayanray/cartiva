<?php
/**
 * Title: Blog: latest posts cards
 * Slug: cartiva/blog-latest
 * Categories: cartiva-blog, query
 * Keywords: blog, posts, latest, news, cards
 * Viewport width: 1400
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
	<!-- wp:query {"queryId":51,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","className":"cartiva-blog-cards"} -->
	<div class="wp-block-query alignwide cartiva-blog-cards">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
			<!-- wp:post-terms {"term":"category","className":"cartiva-post-cats","fontSize":"x-small"} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
			<!-- wp:post-excerpt {"excerptLength":18,"textColor":"muted","fontSize":"small"} /-->
			<!-- wp:post-date {"textColor":"muted","fontSize":"x-small"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
