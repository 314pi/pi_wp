<?php
/*****
 * Contact
 *************/
Magicpi_Option::add_section( 'header_contact', array(
	'title'       =>  __( 'Contact', 'magicpi-admin' ),
	'panel'       => 'header',
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'contact_style',
	'label'       => __( 'Icon Style', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => 'left',
	'choices'     => array(
		'left' => __( 'Icons Left', 'magicpi-admin' ),
		'icons' => __( 'Icons Only', 'magicpi-admin' ),
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_icon_size',
	'label'       => __( 'Icon Size', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '16px',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_phone',
	'label'       => __( 'Phone', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '+47 900 99 000',
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_email',
	'label'       => __( 'E-mail', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => 'youremail@gmail.com',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_email_label',
	'label'       => __( 'E-mail label', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '',
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_location',
	'label'       => __( 'Location', 'magicpi-admin' ),
	'help'        => __( 'Type in the location of your place or shop. It will open in a new window on Google Maps', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_location_label',
	'label'       => __( 'Location label', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'contact_hours',
	'label'       => __( 'Open Hours', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '08:00 - 17:00',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'contact_hours_details',
	'label'       => __( 'Open Hours - Details', 'magicpi-admin' ),
	'section'     => 'header_contact',
	'transport' => $transport,
	'default'     => '',
));

function magicpi_refresh_header_contact_partials( WP_Customize_Manager $wp_customize ) {

	if ( ! isset( $wp_customize->selective_refresh ) ) {
	      return;
	 }

	$wp_customize->selective_refresh->add_partial( 'header-contact', array(
	    'selector' => '.header-contact-wrapper',
	    'container_inclusive' => true,
	    'settings' => array('contact_location_label','contact_email_label','contact_icon_size','contact_style','contact_location','contact_phone','contact_email','contact_hours_details','contact_hours','contact_hours'),
	    'render_callback' => function() {
	         get_template_part('template-parts/header/partials/element','contact');
	    },
	) );
	
}
add_action( 'customize_register', 'magicpi_refresh_header_contact_partials' );
