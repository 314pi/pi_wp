<?php

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textfield',
	'settings'     => 'nav_position',
	'label'       => __( 'Nav Position', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textfield',
	'settings'     => 'search_pos',
	'label'       => __( 'Search Position', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'default'     => '',
));