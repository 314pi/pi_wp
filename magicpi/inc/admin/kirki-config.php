<?php
/**
 * Configuration for the Kirki Customizer
 */

if ( ! function_exists( 'magicpi_kirki_update_url' ) ) {
	function magicpi_kirki_update_url( $config ) {
		$config['url_path'] = get_template_directory_uri() . '/inc/admin/kirki/';

		return $config;
	}
}
add_filter( 'kirki_config', 'magicpi_kirki_update_url' );

/**
 * Disable default Kirki modules.
 *
 * @param array $modules List of default modules.
 *
 * @return array Filtered list of modules.
 */
function magicpi_kirki_modules( $modules ) {
	unset( $modules['css'] );
	unset( $modules['css-vars'] );
	unset( $modules['customizer-styling'] );
	unset( $modules['icons'] );
	unset( $modules['loading'] );
	unset( $modules['branding'] );
	unset( $modules['selective-refresh'] );
	unset( $modules['gutenberg'] );
	unset( $modules['telemetry'] );

	return $modules;
}

add_filter( 'kirki_modules', 'magicpi_kirki_modules' );

/**
 * Custom option sanitize callback.
 */
function magicpi_custom_sanitize( $content ) {
	return $content;
}

Magicpi_Option::add_config( 'option', array(
	'option_type'    => 'theme_mod',
	'capability'     => 'edit_theme_options',
	'disable_output' => true,
) );
