<?php
/**
 * Style & Colors
 */

Magicpi_Option::add_section( 'colors', array(
	'title' => __( 'Colors', 'magicpi-admin' ),
	'panel' => 'style',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_colors_main',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'colors',
	'default'  => '<div class="options-title-divider">Main Colors</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color',
	'settings'    => 'color_primary',
	'label'       => __( 'Primary Color', 'magicpi-admin' ),
	'description' => __( 'Change primary color.', 'magicpi-admin' ),
	'section'     => 'colors',
	'default'     => Magicpi_Default::COLOR_PRIMARY,
	'transport'   => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color',
	'settings'    => 'color_secondary',
	'transport'   => $transport,
	'label'       => __( 'Secondary Color', 'magicpi-admin' ),
	'description' => __( 'Change secondary color.', 'magicpi-admin' ),
	'default'     => Magicpi_Default::COLOR_SECONDARY,
	'section'     => 'colors',
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color',
	'settings'    => 'color_success',
	'transport'   => $transport,
	'label'       => __( 'Success Color', 'magicpi-admin' ),
	'description' => __( 'Change the success color. Used for global success messages.', 'magicpi-admin' ),
	'section'     => 'colors',
	'default'     => Magicpi_Default::COLOR_SUCCESS,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color',
	'settings'    => 'color_alert',
	'transport'   => $transport,
	'label'       => __( 'Alert Color', 'magicpi-admin' ),
	'description' => __( 'Change the alert color. Used for global error messages etc.', 'magicpi-admin' ),
	'section'     => 'colors',
	'default'     => Magicpi_Default::COLOR_ALERT,
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_color_type',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'colors',
	'default'  => '<div class="options-title-divider">Type</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color',
	'settings'    => 'color_texts',
	'label'       => __( 'Base Color', 'magicpi-admin' ),
	'description' => __( 'Used for all normal texts.', 'magicpi-admin' ),
	'section'     => 'colors',
	'default'     => '#777',
	'transport'   => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color',
	'settings'    => 'type_headings_color',
	'label'       => __( 'Headline Color', 'magicpi-admin' ),
	'description' => __( 'Used for all headlines on white backgrounds. (H1, H2, H3 etc.)', 'magicpi-admin' ),
	'section'     => 'colors',
	'default'     => '#555',
	'transport'   => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'color-alpha',
	'settings'    => 'color_divider',
	'label'       => __( 'Divider Color', 'magicpi-admin' ),
	'description' => __( 'Used for dividers.', 'magicpi-admin' ),
	'section'     => 'colors',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_type_links',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'colors',
	'default'  => '<div class="options-title-divider">Links</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color',
	'settings'  => 'color_links',
	'label'     => __( 'Link Colors', 'magicpi-admin' ),
	'section'   => 'colors',
	'default'   => '#4e657b',
	'transport' => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color',
	'settings'  => 'color_links_hover',
	'label'     => __( 'Link Colors:hover', 'magicpi-admin' ),
	'section'   => 'colors',
	'default'   => '#111',
	'transport' => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color',
	'settings'  => 'color_widget_links',
	'label'     => __( 'Widget Link Colors', 'magicpi-admin' ),
	'section'   => 'colors',
	'default'   => '',
	'transport' => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color',
	'settings'  => 'color_widget_links_hover',
	'label'     => __( 'Widget Link Colors:Hover', 'magicpi-admin' ),
	'section'   => 'colors',
	'default'   => '',
	'transport' => $transport,
) );

if ( is_woocommerce_activated() ) {
	Magicpi_Option::add_field( '', array(
		'type'     => 'custom',
		'settings' => 'custom_title_colors_shop',
		'label'    => __( '', 'magicpi-admin' ),
		'section'  => 'colors',
		'default'  => '<div class="options-title-divider">Shop Colors</div>',
	) );

	Magicpi_Option::add_field( 'option', array(
		'type'        => 'color',
		'settings'    => 'color_checkout',
		'label'       => __( 'Add to cart / Checkout buttons', 'magicpi-admin' ),
		'description' => __( 'Change color for checkout buttons. Default is Secondary color', 'magicpi-admin' ),
		'section'     => 'colors',
		'transport'   => $transport,
	) );

	Magicpi_Option::add_field( 'option', array(
		'type'        => 'color',
		'settings'    => 'color_sale',
		'label'       => __( 'Sale bubble', 'magicpi-admin' ),
		'description' => __( 'Change color of sale bubble. Default is Secondary color', 'magicpi-admin' ),
		'section'     => 'colors',
		'transport'   => $transport,
	) );

	Magicpi_Option::add_field( 'option', array(
		'type'        => 'color',
		'settings'    => 'color_new_bubble',
		'label'       => __( 'New bubble', 'magicpi-admin' ),
		'description' => __( 'Change color of the "New" bubble.', 'magicpi-admin' ),
		'section'     => 'colors',
		'transport'   => $transport,
	) );

	Magicpi_Option::add_field( 'option', array(
		'type'        => 'color',
		'settings'    => 'color_review',
		'label'       => __( 'Review Stars', 'magicpi-admin' ),
		'description' => __( 'Change color of review stars', 'magicpi-admin' ),
		'section'     => 'colors',
		'transport'   => $transport,
	) );

	Magicpi_Option::add_field( 'option', array(
		'type'        => 'color',
		'settings'    => 'color_regular_price',
		'label'       => __( 'Regular Price', 'magicpi-admin' ),
		'description' => __( 'Change color of the regular price of an on sale product.', 'magicpi-admin' ),
		'section'     => 'colors',
		'transport'   => $transport,
	) );

	Magicpi_Option::add_field( 'option', array(
		'type'        => 'color',
		'settings'    => 'color_sale_price',
		'label'       => __( 'Sale Price', 'magicpi-admin' ),
		'description' => __( 'Change color of the sale price.', 'magicpi-admin' ),
		'section'     => 'colors',
		'transport'   => $transport,
	) );
}
