<?php

/* HEADER TEMPLATES */

// Product Headers
function magicpi_product_header(){
    if(is_product() && get_theme_mod('product_header') && get_theme_mod('product_layout') !== 'custom'){
       wc_get_template_part('single-product/headers/header-product', get_theme_mod('product_header'));
    }
}
add_action('magicpi_after_header','magicpi_product_header', 10);


// Add Transparent Header To Cateogry if Set
function magicpi_product_header_classes($classes){

    // Add transparent header to product page if set.
    if(is_product() && magicpi_option('product_header_transparent')){
         $classes[] = 'transparent has-transparent nav-dark toggle-nav-dark';
    }

    return $classes;
}

add_filter('magicpi_header_class','magicpi_product_header_classes', 10);


/* BREADCRUMBS */

// Add Breadcrunmbs To Description if no custom page header is set
function magicpi_woocommerce_product_breadcrumb() {
  if(!get_theme_mod('product_header')){
  	 magicpi_breadcrumb();
  }
}
add_action( 'woocommerce_single_product_summary', 'magicpi_woocommerce_product_breadcrumb',  0 );


// Add Breadcrumbs to Featured Headers if set
function magicpi_product_page_breadcrumbs(){
  wc_get_template_part('loop/breadcrumbs');
}
add_action('magicpi_product_title','magicpi_product_page_breadcrumbs',20);


// Move Page title up if featured header is set
function magicpi_product_page_title(){
  if(get_theme_mod('product_header') !== 'featured-center') return;

  echo '<h1 class="product-title product_title entry-title">'.get_the_title().'</h1>';

  remove_action('woocommerce_single_product_summary','woocommerce_template_single_title', 5);
}
add_action('magicpi_product_title','magicpi_product_page_title', 10);


/* Add Next/Prev Nav to Product Image  */
if(!function_exists('magicpi_product_title_next_prev')) {
  function magicpi_product_title_next_prev(){
    if(get_theme_mod('product_next_prev_nav',1)){
      magicpi_product_next_prev_nav();
    }
  }
}
add_action('magicpi_product_title_tools','magicpi_product_title_next_prev', 20);

if(!function_exists('magicpi_product_mobile_next_prev_nav')) {
  function magicpi_product_mobile_next_prev_nav(){
     if(!get_theme_mod('product_header') && get_theme_mod('product_next_prev_nav',1)){
          magicpi_product_next_prev_nav('show-for-medium');
     }
  }
}
add_action('woocommerce_single_product_summary','magicpi_product_mobile_next_prev_nav', 7);


/* Add Next/Prev Nav to Product Sidebar  */
if(!function_exists('magicpi_product_nav_sidebar')) {
  function magicpi_product_nav_sidebar(){
     if(get_theme_mod('product_next_prev_nav',1) && !get_theme_mod('product_header') && get_theme_mod('product_layout') !== 'left-sidebar-full' && get_theme_mod('product_layout') !== 'left-sidebar'){
      echo '<div class="hide-for-off-canvas" style="width:100%">';
        magicpi_product_next_prev_nav('nav-right text-right');
      echo '</div>';
     }
  }
}
add_action('magicpi_before_product_sidebar','magicpi_product_nav_sidebar', 0);


if(!function_exists('magicpi_product_next_prev_nav')) {
  function magicpi_product_next_prev_nav($class = ''){
        echo '<ul class="next-prev-thumbs is-small '.$class.'">';
        magicpi_next_post_link_product();
        magicpi_previous_post_link_product();
        echo '</ul>';
  }
}


if(!function_exists('magicpi_next_post_link_product')) {
  function magicpi_next_post_link_product() {
      global $post;
      $next_post = get_next_post(true,'','product_cat');
      if ( is_a( $next_post , 'WP_Post' ) ) { ?>
         <li class="prod-dropdown has-dropdown">
               <a href="<?php echo get_the_permalink( $next_post->ID ); ?>"  rel="next" class="button icon is-outline circle">
                  <?php echo get_magicpi_icon('icon-angle-left'); ?>
              </a>
              <div class="nav-dropdown">
                <a title="<?php echo get_the_title( $next_post->ID ); ?>" href="<?php echo get_the_permalink( $next_post->ID ); ?>">
                <?php echo get_the_post_thumbnail($next_post->ID, apply_filters( 'woocommerce_gallery_thumbnail_size', 'woocommerce_gallery_thumbnail' )) ?></a>
              </div>
          </li>
      <?php }
  }
}

if(!function_exists('magicpi_previous_post_link_product')) {
  function magicpi_previous_post_link_product() {
      global $post;
      $prev_post = get_previous_post(true,'','product_cat');
      if ( is_a( $prev_post , 'WP_Post' ) ) { ?>
         <li class="prod-dropdown has-dropdown">
               <a href="<?php echo get_the_permalink( $prev_post->ID ); ?>" rel="next" class="button icon is-outline circle">
                  <?php echo get_magicpi_icon('icon-angle-right'); ?>
              </a>
              <div class="nav-dropdown">
                  <a title="<?php echo get_the_title( $prev_post->ID ); ?>" href="<?php echo get_the_permalink( $prev_post->ID ); ?>">
                  <?php echo get_the_post_thumbnail($prev_post->ID, apply_filters( 'woocommerce_gallery_thumbnail_size', 'woocommerce_gallery_thumbnail' )) ?></a>
              </div>
          </li>
      <?php }
  }
}

if(!function_exists('magicpi_open_product_sidebar_lightbox')) {
  function magicpi_open_product_sidebar_lightbox() {
      if(!get_theme_mod('product_offcanvas_sidebar', 0)) return;
      wc_get_template_part('single-product/filter-button');
  }
}
add_action('woocommerce_before_single_product', 'magicpi_open_product_sidebar_lightbox', 15);
