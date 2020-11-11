<?php

/*************
 * Header Main
 *************/

Magicpi_Option::add_section( 'bottom_bar', array(
	'title'       => __( 'Header Bottom', 'magicpi-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'magicpi-admin' ),
) );


Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_header_bottom_layout',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
    'default'     => '<div class="options-title-divider">Layout</div>',
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'header_bottom_height',
	'label'       => __( 'Height', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
	'default' => '',
	'choices'     => array(
		'min'  => 10,
		'max'  => 100,
		'step' => 1
	),
	'transport' => 'postMessage',
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color-alpha',
    'settings'     => 'nav_position_bg',
    'label'       => __( 'Background color', 'magicpi-admin' ),
    'section'     => 'bottom_bar',
	'default'     => "#f1f1f1",
	'transport' => 'postMessage',
));



Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_header_bottom_nav',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
    'default'     => '<div class="options-title-divider">Navigation</div>',
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'nav_style_bottom',
	'label'       => __( 'Nav Style', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
	'default'     => '',
	'transport' => $transport,
	'choices'     => $nav_styles_img
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'nav_height_bottom',
	'label'       => __( 'Nav Height', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
	'default' => 16,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'nav_size_bottom',
	'label'       => __( 'Nav Size', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
	'transport' => $transport,
	'default'     => '',
	'choices'     => $nav_sizes
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'nav_spacing_bottom',
	'label'       => __( 'Nav Spacing', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
	'transport' => $transport,
	'default'     => '',
	'choices'     => $nav_sizes
));

Magicpi_Option::add_field( 'option',  array(
		'type'        => 'checkbox',
		'settings'     => 'nav_uppercase_bottom',
		'label'       => __( 'Uppercase', 'magicpi-admin' ),
		'section'     => 'bottom_bar',
	    'transport' => $transport,
		'default'     => 1,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'nav_position_color',
	'label'       => __( 'Nav Base Color', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
	'default'     => 'light',
	'transport' => 'postMessage',
	'choices'     => array(
		'dark' => $image_url . 'text-light.svg',
		'light' => $image_url . 'text-dark.svg'
	),
));

Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color',
    'settings'     => 'type_nav_bottom_color',
    'label'       => __( 'Nav Color', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
    'transport' => $transport
));

Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color',
    'settings'     => 'type_nav_bottom_color_hover',
    'label'       => __( 'Nav Color :hover', 'magicpi-admin' ),
	'section'     => 'bottom_bar',
    'transport' => $transport
));


