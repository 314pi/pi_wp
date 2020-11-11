<?php

function magicpi_wp_rocket_integration() {
  global $integrations_uri;

  if(get_rocket_option( 'lazyload' )){
  	 wp_enqueue_script( 'magicpi-wp-rocket',  $integrations_uri.'/wp-rocket/magicpi-wp-rocket.js', array('magicpi-js'), 3.0, true);
  }

}
add_action( 'wp_enqueue_scripts', 'magicpi_wp_rocket_integration' );

/**
 * JS files to be included in the footer during the minification process.
 */
function magicpi_wp_rocket_minify_js_in_footer( $scripts ) {
  $uri = get_template_directory_uri();
  if ( wp_script_is( 'magicpi-countdown-theme-js' ) ) {
    $scripts[] = $uri . '/inc/shortcodes/ux_countdown/ux-countdown.js';
  }
  if ( wp_script_is( 'magicpi-lazy' ) ) {
    $scripts[] = $uri . '/inc/extensions/magicpi-lazy-load/magicpi-lazy-load.js';
  }
  if ( wp_script_is( 'magicpi-wp-rocket' ) ) {
    $scripts[] = $uri . '/inc/integrations/wp-rocket/magicpi-wp-rocket.js';
  }
  if ( wp_script_is( 'magicpi-isotope-js' ) ) {
    $scripts[] = $uri . '/assets/libs/isotope.pkgd.min.js';
  }
  return $scripts;
}
add_filter( 'rocket_minify_js_in_footer', 'magicpi_wp_rocket_minify_js_in_footer' );
