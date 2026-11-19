<?php
/**
 * Title: Posts grid
 * Slug: cartiva/posts-grid
 * Categories: cartiva-sections, query
 * Keywords: blog, posts, grid, query
 * Block Types: core/query
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:query {"queryId":21,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
		<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
		<!-- wp:post-excerpt {"excerptLength":22,"textColor":"muted","fontSize":"small"} /-->
		<!-- wp:post-date {"textColor":"muted","fontSize":"x-small"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"cartiva/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
