<?php

//Access the WordPress Pages via an Array
$list_pages            = array();
$list_pages_by_id      = array();
$of_pages_obj          = get_pages('sort_column=post_parent,menu_order');
$list_pages['0']       = 'Select a page:';
$list_pages_by_id['0'] = 'Select a page:';
foreach ($of_pages_obj as $of_page) {
    $list_pages[$of_page->post_name] = $of_page->post_title;
    $list_pages_by_id[$of_page->ID] = $of_page->post_title;
}

$blocks = array(false => '-- None --');
$posts = magicpi_get_post_type_items('blocks');
if($posts){
  foreach ($posts as $value) {
    $blocks[$value->post_name] = $value->post_title;
  }
}

// Set default transport
$transport = 'postMessage';
if ( ! isset( $wp_customize->selective_refresh ) ) {
  $transport = 'refresh';
}

$image_url = get_template_directory_uri().'/inc/admin/customizer/img/';

$nav_elements = array(
  'cart' => __( 'Cart', 'magicpi-admin' ),
  'account' => __( 'Account', 'magicpi-admin' ),
  'menu-icon' => __( '☰ Nav Icon', 'magicpi-admin' ),
  'nav' => __( 'Main Menu', 'magicpi-admin' ),
  'nav-top' => __( 'Top Bar Menu', 'magicpi-admin' ),
  'search' => __( 'Search Icon', 'magicpi-admin' ),
  'search-form' => __( 'Search Form', 'magicpi-admin' ),
  'social' => __( 'Social Icons', 'magicpi-admin' ),
  'contact' => __( 'Contact', 'magicpi-admin' ),
  'button-1' => __( 'Button 1', 'magicpi-admin' ),
  'button-2' => __( 'Button 2', 'magicpi-admin' ),
  'checkout' => __( 'Checkout Button', 'magicpi-admin' ),
  'newsletter' => __( 'Newsletter', 'magicpi-admin' ),
  'languages' => __( 'Languages', 'magicpi-admin' ),
  'divider' => __( '|', 'magicpi-admin' ),
  'divider_2' => __( '|', 'magicpi-admin' ),
  'divider_3' => __( '|', 'magicpi-admin' ),
  'divider_4' => __( '|', 'magicpi-admin' ),
  'divider_5' => __( '|', 'magicpi-admin' ),
  'block-1' => __( 'Block 1', 'magicpi-admin' ),
  'block-2' => __( 'Block 2', 'magicpi-admin' ),
  'html' => __( 'HTML 1', 'magicpi-admin' ),
  'html-2' => __( 'HTML 2', 'magicpi-admin' ),
  'html-3' => __( 'HTML 3', 'magicpi-admin' ),
  'html-4' => __( 'HTML 4', 'magicpi-admin' ),
  'html-5' => __( 'HTML 5', 'magicpi-admin' ),
);

// Add Hooked Header Elements
$nav_elements = apply_filters( 'magicpi_header_element', $nav_elements);

$visibility= array(
  '' => __( 'Show for All', 'magicpi-admin' ),
  'hide-for-small' => __( 'Hide For Mobile', 'magicpi-admin' ),
  'hide-for-medium' => __( 'Hide For Tablet', 'magicpi-admin' ),
  'show-for-small' => __( 'Show For Mobile', 'magicpi-admin' ),
  'show-for-medium' => __( 'Show For Tablet', 'magicpi-admin' ),
  'show-for-large' => __( 'Show For Desktop', 'magicpi-admin' ),
);

$nav_styles_img = array(
  '' => $image_url . 'nav-default.svg',
  'divided' => $image_url . 'nav-divided.svg',
  'line' => $image_url . 'nav-line.svg',
  'line-grow' => $image_url . 'nav-line-grow.svg',
  'line-bottom' => $image_url . 'nav-line-bottom.svg',
  'box' => $image_url . 'nav-box.svg',
  'outline' => $image_url . 'nav-outline.svg',
  'pills' => $image_url . 'nav-pills.svg',
  'tabs' => $image_url . 'nav-tabs.svg'
);

$smart_links = __( '', 'magicpi-admin' );

$sizes = array(
    'xxlarge' => __( 'XX Large', 'magicpi-admin' ),
    'xlarge' => __( 'X Large', 'magicpi-admin' ),
    'larger' => __( 'Larger', 'magicpi-admin' ),
    'large' => __( 'Large', 'magicpi-admin' ),
    'medium' => __( 'Medium', 'magicpi-admin' ),
    'small' => __( 'Small', 'magicpi-admin' ),
    'smaller' => __( 'Smaller', 'magicpi-admin' ),
    'xsmall' => __( 'X Small', 'magicpi-admin' ),
);

$button_styles = array(
    '' => __( 'Normal', 'magicpi-admin' ),
    'outline' => __( 'Outline', 'magicpi-admin' ),
    'shade' => __( 'Shade', 'magicpi-admin' ),
    'underline' => __( 'Underline', 'magicpi-admin' ),
    'link' => __( 'Link', 'magicpi-admin' ),
);

$nav_sizes = array(
  'xsmall' => __( 'XS', 'magicpi-admin' ),
  'small' => __( 'S', 'magicpi-admin' ),
  '' => __( 'Default', 'magicpi-admin' ),
  'medium' => __( 'M', 'magicpi-admin' ),
  'large' => __( 'L', 'magicpi-admin' ),
  'xlarge' => __( 'XL', 'magicpi-admin' ),
);

$nav_spacing = array(
  'xsmall' => __( 'XS', 'magicpi-admin' ),
  'small' => __( 'S', 'magicpi-admin' ),
  '' => __( 'Default', 'magicpi-admin' ),
  'medium' => __( 'M', 'magicpi-admin' ),
  'large' => __( 'L', 'magicpi-admin' ),
  'xlarge' => __( 'XL', 'magicpi-admin' ),
);


$bg_repeat = array(
  "repeat" => "Tiled",
  "repeat-x" => "Repeat X",
  "repeat-y" => "Repeat Y",
  "no-repeat" => "No Repeat"
);
