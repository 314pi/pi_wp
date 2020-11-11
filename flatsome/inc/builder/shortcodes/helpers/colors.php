<?php

return array(
	array(
		'title' => 'Dark',
		'value' => 'rgb(0,0,0)',
	),
	array(
		'title' => 'White',
		'value' => 'rgb(255,255,255)',
	),
	array(
		'title' => 'Primary',
		'value' => get_theme_mod( 'color_primary', Magicpi_Default::COLOR_PRIMARY ),
	),
	array(
		'title' => 'Secondary',
		'value' => get_theme_mod( 'color_secondary', Magicpi_Default::COLOR_SECONDARY ),
	),
	array(
		'title' => 'Success',
		'value' => get_theme_mod( 'color_success', Magicpi_Default::COLOR_SUCCESS ),
	),
);
