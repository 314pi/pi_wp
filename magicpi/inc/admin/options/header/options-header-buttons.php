<?php

Magicpi_Option::add_section( 'header_buttons',
	array(
		'title' => __( 'Buttons', 'magicpi-admin' ),
		'panel' => 'header',
	)
);

Magicpi_Option::add_field( '',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_button_1',
		'label'    => __( '', 'magicpi-admin' ),
		'section'  => 'header_buttons',
		'default'  => '<div class="options-title-divider">Button 1</div>',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_1',
		'transport' => $transport,
		'default'   => 'Button 1',
		'label'     => __( 'Text', 'magicpi-admin' ),
		'section'   => 'header_buttons',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_1_link',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'Link', 'magicpi-admin' ),
		'section'     => 'header_buttons',
		'description' => $smart_links,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'select',
		'settings'  => 'header_button_1_link_target',
		'transport' => $transport,
		'label'     => __( 'Target', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => '_self',
		'choices'   => array(
			'_self'  => __( 'Same window', 'magicpi-admin' ),
			'_blank' => __( 'New window', 'magicpi-admin' ),
		),
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_1_link_rel',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'Rel', 'magicpi-admin' ),
		'section'     => 'header_buttons',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_1_radius',
		'transport' => $transport,
		'default'   => '99px',
		'label'     => __( 'Radius', 'magicpi-admin' ),
		'section'   => 'header_buttons',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_1_color',
		'transport' => $transport,
		'label'     => __( 'Color', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 'primary',
		'choices'   => array(
			'plain'     => __( 'Plain', 'magicpi-admin' ),
			'primary'   => __( 'Primary', 'magicpi-admin' ),
			'secondary' => __( 'Secondary', 'magicpi-admin' ),
			'success'   => __( 'Success', 'magicpi-admin' ),
			'alert'     => __( 'Alert', 'magicpi-admin' ),
		),
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_1_style',
		'transport' => $transport,
		'label'     => __( 'Style', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'choices'   => $button_styles,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_1_size',
		'transport' => $transport,
		'label'     => __( 'Size', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'choices'   => $nav_sizes,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_1_depth',
		'label'     => __( 'Depth', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_1_depth_hover',
		'label'     => __( 'Depth:hover', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

Magicpi_Option::add_field( '',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_button_2',
		'label'    => __( '', 'magicpi-admin' ),
		'section'  => 'header_buttons',
		'default'  => '<div class="options-title-divider">Button 2</div>',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_2',
		'transport' => $transport,
		'default'   => 'Button 2',
		'label'     => __( 'Text', 'magicpi-admin' ),
		'section'   => 'header_buttons',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_2_link',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'Link', 'magicpi-admin' ),
		'section'     => 'header_buttons',
		'description' => $smart_links,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'select',
		'settings'  => 'header_button_2_link_target',
		'transport' => $transport,
		'label'     => __( 'Target', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => '_self',
		'choices'   => array(
			'_self'  => __( 'Same window', 'magicpi-admin' ),
			'_blank' => __( 'New window', 'magicpi-admin' ),
		),
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_2_link_rel',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'Rel', 'magicpi-admin' ),
		'section'     => 'header_buttons',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_2_radius',
		'transport' => $transport,
		'default'   => '99px',
		'label'     => __( 'Radius', 'magicpi-admin' ),
		'section'   => 'header_buttons',
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_2_color',
		'transport' => $transport,
		'label'     => __( 'Color', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 'secondary',
		'choices'   => array(
			'plain'     => __( 'Plain', 'magicpi-admin' ),
			'primary'   => __( 'Primary', 'magicpi-admin' ),
			'secondary' => __( 'Secondary', 'magicpi-admin' ),
			'success'   => __( 'Success', 'magicpi-admin' ),
			'alert'     => __( 'Alert', 'magicpi-admin' ),
		),
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_2_style',
		'transport' => $transport,
		'label'     => __( 'Style', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 'outline',
		'choices'   => $button_styles,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_2_size',
		'transport' => $transport,
		'label'     => __( 'Size', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'choices'   => $nav_sizes,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_2_depth',
		'label'     => __( 'Depth', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

Magicpi_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_2_depth_hover',
		'label'     => __( 'Depth:hover', 'magicpi-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

function magicpi_refresh_header_buttons_partials( WP_Customize_Manager $wp_customize ) {
	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial( 'header-button-2',
		array(
			'selector'            => '.header-button-2',
			'container_inclusive' => true,
			'settings'            => array(
				'header_button_2',
				'header_button_2_radius',
				'header_button_2_link',
				'header_button_2_style',
				'header_button_2_color',
				'header_button_2_size',
				'header_button_2_depth',
				'header_button_2_depth_hover',
			),
			'render_callback'     => function () {
				get_template_part( 'template-parts/header/partials/element', 'button-2' );
			},
		)
	);

	$wp_customize->selective_refresh->add_partial( 'header-button-1',
		array(
			'selector'            => '.header-button-1',
			'container_inclusive' => true,
			'settings'            => array(
				'header_button_1',
				'header_button_1_radius',
				'header_button_1_link',
				'header_button_1_style',
				'header_button_1_color',
				'header_button_1_size',
				'header_button_1_depth',
				'header_button_1_depth_hover',
			),
			'render_callback'     => function () {
				get_template_part( 'template-parts/header/partials/element', 'button-1' );
			},
		)
	);

}

add_action( 'customize_register', 'magicpi_refresh_header_buttons_partials' );
