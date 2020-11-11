<?php
Magicpi_Option::add_section( 'catalog-mode', array(
	'title'       => __( 'Catalog Mode', 'magicpi-admin' ),
	'panel' => 'woocommerce',
	'description' => __( 'Enable Catalog Mode', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'catalog_mode',
	'label'       => __( 'Enable Catalogue Mode.', 'magicpi-admin' ),
	'section'     => 'catalog-mode',
	'default'     => 0,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'catalog_mode_prices',
	'label'       => __( 'Disable Prices', 'magicpi-admin' ),
	'description' => 'Select to disable prices on category pages and product page.',
	'section'     => 'catalog-mode',
	'default'     => 0,
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'catalog_mode_header',
	'transport' => $transport,
	'label'       => __( 'Header Cart replacement', 'magicpi-admin' ),
	'help'        => __( "Enter content you want to display instad of Account / Cart. Shortcodes are allowed.", 'magicpi-admin'),
	'section'     => 'catalog-mode',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'catalog_mode_product',
	'transport' => $transport,
	'label'       => __( 'Product page Add to cart replacement.', 'magicpi-admin' ),
	'help'        => __( 'Enter contact information or enquery form shortcode here.', 'magicpi-admin'),
	'section'     => 'catalog-mode',
	'default'     => 'Add any HTML or Shortcode here...',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'catalog_mode_lightbox',
	'transport' => $transport,
	'label'       => __( 'Add to cart replacement - Product Quick View', 'magicpi-admin' ),
	'help'        => __( 'Enter text that will show in product quick view', 'magicpi-admin'),
	'section'     => 'catalog-mode',
	'default'     => '',
));
