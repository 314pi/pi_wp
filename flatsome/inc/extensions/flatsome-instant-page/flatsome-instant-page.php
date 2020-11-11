<?php
/**
 * Magicpi Instant Page extension
 *
 * @author     UX Themes
 * @category   Extension
 * @package    Magicpi/Extensions
 * @since      3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

add_action( 'wp_enqueue_scripts', 'magicpi_instant_page' );

if ( ! function_exists( 'magicpi_instant_page' ) ) :

function magicpi_instant_page() {
  global $extensions_uri;

  wp_enqueue_script(
    'magicpi-instant-page',
    $extensions_uri . '/magicpi-instant-page/magicpi-instant-page.js',
    array(),
    '1.2.1',
    true
  );
}

endif;
