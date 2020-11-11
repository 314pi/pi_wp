<?php

/*************
 * LOGO
 *************/

function magicpi_logo_name_customizer( $wp_customize ) {
	global $transport;
  $wp_customize->get_setting('blogname')->transport=$transport;
  $wp_customize->get_setting('blogdescription')->transport=$transport;
}
add_action( 'customize_register', 'magicpi_logo_name_customizer' );

Magicpi_Option::add_section( 'title_tagline', array(
	'title'       => __( 'Logo & Site Identity', 'magicpi-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'site_logo_slogan',
	'label'       => __( 'Display below Logo', 'magicpi-admin' ),
	'section'     => 'title_tagline',
	'transport' => $transport,
	'default'     => 0,
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'logo_position',
	'label'       => __( 'Logo position', 'magicpi-admin' ),
	'section'     => 'title_tagline',
	'transport' => 'postMessage',
	'default'     => 'left',
	'choices'     => array(
		'left' => $image_url . 'logo-left.svg',
		'center' => $image_url . 'logo-right.svg',
		//'vertical' => $image_url . 'logo-vertical.png'
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'site_logo',
	'label'       => __( 'Logo image', 'magicpi-admin' ),
	'section'     => 'title_tagline',
	'transport' => $transport,
	'default'     => get_template_directory_uri().'/assets/img/logo.png'
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'site_logo_dark',
	'label'       => __( 'Logo image - Light Version', 'magicpi-admin' ),
	'description' => __( 'Upload an alternative light logo that will be used on Dark and Transparent Header templates', 'magicpi-admin' ),
	'section'     => 'title_tagline',
	'transport' => $transport,
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'logo_width',
	'label'       => __( 'Logo container width', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'title_tagline',
	'default'     => 200,
	'choices'     => array(
		'min'  => 30,
		'max'  => 700,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'text',
  'settings'     => 'logo_max_width',
  'label'       => __( 'Logo max width (px)', 'magicpi-admin' ),
  'section'     => 'title_tagline',
  'description' => __( 'Set the logo max width in pixels. Leave it blank to make it auto fit inside the logo container.', 'magicpi-admin' ),
  'transport' => 'postMessage',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'logo_padding',
	'label'       => __( 'Logo Padding', 'magicpi-admin' ),
	'section'     => 'title_tagline',
	'default'     => 0,
	'choices'     => array(
		'min'  => 0,
		'max'  => 30,
		'step' => 1
	),
	'transport' => 'postMessage',
));
