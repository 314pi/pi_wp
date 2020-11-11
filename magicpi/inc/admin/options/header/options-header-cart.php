<?php

/*************
 * - Cart
 *************/

Magicpi_Option::add_section( 'header_cart', array(
	'title'       => __( 'Cart', 'magicpi-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_cart_style',
	'label'       => __( 'Cart Style', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'transport' => $transport,
	'default'     => 'dropdown',
	'choices'     => array(
		'dropdown' => __( 'Dropdown', 'magicpi-admin' ),
		'off-canvas' => __( 'Off-Canvas Sidebar', 'magicpi-admin' ),
		'link' => __( 'Link Only', 'magicpi-admin' ),
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'cart_icon_style',
	'label'       => __( 'Cart Icon Style', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'transport' => $transport,
	'default'     => '',
	'choices'     => array(
		'' => $image_url . 'cart-icon-default.svg',
		'plain' => $image_url . 'cart-icon-plain.svg',
		'outline' => $image_url . 'cart-icon-outline.svg',
		'fill' => $image_url . 'cart-icon-fill.svg',
		'fill-round' => $image_url . 'cart-icon-fill-round.svg',
		'outline-round' => $image_url . 'cart-icon-outline-round.svg',
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'cart_icon',
	'label'       => __( 'Cart Icon', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'transport' => $transport,
	'default'     => 'basket',
	'choices'     => array(
		'basket' => $image_url . 'cart-icon-basket.svg',
		'cart' => $image_url . 'cart-icon-cart.svg',
		'bag' => $image_url . 'cart-icon-bag.svg',
	),
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'custom_cart_icon',
	'label'       => __( 'Custom Cart Icon', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'transport' => $transport,
	'default'     => '',
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'header_cart_total',
	'label'       => __( 'Show cart totals', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'transport' => $transport,
	'default'     => 1,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'header_cart_title',
	'label'       => __( 'Show cart title', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'transport' => $transport,
	'default'     => 1,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'html_cart_header',
	'transport' => $transport,
	'label'       => __( 'Custom Content after Cart', 'magicpi-admin' ),
	'description' => __( 'Add Any HTML or Shortcode here...', 'magicpi-admin' ),
	'section'     => 'header_cart',
	'sanitize_callback' => 'magicpi_custom_sanitize',
));

function magicpi_refresh_header_cart_partials( WP_Customize_Manager $wp_customize ) {

	if ( ! isset( $wp_customize->selective_refresh ) ) {
	      return;
	}

	// Cart
	$wp_customize->selective_refresh->add_partial( 'header-cart', array(
	    'selector' => '.cart-item',
	    'container_inclusive' => true,
	    'settings' => array('cart_icon','header_cart_style','cart_icon_style','custom_cart_icon','header_cart_total','header_cart_title','html_cart_header'),
	    'render_callback' => function() {
	        get_template_part('template-parts/header/partials/element','cart');
	    },
	) );

	// Cart
	$wp_customize->selective_refresh->add_partial( 'header-cart', array(
	    'selector' => '.header-nav .cart-item',
	    'container_inclusive' => true,
	    'settings' => array('cart_icon','header_cart_style','cart_icon_style','custom_cart_icon','header_cart_total','header_cart_title','html_cart_header'),
	    'render_callback' => function() {
	        get_template_part('template-parts/header/partials/element','cart');
	    },
	) );

	$wp_customize->selective_refresh->add_partial( 'header-cart-mobile', array(
	    'selector' => '.mobile-nav .cart-item',
	    'container_inclusive' => true,
	    'settings' => array('cart_icon','header_cart_style','cart_icon_style','custom_cart_icon','header_cart_total','header_cart_title','html_cart_header'),
	    'render_callback' => function() {
	        get_template_part('template-parts/header/partials/element','cart-mobile');
	    },
	) );

}
add_action( 'customize_register', 'magicpi_refresh_header_cart_partials' );
