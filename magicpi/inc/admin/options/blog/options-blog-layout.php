<?php

Magicpi_Option::add_section( 'blog-layout', array(
	'title'       => __( 'Blog Layout', 'magicpi-admin' ),
	'panel' => 'blog',
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'blog_header',
	//'transport' => $transport,
	'label'       => __( 'Blog Homepage Header', 'magicpi-admin' ),
	'description' => __( 'Enter HTML for blog header here. Will be placed above content and sidebar. Shortcodes are allowed. F.ex [block id="blog-header"]', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'sanitize_callback' => 'magicpi_custom_sanitize',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'blog_archive_transparent',
	'label'       => __( 'Transparent Header', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 0,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'blog_layout',
	'label'       => __( 'Blog Sidebar', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 'right-sidebar',
	'transport'	  => $transport,
	'choices'     => array(
		'right-sidebar' => $image_url . 'layout-right.svg',
		'left-sidebar' => $image_url . 'layout-left.svg',
		'no-sidebar' => $image_url . 'layout-no-sidebar.svg',
	),
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'blog_layout_divider',
	'label'       => __( 'Enable Sidebar Divider', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'transport'	  => $transport,
	'default'     => 1,
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'blog_sticky_sidebar',
	'label'    => __( 'Sticky sidebar', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'blog-layout',
	'default'  => 0,
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'blog_style',
	'label'       => __( 'Posts Layout', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 'normal',
	'choices'     => array(
		'normal' => $image_url . 'blog-normal.svg',
		'inline' => $image_url . 'blog-inline.svg',
		'2-col' => $image_url . 'blog-two-col.svg',
		'3-col' =>$image_url . 'blog-three-col.svg',
		'list' => $image_url . 'blog-list.svg',
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'blog_style_type',
	'label'           => __( 'Posts Layout Type', 'magicpi-admin' ),
	'section'         => 'blog-layout',
	'default'         => 'masonry',
	'choices'         => array(
		'row'     => __( 'Row', 'magicpi-admin' ),
		'masonry' => __( 'Masonry', 'magicpi-admin' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'blog_style',
			'operator' => 'contains',
			'value'    => array( '2-col', '3-col' ),
		),
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'blog_show_excerpt',
	'transport'	  => $transport,
	'label'       => __( 'Show Excerpts Only', 'magicpi-admin' ),
	'help'        => __( 'Show Excerpts only of the Blog posts. You can manually add a Read More link by adding a More Tag to the Post Content.', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 1,
));

Magicpi_Option::add_field( 'option',  array(
'type'        => 'color-alpha',
'settings'     => 'blog_bg_color',
'label'       => __( 'Blog Background Color', 'magicpi-admin' ),
'section'     => 'blog-layout',
'default'     => '',
'transport' => 'postMessage',
'js_vars'   => array(
	array(
		'element'  => '.blog-wrapper',
		'function' => 'css',
		'property' => 'background-color'
	),
)
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'blog_posts_depth',
	'label'       => __( 'Depth', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 0,
	'choices'     => array(
		'min'  => 0,
		'max'  => 5,
		'step' => 1
	),
	'transport' => $transport
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'blog_posts_depth_hover',
	'label'       => __( 'Depth :hover', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 0,
	'choices'     => array(
		'min'  => 0,
		'max'  => 5,
		'step' => 1
	),
	'transport' => $transport
));


Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_post_layout',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'blog-layout',
    'default'     => '<div class="options-title-divider">Post layout</div>',
) );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'blog_posts_header_style',
	'label'       => __( 'Posts Title Style', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'active_callback'    => array(
		array(
			'setting'  => 'blog_style',
			'operator' => '===',
			'value'    => 'normal',
		),
	),
	'default'     => 'normal',
	'choices'     => array(
		'normal' => $image_url . 'text-top.svg',
		'bottom' => $image_url . 'text-bottom.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'blog_posts_title_align',
	'label'       => __( 'Posts Title Align', 'magicpi-admin' ),
	'section'     => 'blog-layout',
	'default'     => 'center',
	'choices'     => array(
		'left' =>	$image_url . 'align-left.svg',
		'center' => $image_url . 'align-center.svg',
		'right' => 	$image_url . 'align-right.svg',
	),
));
