<?php

function magicpi_product_summary_fix(){
  if(is_product()){
    if(!get_theme_mod('product_info_meta', 1)){
      remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);
    }
    if(!get_theme_mod('product_info_share', 1)){
      remove_action('woocommerce_single_product_summary','woocommerce_template_single_sharing',50);
    }
  }
}
add_action('wp_head','magicpi_product_summary_fix', 9999);

// Product summary classes
function magicpi_product_summary_classes( $main = true, $align = true, $form = true ) {
	$classes = $main ? array( 'product-summary' ) : array();
	if ( $align && get_theme_mod( 'product_info_align' ) ) {
		$classes[] = 'text-' . get_theme_mod( 'product_info_align', 'left' );
	}
	if ( $form && get_theme_mod( 'product_info_form' ) ) {
		$classes[] = 'form-' . get_theme_mod( 'product_info_form', '' );
	}
	echo implode( ' ', $classes );
}

function magicpi_product_upsell_sidebar(){
  // Product Upsell
    if(get_theme_mod('product_upsell','sidebar') == 'sidebar') {
        remove_action( 'woocommerce_after_single_product_summary' , 'woocommerce_upsell_display', 15);
        add_action('magicpi_before_product_sidebar','woocommerce_upsell_display', 2);
    }
    else if(get_theme_mod('product_upsell', 'sidebar') == 'disabled') {
        remove_action( 'woocommerce_after_single_product_summary' , 'woocommerce_upsell_display', 15);
    }
}
add_action('magicpi_before_product_sidebar','magicpi_product_upsell_sidebar', 1);

/* Add Share to product description */
if(!function_exists('magicpi_product_share')) {
  function magicpi_product_share() {
      echo do_shortcode('[share]');
  }
}
add_action( 'woocommerce_share', 'magicpi_product_share',  10 );


/* Remove Product Description Heading */
function magicpi_remove_product_description_heading($heading){

     return $heading = '';
}
add_filter('woocommerce_product_description_heading','magicpi_remove_product_description_heading');


/* Remove Additional Product Information Heading */
function magicpi_remove_product_information_heading($heading){
     return $heading = '';
}
add_filter('woocommerce_product_additional_information_heading','magicpi_remove_product_information_heading');

// Move Sale Flash to another hook
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash',10);
add_action('magicpi_sale_flash','woocommerce_show_product_sale_flash',10);


// Add Product Video Button
if(!function_exists('magicpi_product_video_button')){
function magicpi_product_video_button(){
  global $wc_cpdf;
       // Add Product Video
      if($wc_cpdf->get_value(get_the_ID(), '_product_video')){ ?>
      <a class="button is-outline circle icon button product-video-popup tip-top" href="<?php echo $wc_cpdf->get_value(get_the_ID(), '_product_video'); ?>" title="<?php echo __( 'Video', 'magicpi' ); ?>">
            <?php echo get_magicpi_icon('icon-play'); ?>
      </a>
      <style>
       <?php
          // Set product video height
          $height = '900px';
              $width = '900px';
              $iframe_scale = '100%';
              $custom_size = $wc_cpdf->get_value(get_the_ID(), '_product_video_size');
              if($custom_size){
                $split = explode("x", $custom_size);

                $height = $split[0];
                $width = $split[1];

          $iframe_scale = ($width/$height*100).'%';
              }
              echo '.has-product-video .mfp-iframe-holder .mfp-content{max-width: '.$width.';}';
              echo '.has-product-video .mfp-iframe-scaler{padding-top: '.$iframe_scale.'}';
         ?>
      </style>
      <?php }
  }
}
add_action('magicpi_product_image_tools_bottom','magicpi_product_video_button', 1);


// Product Image Lightbox
function magicpi_product_lightbox_button(){
   if(get_theme_mod('product_lightbox', 'default') !== 'disabled') { ?>
    <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="<?php echo __( 'Zoom', 'magicpi' ); ?>">
      <?php echo get_magicpi_icon('icon-expand'); ?>
    </a>
 <?php }
}
add_action('magicpi_product_image_tools_bottom','magicpi_product_lightbox_button', 2);


// Add Product Body Classes
function magicpi_product_body_classes( $classes ) {

    // Add Frame Class for Posts
    if(is_product() && get_theme_mod('product_lightbox', 'default') == 'magicpi'){
       $classes[] = 'has-lightbox';
    }

    return $classes;
}
add_filter( 'body_class', 'magicpi_product_body_classes' );


function magicpi_product_video_tab(){
   global $wc_cpdf;
   echo do_shortcode('[ux_video url="'.$wc_cpdf->get_value(get_the_ID(), '_product_video').'"]');
}

// Custom Product Tabs
function magicpi_custom_product_tabs( $tabs ) {
  global $wc_cpdf;

    // Product video Tab
  if($wc_cpdf->get_value(get_the_ID(), '_product_video_placement') == 'tab'){
      $tabs['ux_video_tab'] = array(
        'title'   => __('Video','magicpi'),
        'priority'  => 10,
        'callback'  => 'magicpi_product_video_tab'
      );
  }

  // Adds the new tab
  if($wc_cpdf->get_value(get_the_ID(), '_custom_tab_title')){
    $tabs['ux_custom_tab'] = array(
      'title'   =>  $wc_cpdf->get_value(get_the_ID(), '_custom_tab_title'),
      'priority'  => 40,
      'callback'  => 'magicpi_custom_tab_content'
    );
  }

  // Custom Global Section
  if(get_theme_mod('tab_title')){
      $tabs['ux_global_tab'] = array(
        'title'   => get_theme_mod('tab_title'),
        'priority'  => 50,
        'callback'  => 'magicpi_global_tab_content'
      );
  }

  // Move review tab to the last position
  //$tabs['reviews']['priority'] = 100;

  return $tabs;
}

add_filter( 'woocommerce_product_tabs', 'magicpi_custom_product_tabs' );

function magicpi_custom_tab_content() {
  // The new tab content
  global $wc_cpdf;
  echo do_shortcode($wc_cpdf->get_value(get_the_ID(), '_custom_tab'));
}

function magicpi_global_tab_content() {
  // The new tab content
  echo do_shortcode(get_theme_mod('tab_content'));
}


function magicpi_product_tabs_classes(){
    $classes = array('nav','nav-uppercase');
    $tab_style = get_theme_mod('product_display','tabs');
    if($tab_style == 'tabs' || !$tab_style){
      $classes[] = 'nav-line';
    } else{
      $tab_style = str_replace("tabs_","",$tab_style);
      if($tab_style == 'vertical') $classes[] = 'nav-line';
      if($tab_style == 'normal') $classes[] = 'nav-tabs';
      $classes[] = 'nav-'.$tab_style;
    }

    $align = get_theme_mod('product_tabs_align','left');

    if($align){
        $classes[] = 'nav-'.$align;
    }

    echo implode(' ', $classes);
}


// Add Custom HTML Blocks
function magicpi_before_add_to_cart_html(){
    echo do_shortcode(get_theme_mod('html_before_add_to_cart'));
}
add_action( 'woocommerce_single_product_summary', 'magicpi_before_add_to_cart_html', 20);


// Add HTML after Add to Cart button
function magicpi_after_add_to_cart_html(){
    echo do_shortcode(get_theme_mod('html_after_add_to_cart'));
}
add_action( 'woocommerce_single_product_summary', 'magicpi_after_add_to_cart_html', 30);


// Add Custom HTML to top of product page
function magicpi_product_top_content(){
  global $wc_cpdf;
  if($wc_cpdf->get_value(get_the_ID(), '_top_content')){
    echo do_shortcode($wc_cpdf->get_value(get_the_ID(), '_top_content'));
  }
}

add_action('magicpi_before_product_page','magicpi_product_top_content', 10);

// Add Custom HTML to bottom of product page
function magicpi_product_bottom_content(){
  global $wc_cpdf;
  if($wc_cpdf->get_value(get_the_ID(), '_bottom_content')){
    echo do_shortcode($wc_cpdf->get_value(get_the_ID(), '_bottom_content'));
  }
}
add_action('magicpi_after_product_page','magicpi_product_bottom_content', 10);

function magicpi_related_products_args( $args ) {
  $args['posts_per_page'] = get_theme_mod('max_related_products', 8);
  return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'magicpi_related_products_args' );


function magicpi_sticky_add_to_cart_before() {
	if ( ! is_product() || ! get_theme_mod( 'product_sticky_cart', 0 ) ) {
		return;
	}

	global $product;
	echo '<div class="sticky-add-to-cart-wrapper">';
	echo '<div class="sticky-add-to-cart">';
	echo '<div class="sticky-add-to-cart__product">';
	$image_id = $product->get_image_id();
	$image    = wp_get_attachment_image_src( $image_id, 'woocommerce_gallery_thumbnail' );
	if ( $image ) {
		$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
		$image     = '<img src="' . $image[0] . '" alt="' . $image_alt . '" class="sticky-add-to-cart-img" />';
		echo $image;
	}
	echo '<div class="product-title-small hide-for-small"><strong>' . get_the_title() . '</strong></div>';
	if ( ! $product->is_type( 'variable' ) ) {
		woocommerce_template_single_price();
	}
	echo '</div>';
}

add_action( 'woocommerce_before_add_to_cart_button', 'magicpi_sticky_add_to_cart_before', -100 );


function magicpi_sticky_add_to_cart_after() {
	if ( ! is_product() || ! get_theme_mod( 'product_sticky_cart', 0 ) ) {
		return;
	}

	echo '</div>';
	echo '</div>';
}

add_action( 'woocommerce_after_add_to_cart_button', 'magicpi_sticky_add_to_cart_after', 100 );
