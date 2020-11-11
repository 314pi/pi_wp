<?php

Magicpi_Option::add_section( 'fl-portfolio', array(
'title'       => __( 'Portfolio', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'featured_items_page',
	'label'       => __( 'Custom Portfolio Page', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default'     => false,
	'choices'     => $list_pages
));

Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_save_permalinks',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
    'default'     => 'You need to Click <strong>"Save & Publish"</strong> and then <strong>"Update Permalinks"</strong> button to make sure it works!<br><br> <a class="button" href="'.admin_url().'options-permalink.php?settings-updated=true" target="_blank">Update permalinks</a>',
) );


Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_portfolio_single',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
    'default'     => '<div class="options-title-divider">Single Page</div>',
) );

// Single Posts
Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'portfolio_layout',
	'label'       => __( 'Single Portfolio Layout', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default' 	  => '',
	'transport'   => $transport,
	'choices'     => array(
		'' => $image_url . 'portfolio.svg',
		'sidebar-right' => $image_url . 'portfolio-sidebar-right.svg',
		'top' => $image_url . 'portfolio-top.svg',
		'top-full' => $image_url . 'portfolio-top-full.svg',
		'bottom' => $image_url . 'portfolio-bottom.svg',
		'bottom-full' => $image_url . 'portfolio-bottom-full.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'portfolio_title_transparent',
  'label'       => __( 'Transparent Header', 'magicpi-admin' ),
  'section'     => 'fl-portfolio',
  'default' => 0
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'portfolio_title',
	'label'       => __( 'Single Portfolio Title', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default' 	  => '',
	'transport'   => $transport,
	'choices'     => array(
		'' => $image_url . 'portfolio-title.svg',
		'featured' => $image_url . 'portfolio-title-featured.svg',
		'breadcrumbs' => $image_url . 'portfolio-title-breadcrumbs.svg',
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'portfolio_share',
	'label'    => __( 'Show share icons', 'magicpi' ),
	'section'  => 'fl-portfolio',
	'default'  => 1,
) );

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'portfolio_related',
  'label'       => __( 'Show related items', 'magicpi-admin' ),
  'section'     => 'fl-portfolio',
  'default' => 1
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'checkbox',
  'settings'     => 'portfolio_next_prev',
  'label'       => __( 'Show Next/Prev navigation', 'magicpi-admin' ),
  'section'     => 'fl-portfolio',
  'default' => 1
));



Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_portfolio_archive',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
    'default'     => '<div class="options-title-divider">Archive Page</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'select',
	'settings' => 'portfolio_archive_orderby',
	'label'    => __( 'Portfolio Items Orderby', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 'menu_order',
	'choices'  => array(
		'title'      => 'Title',
		'name'       => 'Name',
		'date'       => 'Date',
		'menu_order' => 'Menu Order',
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'select',
	'settings' => 'portfolio_archive_order',
	'label'    => __( 'Portfolio Items Order', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 'desc',
	'choices'  => array(
		'desc' => 'DESC',
		'asc'  => 'ASC',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'portfolio_style',
	'label'       => __( 'Portfolio Style', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default' 	  => '',
	'transport'   => $transport,
	'choices'     => array(
		'' => $image_url . 'portfolio-simple.svg',
		'overlay' => $image_url . 'portfolio-overlay.svg',
		'shade' => $image_url . 'portfolio-shade.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
  'type'        => 'select',
  'settings'     => 'portfolio_height',
  'label'       => __( 'Image Height', 'magicpi-admin' ),
  'section'     => 'fl-portfolio',
  'default'     => 0,
  'choices'     => array(
     0   => 'Auto',
    '50%' => '1:2 (Wide)',
    '75%' => '4:3 (Rectangular)',
    '56%' => '16:9 (Widescreen)',
    '100%' => '1:1 (Square)',
    '125%' => 'Portrait',
    '200%' => '2:1 (Tall)',
  ),
));

Magicpi_Option::add_field( 'option',  array(
	'type'     => 'slider',
	'settings' => 'portfolio_archive_image_radius',
	'label'    => __( 'Image Radius (%)', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 0,
	'choices'  => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'     => 'select',
	'settings' => 'portfolio_archive_image_size',
	'label'    => __( 'Image Size', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 'medium',
	'choices'  => array(
		'large'     => 'Large',
		'medium'    => 'Medium',
		'thumbnail' => 'Thumbnail',
		'original'  => 'Original',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'     => 'slider',
	'settings' => 'portfolio_archive_depth',
	'label'    => __( 'Item Depth', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 0,
	'choices'  => array(
		'min'  => 0,
		'max'  => 5,
		'step' => 1,
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'     => 'slider',
	'settings' => 'portfolio_archive_depth_hover',
	'label'    => __( 'Item Depth :hover', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 0,
	'choices'  => array(
		'min'  => 0,
		'max'  => 5,
		'step' => 1,
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'     => 'radio-buttonset',
	'settings' => 'portfolio_archive_spacing',
	'label'    => __( 'Column Spacing', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 'small',
	'choices'  => array(
		'collapse' => 'Collapse',
		'xsmall'   => 'X Small',
		'small'    => 'Small',
		'normal'   => 'Normal',
		'large'    => 'Large',
	),
));

Magicpi_Option::add_field( 'option', array(
	'type'     => 'slider',
	'settings' => 'portfolio_archive_columns',
	'label'    => __( 'Items per row - Desktop', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 4,
	'choices'  => array(
		'min'  => 1,
		'max'  => 6,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'slider',
	'settings' => 'portfolio_archive_columns_tablet',
	'label'    => __( 'Items per row - Tablet', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 3,
	'choices'  => array(
		'min'  => 1,
		'max'  => 4,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'slider',
	'settings' => 'portfolio_archive_columns_mobile',
	'label'    => __( 'Items per row - Mobile', 'magicpi-admin' ) . ' (NEW)',
	'section'  => 'fl-portfolio',
	'default'  => 2,
	'choices'  => array(
		'min'  => 1,
		'max'  => 3,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'portfolio_archive_title',
	'label'       => __( 'Archive Portfolio Title', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default' 	  => '',
	'transport'   => $transport,
	'choices'     => array(
		'' => $image_url . 'portfolio-title.svg',
		'featured' => $image_url . 'portfolio-title-featured.svg',
		'breadcrumbs' => $image_url . 'portfolio-title-breadcrumbs.svg',
	),
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'portfolio_archive_title_transparent',
	'label'       => __( 'Transparent Header', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default' => 0
));

Magicpi_Option::add_field( 'option',  array(
    'type'        => 'image',
    'settings'     => 'portfolio_archive_bg',
    'label'       => __( 'Portfolio Header Background', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default'     => "",
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-buttonset',
	'settings'     => 'portfolio_archive_filter',
	'label'       => __( 'Filter Navigation', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default'     => 'left',
	'choices'     => array(
		'left' => 'Left',
		'center' => 'Center',
		'disabled' => 'Disabled'
	),
	'transport' => $transport,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'portfolio_archive_filter_style',
	'label'       => __( 'Filter Nav style', 'magicpi-admin' ),
	'section'     => 'fl-portfolio',
	'default' 	  => 'line-grow',
	'transport' => $transport,
	'choices'     => $nav_styles_img
));




function magicpi_refresh_portfolio_partials( WP_Customize_Manager $wp_customize ) {

  // Abort if selective refresh is not available.
  if ( ! isset( $wp_customize->selective_refresh ) ) {
      return;
  }
	$wp_customize->selective_refresh->add_partial( 'portfolio-single-layout', array(
		'selector' => '.portfolio-single-page',
		'settings' => array('portfolio_style','portfolio_layout','portfolio_title'),
		'render_callback' => function() {
		    get_template_part('template-parts/portfolio/single-portfolio', magicpi_option('portfolio_layout'));
		},
	) );

	$wp_customize->selective_refresh->add_partial( 'portfolio-archive-layout', array(
		'selector' => '.portfolio-archive',
		'settings' => array('portfolio_archive_title','portfolio_archive_filter','portfolio_style','portfolio_archive_filter_style'),
		'render_callback' => function() {
		    get_template_part('template-parts/portfolio/archive-portfolio', magicpi_option('portfolio_archive_layout'));
		},
	) );


}
add_action( 'customize_register', 'magicpi_refresh_portfolio_partials' );
