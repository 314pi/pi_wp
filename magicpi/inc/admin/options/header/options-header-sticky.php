<?php
/**
 * Header Sticky
 *
 * @package Magicpi/Admin/Options/Header
 */

Magicpi_Option::add_section( 'header_sticky', array(
	'title' => __( 'Sticky Header', 'magicpi-admin' ),
	'panel' => 'header',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'header_height_sticky',
	'label'     => __( 'Header Height on Sticky', 'magicpi-admin' ),
	'section'   => 'header_sticky',
	'transport' => $transport,
	'default'   => 70,
	'choices'   => array(
		'min'  => 30,
		'max'  => 300,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'sticky_logo_padding',
	'label'     => __( 'Sticky Logo Padding', 'magicpi-admin' ),
	'section'   => 'header_sticky',
	'default'   => 0,
	'choices'   => array(
		'min'  => 0,
		'max'  => 30,
		'step' => 1,
	),
	'transport' => 'postMessage',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'nav_height_sticky',
	'label'     => __( 'Nav Height on Sticky', 'magicpi-admin' ),
	'section'   => 'header_sticky',
	'default'   => '',
	'choices'   => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'topbar_sticky',
	'label'    => __( 'Top Bar - Sticky on Scroll', 'magicpi-admin' ),
	'section'  => 'header_sticky',
	'default'  => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'header_sticky',
	'label'    => __( 'Header Main - Sticky on Scroll', 'magicpi-admin' ),
	'section'  => 'header_sticky',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'bottombar_sticky',
	'label'    => __( 'Header Bottom - Sticky on Scroll', 'magicpi-admin' ),
	'section'  => 'header_sticky',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'select',
	'settings' => 'sticky_style',
	'label'    => __( 'Sticky Style', 'magicpi-admin' ),
	'section'  => 'header_sticky',
	'default'  => 'jump',
	'choices'  => array(
		'jump'   => __( 'Jump Down', 'magicpi-admin' ),
		'fade'   => __( 'Fade', 'magicpi-admin' ),
		'shrink' => __( 'Shrink', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'sticky_hide_on_scroll',
	'label'    => __( 'Hide sticky when scrolling down', 'magicpi-admin' ),
	'section'  => 'header_sticky',
	'default'  => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'image',
	'settings'  => 'site_logo_sticky',
	'label'     => __( 'Custom Sticky Logo', 'magicpi-admin' ),
	'section'   => 'header_sticky',
	'transport' => $transport,
	'default'   => '',
) );
