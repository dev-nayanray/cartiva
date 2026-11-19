<?php
/**
 * Title: 404
 * Slug: cartiva/hidden-404
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Page not found', 'cartiva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'The page you are looking for does not exist or has moved. Try a search instead.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search label', 'cartiva' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search…', 'search placeholder', 'cartiva' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button', 'cartiva' ); ?>"} /-->
</div>
<!-- /wp:group -->
