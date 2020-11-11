<?php

/*************
 * Layout Panel
 *************/

Magicpi_Option::add_section( 'layout', array(
	'title'       => __( 'Layout', 'magicpi-admin' ),
	//'description' => __( 'Change the Layout', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-buttonset',
	'settings'     => 'body_layout',
	'label'       => __( 'Layout Mode', 'magicpi-admin' ),
	'description' => __( 'Select Full width, boxed or framed layout', 'magicpi-admin' ),
	'section'     => 'layout',
	'default'     => 'full-width',
	'transport' => 'postMessage',
	'choices'     => array(
		'full-width' => __( 'Full Width', 'magicpi-admin' ),
		'boxed' => __( 'Boxed', 'magicpi-admin' ),
		'framed' => __( 'Framed', 'magicpi-admin' ),
	),
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'box_shadow',
	'label'       => __( 'Add Drop Shadow to Content box', 'magicpi-admin' ),
	'section'     => 'layout',
	'transport' => 'postMessage',
	'active_callback' => array(
		array(
			'setting'  => 'body_layout',
			'operator' => '!==',
			'value'    => 'full-width',
		),
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'number',
	'settings'    => 'site_width_boxed',
	'label'       => __( 'Site width (px)', 'magicpi-admin' ),
	'section'     => 'layout',
	'transport'   => 'postMessage',
	'default'     => '1170',
	'active_callback' => array(
		array(
			'setting'  => 'body_layout',
			'operator' => '!==',
			'value'    => 'full-width',
		),
	),
	'choices'     => [
		'min'  => 560,
		'max'  => 1600,
		'step' => 10,
	],
));

Magicpi_Option::add_field( 'option',  array(
 	'type'        => 'color',
  'settings'     => 'body_bg',
  'label'       => __( 'Background Color', 'magicpi-admin' ),
  'section'     => 'layout',
	'default'     => "",
	'transport' => 'postMessage',
	'active_callback' => array(
		array(
			'setting'  => 'body_layout',
			'operator' => '!==',
			'value'    => 'full-width',
		),
	),
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'image',
    'settings'     => 'body_bg_image',
    'label'       => __( 'Background Image', 'magicpi-admin' ),
    'section'     => 'layout',
	'default'     => "",
	'transport' => 'postMessage',
	'active_callback' => array(
		array(
			'setting'  => 'body_layout',
			'operator' => '!==',
			'value'    => 'full-width',
		),
	),
));


Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-buttonset',
	'settings'     => 'body_bg_type',
	'label'       => __( 'Background Repeat', 'magicpi-admin' ),
	'section'     => 'layout',
	'default'     => 'bg-full-size',
	'transport' => 'postMessage',
	'choices'     => array(
		'bg-full-size' => __( 'Full Size', 'magicpi-admin' ),
		'bg-tiled' => __( 'Tiled', 'magicpi-admin' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'body_layout',
			'operator' => '!==',
			'value'    => 'full-width',
		),
		array(
			'setting'  => 'body_bg_image',
			'operator' => '!==',
			'value'    => '',
		),
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'number',
	'settings'    => 'site_width',
	'label'       => __( 'Container width (px)', 'magicpi-admin' ),
	'description' => __( 'Set the default width of content containers. (Header, Rows etc.)', 'magicpi-admin' ),
	'section'     => 'layout',
	'transport'   => 'postMessage',
	'default'     => '1080',
	'choices'     => [
		'min'  => 560,
		'max'  => 1600,
		'step' => 10,
	],
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'content_color',
	'label'       => __( 'Content Color', 'magicpi-admin' ),
	'description' => __( 'Light or Dark content text color', 'magicpi-admin' ),
	'section'     => 'layout',
	'default'     => 'light',
	'transport' => 'postMessage',
	'choices'     => array(
		'light' => $image_url . 'text-dark.svg',
		'dark' => $image_url . 'text-light.svg'
	),
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color',
    'settings'     => 'content_bg',
    'label'       => __( 'Content Background', 'magicpi-admin' ),
    'section'     => 'layout',
	'default'     => "",
	'transport' => 'postMessage',
));
