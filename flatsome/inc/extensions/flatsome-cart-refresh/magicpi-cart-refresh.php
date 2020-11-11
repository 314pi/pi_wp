<?php
/**
 * Magicpi Cart refresh extension
 *
 * @author     UX Themes
 * @category   Extension
 * @package    Magicpi/Extensions
 * @since      3.6.0
 */

/**
 * To be enqueued refresh script.
 */
function magicpi_cart_refresh_script() {
	global $extensions_uri;
	$theme   = wp_get_theme( get_template() );
	$version = $theme->get( 'Version' );
	wp_enqueue_script( 'magicpi-cart-refresh', $extensions_uri . '/magicpi-cart-refresh/magicpi-cart-refresh.js', array( 'jquery', 'magicpi-js' ), $version, true );
}

/**
 * Add extension script if on cart page.
 */
function magicpi_add_cart_refresh_script() {
	if ( is_cart() ) {
		add_action( 'wp_enqueue_scripts', 'magicpi_cart_refresh_script' );
	}
}

add_action( 'wp', 'magicpi_add_cart_refresh_script' );

