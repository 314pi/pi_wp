<?php
/**
 * Add Custom CSS to Customizer
 */

function magicpi_enqueue_customizer_stylesheet() {
    $theme = wp_get_theme( get_template() );
    $version = $theme['Version'];

    wp_enqueue_script( 'magicpi-customizer-admin-js', get_template_directory_uri() . '/assets/js/customizer-admin.js', NULL, $version, 'all' );
    wp_enqueue_style( 'magicpi-header-builder-css', get_template_directory_uri() . '/assets/css/admin/admin-header-builder.css', NULL, $version, 'all' );
    wp_enqueue_style( 'magicpi-customizer-admin', get_template_directory_uri() . '/assets/css/admin/admin-customizer.css', NULL, $version, 'all' );
}
add_action( 'customize_controls_print_styles', 'magicpi_enqueue_customizer_stylesheet' );

function magicpi_customizer_live_preview() {
    $theme = wp_get_theme( 'magicpi' );
    $version = $theme['Version'];

    wp_enqueue_style( 'magicpi-customizer-preview', get_template_directory_uri() . '/assets/css/admin/admin-frontend.css', NULL, $version, 'all' );

    wp_enqueue_script( 'magicpi-customizer-frontend-js', get_template_directory_uri() . '/assets/js/customizer-frontend.js', NULL, $version, 'all' );
}
add_action( 'customize_preview_init', 'magicpi_customizer_live_preview' );
