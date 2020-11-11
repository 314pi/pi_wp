<?php
/**
 * Newsletter Element
 */

Magicpi_Option::add_section( 'header_newsletter',
	array(
		'title' => __( 'Newsletter', 'magicpi-admin' ),
		'panel' => 'header',
	)
);

Magicpi_Option::add_field( '',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_header_newsletter_layout',
		'label'    => __( '', 'magicpi-admin' ),
		'section'  => 'header_newsletter',
		'default'  => '<div class="options-title-divider">Layout</div>',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-image',
		'settings'  => 'newsletter_icon_style',
		'label'     => __( 'Icon Style', 'magicpi-admin' ),
		'section'   => 'header_newsletter',
		'transport' => $transport,
		'default'   => 'plain',
		'choices'   => array(
			''              => $image_url . 'disabled.svg',
			'plain'         => $image_url . 'account-icon-plain.svg',
			'fill'          => $image_url . 'account-icon-fill.svg',
			'fill-round'    => $image_url . 'account-icon-fill-round.svg',
			'outline'       => $image_url . 'account-icon-outline.svg',
			'outline-round' => $image_url . 'account-icon-outline-round.svg',
		),
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_newsletter_label',
		'label'     => __( 'Label', 'magicpi-admin' ),
		'section'   => 'header_newsletter',
		'transport' => $transport,
		'default'   => 'Newsletter',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'        => 'select',
		'settings'    => 'header_newsletter_block',
		'label'       => __( 'Newsletter Block', 'magicpi-admin' ),
		'description' => __( 'Replace newsletter pop-up content with a custom Block that can be edited in UX Builder.' ),
		'section'     => 'header_newsletter',
		'default'     => false,
		'choices'     => $blocks,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'            => 'text',
		'settings'        => 'header_newsletter_title',
		'active_callback' => array(
			array(
				'setting'  => 'header_newsletter_block',
				'operator' => '==',
				'value'    => false,
			),
		),
		'label'           => __( 'Title', 'magicpi-admin' ),
		'section'         => 'header_newsletter',
		'transport'       => $transport,
		'default'         => 'Sign up for Newsletter',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'              => 'text',
		'settings'          => 'header_newsletter_sub_title',
		'active_callback'   => array(
			array(
				'setting'  => 'header_newsletter_block',
				'operator' => '==',
				'value'    => false,
			),
		),
		'label'             => __( 'Sub Title', 'magicpi-admin' ),
		'section'           => 'header_newsletter',
		'transport'         => $transport,
		'sanitize_callback' => 'magicpi_custom_sanitize',
		'default'           => 'Signup for our newsletter to get notified about sales and new products. Add any text here or remove it.',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'              => 'text',
		'settings'          => 'header_newsletter_shortcode',
		'active_callback'   => array(
			array(
				'setting'  => 'header_newsletter_block',
				'operator' => '==',
				'value'    => false,
			),
		),
		'label'             => __( 'Form Shortcode', 'magicpi-admin' ),
		'description'       => __( 'Insert any form shortcode here.', 'magicpi-admin' ),
		'section'           => 'header_newsletter',
		'sanitize_callback' => 'magicpi_custom_sanitize',
		'transport'         => $transport,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'            => 'image',
		'settings'        => 'header_newsletter_bg',
		'active_callback' => array(
			array(
				'setting'  => 'header_newsletter_block',
				'operator' => '==',
				'value'    => false,
			),
		),
		'label'           => __( 'Background Image', 'magicpi-admin' ),
		'section'         => 'header_newsletter',
		'transport'       => $transport,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'            => 'text',
		'settings'        => 'header_newsletter_height',
		'active_callback' => array(
			array(
				'setting'  => 'header_newsletter_block',
				'operator' => '==',
				'value'    => false,
			),
		),
		'label'           => __( 'Height', 'magicpi-admin' ),
		'section'         => 'header_newsletter',
		'default'         => '500px',
		'transport'       => $transport,
	)
);

Magicpi_Option::add_field( '',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_header_newsletter_behavior',
		'label'    => __( '', 'magicpi-admin' ),
		'section'  => 'header_newsletter',
		'default'  => '<div class="options-title-divider">Behavior</div>',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'checkbox',
		'settings'  => 'header_newsletter_auto_open',
		'label'     => __( 'Auto Open', 'magicpi-admin' ),
		'section'   => 'header_newsletter',
		'transport' => $transport,
		'default'   => false,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'            => 'slider',
		'settings'        => 'header_newsletter_auto_timer',
		'active_callback' => array(
			array(
				'setting'  => 'header_newsletter_auto_open',
				'operator' => '==',
				'value'    => true,
			),
		),
		'label'           => __( 'Auto Timer', 'magicpi-admin' ),
		'description'     => __( 'In milliseconds (1000ms = 1sec).', 'magicpi-admin' ),
		'section'         => 'header_newsletter',
		'transport'       => $transport,
		'default'         => 3000,
		'choices'         => array(
			'min'  => 1000,
			'max'  => 300000,
			'step' => 500,
		),
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'            => 'select',
		'settings'        => 'header_newsletter_auto_show',
		'active_callback' => array(
			array(
				'setting'  => 'header_newsletter_auto_open',
				'operator' => '==',
				'value'    => true,
			),
		),
		'label'           => __( 'Auto Show', 'magicpi-admin' ),
		'section'         => 'header_newsletter',
		'transport'       => $transport,
		'default'         => 'always',
		'multiple'        => 0,
		'choices'         => array(
			'always' => __( 'Always', 'magicpi-admin' ),
			'once'   => __( 'Once', 'magicpi-admin' ),
		),
	)
);

Magicpi_Option::add_field( 'option', array(
	'type'            => 'text',
	'settings'        => 'header_newsletter_version',
	'active_callback' => array(
		array(
			'setting'  => 'header_newsletter_auto_open',
			'operator' => '==',
			'value'    => true,
		),
	),
	'label'           => __( 'Version', 'magicpi-admin' ),
	'description'     => __( 'Increase the version to reopen a "show once" configured newsletter popup to visitors after making changes to it.', 'magicpi-admin' ),
	'section'         => 'header_newsletter',
	'transport'       => $transport,
	'default'         => '1',
) );

function magicpi_refresh_header_newsletter_partials( WP_Customize_Manager $wp_customize ) {

	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial( 'header-newsletter',
		array(
			'selector'            => '.header-newsletter-item',
			'container_inclusive' => true,
			'settings'            => array(
				'header_newsletter_height',
				'header_newsletter_bg',
				'header_newsletter_sub_title',
				'header_newsletter_label',
				'header_newsletter_shortcode',
				'newsletter_icon_style',
				'header_newsletter_title',
			),
			'render_callback'     => function () {
				get_template_part( 'template-parts/header/partials/element', 'newsletter' );
			},
		)
	);
}

add_action( 'customize_register', 'magicpi_refresh_header_newsletter_partials' );
