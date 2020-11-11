<?php

Magicpi_Option::add_section( 'product-page', array(
	'title' => __( 'Product Page', 'magicpi-admin' ),
	'panel' => 'woocommerce',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_product_layout',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '<div class="options-title-divider">Layout</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-image',
	'settings' => 'product_layout',
	'label'    => __( 'Product Layout', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => magicpi_product_layout(),
	'choices'  => array(
		'no-sidebar'          => $image_url . 'layout-no-sidebar.svg',
		'left-sidebar'        => $image_url . 'layout-left.svg',
		'left-sidebar-full'   => $image_url . 'layout-left-full.svg',
		'left-sidebar-small'  => $image_url . 'layout-left-small.svg',
		'right-sidebar'       => $image_url . 'layout-right.svg',
		'right-sidebar-small' => $image_url . 'layout-right-small.svg',
		'right-sidebar-full'  => $image_url . 'layout-right-full.svg',
		'gallery-wide'        => $image_url . 'layout-wide-gallery.svg',
		'stacked-right'       => $image_url . 'product-stacked.svg',
		'custom'              => $image_url . 'layout-custom.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'product_custom_layout',
	'label'           => __( 'Custom product layout', 'magicpi' ),
	'description'     => __( 'Create a custom product layout by using the UX Builder. You need to select a Block and then open it in the UX Builder from a product page in the front-end.', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		array(
			'setting'  => 'product_layout',
			'operator' => '==',
			'value'    => 'custom',
		),
	),
	'default'         => false,
	'choices'         => $blocks,
) );

$hide_on_gallery_wide   = array(
	'setting'  => 'product_layout',
	'operator' => '!==',
	'value'    => 'gallery-wide',
);
$hide_on_custom_product = array(
	'setting'  => 'product_layout',
	'operator' => '!==',
	'value'    => 'custom',
);

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'product_offcanvas_sidebar',
	'label'    => __( 'Off-canvas Sidebar for Mobile', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio-image',
	'settings'        => 'product_header',
	'label'           => __( 'Product Header', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => '',
	'active_callback' => array(
		$hide_on_gallery_wide,
		$hide_on_custom_product,
	),
	'choices'         => array(
		''                => $image_url . 'product-title.svg',
		'top'             => $image_url . 'product-title-top.svg',
		'featured'        => $image_url . 'product-title-featured.svg',
		'featured-center' => $image_url . 'product-title-featured-center.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'product_header_transparent',
	'label'    => __( 'Transparent Header', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_next_prev_nav',
	'active_callback' => array(
		$hide_on_gallery_wide,
		$hide_on_custom_product,
	),
	'label'           => __( 'Next / Prev Navigation', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => 1,
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_product_gallery',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '<div class="options-title-divider">Gallery</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'product_image_width',
	'label'           => __( 'Product Image Width', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => function () {
		return ! get_theme_mod( 'product_gallery_woocommerce' )
		       && get_theme_mod( 'product_layout' ) !== 'gallery-wide'
		       && get_theme_mod( 'product_layout' ) !== 'custom';
	},
	'transport'       => 'postMessage',
	'default'         => '6',
	'choices'         => array(
		'8' => __( '8/12', 'magicpi-admin' ),
		'7' => __( '7/12', 'magicpi-admin' ),
		'6' => __( '6/12 (50%)', 'magicpi-admin' ),
		'5' => __( '5/12', 'magicpi-admin' ),
		'4' => __( '4/12', 'magicpi-admin' ),
		'3' => __( '3/12', 'magicpi-admin' ),
		'2' => __( '2/12', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio-image',
	'settings'        => 'product_image_style',
	'label'           => __( 'Product Image Style', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => function () {
		return ! get_theme_mod( 'product_gallery_woocommerce' )
		       && get_theme_mod( 'product_layout' ) !== 'gallery-wide'
		       && get_theme_mod( 'product_layout' ) !== 'custom'
		       && get_theme_mod( 'product_layout' ) !== 'stacked-right';
	},
	'default'         => 'normal',
	'choices'         => array(
		'normal'   => $image_url . 'product-gallery.svg',
		'vertical' => $image_url . 'product-gallery-vertical.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'product_lightbox',
	'active_callback' => function() {
		return ! get_theme_mod( 'product_gallery_woocommerce' );
	},
	'label'           => __( 'Product Image Lightbox', 'magicpi-admin' ),
	'description'     => __( 'Show images in a lightbox when clicking on image in gallery. You might need to save and close Customizer for this to work properly.', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => 'default',
	'choices'         => array(
		'default'     => __( 'New WooCommerce 3.0 Lightbox', 'magicpi-admin' ),
		'magicpi'    => __( 'Magicpi Lightbox', 'magicpi-admin' ),
		'woocommerce' => __( 'Old WooCommerce Lightbox', 'magicpi-admin' ),
		'disabled'    => __( 'Disable Lightbox', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_zoom',
	'active_callback' => function () {
		return ! get_theme_mod( 'product_gallery_woocommerce' )
		       && get_theme_mod( 'product_layout' ) !== 'gallery-wide';
	},
	'label'           => __( 'Product Image Hover Zoom', 'magicpi-admin' ),
	'description'     => __( 'Show a zoomed version of image when hovering gallery', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => 0,
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_html_woocommerce_image_shortcut_product',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '<button style="margin-top: 15px; margin-bottom:15px" class="button button-primary" data-to-section="woocommerce_product_images">WooCommerce Image Settings →</button>',
) );

Magicpi_Option::add_field( '', array(
	'type'            => 'custom',
	'settings'        => 'custom_section_gallery_message',
	'label'           => __( '', 'magicpi-admin' ),
	'active_callback' => function () {
		return get_theme_mod( 'product_gallery_woocommerce' ) ? true : false;
	},
	'section'         => 'product-page',
	'default'         => '<span style="margin-top: -10px" class="description customize-control-description">The default WooCommerce gallery has been activated in section Advanced → WooCommerce. Multiple Magicpi gallery options are disabled.</span>',
) );

Magicpi_Option::add_field( '', array(
	'type'            => 'custom',
	'settings'        => 'custom_title_product_info',
	'label'           => __( '', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => '<div class="options-title-divider">Product Summary</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'product_info_align',
	'label'           => __( 'Text Align', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		$hide_on_gallery_wide,
		$hide_on_custom_product,
	),
	'default'         => 'left',
	'choices'         => array(
		'left'   => __( 'Left', 'magicpi-admin' ),
		'center' => __( 'Center', 'magicpi-admin' ),
		'right'  => __( 'Right', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'product_info_form',
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'label'           => __( 'Form Style', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => '',
	'choices'         => array(
		''     => __( 'Default', 'magicpi-admin' ),
		'flat' => __( 'Flat', 'magicpi-admin' ),
		'minimal' => __( 'Minimal', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_title_divider',
	'label'           => __( 'Product Title divider', 'magicpi-admin' ),
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'section'         => 'product-page',
	'default'         => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_sticky_cart',
	'label'           => __( 'Sticky add to cart', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_info_review_count',
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'label'           => __( 'Show Review Count', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => false,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'product_info_review_count_style',
	'label'           => __( 'Review Count Style', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		$hide_on_custom_product,
		array(
			'setting'  => 'product_info_review_count',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'         => 'inline',
	'choices'         => array(
		'tooltip' => __( 'Tooltip', 'magicpi-admin' ),
		'stacked' => __( 'Stacked', 'magicpi-admin' ),
		'inline'  => __( 'Inline', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_info_meta',
	'active_callback' => array(
		$hide_on_gallery_wide,
		$hide_on_custom_product,
	),
	'label'           => __( 'Show Meta / Categories', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'product_info_share',
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'label'           => __( 'Show Share Icons', 'magicpi-admin' ),
	'section'         => 'product-page',
	'default'         => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'cart_dropdown_show',
	'label'    => __( 'Open Cart dropdown when product is added to cart', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => 1,
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_product_tabs',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '<div class="options-title-divider">Tabs</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'product_display',
	'label'           => __( 'Product Tabs Style', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'default'         => 'tabs',
	'choices'         => array(
		'tabs'          => __( 'Line Tabs', 'magicpi-admin' ),
		'tabs_normal'   => __( 'Tabs Normal', 'magicpi-admin' ),
		'line-grow'     => __( 'Line Tabs - Grow', 'magicpi-admin' ),
		'tabs_vertical' => __( 'Tabs vertical', 'magicpi-admin' ),
		'tabs_pills'    => __( 'Pills', 'magicpi-admin' ),
		'tabs_outline'  => __( 'Outline', 'magicpi-admin' ),
		'sections'      => __( 'Sections', 'magicpi-admin' ),
		'accordian'     => __( 'Accordion', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'product_tabs_align',
	'label'           => __( 'Product Tabs Align', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'default'         => 'left',
	'choices'         => array(
		'left'   => __( 'Left', 'magicpi-admin' ),
		'center' => __( 'Center', 'magicpi-admin' ),
		'right'  => __( 'Right', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'              => 'text',
	'settings'          => 'tab_title',
	'label'             => __( 'Global custom tab title', 'magicpi-admin' ),
	'section'           => 'product-page',
	'sanitize_callback' => 'magicpi_custom_sanitize',
	'default'           => '',
) );

Magicpi_Option::add_field( 'option', array(
	'type'              => 'textarea',
	'settings'          => 'tab_content',
	'label'             => __( 'Global custom tab content', 'magicpi-admin' ),
	'section'           => 'product-page',
	'sanitize_callback' => 'magicpi_custom_sanitize',
	'default'           => '',
) );


Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_product_related',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '<div class="options-title-divider">Related / Upsell</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'product_upsell',
	'label'           => __( 'Product Upsell', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		$hide_on_gallery_wide,
		$hide_on_custom_product,
	),
	'default'         => 'sidebar',
	'choices'         => array(
		'sidebar'  => __( 'In Sidebar', 'magicpi-admin' ),
		'bottom'   => __( 'Below Description', 'magicpi-admin' ),
		'disabled' => __( 'Disabled', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'related_products',
	'label'           => __( 'Related Products Style', 'magicpi-admin' ),
	'section'         => 'product-page',
	'active_callback' => array(
		$hide_on_custom_product,
	),
	'default'         => 'slider',
	'choices'         => array(
		'slider' => __( 'Slider', 'magicpi-admin' ),
		'grid'   => __( 'Grid', 'magicpi-admin' ),
		'hidden' => __( 'Disabled', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'slider',
	'settings' => 'related_products_pr_row',
	'label'    => __( 'Products per row - Desktop', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => 4,
	'choices'  => array(
		'min'  => 1,
		'max'  => 6,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'slider',
	'settings' => 'related_products_pr_row_tablet',
	'label'    => __( 'Products per row - Tablet', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'product-page',
	'default'  => 3,
	'choices'  => array(
		'min'  => 1,
		'max'  => 4,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'slider',
	'settings' => 'related_products_pr_row_mobile',
	'label'    => __( 'Products per row - Mobile', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'product-page',
	'default'  => 2,
	'choices'  => array(
		'min'  => 1,
		'max'  => 3,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'text',
	'settings' => 'max_related_products',
	'label'    => __( 'Max number of Related Products', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '12',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_product_html',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'product-page',
	'default'  => '<div class="options-title-divider">Custom HTML</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'              => 'textarea',
	'settings'          => 'html_before_add_to_cart',
	'label'             => __( 'HTML before Add To Cart button', 'magicpi-admin' ),
	'section'           => 'product-page',
	'sanitize_callback' => 'magicpi_custom_sanitize',
	'default'           => '',
) );

Magicpi_Option::add_field( 'option', array(
	'type'              => 'textarea',
	'settings'          => 'html_after_add_to_cart',
	'label'             => __( 'HTML after Add To Cart button', 'magicpi-admin' ),
	'section'           => 'product-page',
	'sanitize_callback' => 'magicpi_custom_sanitize',
	'default'           => '',
) );
