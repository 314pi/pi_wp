<?php

Magicpi_Option::add_field( 'option', array(
	'type'      => 'checkbox',
	'settings'  => 'woocommerce_store_notice_top',
	'label'     => __( 'Move store notice to the top', 'magicpi-admin' ),
	'section'   => 'woocommerce_store_notice',
	'default'   => 0
) );