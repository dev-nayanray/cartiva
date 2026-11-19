<?php
/**
 * Title: Product trust list
 * Slug: cartiva/hidden-product-trust
 * Inserter: no
 *
 * @package Cartiva
 * @since 1.5.0
 */

?>
<!-- wp:list {"className":"cartiva-trust-list","fontSize":"small"} -->
<ul class="wp-block-list cartiva-trust-list has-small-font-size">
	<!-- wp:list-item {"className":"cartiva-trust-list__shipping"} -->
	<li class="cartiva-trust-list__shipping"><strong><?php esc_html_e( 'Free delivery', 'cartiva' ); ?></strong> <?php esc_html_e( 'on orders over $50', 'cartiva' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item {"className":"cartiva-trust-list__returns"} -->
	<li class="cartiva-trust-list__returns"><strong><?php esc_html_e( '30-day returns', 'cartiva' ); ?></strong> <?php esc_html_e( 'no questions asked', 'cartiva' ); ?></li>
	<!-- /wp:list-item -->
	<!-- wp:list-item {"className":"cartiva-trust-list__secure"} -->
	<li class="cartiva-trust-list__secure"><strong><?php esc_html_e( 'Secure checkout', 'cartiva' ); ?></strong> <?php esc_html_e( 'encrypted payments', 'cartiva' ); ?></li>
	<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
