<?php
/**
 * Adds Pages Panel and options to the Customizer for Magicpi.
 *
 * @package Magicpi
 */

Magicpi_Option::add_section( 'pages', array(
	'title'       => __( 'Pages', 'magicpi-admin' ),
	'description' => __( 'Change the default page layout for all pages. You can also override some of these options per page in the page editor.', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'select',
	'settings' => 'pages_template',
	'label'    => __( 'Default - Page Template', 'magicpi-admin' ),
	'section'  => 'pages',
	'default'  => 'default',
	'choices'  => array(
		'default'                           => __( 'Container (Default)', 'magicpi-admin' ),
		'blank-title-center'                => __( 'Container - Center Title', 'magicpi-admin' ),
		'blank'                             => __( 'Full-Width', 'magicpi-admin' ),
		'header-on-scroll'                  => __( 'Full-Width - Header On Scroll', 'magicpi-admin' ),
		'blank-featured'                    => __( 'Full-Width - Parallax Title', 'magicpi-admin' ),
		'transparent-header'                => __( 'Full-Width - Transparent Header', 'magicpi-admin' ),
		'transparent-header-light'          => __( 'Full-Width - Transparent Header Light', 'magicpi-admin' ),
		'left-sidebar'                      => __( 'Sidebar Left', 'magicpi-admin' ),
		'blank-landingpage'                 => __( 'No Header / No Footer', 'magicpi-admin' ),
		'right-sidebar'                     => __( 'Sidebar Right', 'magicpi-admin' ),
		'single-page-nav'                   => __( 'Single Page Navigation', 'magicpi-admin' ),
		'single-page-nav-transparent'       => __( 'Single Page Navigation - Transparent Header', 'magicpi-admin' ),
		'single-page-nav-transparent-light' => __( 'Single Page Navigation - Transparent Header - Light', 'magicpi-admin' ),
		'blank-sub-nav-vertical'            => __( 'Vertical Sub Navigation', 'magicpi-admin' ),
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'default_title',
	'label'    => __( 'Show H1 Page title on the container (default), left sidebar and right sidebar templates.', 'magicpi-admin' ),
	'section'  => 'pages',
	'default'  => 0,
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'page_top_excerpt',
	'label'    => __( 'Add excerpt content to top of pages.', 'magicpi-admin' ),
	'section'  => 'pages',
	'default'  => 1,
));
