<?php
/**
 * Title: Landing footer (minimal)
 * Slug: cartiva/landing-footer
 * Categories: footer
 * Block Types: core/template-part/landing-footer
 * Inserter: no
 * Description: Copyright and the policy links that ad platforms ask for, without a menu, for sales pages and funnel steps.
 *
 * @package Cartiva
 * @since 1.1.0
 */

?>
<!-- wp:group {"align":"full","className":"cartiva-landing-footer","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull cartiva-landing-footer has-small-font-size" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color">
		<?php
		/* translators: 1: year, 2: site name. */
		echo esc_html( sprintf( __( '© %1$s %2$s. All rights reserved.', 'cartiva' ), gmdate( 'Y' ), get_bloginfo( 'name' ) ) );
		?>
		</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"cartiva-landing-footer__links"} -->
		<p class="cartiva-landing-footer__links"><a href="<?php echo esc_url( cartiva_page_url( 'shipping-returns' ) ); ?>"><?php esc_html_e( 'Shipping & returns', 'cartiva' ); ?></a> · <a href="<?php echo esc_url( cartiva_page_url( 'terms' ) ); ?>"><?php esc_html_e( 'Terms & conditions', 'cartiva' ); ?></a> · <a href="<?php echo esc_url( get_privacy_policy_url() ? get_privacy_policy_url() : cartiva_page_url( 'privacy-policy' ) ); ?>"><?php esc_html_e( 'Privacy', 'cartiva' ); ?></a> · <a href="<?php echo esc_url( cartiva_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Contact us', 'cartiva' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
