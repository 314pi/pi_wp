<?php

function get_magicpi_icon($name, $size = null){
  if($size) $size = 'style="font-size:'.$size.';"';
  return '<i class="'.$name.'" '.$size.'></i>';
}

function magicpi_add_icons_css() {
  wp_enqueue_style( 'magicpi-icons', get_template_directory_uri() .'/assets/css/fl-icons.css', array(), '3.12', 'all' );
}
add_action( 'wp_enqueue_scripts', 'magicpi_add_icons_css' );
