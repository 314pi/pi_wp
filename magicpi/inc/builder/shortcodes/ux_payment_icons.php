<?php
/**
 * UX Builder Shortcodes.
 *
 * Magicpi Payment Icons Element for UX Builder.
 *
 * @author  UX Themes
 * @package Magicpi/UX Builder
 */

add_ux_builder_shortcode( 'ux_payment_icons', array(
	'name'      => __( 'Payment Icons', 'ux-builder' ),
	'category'  => __( 'Shop', 'ux-builder' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'payment-icons' ),
	'inline'    => true,
	'wrap'      => false,
	'options'   => array(
		'icons'            => array(
			'type'    => 'select',
			'heading' => 'Icons',
			'default' => get_theme_mod( 'payment_icons', array( 'visa', 'paypal', 'stripe', 'mastercard', 'cashondelivery' ) ),
			'config'  => array(
				'placeholder' => __( 'Select...', 'ux-builder' ),
				'multiple'    => true,
				'sortable'    => true,
				'options'     => magicpi_get_payment_icons_list(),
			),
		),
		'custom'           => array(
			'type'        => 'image',
			'heading'     => __( 'Custom Icons', 'ux-builder' ),
			'description' => __( 'Replace Magicpi Payment Icons', 'ux-builder' ),
			'default'     => '',
		),
		'link_options'     => require __DIR__ . '/commons/links.php',
		'advanced_options' => require __DIR__ . '/commons/advanced.php',
	),
) );
