<?php

Magicpi_Option::add_section( 'lightbox', array(
	'title' => __( 'Image Lightbox', 'magicpi-admin' ),
	'panel' => 'style',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'magicpi_lightbox',
	'label'    => __( 'Enable Magicpi Lightbox', 'magicpi-admin' ),
	'section'  => 'lightbox',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'color',
	'settings'        => 'magicpi_lightbox_bg',
	'label'           => __( 'Lightbox background color', 'magicpi-admin' ),
	'section'         => 'lightbox',
	'transport'       => $transport,
	'default'         => '',
	'active_callback' => array(
		array(
			'setting'  => 'magicpi_lightbox',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

Magicpi_Option::add_field( '', array(
	'type'            => 'custom',
	'settings'        => 'custom_lightbox_gallery_layout',
	'label'           => '',
	'section'         => 'lightbox',
	'default'         => '<div class="options-title-divider">Gallery</div>',
	'active_callback' => array(
		array(
			'setting'  => 'magicpi_lightbox',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'magicpi_lightbox_multi_gallery',
	'label'           => __( 'Use multiple galleries on a page', 'magicpi-admin' ),
	'description'     => __( 'When enabled, lightbox galleries on a page are treated separately, else combined in one gallery.', 'magicpi-admin' ),
	'section'         => 'lightbox',
	'default'         => 0,
	'active_callback' => array(
		array(
			'setting'  => 'magicpi_lightbox',
			'operator' => '==',
			'value'    => true,
		),
	),
) );
