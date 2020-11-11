<?php


Magicpi_Option::add_section( 'payment-icons', array(
	'title'       => __( 'Payments Icons', 'magicpi-admin' ),
	'description' => 'Note: This is not where you select payment methods. These are graphical icons that show which payment methods your shop supports. You can add these anywhere by using the shortcode [ux_payment_icons]',
	'panel'       => 'woocommerce',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'sortable',
	'settings'  => 'payment_icons',
	'label'     => __( 'Payment Icons', 'magicpi-admin' ),
	'section'   => 'payment-icons',
	'transport' => $transport,
	'multiple'  => 99,
	'default'   => array( 'visa', 'paypal', 'stripe', 'mastercard', 'cashondelivery' ),
	'choices'   => magicpi_get_payment_icons_list(),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'image',
	'settings'  => 'payment_icons_custom',
	'label'     => __( 'Custom Icons (Replace)', 'magicpi-admin' ),
	'section'   => 'payment-icons',
	'default'   => '',
	'transport' => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'multicheck',
	'settings'    => 'payment_icons_placement',
	'label'       => __( 'Placement', 'magicpi-admin' ),
	'description' => __( 'Select where you want to show the payment icons', 'magicpi-admin' ),
	'section'     => 'payment-icons',
	'default'     => '',
	'choices'     => array(
		'footer' => __( 'Absolute Footer', 'magicpi-admin' ),
		'cart'   => __( 'Cart Sidebar', 'magicpi-admin' ),
	),
) );
