<?php

$_magicpi_theme_mod_site_url = site_url( '', 'http' );
$_magicpi_theme_mod_site_url_secure = site_url( '', 'https' );

function magicpi_theme_mod_fix ( $value ) {
  if ( ! is_string( $value ) ) return $value;
  global $_magicpi_theme_mod_site_url;
  global $_magicpi_theme_mod_site_url_secure;
  return str_replace(
    array( '[site_url]', '[site_url_secure]' ),
    array( $_magicpi_theme_mod_site_url, $_magicpi_theme_mod_site_url_secure ),
    $value
  );
}

add_filter( 'theme_mod_footer_1_bg_image', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_footer_2_bg_image', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_custom_cart_icon', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_site_logo', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_site_logo_dark', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_header_bg_img', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_header_newsletter_bg', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_site_logo_sticky', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_body_bg_image', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_portfolio_archive_bg', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_header_shop_bg_image', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_facebook_login_bg', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_payment_icons_custom', 'magicpi_theme_mod_fix' );
add_filter( 'theme_mod_follow_snapchat', 'magicpi_theme_mod_fix' );
