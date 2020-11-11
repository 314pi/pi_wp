<?php

Magicpi_Option::add_panel( 'style', array(
  'title'       => __( 'Style', 'magicpi-admin' ),
) );

Magicpi_Option::add_section( 'custom-css', array(
	'title'       => __( 'Custom CSS', 'magicpi-admin' ),
	'panel'       => 'style',
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'code',
	'settings'     => 'html_custom_css',
	'label'       => __( 'Custom CSS', 'magicpi-admin' ),
	'section'     => 'custom-css',
	'transport'   => $transport,
	'placeholder' => '.add-css-here{}',
  'choices'     => array(
    'language' => 'css',
  ),
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'code',
	'settings'     => 'html_custom_css_tablet',
	'label'       => __( 'Custom Tablet CSS', 'magicpi-admin' ),
	'section'     => 'custom-css',
	'default'     => '',
  'placeholder' => '.add-css-here{}',
	'transport'   => $transport,
  'choices'     => array(
    'language' => 'css',
  ),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'code',
	'settings'     => 'html_custom_css_mobile',
	'label'       => __( 'Custom Mobile CSS', 'magicpi-admin' ),
	'section'     => 'custom-css',
	'default'     => '',
  'placeholder' => '.add-css-here{}',
	'transport'   => $transport,
  'choices'     => array(
    'language' => 'css',
  ),
));
