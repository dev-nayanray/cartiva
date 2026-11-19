<?php
/**
 * Title: Blog: image overlay cards
 * Slug: cartiva/blog-overlay
 * Categories: cartiva-blog, query
 * Keywords: blog, posts, overlay, cover, image cards
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
		<h2 class="wp-block-heading"><?php esc_html_e( 'Read & get inspired', 'cartiva' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-small-font-size" style="font-weight:600"><a href="<?php echo esc_url( $cartiva_blog_url ); ?>"><?php esc_html_e( 'All articles →', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"queryId":57,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"cartiva-blog-overlay"} -->
	<div class="wp-block-query alignwide cartiva-blog-overlay">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":420,"contentPosition":"bottom left","className":"cartiva-post-overlay","style":{"border":{"radius":"18px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left cartiva-post-overlay" style="border-radius:18px;min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:post-terms {"term":"category","className":"cartiva-post-cats","fontSize":"x-small"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"textColor":"base","fontSize":"x-large"} /-->
				<!-- wp:post-date {"textColor":"base","fontSize":"x-small"} /-->
			</div></div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
