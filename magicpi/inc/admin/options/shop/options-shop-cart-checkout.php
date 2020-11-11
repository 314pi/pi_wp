<?php

// CART

Magicpi_Option::add_section( 'cart-checkout', array(
	'title'       => __( 'Cart', 'magicpi-admin' ),
	'panel' => 'woocommerce',
  'priority'    => 1000
) );


Magicpi_Option::add_field( 'option', array(
  'type'        => 'radio-buttonset',
  'settings'     => 'cart_layout',
  'label'       => __( 'Cart layout', 'magicpi-admin' ),
  'section'     => 'cart-checkout',
  'default'     => '',
  'choices'     => array(
    '' => __( 'Default', 'magicpi-admin' ),
    'simple' => __( 'Simple', 'magicpi-admin' ),
    'focused' => __( 'Focused', 'magicpi-admin' ),
  ),
));


Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'cart_sticky_sidebar',
  'label'       => __( 'Sticky sidebar', 'magicpi-admin' ),
  'section'     => 'cart-checkout',
  'default' => 0
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'cart_auto_refresh',
	'label'    => __( 'Auto update on quantity change', 'magicpi-admin' ),
	'section'  => 'cart-checkout',
	'default'  => 0,
) );


Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'cart_boxed_shipping_labels',
  'label'       => __( 'Boxed Shipping labels', 'magicpi' ),
  'section'     => 'cart-checkout',
  'default' => 0
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'cart_estimate_text',
  'label'       => __( 'Show shipping estimate destination', 'magicpi' ),
  'section'     => 'cart-checkout',
  'default' => 1
));


Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'cart_steps_title',
	'label'    => '',
	'section'  => 'cart-checkout',
	'default'  => '<div class="options-title-divider">Steps</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-buttonset',
	'settings' => 'cart_steps_size',
	'label'    => __( 'Steps size', 'magicpi-admin' ),
	'section'  => 'cart-checkout',
	'default'  => 'h2',
	'choices'  => array(
		'h2' => __( 'Default', 'magicpi-admin' ),
		'h3' => __( 'Small', 'magicpi-admin' ),
		'h4' => __( 'Smaller', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-buttonset',
	'settings' => 'cart_steps_case',
	'label'    => esc_attr__( 'Steps letter case', 'magicpi-admin' ),
	'section'  => 'cart-checkout',
	'default'  => 'uppercase',
	'choices'  => array(
		'uppercase' => 'UPPERCASE',
		'none'      => 'Normal',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'cart_steps_numbers',
	'label'    => __( 'Step numbers', 'magicpi-admin' ),
	'section'  => 'cart-checkout',
	'default'  => 0,
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'html_cart_title',
	'label'    => '',
	'section'  => 'cart-checkout',
	'default'  => '<div class="options-title-divider">Custom Content</div>',
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'html_cart_sidebar',
	'transport' => $transport,
	'label'       => __( 'Cart Sidebar content', 'magicpi-admin' ),
	'help'        => __( 'Enter HTML that will show on bottom of cart sidebar' ),
	'section'     => 'cart-checkout',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'html_cart_footer',
	'transport' => $transport,
	'label'       => __( 'After Cart content', 'magicpi-admin' ),
	'help'        => __( 'Enter HTML or Shortcodes that will show after cart here.' ),
	'section'     => 'cart-checkout',
	'default'     => '',
));


// CHECKOUT

Magicpi_Option::add_field( 'option', array(
  'type'        => 'radio-buttonset',
  'settings'     => 'checkout_layout',
  'priority' => 1,
  'label'       => __( 'Checkout layout', 'magicpi-admin' ),
  'section'     => 'woocommerce_checkout',
  'default'     => '',
  'choices'     => array(
    '' => __( 'Default', 'magicpi-admin' ),
    'simple' => __( 'Simple', 'magicpi-admin' ),
    'focused' => __( 'Focused', 'magicpi-admin' ),
  ),
));


if ( is_nextend_facebook_login() || is_nextend_google_login() ) {
	Magicpi_Option::add_field( 'option',  array(
		'type'        => 'checkbox',
		'settings'     => 'facebook_login_checkout',
		'label'       => __( 'Social Login Buttons', 'magicpi-admin' ),
		'section'     => 'woocommerce_checkout',
		'default' => 0
	));
}

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-buttonset',
	'settings' => 'checkout_terms_and_conditions',
	'label'    => __( 'Terms and conditions link style', 'magicpi-admin' ),
	'section'  => 'woocommerce_checkout',
	'default'  => '',
	'choices'  => array(
		''         => __( 'Default', 'magicpi-admin' ),
		'tab'      => __( 'New Tab', 'magicpi-admin' ),
		'lightbox' => __( 'Lightbox', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'terms_and_conditions_lightbox_buttons',
	'transport'       => $transport,
	'label'           => __( 'Terms and conditions "Agree" button', 'magicpi-admin' ),
	'section'         => 'woocommerce_checkout',
	'default'         => 1,
	'active_callback' => array(
		array(
			'setting'  => 'checkout_terms_and_conditions',
			'operator' => '==',
			'value'    => 'lightbox',
		),
	),
) );

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'checkout_floating_labels',
  'label'       => __( 'Floating field labels', 'magicpi-admin' ),
  'section'     => 'woocommerce_checkout',
  'default' => 0
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'checkout_fields_email_first',
  'label'       => __( 'Move E-mail field to first position', 'magicpi-admin' ),
  'section'     => 'woocommerce_checkout',
  'default' => 0
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'checkout_sticky_sidebar',
  'label'       => __( 'Sticky sidebar', 'magicpi-admin' ),
  'section'     => 'woocommerce_checkout',
  'default' => 0
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'html_checkout_sidebar',
	'transport' => $transport,
	'label'       => __( 'Checkout Sidebar content', 'magicpi-admin' ),
	'help'        => __( 'Enter HTML that will show on bottom of checkout sidebar' ),
	'section'     => 'woocommerce_checkout',
	'default'     => '',
));
