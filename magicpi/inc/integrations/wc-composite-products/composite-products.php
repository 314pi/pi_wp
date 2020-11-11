<?php
/**
 * Composite Products integration
 *
 * @author      UX Themes
 * @package     Magicpi/Integrations
 * @see         https://woocommerce.com/products/composite-products/
 */

/**
 *  Composite products integration script.
 */
function magicpi_wc_composite_products_integration() {
	global $integrations_uri;
	wp_enqueue_script( 'magicpi-composite-products', $integrations_uri . '/wc-composite-products/composite-products.js', array( 'jquery', 'magicpi-js' ), 1.2, true );
}

add_action( 'wp_enqueue_scripts', 'magicpi_wc_composite_products_integration' );
