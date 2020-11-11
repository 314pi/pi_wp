<?php

/*************
 * Header Main
 *************/

Magicpi_Option::add_section( 'main_bar', array(
	'title'       => __( 'Header Main', 'magicpi-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_header_layout',
    'label'       => __( '', 'magicpi-admin' ),
    'section'     => 'main_bar',
    'default'     => '<div class="options-title-divider">Layout</div>',
) );


Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'header_width',
	'label'       => __( 'Header Width', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => 'container',
	'transport' => 'postMessage',
	'choices'     => array(
		'container' => $image_url . 'container.svg',
		'full-width' => $image_url . 'full-width.svg'
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'header_height',
	'label'       => __( 'Height', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => 100,
	'choices'     => array(
		'min'  => 30,
		'max'  => 500,
		'step' => 1
	),
	'transport' => 'postMessage'
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'header_color',
	'label'       => __( 'Text color', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => 'light',
	'transport' => 'postMessage',
	'choices'     => array(
		'dark' => $image_url . 'text-light.svg',
		'light' => $image_url . 'text-dark.svg'
	),
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'color-alpha',
    'alpha' => true,
    'settings'     => 'header_bg',
    'label'       => __( 'Background Color', 'magicpi-admin' ),
    'section'     => 'main_bar',
	'default'     => 'rgba(255,255,255,0.9)',
	'transport' => 'postMessage'
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'image',
    'settings'     => 'header_bg_img',
    'label'       => __( 'Background Image', 'magicpi-admin' ),
    'help' => __( 'Image is added to .header container. Try set a header background with opacity if you can not see the background image. (Drag the alpha slider in the background selector)', 'magicpi-admin' ),
    'section'     => 'main_bar',
	'default'     => "",
	'transport' => 'postMessage',
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'header_bg_img_repeat',
	'label'       => __( 'Background Repeat', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => 'repeat',
	'choices'     => $bg_repeat,
	'transport' => 'postMessage',
	'active_callback' => array(
		array(
			'setting'  => 'header_bg_img',
			'operator' => '!==',
			'value'    => '',
		),
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'box_shadow_header',
	'label'       => __( 'Add Shadow', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'transport' => 'postMessage',
	'default'     => 0,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'header_divider',
	'label'       => __( 'Add Divider', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'transport' => $transport,
	'default'     => 1,
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'html_after_header',
	'label'       => __( 'HTML after header', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => '',
	'sanitize_callback' => 'magicpi_custom_sanitize',
));


Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_nav',
    'label'       => __( '', 'magicpi-admin' ),
    'section'     => 'main_bar',
    'default'     => '<div class="options-title-divider">Navigation</div>',
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'nav_style',
	'label'       => __( 'Navigation Style', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => '',
	'transport' => $transport,
	'choices'     => $nav_styles_img
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'nav_size',
	'label'       => __( 'Nav Size', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'transport' => $transport,
	'default'     => '',
	'choices'     => $nav_sizes
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'nav_spacing',
	'label'       => __( 'Nav Spacing', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'transport' => $transport,
	'default'     => '',
	'choices'     => $nav_sizes
));


Magicpi_Option::add_field( 'option',  array(
		'type'        => 'checkbox',
		'settings'     => 'nav_uppercase',
		'label'       => __( 'Uppercase', 'magicpi-admin' ),
		'section'     => 'main_bar',
	    'transport' => $transport,
		'default'     => 1,
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'nav_height',
	'label'       => __( 'Nav Height', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default' => 16,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'nav_push',
	'label'       => __( 'Nav Push', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default' => 0,
	'choices'     => array(
		'min'  => -50,
		'max'  => 50,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color',
    'settings'     => 'type_nav_color',
    'label'       => __( 'Nav Color', 'magicpi-admin' ),
	'section'     => 'main_bar',
    'transport' => $transport
));

Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color',
    'settings'     => 'type_nav_color_hover',
    'label'       => __( 'Nav Color :hover', 'magicpi-admin' ),
	'section'     => 'main_bar',
    'transport' => $transport
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'color-alpha',
    'alpha' => true,
    'settings'     => 'header_icons_color',
    'label'       => __( 'Icons Color', 'magicpi-admin' ),
    'section'     => 'main_bar',
	'default'     => '',
	'transport' => $transport
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'color-alpha',
    'alpha' => true,
    'settings'     => 'header_icons_color_hover',
    'label'       => __( 'Icons Color :hover', 'magicpi-admin' ),
    'section'     => 'main_bar',
	'default'     => '',
	'transport' => $transport
));



Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_transparent',
    'label'       => __( '', 'magicpi-admin' ),
    'section'     => 'main_bar',
    'default'     => '<div class="options-title-divider">Transparent Header</div>',
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'header_height_transparent',
	'label'       => __( 'Height - Transparent Header', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'default'     => '',
	'transport' => 'postMessage',
	'choices'     => array(
		'min'  => 30,
		'max'  => 500,
		'step' => 1
	),
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color-alpha',
    'settings'     => 'header_bg_transparent',
    'label'       => __( 'Transparent Header Background Color', 'magicpi-admin' ),
    'section'     => 'main_bar',
	'default'     => '',
	'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
    'settings'     => 'header_bg_transparent_shade',
	'label'       => __( 'Add Shade', 'magicpi-admin' ),
	'section'     => 'main_bar',
	'transport' => 'postMessage',
	'default'     => 0,
));
