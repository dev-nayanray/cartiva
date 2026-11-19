<?php
/**
 * Title: Single post
 * Slug: cartiva/template-single
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:post-title {"level":1} /-->
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"textColor":"muted","fontSize":"x-small","layout":{"type":"flex"}} -->
	<div class="wp-block-group has-muted-color has-text-color has-x-small-font-size">
		<!-- wp:post-date /-->
		<!-- wp:post-author-name {"isLink":true} /-->
		<!-- wp:post-terms {"term":"category"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-featured-image {"align":"wide"} /-->
	<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	<!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_attr__( 'Tags: ', 'cartiva' ); ?>"} /-->
	<!-- wp:post-navigation-link {"type":"previous","showTitle":true} /-->
	<!-- wp:post-navigation-link {"showTitle":true} /-->
	<!-- wp:comments -->
	<div class="wp-block-comments">
		<!-- wp:comments-title /-->
		<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:group {"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":40} /-->
					<!-- wp:comment-author-name /-->
					<!-- wp:comment-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:comment-content /-->
				<!-- wp:comment-reply-link {"fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:comment-template -->
		<!-- wp:comments-pagination -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-numbers /-->
			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->
		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:comments -->
</main>
<!-- /wp:group -->
