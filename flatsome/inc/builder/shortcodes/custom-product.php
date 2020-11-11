<?php

$sizes = array(
	'xxsmall' => 'XX-Small',
	'xsmall'  => 'X-Small',
	'smaller' => 'Smaller',
	'small'   => 'Small',
	''        => 'Normal',
	'large'   => 'Large',
	'larger'  => 'Larger',
	'xlarge'  => 'X-Large',
	'xxlarge' => 'XX-Large',
);

add_ux_builder_shortcode( 'ux_product_gallery', array(
	'name'      => __( 'Product Gallery' ),
	'category'  => __( 'Product Page' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'overlay'   => true,
	'wrap'      => true,
	'priority'  => 9999,
	'options'   => array(
		'style' => array(
			'type'    => 'select',
			'heading' => 'Style',
			'default' => 'normal',
			'options' => array(
				'normal'     => __( 'Normal', 'magicpi-admin' ),
				'vertical'   => __( 'Vertical', 'magicpi-admin' ),
				'full-width' => __( 'Full Width', 'magicpi-admin' ),
			),
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_title', array(
	'name'      => __( 'Product Title' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'category'  => __( 'Product Page' ),
	'options'   => array(
		'size'      => array(
			'type'    => 'select',
			'heading' => 'Size',
			'default' => '',
			'options' => $sizes,
		),
		'divider'   => array(
			'type'    => 'checkbox',
			'heading' => 'Divider',
			'default' => 'true',
		),
		'uppercase' => array(
			'type'    => 'checkbox',
			'heading' => 'Uppercase',
			'default' => 'false',
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_rating', array(
	'name'      => __( 'Product Rating' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'wrap'      => false,
	'category'  => __( 'Product Page' ),
	'options'   => array(
		'count'      => array(
			'type'    => 'checkbox',
			'heading' => 'Review Count',
			'default' => 'false',
		),
		'style'      => array(
			'type'    => 'select',
			'heading' => 'Review Count Style',
			'default' => 'inline',
			'options' => array(
				'tooltip' => __( 'Tooltip', 'magicpi-admin' ),
				'stacked' => __( 'Stacked', 'magicpi-admin' ),
				'inline'  => __( 'Inline', 'magicpi-admin' ),
			),
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_price', array(
	'name'      => __( 'Product Price' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'wrap'      => false,
	'category'  => __( 'Product Page' ),
	'options'   => array(
		'size' => array(
			'type'    => 'select',
			'heading' => 'Size',
			'default' => '',
			'options' => $sizes,
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_excerpt', array(
	'name'      => __( 'Product Short Description' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'wrap'      => false,
	'category'  => __( 'Product Page' ),
) );

add_ux_builder_shortcode( 'ux_product_add_to_cart', array(
	'name'      => __( 'Product Add To Cart' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'category'  => __( 'Product Page' ),
	'options'   => array(
		'style' => array(
			'type'    => 'select',
			'heading' => 'Form Style',
			'default' => 'normal',
			'options' => array(
				'normal' => __( 'Normal', 'magicpi-admin' ),
				'flat'   => __( 'Flat', 'magicpi-admin' ),
				'minimal'   => __( 'Minimal', 'magicpi-admin' ),
			),
		),
		'size'  => array(
			'type'    => 'select',
			'heading' => 'Size',
			'default' => '',
			'options' => $sizes,
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_meta', array(
	'name'      => __( 'Product Meta' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'category'  => __( 'Product Page' ),
) );

add_ux_builder_shortcode( 'ux_product_upsell', array(
	'name'      => __( 'Product Up-sells' ),
	'category'  => __( 'Product Page' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'options'   => array(
		'style' => array(
			'type'    => 'select',
			'heading' => 'Style',
			'default' => 'sidebar',
			'options' => array(
				'sidebar' => __( 'List', 'magicpi-admin' ),
				'grid'    => __( 'Grid', 'magicpi-admin' ),
			),
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_tabs', array(
	'name'      => __( 'Product Tabs' ),
	'category'  => __( 'Product Page' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'options'   => array(
		'style' => array(
			'type'    => 'select',
			'heading' => 'Style',
			'default' => 'tabs',
			'options' => array(
				'tabs'          => __( 'Line Tabs', 'magicpi-admin' ),
				'tabs_normal'   => __( 'Tabs Normal', 'magicpi-admin' ),
				'line-grow'     => __( 'Line Tabs - Grow', 'magicpi-admin' ),
				'tabs_vertical' => __( 'Tabs vertical', 'magicpi-admin' ),
				'tabs_pills'    => __( 'Pills', 'magicpi-admin' ),
				'tabs_outline'  => __( 'Outline', 'magicpi-admin' ),
				'sections'      => __( 'Sections', 'magicpi-admin' ),
				'accordian'     => __( 'Accordian', 'magicpi-admin' ),
			),
		),
		'align' => array(
			'type'    => 'select',
			'heading' => 'Align',
			'default' => 'left',
			'options' => array(
				'left'   => __( 'Left', 'magicpi-admin' ),
				'center' => __( 'Center', 'magicpi-admin' ),
				'right'  => __( 'Right', 'magicpi-admin' ),
			),
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_related', array(
	'name'      => __( 'Product Related' ),
	'category'  => __( 'Product Page' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'options'   => array(
		'style' => array(
			'type'    => 'select',
			'heading' => 'Style',
			'default' => 'slider',
			'options' => array(
				'slider' => __( 'Slider', 'magicpi-admin' ),
				'grid'   => __( 'Grid', 'magicpi-admin' ),
			),
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_hook', array(
	'name'      => __( 'Product Hooks' ),
	'category'  => __( 'Product Page' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'options'   => array(
		'hook' => array(
			'type'    => 'select',
			'heading' => 'Hook',
			'default' => 'woocommerce_single_product_summary',
			'options' => apply_filters( 'magicpi_custom_product_single_product_hooks', array(
				'woocommerce_before_single_product_summary' => 'woocommerce_before_single_product_summary',
				'woocommerce_single_product_summary'        => 'woocommerce_single_product_summary',
				'woocommerce_after_single_product_summary'  => 'woocommerce_after_single_product_summary',
				'magicpi_custom_single_product_1'          => 'magicpi_custom_single_product_1',
				'magicpi_custom_single_product_2'          => 'magicpi_custom_single_product_2',
				'magicpi_custom_single_product_3'          => 'magicpi_custom_single_product_3',
			) ),
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_breadcrumbs', array(
	'name'      => __( 'Product Breadcrumbs' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'category'  => __( 'Product Page' ),
	'options'   => array(
		'size' => array(
			'type'    => 'select',
			'heading' => 'Size',
			'default' => '',
			'options' => $sizes,
		),
	),
) );

add_ux_builder_shortcode( 'ux_product_next_prev_nav', array(
	'name'      => __( 'Product Next/Prev' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'woo_products' ),
	'category'  => __( 'Product Page' ),
	'options'   => array(
		'class' => array(
			'type'    => 'textfield',
			'heading' => 'Class',
			'default' => '',
		),
	),
) );
