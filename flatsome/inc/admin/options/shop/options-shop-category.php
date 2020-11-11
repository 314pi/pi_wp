<?php

Magicpi_Option::add_section( 'woocommerce_product_catalog', array(
  'title' => __( 'Product Catalog', 'woocommerce' ),
  'panel' => 'woocommerce',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_category_homepage',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '<div class="options-title-divider">Shop Page</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'textarea',
	'settings'    => 'html_shop_page',
	'label'       => __( 'Shop Page Header', 'magicpi-admin' ),
	'description' => __( 'Enter HTML that should be placed on top of main shop page. Shortcodes are allowed. This will replace Shop Homepage Header', 'magicpi-admin' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => '',
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'textarea',
	'settings'    => 'html_shop_page_content',
	'label'       => __( 'Shop Page Content', 'magicpi-admin' ),
	'description' => __( 'Enter HTML/Shortcodes that should replace Shop Homepage content.', 'magicpi-admin' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => '',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_category_layout',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '<div class="options-title-divider">Catalog Layout</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-image',
	'settings' => 'category_sidebar',
	'label'    => __( 'Layout', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => 'left-sidebar',
	'choices'  => array(
		'none'          => $image_url . 'category-no-sidebar.svg',
		'left-sidebar'  => $image_url . 'category-left-sidebar.svg',
		'right-sidebar' => $image_url . 'category-right-sidebar.svg',
		'off-canvas'    => $image_url . 'category-off-canvas.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'category_sticky_sidebar',
	'label'           => __( 'Sticky sidebar', 'magicpi-admin' ) . ' (NEW)',
	'section'         => 'woocommerce_product_catalog',
	'active_callback' => array(
		array(
			'setting'  => 'category_sidebar',
			'operator' => '!==',
			'value'    => 'none',
		),
		array(
			'setting'  => 'category_sidebar',
			'operator' => '!==',
			'value'    => 'off-canvas',
		),
	),
	'default'         => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'category_grid_style',
	'label'     => __( 'List Style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 'grid',
	'choices'   => array(
		'grid'    => $image_url . 'category-style-grid.svg',
		'list'    => $image_url . 'category-style-list.svg',
		'masonry' => $image_url . 'category-style-masonry.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'checkbox',
	'settings'    => 'category_force_image_height',
	// 'transport' => $transport,
	'label'       => __( 'EQUAL IMAGE HEIGHTS', 'magicpi-admin' ),
	'description' => 'Force all images to have the same height',
	'section'     => 'woocommerce_product_catalog',
	'default'     => false,
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'slider',
	'settings'        => 'category_image_height',
	'label'           => __( 'Equal Image height', 'magicpi-admin' ),
	'description'     => 'Change the image height in %. (100% = 1:1)',
	'section'         => 'woocommerce_product_catalog',
	'active_callback' => array(
		array(
			'setting'  => 'category_force_image_height',
			'operator' => '==',
			'value'    => true,
		),
	),
	'transport'       => $transport,
	'default'         => 100,
	'choices'         => array(
		'min'  => 50,
		'max'  => 200,
		'step' => 1,
	),
) );


Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_html_woocommerce_image_shortcut_category',
    'label'       => __( '', 'magicpi-admin' ),
    'section'         => 'woocommerce_product_catalog',
    'default'     => '<button style="margin-top: 15px; margin-bottom:15px" class="button button-primary" data-to-section="woocommerce_product_images">Thumbnail Image Settings →</button>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'text',
	'settings'  => 'products_pr_page',
	'transport' => $transport,
	'label'     => __( 'Products per Page', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 12,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'category_row_count',
	'transport' => $transport,
	'label'     => __( 'Products per row - Desktop', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 3,
	'choices'   => array(
		'min'  => 1,
		'max'  => 6,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'category_row_count_tablet',
	'label'     => __( 'Products per row - Tablet', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 3,
	'choices'   => array(
		'min'  => 1,
		'max'  => 4,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'category_row_count_mobile',
	'label'     => __( 'Products per row - Mobile', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 2,
	'choices'   => array(
		'min'  => 1,
		'max'  => 3,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_category_header',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '<div class="options-title-divider">Header</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'category_title_style',
	'label'     => __( 'Title Style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => '',
	'choices'   => array(
		''                => $image_url . 'category-title.svg',
		'featured'        => $image_url . 'category-title-featured.svg',
		'featured-center' => $image_url . 'category-title-featured-center.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'category_show_title',
	'transport' => $transport,
	'label'     => __( 'Show title', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => '0',
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'checkbox',
	'settings'        => 'breadcrumb_home',
	'transport'       => $transport,
	'label'           => __( 'Show home link in breadcrumb', 'magicpi-admin' ),
	'section'         => 'woocommerce_product_catalog',
	'active_callback' => function () {
		$wpseo     = class_exists( 'WPSEO_Frontend' ) && get_theme_mod( 'wpseo_breadcrumb' ) ? true : false;
		$rank_math = class_exists( 'RankMath' ) && get_theme_mod( 'rank_math_breadcrumb' ) ? true : false;

		return ! $wpseo && ! $rank_math;
	},
	'default'         => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'category_header_transparent',
	'label'    => __( 'Transparent Header', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '0',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'header_shop_bg_featured',
	'transport' => $transport,
	'help'      => __( 'Use Featured Images from categories and products as background. Will fallback to default Shop Title background if nothing is set.', 'magicpi-admin' ),
	'label'     => __( 'Featured Image as Background', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'image',
	'settings'  => 'header_shop_bg_image',
	'transport' => $transport,
	'label'     => __( 'Shop Title Background', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => '',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'color-alpha',
	'alpha'     => true,
	'settings'  => 'header_shop_bg_color',
	'transport' => $transport,
	'label'     => __( 'Title Background Color', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 'rgba(0,0,0,.3)',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'text',
	'settings'  => 'category_filter_text',
	'transport' => $transport,
	'label'     => __( 'Custom Filter Text', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => '',
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_category_breadcrumbs',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '<div class="options-title-divider">Breadcrumbs</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'select',
	'settings' => 'breadcrumb_size',
	'label'    => __( 'Breadcrumb Size', 'magicpi-admin' ),
	'help'     => __( 'Change size of breadcrumb on product categories. Useful if you have long breadcrumbs.', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => 'large',
	'choices'  => $sizes,
) );


Magicpi_Option::add_field( 'option', array(
	'type'     => 'radio-buttonset',
	'settings' => 'breadcrumb_case',
	'label'    => esc_attr__( 'Breadcrumbs Case', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => 'uppercase',
	'choices'  => array(
		'uppercase' => 'UPPERCASE',
		''          => 'Normal',
	),
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_category_category_box',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '<div class="options-title-divider">Category Box</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'cat_style',
	'label'     => __( 'Category Box Style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 'badge',
	'choices'   => array(
		'normal'  => $image_url . 'category-box.svg',
		'badge'   => $image_url . 'category-box-badge.svg',
		'overlay' => $image_url . 'category-box-overlay.svg',
		'label'   => $image_url . 'category-box-label.svg',
		'shade'   => $image_url . 'category-box-shade.svg',
		'bounce'  => $image_url . 'category-box-bounce.svg',
		'push'    => $image_url . 'category-box-push.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'category_show_count',
	'transport' => $transport,
	'label'     => __( 'Show product count', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 1,
) );

Magicpi_Option::add_field( '', array(
	'type'     => 'custom',
	'settings' => 'custom_title_category_product_box',
	'label'    => __( '', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '<div class="options-title-divider">Product Box</div>',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'grid_style',
	'label'     => __( 'Grid Style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 'grid1',
	'choices'   => array(
		'grid1' => $image_url . 'product-box.svg',
		'grid2' => $image_url . 'product-box-center.svg',
		'grid3' => $image_url . 'product-box-wide.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'select',
	'settings'  => 'product_hover',
	'transport' => $transport,
	'label'     => __( 'Product Image Hover style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 'fade_in_back',
	'choices'   => array(
		'none'         => __( 'None', 'magicpi-admin' ),
		'fade_in_back' => __( 'Back Image - Fade In', 'magicpi-admin' ),
		'zoom_in'      => __( 'Back Image - Zoom In', 'magicpi-admin' ),
		'zoom'         => 'Zoom',
		'zoom-fade'    => 'Zoom Fade',
		'blur'         => 'Blur',
		'fade-in'      => 'Fade In',
		'fade-out'     => 'Fade Out',
		'glow'         => 'Glow',
		'color'        => 'Add Color',
		'grayscale'    => 'Grayscale',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'category_shadow',
	'label'     => __( 'Drop Shadow', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 0,
	'choices'   => array(
		'min'  => 0,
		'max'  => 5,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'slider',
	'settings'  => 'category_shadow_hover',
	'label'     => __( 'Drop Shadow:hover', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 0,
	'choices'   => array(
		'min'  => 0,
		'max'  => 5,
		'step' => 1,
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'add_to_cart_icon',
	'label'     => __( 'Add To Cart Button', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 'disable',
	'choices'   => array(
		'disable' => $image_url . 'product-box.svg',
		'show'    => $image_url . 'product-box-add-to-cart-icon.svg',
		'button'  => $image_url . 'product-box-add-to-cart-button.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'select',
	'settings'  => 'add_to_cart_style',
	'label'     => __( 'Button Style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 'outline',
	'choices'   => array(
		'flat'      => __( 'Plain', 'magicpi-admin' ),
		'outline'   => __( 'Outline', 'magicpi-admin' ),
		'underline' => __( 'Underline', 'magicpi-admin' ),
		'shade'     => __( 'Shade', 'magicpi-admin' ),
		'bevel'     => __( 'Bevel', 'magicpi-admin' ),
		'gloss'     => __( 'Gloss', 'magicpi-admin' ),
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'product_box_category',
	'transport' => $transport,
	'label'     => __( 'Show Category', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'product_box_rating',
	'transport' => $transport,
	'label'     => __( 'Show Ratings', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 1,
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'short_description_in_grid',
	'transport' => $transport,
	'label'     => __( 'Show Short Description', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => '0',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'disable_quick_view',
	'transport' => $transport,
	'label'     => __( 'Disable Quick View', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => 0,
) );

Magicpi_Option::add_field( 'option', array(
	'type'        => 'checkbox',
	'settings'    => 'equalize_product_box',
	'transport'   => $transport,
	'label'       => esc_attr__( 'Equalize Items', 'magicpi-admin' ),
	'section'     => 'woocommerce_product_catalog',
	'default'     => '0',
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'radio-image',
	'settings'  => 'bubble_style',
	'label'     => __( 'Sale Bubble Style', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'transport' => $transport,
	'default'   => 'style1',
	'choices'   => array(
		'style1' => $image_url . 'badge-circle.svg',
		'style2' => $image_url . 'badge-square.svg',
		'style3' => $image_url . 'badge-border.svg',
	),
) );

Magicpi_Option::add_field( 'option', array(
	'type'      => 'text',
	'settings'  => 'sale_bubble_text',
	'transport' => $transport,
	'label'     => __( 'Custom Sale Bubble Text', 'magicpi-admin' ),
	'section'   => 'woocommerce_product_catalog',
	'default'   => '',
) );

Magicpi_Option::add_field( 'option', array(
	'type'     => 'checkbox',
	'settings' => 'sale_bubble_percentage',
	'label'    => __( 'Enable % instead of "Sale!"', 'magicpi-admin' ),
	'section'  => 'woocommerce_product_catalog',
	'default'  => '0',
) );

Magicpi_Option::add_field( 'option', array(
	'type'            => 'text',
	'settings'        => 'sale_bubble_percentage_formatting',
	'transport'       => $transport,
	'label'           => __( 'Sale Bubble % Formatting', 'magicpi-admin' ),
	'description'     => __( 'How the discount should be displayed. e.g. -{value}%', 'magicpi-admin' ),
	'section'         => 'woocommerce_product_catalog',
	'active_callback' => array(
		array(
			'setting'  => 'sale_bubble_percentage',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'         => '-{value}%',
) );
