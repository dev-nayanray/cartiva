<?php
/**
 * Cartiva Settings: Appearance → Cartiva Settings.
 *
 * Design and layout options that the Site Editor does not cover (corner
 * style, layout width, header behaviour, product card style, ...). Colours
 * and fonts stay in Appearance → Editor → Styles.
 *
 * Stored in a single option, `cartiva_settings`, through the Settings API.
 *
 * @package Cartiva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings schema: sections, fields, types, choices and defaults.
 *
 * @return array
 */
function cartiva_settings_schema() {
	$schema = array(
		'design'  => array(
			'title'  => __( 'Design', 'cartiva' ),
			'intro'  => __( 'Shape and width of the whole site. Colors and fonts are set in Appearance > Editor > Styles.', 'cartiva' ),
			'fields' => array(
				'corners'      => array(
					'label'   => __( 'Corner style', 'cartiva' ),
					'type'    => 'select',
					'default' => 'soft',
					'choices' => array(
						'sharp'   => __( 'Sharp', 'cartiva' ),
						'soft'    => __( 'Soft (default)', 'cartiva' ),
						'rounded' => __( 'Rounded', 'cartiva' ),
					),
					'help'    => __( 'Corner radius of cards, images, fields and buttons.', 'cartiva' ),
				),
				'buttons'      => array(
					'label'   => __( 'Button shape', 'cartiva' ),
					'type'    => 'select',
					'default' => 'corners',
					'choices' => array(
						'corners' => __( 'Match corner style', 'cartiva' ),
						'square'  => __( 'Square', 'cartiva' ),
						'pill'    => __( 'Pill', 'cartiva' ),
					),
				),
				'wide_width'   => array(
					'label'   => __( 'Layout width', 'cartiva' ),
					'type'    => 'select',
					'default' => 'editor',
					'choices' => array(
						'editor' => __( 'Use the Site Editor setting', 'cartiva' ),
						'1140'   => __( 'Narrow (1140px)', 'cartiva' ),
						'1320'   => __( 'Standard (1320px)', 'cartiva' ),
						'1480'   => __( 'Wide (1480px)', 'cartiva' ),
						'1680'   => __( 'Extra wide (1680px)', 'cartiva' ),
					),
					'help'    => __( 'Maximum width of wide sections such as product grids and the header.', 'cartiva' ),
				),
				'animations'   => array(
					'label'   => __( 'Hover animations', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Lift cards and zoom images on hover', 'cartiva' ),
				),
			),
		),
		'header'  => array(
			'title'  => __( 'Header', 'cartiva' ),
			'intro'  => __( 'Change the header layout itself in Appearance > Editor > Patterns > Header.', 'cartiva' ),
			'fields' => array(
				'sticky_header' => array(
					'label'   => __( 'Sticky header', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Keep the header visible while scrolling', 'cartiva' ),
				),
				'header_shadow' => array(
					'label'   => __( 'Header shadow', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Add a soft shadow once the page scrolls', 'cartiva' ),
				),
				'show_topbar'   => array(
					'label'   => __( 'Top bar', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show the top bar above the header', 'cartiva' ),
				),
				'live_search'   => array(
					'label'   => __( 'Live search', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show suggestions in a dropdown while typing', 'cartiva' ),
				),
				'search_limit'  => array(
					'label'   => __( 'Live search results', 'cartiva' ),
					'type'    => 'select',
					'default' => '6',
					'choices' => array(
						'4' => '4',
						'6' => '6',
						'8' => '8',
					),
				),
			),
		),
		'site'    => array(
			'title'  => __( 'Site extras', 'cartiva' ),
			'intro'  => __( 'Small visitor features that work on every page.', 'cartiva' ),
			'fields' => array(
				'back_to_top' => array(
					'label'   => __( 'Back to top button', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show a button to scroll back to the top on long pages', 'cartiva' ),
				),
				'dark_toggle' => array(
					'label'   => __( 'Dark mode switch', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => false,
					'text'    => __( 'Let visitors switch the site to dark colors from the header (their choice is remembered in their browser)', 'cartiva' ),
				),
			),
		),
		'shop'    => array(
			'title'  => __( 'Shop', 'cartiva' ),
			'intro'  => __( 'Product cards in the shop, categories, search results and product sections.', 'cartiva' ),
			'fields' => array(
				'card_style'   => array(
					'label'   => __( 'Product card style', 'cartiva' ),
					'type'    => 'select',
					'default' => 'clean',
					'choices' => array(
						'clean'    => __( 'Clean (default)', 'cartiva' ),
						'bordered' => __( 'Bordered', 'cartiva' ),
						'boxed'    => __( 'Boxed', 'cartiva' ),
					),
				),
				'image_ratio'  => array(
					'label'   => __( 'Product image shape', 'cartiva' ),
					'type'    => 'select',
					'default' => 'square',
					'choices' => array(
						'square'    => __( 'Square (1:1)', 'cartiva' ),
						'portrait'  => __( 'Portrait (4:5)', 'cartiva' ),
						'tall'      => __( 'Tall (3:4)', 'cartiva' ),
						'landscape' => __( 'Landscape (4:3)', 'cartiva' ),
					),
				),
				'card_button'  => array(
					'label'   => __( 'Add to cart button', 'cartiva' ),
					'type'    => 'select',
					'default' => 'always',
					'choices' => array(
						'always' => __( 'Always visible', 'cartiva' ),
						'hover'  => __( 'Show on hover (desktop)', 'cartiva' ),
					),
				),
				'sale_badge'   => array(
					'label'   => __( 'Sale badge', 'cartiva' ),
					'type'    => 'select',
					'default' => 'pill',
					'choices' => array(
						'pill'   => __( 'Pill', 'cartiva' ),
						'square' => __( 'Square', 'cartiva' ),
					),
				),
			),
		),
		'product' => array(
			'title'  => __( 'Product page', 'cartiva' ),
			'fields' => array(
				'gallery_layout' => array(
					'label'   => __( 'Image gallery', 'cartiva' ),
					'type'    => 'select',
					'default' => 'below',
					'choices' => array(
						'below' => __( 'Slider with thumbnails below', 'cartiva' ),
						'left'  => __( 'Slider with thumbnails on the left', 'cartiva' ),
						'grid'  => __( 'All images in a grid', 'cartiva' ),
					),
				),
				'gallery_zoom'   => array(
					'label'   => __( 'Image zoom', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Zoom into the product image on hover', 'cartiva' ),
				),
				'gallery_lightbox' => array(
					'label'   => __( 'Full-screen gallery', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Open images full screen when they are clicked', 'cartiva' ),
				),
				'payment_methods' => array(
					'label'   => __( 'Payment methods', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show the payment methods you have enabled in WooCommerce under the add to cart button', 'cartiva' ),
				),
				'sticky_summary' => array(
					'label'   => __( 'Sticky product details', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Keep title, price and add to cart in view while scrolling the gallery', 'cartiva' ),
				),
				'trust_list'     => array(
					'label'   => __( 'Delivery and returns list', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show the free delivery, returns and secure checkout list under the add to cart button', 'cartiva' ),
				),
			),
		),
		'extras' => array(
			'title'  => __( 'Store extras', 'cartiva' ),
			'intro'  => __( 'Conversion and mobile features for your store. They only add small, deferred code to the pages that use them.', 'cartiva' ),
			'fields' => array(
				'sticky_cart' => array(
					'label'   => __( 'Sticky add to cart bar', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show a bar with the product and an add to cart button when shoppers scroll past the button', 'cartiva' ),
				),
				'hover_image' => array(
					'label'   => __( 'Second image on hover', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show the first gallery image when hovering a product card', 'cartiva' ),
				),
				'sale_percent' => array(
					'label'   => __( 'Discount on sale badges', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show the discount, for example -25%, instead of "Sale"', 'cartiva' ),
				),
				'urgency' => array(
					'label'   => __( 'Sale countdown and low stock', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show a countdown for scheduled sales and "Only 3 left" when stock is low', 'cartiva' ),
				),
				'offcanvas_filters' => array(
					'label'   => __( 'Filters drawer on phones', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Open the shop sidebar filters in a slide-out panel on small screens', 'cartiva' ),
				),
				'mobile_bar' => array(
					'label'   => __( 'Mobile bottom bar', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show Shop, Search, Wishlist, Account and Cart shortcuts at the bottom of the screen on phones', 'cartiva' ),
				),
			),
		),
		'wishlist' => array(
			'title'  => __( 'Wishlist', 'cartiva' ),
			'intro'  => __( 'Used when a wishlist plugin is active: YITH WooCommerce Wishlist, TI WooCommerce Wishlist or WPC Smart Wishlist. Cartiva adds the heart icons and styling; the plugin saves the lists.', 'cartiva' ),
			'fields' => array(
				'wishlist_header'  => array(
					'label'   => __( 'Header wishlist icon', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show a heart icon with the item count next to the cart', 'cartiva' ),
				),
				'wishlist_buttons' => array(
					'label'   => __( 'Heart buttons', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show a heart button on product cards and next to add to cart on product pages', 'cartiva' ),
				),
				'wishlist_account' => array(
					'label'   => __( 'Account menu', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Add "Wishlist" to the My Account menu when the plugin does not add it itself', 'cartiva' ),
				),
			),
		),
		'account' => array(
			'title'  => __( 'My Account', 'cartiva' ),
			'fields' => array(
				'account_profile' => array(
					'label'   => __( 'Profile card', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show the customer name and email above the account menu', 'cartiva' ),
				),
				'account_tiles'   => array(
					'label'   => __( 'Dashboard tiles', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Show quick links to orders, addresses and account details on the dashboard', 'cartiva' ),
				),
				'account_track_link' => array(
					'label'   => __( 'Track order link', 'cartiva' ),
					'type'    => 'checkbox',
					'default' => true,
					'text'    => __( 'Add "Track order" to the account menu (links to your Track order page, or to Orders if there is none)', 'cartiva' ),
				),
			),
		),
	);

	if ( ! cartiva_is_woocommerce_active() ) {
		unset( $schema['shop'], $schema['product'], $schema['extras'], $schema['wishlist'], $schema['account'] );
	}

	return $schema;
}

/**
 * Default values for every field (WooCommerce fields included).
 *
 * @return array
 */
function cartiva_settings_defaults() {
	static $defaults = null;
	if ( null === $defaults ) {
		$defaults = array(
			'corners'         => 'soft',
			'buttons'         => 'corners',
			'wide_width'      => 'editor',
			'animations'      => true,
			'sticky_header'   => true,
			'header_shadow'   => true,
			'show_topbar'     => true,
			'live_search'     => true,
			'search_limit'    => '6',
			'card_style'      => 'clean',
			'image_ratio'     => 'square',
			'card_button'     => 'always',
			'sale_badge'      => 'pill',
			'sticky_summary'  => true,
			'trust_list'      => true,
			'account_profile' => true,
			'account_tiles'   => true,
			'account_track_link' => true,
			'gallery_layout'     => 'below',
			'gallery_zoom'       => true,
			'gallery_lightbox'   => true,
			'payment_methods'    => true,
			'sticky_cart' => true,
			'hover_image' => true,
			'sale_percent' => true,
			'urgency' => true,
			'offcanvas_filters' => true,
			'mobile_bar' => true,
			'back_to_top' => true,
			'dark_toggle' => false,
			'wishlist_header'    => true,
			'wishlist_buttons'   => true,
			'wishlist_account'   => true,
		);
	}
	return $defaults;
}

/**
 * Get one setting.
 *
 * @param string $key Setting key.
 * @return mixed
 */
function cartiva_get_setting( $key ) {
	$defaults = cartiva_settings_defaults();
	$saved    = get_option( 'cartiva_settings', array() );
	$saved    = is_array( $saved ) ? $saved : array();
	$value    = array_key_exists( $key, $saved ) ? $saved[ $key ] : ( isset( $defaults[ $key ] ) ? $defaults[ $key ] : null );
	return apply_filters( 'cartiva_setting', $value, $key );
}

/**
 * Validate and sanitize submitted settings.
 *
 * @param mixed $input Raw input.
 * @return array
 */
function cartiva_sanitize_settings( $input ) {
	$defaults = cartiva_settings_defaults();
	$input    = is_array( $input ) ? $input : array();

	if ( ! empty( $input['_reset'] ) ) {
		add_settings_error( 'cartiva_settings', 'cartiva_settings_reset', __( 'Settings were reset to their defaults.', 'cartiva' ), 'updated' );
		return $defaults;
	}

	// Start from the saved values so sections hidden without WooCommerce keep theirs.
	$saved = get_option( 'cartiva_settings', array() );
	$clean = wp_parse_args( is_array( $saved ) ? $saved : array(), $defaults );

	foreach ( cartiva_settings_schema() as $section ) {
		foreach ( $section['fields'] as $key => $field ) {
			if ( 'checkbox' === $field['type'] ) {
				$clean[ $key ] = ! empty( $input[ $key ] );
				continue;
			}
			$value         = isset( $input[ $key ] ) ? sanitize_key( wp_unslash( $input[ $key ] ) ) : $field['default'];
			$clean[ $key ] = array_key_exists( $value, $field['choices'] ) ? (string) $value : $field['default'];
		}
	}

	return array_intersect_key( $clean, $defaults );
}

/**
 * Register the setting and its fields with the Settings API.
 */
function cartiva_register_settings() {
	register_setting(
		'cartiva_settings_group',
		'cartiva_settings',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'cartiva_sanitize_settings',
			'default'           => cartiva_settings_defaults(),
			'show_in_rest'      => false,
		)
	);

	foreach ( cartiva_settings_schema() as $section_id => $section ) {
		add_settings_section(
			'cartiva_' . $section_id,
			$section['title'],
			'cartiva_render_settings_section',
			'cartiva-settings',
			array(
				'intro'          => isset( $section['intro'] ) ? $section['intro'] : '',
				'before_section' => '<div class="cartiva-settings-card" id="cartiva-section-' . esc_attr( $section_id ) . '">',
				'after_section'  => '</div>',
			)
		);
		foreach ( $section['fields'] as $key => $field ) {
			add_settings_field(
				'cartiva_' . $key,
				$field['label'],
				'cartiva_render_settings_field',
				'cartiva-settings',
				'cartiva_' . $section_id,
				array(
					'key'       => $key,
					'field'     => $field,
					'label_for' => 'checkbox' === $field['type'] ? null : 'cartiva-setting-' . $key,
				)
			);
		}
	}
}
add_action( 'admin_init', 'cartiva_register_settings' );

/**
 * Let users who can edit the theme save the settings (options.php defaults to manage_options).
 *
 * @return string
 */
function cartiva_settings_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_cartiva_settings_group', 'cartiva_settings_capability' );

/**
 * Section intro text.
 *
 * @param array $args Section args.
 */
function cartiva_render_settings_section( $args ) {
	if ( ! empty( $args['intro'] ) ) {
		echo '<p class="description">' . esc_html( $args['intro'] ) . '</p>';
	}
}

/**
 * Render one field.
 *
 * @param array $args Field args.
 */
function cartiva_render_settings_field( $args ) {
	$key   = $args['key'];
	$field = $args['field'];
	$value = cartiva_get_setting( $key );
	$name  = 'cartiva_settings[' . $key . ']';
	$id    = 'cartiva-setting-' . $key;

	if ( 'checkbox' === $field['type'] ) {
		printf(
			'<label for="%1$s"><input type="checkbox" id="%1$s" name="%2$s" value="1" %3$s /> %4$s</label>',
			esc_attr( $id ),
			esc_attr( $name ),
			checked( (bool) $value, true, false ),
			esc_html( $field['text'] )
		);
	} else {
		printf( '<select id="%1$s" name="%2$s">', esc_attr( $id ), esc_attr( $name ) );
		foreach ( $field['choices'] as $choice => $label ) {
			printf(
				'<option value="%1$s" %2$s>%3$s</option>',
				esc_attr( $choice ),
				selected( (string) $value, (string) $choice, false ),
				esc_html( $label )
			);
		}
		echo '</select>';
	}

	if ( ! empty( $field['help'] ) ) {
		echo '<p class="description">' . esc_html( $field['help'] ) . '</p>';
	}
}

/**
 * Add Appearance → Cartiva Settings.
 */
function cartiva_add_settings_page() {
	$hook = add_theme_page(
		__( 'Cartiva Settings', 'cartiva' ),
		__( 'Cartiva Settings', 'cartiva' ),
		'edit_theme_options',
		'cartiva-settings',
		'cartiva_render_settings_page'
	);
	if ( $hook ) {
		add_action( 'admin_print_styles-' . $hook, 'cartiva_settings_page_styles' );
	}
}
add_action( 'admin_menu', 'cartiva_add_settings_page' );

/**
 * Small layout styles for the settings page only (never loaded elsewhere).
 */
function cartiva_settings_page_styles() {
	wp_register_style( 'cartiva-settings-page', false, array(), CARTIVA_VERSION );
	wp_enqueue_style( 'cartiva-settings-page' );
	wp_add_inline_style(
		'cartiva-settings-page',
		'.cartiva-settings-page .cartiva-settings-links{display:flex;flex-wrap:wrap;gap:8px;margin:12px 0 4px}'
		. '.cartiva-settings-page .cartiva-settings-card{max-width:880px;margin:16px 0;padding:4px 20px 8px;background:#fff;border:1px solid #c3c4c7;box-shadow:0 1px 1px rgba(0,0,0,.04)}'
		. '.cartiva-settings-page .cartiva-settings-card h2{margin:16px 0 4px}'
		. '.cartiva-settings-page .cartiva-settings-actions{display:flex;gap:8px;align-items:center}'
		. '.cartiva-settings-page .cartiva-settings-actions .submit{margin:0;padding:0}'
		. '.cartiva-settings-page .cartiva-settings-nav{position:sticky;top:32px;z-index:5;display:flex;flex-wrap:wrap;gap:4px 14px;max-width:880px;margin:16px 0 0;padding:10px 20px;background:#f6f7f7;border:1px solid #c3c4c7}'
		. '.cartiva-settings-page .cartiva-settings-nav a{text-decoration:none;font-weight:600}'
		. '.cartiva-settings-page .cartiva-settings-card{scroll-margin-top:90px}'
		. '.cartiva-settings-page .cartiva-start ol{margin:8px 0 12px 18px}'
		. '.cartiva-settings-page .cartiva-start li{margin:6px 0}'
		. '.cartiva-settings-page .cartiva-start .is-done{color:#008a20}'
		. '.cartiva-settings-page .cartiva-start .is-done::before{content:"\\2713  ";font-weight:700}'
	);
}

/**
 * "Getting started" checklist at the top of the settings page.
 * It only reads the site's state; nothing is created automatically.
 */
function cartiva_render_getting_started() {
	$has_wc   = class_exists( 'WooCommerce' );
	$has_list = function_exists( 'cartiva_wishlist_provider' ) && '' !== cartiva_wishlist_provider();
	$has_page = function ( $slugs ) {
		foreach ( (array) $slugs as $slug ) {
			$page = get_page_by_path( $slug );
			if ( $page instanceof WP_Post && 'publish' === $page->post_status ) {
				return true;
			}
		}
		return false;
	};
	$steps = array(
		array(
			'done' => $has_wc,
			/* translators: %s: link to install plugins. */
			'text' => sprintf( __( 'Install and activate WooCommerce (%s).', 'cartiva' ), '<a href="' . esc_url( admin_url( 'plugin-install.php?s=woocommerce&tab=search&type=term' ) ) . '">' . esc_html__( 'find it here', 'cartiva' ) . '</a>' ),
		),
		array(
			'done' => (bool) get_theme_mod( 'custom_logo' ) || has_site_icon(),
			/* translators: %s: link to the Site Editor. */
			'text' => sprintf( __( 'Add your logo and pick a header and footer design in the %s.', 'cartiva' ), '<a href="' . esc_url( admin_url( 'site-editor.php?p=%2Fpattern' ) ) . '">' . esc_html__( 'Site Editor', 'cartiva' ) . '</a>' ),
		),
		array(
			'done' => $has_page( array( 'track-order', 'order-tracking', 'track-your-order' ) ),
			'text' => __( 'Create a page called "Track order" (slug track-order). Cartiva gives it the tracking form design automatically.', 'cartiva' ),
		),
		array(
			'done' => $has_page( 'contact' ) && $has_page( 'faq' ),
			'text' => __( 'Create Contact, About, FAQ and Help center pages (slugs contact, about, faq, help-center) and insert the matching "Cartiva: Pages" pattern.', 'cartiva' ),
		),
		array(
			'done' => $has_list,
			'text' => __( 'Optional: install a free wishlist plugin (YITH WooCommerce Wishlist, TI WooCommerce Wishlist or WPC Smart Wishlist). Cartiva adds the hearts and styling.', 'cartiva' ),
		),
	);
	$done = count( array_filter( wp_list_pluck( $steps, 'done' ) ) );
	?>
	<div class="cartiva-settings-card cartiva-start">
		<h2>
			<?php
			/* translators: 1: completed steps, 2: total steps. */
			echo esc_html( sprintf( __( 'Getting started (%1$s of %2$s done)', 'cartiva' ), number_format_i18n( $done ), number_format_i18n( count( $steps ) ) ) );
			?>
		</h2>
		<ol>
			<?php foreach ( $steps as $step ) : ?>
				<li class="<?php echo esc_attr( $step['done'] ? 'is-done' : '' ); ?>"><?php echo wp_kses( $step['text'], array( 'a' => array( 'href' => array() ) ) ); ?></li>
			<?php endforeach; ?>
		</ol>
	</div>
	<?php
}

/**
 * Render the settings page.
 */
function cartiva_render_settings_page() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}
	$links = array(
		admin_url( 'site-editor.php?p=%2Fstyles' )   => __( 'Colors & fonts', 'cartiva' ),
		admin_url( 'site-editor.php?p=%2Fpattern' )  => __( 'Header & footer designs', 'cartiva' ),
		admin_url( 'site-editor.php?p=%2Ftemplate' ) => __( 'Templates', 'cartiva' ),
		admin_url( 'site-editor.php?p=%2Fpage' )     => __( 'Pages', 'cartiva' ),
	);
	?>
	<div class="wrap cartiva-settings-page">
		<h1><?php esc_html_e( 'Cartiva Settings', 'cartiva' ); ?></h1>
		<p><?php esc_html_e( 'Layout and behavior options for your store. Everything visual that can be edited block by block lives in the Site Editor:', 'cartiva' ); ?></p>
		<p class="cartiva-settings-links">
			<?php foreach ( $links as $url => $label ) : ?>
				<a class="button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</p>
		<?php settings_errors( 'cartiva_settings' ); ?>
		<?php cartiva_render_getting_started(); ?>
		<nav class="cartiva-settings-nav" aria-label="<?php esc_attr_e( 'Settings sections', 'cartiva' ); ?>">
			<?php foreach ( cartiva_settings_schema() as $section_id => $section ) : ?>
				<a href="#cartiva-section-<?php echo esc_attr( $section_id ); ?>"><?php echo esc_html( $section['title'] ); ?></a>
			<?php endforeach; ?>
		</nav>
		<?php if ( ! class_exists( 'WooCommerce' ) ) : ?>
			<p class="description"><?php esc_html_e( 'Shop, product page, store extras, wishlist and account options appear here once WooCommerce is active.', 'cartiva' ); ?></p>
		<?php endif; ?>
		<form method="post" action="options.php">
			<?php
			settings_fields( 'cartiva_settings_group' );
			do_settings_sections( 'cartiva-settings' );
			?>
			<div class="cartiva-settings-actions">
				<?php submit_button( __( 'Save settings', 'cartiva' ), 'primary', 'submit', false ); ?>
				<button type="submit" class="button" name="cartiva_settings[_reset]" value="1"><?php esc_html_e( 'Reset to defaults', 'cartiva' ); ?></button>
			</div>
		</form>
	</div>
	<?php
}

/* ---------------------------------------------------------------------------
 * Front end and editor output
 * ------------------------------------------------------------------------ */

/**
 * CSS variables generated from the settings.
 *
 * @return string
 */
function cartiva_settings_css() {
	$css   = array();
	$radii = array(
		'sharp'   => array( '2px', '4px', '6px' ),
		'soft'    => array( '6px', '12px', '20px' ),
		'rounded' => array( '10px', '18px', '28px' ),
	);
	$c     = cartiva_get_setting( 'corners' );
	if ( 'soft' !== $c && isset( $radii[ $c ] ) ) {
		$css[] = '--wp--custom--radius--sm:' . $radii[ $c ][0] . ';--wp--custom--radius--md:' . $radii[ $c ][1] . ';--wp--custom--radius--lg:' . $radii[ $c ][2] . ';';
	}

	$width = cartiva_get_setting( 'wide_width' );
	if ( 'editor' !== $width && ctype_digit( (string) $width ) ) {
		$css[] = '--wp--style--global--wide-size:' . absint( $width ) . 'px;';
	}

	$ratios = array(
		'square'    => '1 / 1',
		'portrait'  => '4 / 5',
		'tall'      => '3 / 4',
		'landscape' => '4 / 3',
	);
	$ratio  = cartiva_get_setting( 'image_ratio' );
	if ( isset( $ratios[ $ratio ] ) && 'square' !== $ratio ) {
		$css[] = '--cartiva-card-ratio:' . $ratios[ $ratio ] . ';';
	}

	$out = $css ? ':root{' . implode( '', $css ) . '}' : '';

	$buttons = cartiva_get_setting( 'buttons' );
	if ( 'square' === $buttons || 'pill' === $buttons ) {
		$radius = 'pill' === $buttons ? '999px' : '0';
		$out   .= ':root :where(.wp-element-button,.wp-block-button__link){border-radius:' . $radius . '}';
	}

	return $out;
}

/**
 * Print the settings CSS on the front end and inside the editor canvas.
 */
function cartiva_enqueue_settings_css() {
	$css = cartiva_settings_css();
	if ( '' === $css ) {
		return;
	}
	wp_register_style( 'cartiva-settings', false, array(), CARTIVA_VERSION );
	wp_enqueue_style( 'cartiva-settings' );
	wp_add_inline_style( 'cartiva-settings', $css );
}
add_action( 'enqueue_block_assets', 'cartiva_enqueue_settings_css', 20 );

/**
 * Body classes for the on/off and style settings.
 *
 * @param array $classes Body classes.
 * @return array
 */
function cartiva_settings_body_class( $classes ) {
	$map = array(
		'sticky_header'  => 'cartiva-no-sticky-header',
		'header_shadow'  => 'cartiva-no-header-shadow',
		'show_topbar'    => 'cartiva-hide-topbar',
		'sticky_summary' => 'cartiva-no-sticky-summary',
		'trust_list'     => 'cartiva-hide-product-trust',
		'animations'     => 'cartiva-no-hover-motion',
	);
	foreach ( $map as $key => $class ) {
		if ( ! cartiva_get_setting( $key ) ) {
			$classes[] = $class;
		}
	}
	$classes[] = 'cartiva-cards-' . sanitize_html_class( cartiva_get_setting( 'card_style' ) );
	if ( 'hover' === cartiva_get_setting( 'card_button' ) ) {
		$classes[] = 'cartiva-cards-hover-button';
	}
	if ( 'square' === cartiva_get_setting( 'sale_badge' ) ) {
		$classes[] = 'cartiva-sale-badge-square';
	}
	$classes[] = 'cartiva-gallery-' . sanitize_html_class( cartiva_get_setting( 'gallery_layout' ) );
	return $classes;
}
add_filter( 'body_class', 'cartiva_settings_body_class' );
