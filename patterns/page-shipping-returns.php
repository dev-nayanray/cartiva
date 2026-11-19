<?php
/**
 * Title: Shipping & returns page
 * Slug: cartiva/page-shipping-returns
 * Categories: cartiva-pages
 * Keywords: shipping, delivery, returns, refunds, policy
 * Post Types: page
 * Block Types: core/post-content
 * Viewport width: 1400
 * Description: Shipping options table, a three-step returns guide and refund details. Publish with the slug "shipping-returns".
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_steps = array(
	array( '1', __( 'Start your return', 'cartiva' ), __( 'Log in to your account or contact us with your order number within 30 days of delivery.', 'cartiva' ) ),
	array( '2', __( 'Pack it up', 'cartiva' ), __( 'Use the original packaging if you can, and include the return slip we send you.', 'cartiva' ) ),
	array( '3', __( 'Get your refund', 'cartiva' ), __( 'Once your parcel arrives, we refund the original payment method within 5 business days.', 'cartiva' ) ),
);

cartiva_page_hero( __( 'Policies', 'cartiva' ), __( 'Shipping & returns', 'cartiva' ), __( 'Fast, tracked delivery and easy 30-day returns on every order.', 'cartiva' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Shipping options', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:table {"className":"cartiva-table"} -->
	<figure class="wp-block-table cartiva-table"><table><thead><tr><th><?php esc_html_e( 'Method', 'cartiva' ); ?></th><th><?php esc_html_e( 'Delivery time', 'cartiva' ); ?></th><th><?php esc_html_e( 'Cost', 'cartiva' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( 'Standard', 'cartiva' ); ?></td><td><?php esc_html_e( '3–5 business days', 'cartiva' ); ?></td><td><?php esc_html_e( '$4.95 · free over $50', 'cartiva' ); ?></td></tr><tr><td><?php esc_html_e( 'Express', 'cartiva' ); ?></td><td><?php esc_html_e( '1–2 business days', 'cartiva' ); ?></td><td><?php esc_html_e( '$12.95', 'cartiva' ); ?></td></tr><tr><td><?php esc_html_e( 'International', 'cartiva' ); ?></td><td><?php esc_html_e( '6–12 business days', 'cartiva' ); ?></td><td><?php esc_html_e( 'Calculated at checkout', 'cartiva' ); ?></td></tr></tbody></table></figure>
	<!-- /wp:table -->
	<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
	<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Orders placed before 2pm on business days ship the same day. You will receive a tracking link by email as soon as your order leaves our warehouse.', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Returns in three steps', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_steps as $cartiva_step ) : ?>
		<!-- wp:group {"className":"cartiva-step","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group cartiva-step">
			<!-- wp:paragraph {"className":"cartiva-step__number"} -->
			<p class="cartiva-step__number"><?php echo esc_html( $cartiva_step[0] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $cartiva_step[1] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $cartiva_step[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Good to know', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:list {"className":"cartiva-check-list"} -->
	<ul class="wp-block-list cartiva-check-list">
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Items must be unused and in their original condition.', 'cartiva' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Sale items can be returned for store credit.', 'cartiva' ); ?></li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li><?php esc_html_e( 'Faulty or damaged items are always replaced free of charge.', 'cartiva' ); ?></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->
<?php
cartiva_page_cta( __( 'Where is my order?', 'cartiva' ), __( 'Check its status with your order ID and email.', 'cartiva' ), __( 'Track your order', 'cartiva' ), cartiva_page_url( 'track-order' ) );
