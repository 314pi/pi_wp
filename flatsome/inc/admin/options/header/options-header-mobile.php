<?php

/*************
 * Header Mobile
 *************/

Magicpi_Option::add_section( 'header_mobile', array(
	'title'       => __( 'Header Mobile Menu / Overlay', 'magicpi-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'magicpi-admin' ),
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'header_height_mobile',
	'label'       => __( 'Mobile Header Height', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'default'     => '70',
	'choices'     => array(
		'min'  => 30,
		'max'  => 500,
		'step' => 1
	),
	'transport' => 'postMessage'
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'logo_position_mobile',
	'label'       => __( 'Logo position', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'transport' => $transport,
	'default'     => 'center',
	'choices'     => array(
		'left' => $image_url . 'logo-left.svg',
		'center' => $image_url . 'logo-right.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'menu_icon_style',
	'label'       => __( 'Menu Icon Style', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'default'     => '',
	'transport' => $transport,
	'choices'     => array(
		'' => $image_url . 'nav-icon-plain.svg',
		'outline' => $image_url . 'nav-icon-outline.svg',
		'fill' => $image_url . 'nav-icon-fill.svg',
		'fill-round' => $image_url . 'nav-icon-fill-round.svg',
		'outline-round' => $image_url . 'nav-icon-outline-round.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'menu_icon_title',
	'label'       => __( 'Show Menu title', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'transport' => $transport,
	'default'     => 0,
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'mobile_overlay',
	'label'       => __( 'Menu Overlay', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'transport'	  => $transport,
	'default'     => 'left',
	'choices'     => array(
		'left' => $image_url . 'overlay-left.svg',
		'right' => $image_url . 'overlay-right.svg',
		'center' => $image_url . 'overlay-center.svg'
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio',
	'settings'    => 'mobile_submenu_parent_behavior',
	'label'       => __( 'Menu item behavior', 'magicpi' )  . ' (NEW)',
	'description' => __( 'Click behavior for menu items with a submenu', 'magicpi' ),
	'section'     => 'header_mobile',
	'transport'   => 'refresh',
	'default'     => '',
	'choices'     => array(
		''       => __( 'Open link', 'magicpi' ),
		'toggle' => __( 'Toggle submenu', 'magicpi' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio',
	'settings'        => 'mobile_submenu_effect',
	'label'           => __( 'Submenu effect', 'magicpi' ) . ' (NEW)',
	'section'         => 'header_mobile',
	'transport'       => 'refresh',
	'default'         => 'accordion',
	'choices'         => array(
		'accordion' => __( 'Accordion', 'magicpi' ),
		'slide'     => __( 'Slide', 'magicpi' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'mobile_overlay',
			'operator' => '!=',
			'value'    => 'center',
		),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'select',
	'settings'        => 'mobile_submenu_levels',
	'label'           => __( 'Submenu levels', 'magicpi' ) . ' (NEW)',
	'section'         => 'header_mobile',
	'transport'       => 'refresh',
	'default'         => '1',
	'choices'         => array(
		'1' => __( '1 level', 'magicpi' ),
		'2' => __( '2 levels', 'magicpi' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'mobile_overlay',
			'operator' => '!=',
			'value'    => 'center',
		),
		array(
			'setting'  => 'mobile_submenu_effect',
			'operator' => '===',
			'value'    => 'slide',
		),
	),
) );

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'sortable',
  'settings'     => 'mobile_sidebar',
  'label'       => __( 'Menu Elements', 'magicpi-admin' ),
  'section'     => 'header_mobile',
  'transport'   => $transport,
  'multiple' => 10,
  'default'     => magicpi_header_mobile_sidebar(),
  'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'mobile_overlay_color',
	'label'       => __( 'Overlay Color', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'transport'	  => $transport,
	'default'     => '',
	'choices'     => array(
		'' => $image_url . 'text-dark.svg',
		'dark' => $image_url . 'text-light.svg',
	),
));


Magicpi_Option::add_field( 'option',  array(
    'type'        => 'color-alpha',
    'settings'     => 'mobile_overlay_bg',
    'label'       => __( 'Background Color', 'magicpi-admin' ),
	'section'     => 'header_mobile',
	'default'     => '',
	'transport' => 'postMessage'
));
