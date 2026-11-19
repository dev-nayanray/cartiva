<?php
/**
 * Store conversion and mobile features (presentation only, no data stored):
 * sticky add to cart bar, hover image, sale percentage, sale countdown and
 * low stock note, off-canvas filters, mobile bottom bar, back to top button
 * and a visitor dark mode switch.
 *
 * Every feature can be turned on or off in Appearance > Cartiva Settings.
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Product for a block: the loop product (block context) or the current one.
 *
 * @param WP_Block|null $instance Block instance.
 * @return WC_Product|null
 */
function cartiva_store_block_product( $instance = null ) {
	$id = ( $instance instanceof WP_Block && ! empty( $instance->context['postId'] ) ) ? (int) $instance->context['postId'] : get_the_ID();
	if ( ! $id || 'product' !== get_post_type( $id ) ) {
		return null;
	}
	$product = wc_get_product( $id );
	return $product instanceof WC_Product ? $product : null;
}

/**
 * Biggest discount of a product, in percent (0 when not on sale).
 *
 * @param WC_Product $product Product.
 * @return int
 */
function cartiva_store_sale_percent( $product ) {
	if ( ! $product->is_on_sale() ) {
		return 0;
	}
	$best = 0;
	if ( $product->is_type( 'variable' ) ) {
		$prices = $product->get_variation_prices( true );
		foreach ( $prices['regular_price'] as $key => $regular ) {
			$sale = isset( $prices['sale_price'][ $key ] ) ? (float) $prices['sale_price'][ $key ] : 0;
			if ( (float) $regular > 0 && $sale < (float) $regular ) {
				$best = max( $best, ( (float) $regular - $sale ) / (float) $regular * 100 );
			}
		}
	} else {
		$regular = (float) $product->get_regular_price();
		$sale    = (float) $product->get_sale_price();
		if ( $regular > 0 && $sale < $regular ) {
			$best = ( $regular - $sale ) / $regular * 100;
		}
	}
	return (int) round( $best );
}

/**
 * Product image block: second image on hover and percentage sale badge.
 *
 * @param string   $content  Block HTML.
 * @param array    $block    Parsed block.
 * @param WP_Block $instance Block instance.
 * @return string
 */
function cartiva_store_product_image( $content, $block, $instance = null ) {
	if ( is_admin() ) {
		return $content;
	}
	$product = cartiva_store_block_product( $instance );
	if ( ! $product ) {
		return $content;
	}

	// Second image on hover (product lists only).
	if ( cartiva_get_setting( 'hover_image' ) && ! empty( $block['attrs']['isDescendentOfQueryLoop'] ) ) {
		$gallery = $product->get_gallery_image_ids();
		if ( ! empty( $gallery ) ) {
			$size  = ( isset( $block['attrs']['imageSizing'] ) && 'single' === $block['attrs']['imageSizing'] ) ? 'woocommerce_single' : 'woocommerce_thumbnail';
			$hover = wp_get_attachment_image(
				(int) $gallery[0],
				$size,
				false,
				array(
					'class'       => 'cartiva-hover-image',
					'alt'         => '',
					'aria-hidden' => 'true',
					'loading'     => 'lazy',
				)
			);
			if ( $hover ) {
				$pos = strpos( $content, '</a>' );
				if ( false !== $pos ) {
					$content = substr_replace( $content, $hover, $pos, 0 );
					$content = preg_replace( '/class="wc-block-components-product-image/', 'class="cartiva-has-hover-image wc-block-components-product-image', $content, 1 );
				}
			}
		}
	}

	return cartiva_store_sale_badge_text( $content, $product );
}

/**
 * Replace "Sale" with the discount ("-25%") in sale badges.
 *
 * @param string     $content Block HTML.
 * @param WC_Product $product Product.
 * @return string
 */
function cartiva_store_sale_badge_text( $content, $product ) {
	if ( ! cartiva_get_setting( 'sale_percent' ) || false === strpos( $content, 'product-sale-badge__text' ) ) {
		return $content;
	}
	$percent = cartiva_store_sale_percent( $product );
	if ( $percent < 1 ) {
		return $content;
	}
	/* translators: %s: discount percentage, for example 25. */
	$label = sprintf( __( '-%s%%', 'cartiva' ), number_format_i18n( $percent ) );
	return preg_replace( '/(<span class="wc-block-components-product-sale-badge__text"[^>]*>)(.*?)(<\/span>)/s', '${1}' . esc_html( $label ) . '${3}', $content, 1 );
}

/**
 * Standalone Sale Badge block (single product).
 *
 * @param string   $content  Block HTML.
 * @param array    $block    Parsed block.
 * @param WP_Block $instance Block instance.
 * @return string
 */
function cartiva_store_sale_badge_block( $content, $block, $instance = null ) {
	$product = is_admin() ? null : cartiva_store_block_product( $instance );
	return $product ? cartiva_store_sale_badge_text( $content, $product ) : $content;
}

/**
 * Sale countdown and low stock note above the add to cart form.
 *
 * @param string $content Block HTML.
 * @return string
 */
function cartiva_store_urgency( $content ) {
	if ( is_admin() || ! cartiva_get_setting( 'urgency' ) || ! is_product() ) {
		return $content;
	}
	$product = cartiva_store_block_product();
	if ( ! $product || ! $product->is_in_stock() ) {
		return $content;
	}
	$html = '';

	$end = $product->get_date_on_sale_to();
	if ( $product->is_on_sale() && $end && $end->getTimestamp() > time() && $end->getTimestamp() - time() < 31 * DAY_IN_SECONDS ) {
		$left  = $end->getTimestamp() - time();
		$days  = (int) floor( $left / DAY_IN_SECONDS );
		$hours = (int) floor( ( $left % DAY_IN_SECONDS ) / HOUR_IN_SECONDS );
		$html .= sprintf(
			'<div class="cartiva-countdown" data-end="%1$s" role="timer" aria-live="off"><span class="cartiva-countdown__label">%2$s</span><span class="cartiva-countdown__time">%3$s</span></div>',
			esc_attr( (string) $end->getTimestamp() ),
			esc_html__( 'Sale ends in', 'cartiva' ),
			/* translators: 1: days, 2: hours. */
			esc_html( sprintf( __( '%1$sd %2$sh', 'cartiva' ), number_format_i18n( $days ), number_format_i18n( $hours ) ) )
		);
	}

	if ( $product->managing_stock() ) {
		$qty       = (int) $product->get_stock_quantity();
		$threshold = (int) apply_filters( 'cartiva_low_stock_amount', max( 1, (int) wc_get_low_stock_amount( $product ) ), $product );
		if ( $qty > 0 && $qty <= $threshold ) {
			$html .= '<p class="cartiva-low-stock">' . esc_html(
				/* translators: %s: number of items left. */
				sprintf( _n( 'Hurry, only %s left in stock', 'Hurry, only %s left in stock', $qty, 'cartiva' ), number_format_i18n( $qty ) )
			) . '</p>';
		}
	}

	return '' !== $html ? '<div class="cartiva-urgency">' . $html . '</div>' . $content : $content;
}

/**
 * Sticky add to cart bar on single product pages.
 */
function cartiva_store_sticky_bar() {
	if ( ! cartiva_get_setting( 'sticky_cart' ) || ! is_product() ) {
		return;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product instanceof WC_Product || $product->is_type( 'external' ) || ! $product->is_purchasable() || ! $product->is_in_stock() ) {
		return;
	}
	$needs_options = $product->is_type( 'variable' ) || $product->is_type( 'grouped' );
	?>
	<div class="cartiva-sticky-cart" hidden>
		<div class="cartiva-sticky-cart__inner">
			<div class="cartiva-sticky-cart__product">
				<?php echo wp_kses_post( $product->get_image( 'woocommerce_gallery_thumbnail', array( 'class' => 'cartiva-sticky-cart__image', 'alt' => '' ) ) ); ?>
				<div class="cartiva-sticky-cart__text">
					<p class="cartiva-sticky-cart__title"><?php echo esc_html( $product->get_name() ); ?></p>
					<p class="cartiva-sticky-cart__price"><?php echo wp_kses_post( $product->get_price_html() ); ?></p>
				</div>
			</div>
			<button type="button" class="cartiva-sticky-cart__button" data-action="<?php echo esc_attr( $needs_options ? 'options' : 'add' ); ?>">
				<?php echo esc_html( $needs_options ? __( 'Select options', 'cartiva' ) : __( 'Add to cart', 'cartiva' ) ); ?>
			</button>
		</div>
	</div>
	<?php
}

/**
 * Mobile bottom navigation bar.
 */
function cartiva_store_mobile_bar() {
	if ( ! cartiva_get_setting( 'mobile_bar' ) || is_checkout() ) {
		return;
	}
	$items = array(
		'shop'    => array( __( 'Shop', 'cartiva' ), wc_get_page_permalink( 'shop' ) ),
		'search'  => array( __( 'Search', 'cartiva' ), add_query_arg( 'post_type', 'product', home_url( '/?s=' ) ) ),
		'account' => array( __( 'Account', 'cartiva' ), wc_get_page_permalink( 'myaccount' ) ),
		'cart'    => array( __( 'Cart', 'cartiva' ), wc_get_cart_url() ),
	);
	if ( function_exists( 'cartiva_wishlist_provider' ) && 'yith' === cartiva_wishlist_provider() ) {
		$data = cartiva_wishlist_yith_data();
		if ( '' !== $data['url'] ) {
			$items = array_slice( $items, 0, 2, true ) + array( 'wishlist' => array( __( 'Wishlist', 'cartiva' ), $data['url'] ) ) + array_slice( $items, 2, null, true );
		}
	}
	/**
	 * Filters the mobile bottom bar items: key => array( label, url ).
	 *
	 * @param array $items Items.
	 */
	$items = (array) apply_filters( 'cartiva_mobile_bar_items', $items );
	?>
	<nav class="cartiva-mobile-bar" aria-label="<?php esc_attr_e( 'Shortcuts', 'cartiva' ); ?>">
		<?php foreach ( $items as $key => $item ) : ?>
		<a class="cartiva-mobile-bar__item cartiva-mobile-bar__item--<?php echo esc_attr( sanitize_html_class( $key ) ); ?>" href="<?php echo esc_url( $item[1] ); ?>">
			<span class="cartiva-mobile-bar__icon" aria-hidden="true"></span>
			<span class="cartiva-mobile-bar__label"><?php echo esc_html( $item[0] ); ?></span>
			<?php if ( 'cart' === $key ) : ?>
			<span class="cartiva-mobile-bar__count" hidden></span>
			<?php endif; ?>
		</a>
		<?php endforeach; ?>
	</nav>
	<?php
}

/**
 * Body classes for the store features.
 *
 * @param array $classes Classes.
 * @return array
 */
function cartiva_store_body_class( $classes ) {
	if ( cartiva_get_setting( 'mobile_bar' ) && ! is_checkout() ) {
		$classes[] = 'cartiva-has-mobile-bar';
	}
	if ( cartiva_get_setting( 'offcanvas_filters' ) ) {
		$classes[] = 'cartiva-offcanvas-filters';
	}
	return $classes;
}

add_filter( 'render_block_woocommerce/product-image', 'cartiva_store_product_image', 12, 3 );
add_filter( 'render_block_woocommerce/product-sale-badge', 'cartiva_store_sale_badge_block', 10, 3 );
add_filter( 'render_block_woocommerce/add-to-cart-form', 'cartiva_store_urgency', 5 );
add_action( 'wp_footer', 'cartiva_store_sticky_bar', 5 );
add_action( 'wp_footer', 'cartiva_store_mobile_bar', 6 );
add_filter( 'body_class', 'cartiva_store_body_class' );
