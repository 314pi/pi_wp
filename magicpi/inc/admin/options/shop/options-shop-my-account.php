<?php

global $wc;

Magicpi_Option::add_section( 'fl-my-account', array(
	'title'       => __( 'My Account', 'magicpi-admin' ),
	'panel' => 'woocommerce'
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color-alpha',
	'alpha'     => true,
	'settings'  => 'my_account_title_bg_color',
	'label'     => __( 'Title Background Color', 'magicpi-admin' ),
	'section'   => 'fl-my-account',
	'default'   => '',
	'transport' => $transport,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'facebook_login_bg',
	'label'       => __( 'Title Background Image', 'magicpi-admin' ),
	'section'     => 'fl-my-account',
	'transport' => $transport,
	'default'     => ''
));

Magicpi_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'    => 'my_account_title_align',
	'label'       => __( 'Title Align', 'magicpi-admin' ),
	'description' => __( 'For logged in users only.', 'magicpi-admin' ),
	'section'     => 'fl-my-account',
	'default'     => 'left',
	'transport'   => $transport,
	'choices'     => array(
		'left'   => $image_url . 'align-left.svg',
		'center' => $image_url . 'align-center.svg',
		'right'  => $image_url . 'align-right.svg',
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'my_account_title_text_color',
	'label'     => __( 'Text color', 'magicpi-admin' ),
	'section'   => 'fl-my-account',
	'default'   => 'dark',
	'transport' => $transport,
	'choices'   => array(
		'light' => $image_url . 'text-light.svg',
		'dark'  => $image_url . 'text-dark.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'facebook_login_text',
	'transport' => $transport,
	'label'       => __( 'Login Text', 'magicpi-admin' ),
	'description' => __( '', 'magicpi-admin' ),
	'section'     => 'fl-my-account',
	'sanitize_callback' => 'magicpi_custom_sanitize',
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'select',
  'settings'     => 'account_login_style',
  'label'       => __( 'Login Style', 'magicpi-admin' ),
  'section'     => 'fl-my-account',
  'transport' => $transport,
  'default'     => 'lightbox',
  'choices'     => array(
    'link' => __( 'Link', 'magicpi-admin' ),
    'lightbox' => __( 'Lightbox', 'magicpi-admin' ),
  ),
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'select',
  'settings'     => 'social_login_pos',
  'label'       => __( 'Social Button', 'magicpi-admin' ),
  'description' => __( 'Change position of Social Login Buttons in lightbox.', 'magicpi-admin' ),
  'section'     => 'fl-my-account',
  'default'     => 'top',
  'choices'     => array(
    'top' => __( 'Top', 'magicpi-admin' ),
    'bottom' => __( 'Bottom', 'magicpi-admin' ),
  ),
));


Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'wc_account_links',
  'label'       => __( 'Enable default WooCommerce Account links in Dropdown and Account Sidebar. You can create a custom my account menu instead if you want.', 'magicpi-admin' ),
  'section'     => 'fl-my-account',
  'default'     => 1,
));


Magicpi_Option::add_field( '', array(
  'type'        => 'custom',
  'settings' => 'custom_html_account_shortcut',
  'label'       => __( '', 'magicpi-admin' ),
  'section'     => 'fl-my-account',
  'default'     => '<button style="margin-top:30px; margin-bottom:15px" class="button button-primary" data-to-section="header_account">Header Element →</button>',
) );
