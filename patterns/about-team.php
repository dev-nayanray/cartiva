<?php
/**
 * Title: About: meet the team
 * Slug: cartiva/about-team
 * Categories: cartiva-about, about, team
 * Keywords: team, people, about, staff
 * Viewport width: 1400
 * Description: Team grid with initials. Replace the initials with photos using an Image block if you like.
 *
 * @package Cartiva
 * @since 1.0.0
 */

$cartiva_team = array(
	array( 'AM', __( 'Alex Morgan', 'cartiva' ), __( 'Founder & CEO', 'cartiva' ) ),
	array( 'JR', __( 'Jamie Rivera', 'cartiva' ), __( 'Head of Design', 'cartiva' ) ),
	array( 'SK', __( 'Sam Kim', 'cartiva' ), __( 'Operations', 'cartiva' ) ),
	array( 'TP', __( 'Taylor Patel', 'cartiva' ), __( 'Customer Care', 'cartiva' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
	<p class="alignwide has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'The people', 'cartiva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"align":"wide","level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'Meet the team', 'cartiva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignwide">
		<?php foreach ( $cartiva_team as $cartiva_person ) : ?>
		<!-- wp:group {"className":"cartiva-team-card","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group cartiva-team-card">
			<!-- wp:paragraph {"className":"cartiva-team-card__avatar"} -->
			<p class="cartiva-team-card__avatar"><?php echo esc_html( $cartiva_person[0] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"textAlign":"center","fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html( $cartiva_person[1] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $cartiva_person[2] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
