<?php
/**
 * Title: Search results
 * Slug: cartiva/template-search
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:query-title {"type":"search","align":"wide"} /-->
	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'cartiva' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'cartiva' ); ?>","align":"wide"} /-->
	<!-- wp:pattern {"slug":"cartiva/posts-grid"} /-->
</main>
<!-- /wp:group -->
