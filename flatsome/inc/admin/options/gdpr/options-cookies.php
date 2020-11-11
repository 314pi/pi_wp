<?php

Magicpi_Option::add_section( 'gdpr', array(
	'title'    => __( 'GDPR', 'magicpi-admin' ),
	'priority' => 160,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'cookie_notice',
	'section'  => 'gdpr',
	'label'    => esc_html__( 'Enable cookie notice', 'magicpi-admin' ),
	'default'  => false,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'textarea',
	'settings'    => 'cookie_notice_text',
	'section'     => 'gdpr',
	'transport'   => $transport,
	'label'       => esc_html__( 'Custom cookie text', 'magicpi-admin' ),
	'description' => esc_html__( 'Add any HTML or shortcode here...', 'magicpi-admin' ),
	'default'     => '',
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'select',
	'settings'    => 'privacy_policy_page',
	'section'     => 'gdpr',
	'label'       => esc_html__( 'Privacy policy page', 'magicpi-admin' ),
	'description' => esc_html__( 'Show a button linked to the cookie policy page.', 'magicpi-admin' ),
	'default'     => false,
	'choices'     => $list_pages_by_id,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'select',
	'settings'  => 'cookie_notice_button_style',
	'section'   => 'gdpr',
	'transport' => $transport,
	'label'     => esc_html__( 'Button style', 'magicpi-admin' ),
	'choices'   => $button_styles,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'cookie_notice_text_color',
	'section'   => 'gdpr',
	'transport' => $transport,
	'label'     => esc_html__( 'Text color', 'magicpi-admin' ),
	'default'   => 'light',
	'choices'   => array(
		'dark'  => $image_url . 'text-light.svg',
		'light' => $image_url . 'text-dark.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color-alpha',
	'alpha'     => true,
	'settings'  => 'cookie_notice_bg_color',
	'section'   => 'gdpr',
	'label'     => esc_html__( 'Background color', 'magicpi-admin' ),
	'default'   => '',
	'transport' => $transport,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'text',
	'settings'    => 'cookie_notice_version',
	'section'     => 'gdpr',
	'label'       => esc_html__( 'Version', 'magicpi-admin' ),
	'description' => esc_html__( 'Increase the version to reopen the notice to visitors that have accepted before, after making changes to it.', 'magicpi-admin' ),
	'default'     => '1',
) );

function magicpi_refresh_cookies_partials( WP_Customize_Manager $wp_customize ) {

	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial( 'refresh_css_cookies', array(
		'selector'        => 'head > style#custom-css',
		'settings'        => array( 'cookie_notice_bg_color' ),
		'render_callback' => function () {
			magicpi_custom_css();
		},
	) );

	$wp_customize->selective_refresh->add_partial( 'cookies-text', array(
		'selector'        => '.magicpi-cookies__text',
		'settings'        => array( 'cookie_notice_text' ),
		'render_callback' => function () {
			return get_theme_mod( 'cookie_notice_text' )
				? do_shortcode( get_theme_mod( 'cookie_notice_text' ) )
				: __( 'This site uses cookies to improve your browse experience. By browsing this website, you agree to our use of cookies.', 'magicpi' );
		},
	) );
}

add_action( 'customize_register', 'magicpi_refresh_cookies_partials' );
