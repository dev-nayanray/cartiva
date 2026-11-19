<?php
/**
 * Title: Blog home
 * Slug: cartiva/template-home
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1,"align":"wide"} -->
	<h1 class="wp-block-heading alignwide"><?php esc_html_e( 'Blog', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:pattern {"slug":"cartiva/posts-grid"} /-->
</main>
<!-- /wp:group -->
