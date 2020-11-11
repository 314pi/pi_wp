<?php

/*************
 * Header Dropdown Style
 *************/

Magicpi_Option::add_section( 'header_dropdown', array(
	'title'       => __( 'Dropdown Style', 'magicpi-admin' ),
	'panel'       => 'header',
) );


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color-alpha',
    'settings'     => 'dropdown_bg',
    'transport' => 'postMessage',
    'label'       => __( 'Background color', 'magicpi-admin' ),
    'section'     => 'header_dropdown',
	'default'     => '',
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color-alpha',
    'settings'     => 'dropdown_border',
    'transport' => 'postMessage',
    'label'       => __( 'Border Color', 'magicpi-admin' ),
    'section'     => 'header_dropdown',
	'default'     => '',
));


Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'dropdown_arrow',
	'label'     => __( 'Display arrow on dropdown pane', 'magicpi-admin' ),
	'transport' => $transport,
	'section'   => 'header_dropdown',
	'default'   => 1,
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'dropdown_nav_size',
	'label'       => __( 'Dropdown Content Size (%)', 'magicpi-admin' ),
	'section'     => 'header_dropdown',
	'default'     => 100,
	'choices'     => array(
		'min'  => 50,
		'max'  => 200,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'dropdown_radius',
    'label'       => __( 'Dropdown radius', 'magicpi-admin' ),
    'section'     => 'header_dropdown',
    'transport' => 'postMessage',
	'default'     => '0',
	'choices'     => array(
		'0' => __( '0px', 'magicpi-admin' ),
		'3px' => __( '3px', 'magicpi-admin' ),
		'5px' => __( '5px', 'magicpi-admin' ),
		'10px' => __( '10px', 'magicpi-admin' ),
		'15px' => __( '15px', 'magicpi-admin' ),
	),
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'dropdown_text',
    'label'       => __( 'Text Color', 'magicpi-admin' ),
    'section'     => 'header_dropdown',
    'transport' => 'postMessage',
	'default'     => 'light',
	'choices'     => array(
		'light' => __( 'Dark', 'magicpi-admin' ),
		'dark' => __( 'Light', 'magicpi-admin' ),
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'dropdown_style',
	'transport' => 'postMessage',
	'label'       => __( 'Link Style', 'magicpi-admin' ),
	'section'     => 'header_dropdown',
	'default'     => 'default',
	'choices'     => array(
		'simple' => $image_url . 'dropdown-style-1.svg',
		'default' => $image_url . 'dropdown-style-2.svg',
		'bold' => $image_url . 'dropdown-style-3.svg'
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'dropdown_text_style',
	'transport' => 'postMessage',
    'label'       => __( 'Text Style', 'magicpi-admin' ),
    'section'     => 'header_dropdown',
	'default'     => 'simple',
	'choices'     => array(
		'simple' => __( 'Simple', 'magicpi-admin' ),
		'uppercase' => __( 'UPPERCASE', 'magicpi-admin' ),
	),
));
