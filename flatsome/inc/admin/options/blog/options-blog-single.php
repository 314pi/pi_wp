<?php

Magicpi_Option::add_section( 'blog-single', array(
	'title' => __( 'Blog Single Post', 'magicpi-admin' ),
	'panel' => 'blog',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-image',
	'settings' => 'blog_post_layout',
	'label'    => __( 'Blog Post Single Layout', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 'right-sidebar',
	'choices'  => array(
		'right-sidebar' => $image_url . 'layout-right.svg',
		'left-sidebar'  => $image_url . 'layout-left.svg',
		'no-sidebar'    => $image_url . 'layout-no-sidebar.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-image',
	'settings' => 'blog_post_style',
	'label'    => __( 'Title Layout', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 'default',
	'choices'  => array(
		'default' => $image_url . 'blog-single.svg',
		'top'     => $image_url . 'blog-single-full.svg',
		'inline'  => $image_url . 'blog-single-inline.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_single_transparent',
	'label'    => __( 'Transparent Header', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_single_header_meta',
	'label'    => __( 'Enable Header Meta', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_single_featured_image',
	'label'    => __( 'Enable Featured Image', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_share',
	'label'    => __( 'Enable Share Icons', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_single_footer_meta',
	'label'    => __( 'Enable Footer Meta', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_author_box',
	'label'    => __( 'Enable Blog Author Box', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_single_next_prev_nav',
	'label'    => __( 'Enable Next/Prev Navigation', 'magicpi-admin' ),
	'section'  => 'blog-single',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'              => 'textarea',
	'settings'          => 'blog_after_post',
	'label'             => __( 'HTML after blog posts', 'magicpi-admin' ),
	'section'           => 'blog-single',
	'description'       => 'Enter HTML or shortcodes that will be visible after blog posts. (Before comment box). Shortcodes are allowed',
	'sanitize_callback' => 'magicpi_custom_sanitize',
	'default'           => '',
) );
