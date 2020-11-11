<?php


Magicpi_Option::add_section( 'global-styles', array(
	'title'       => __( 'Global Styles', 'magicpi-admin' ),
	'panel'       => 'style',
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'button_radius',
	'label'       => __( 'Default Button Radius', 'magicpi-admin' ),
	'section'     => 'global-styles',
	'transport'   => $transport,
	'default'     => '',
));
