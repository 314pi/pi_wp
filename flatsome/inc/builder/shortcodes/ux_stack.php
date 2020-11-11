<?php
/**
 * Registers the Stack element in UX Builder.
 *
 * @package magicpi
 */

add_ux_builder_shortcode( 'ux_stack', array(
	'type'      => 'container',
	'name'      => __( 'Stack', 'magicpi' ),
	'category'  => __( 'Layout', 'magicpi' ),
	'thumbnail' => magicpi_ux_builder_thumbnail( 'ux_stack' ),
	'template'  => magicpi_ux_builder_template( 'ux_stack.html' ),
	'wrap'      => false,
	'nested'    => true,
	'options'   => array(
		'direction'        => array(
			'type'       => 'select',
			'heading'    => __( 'Direction', 'magicpi' ),
			'responsive' => true,
			'default'    => 'row',
			'options'    => array(
				'row' => __( 'Horizontal', 'magicpi' ),
				'col' => __( 'Vertical', 'magicpi' ),
			),
		),
		'distribute'       => array(
			'type'       => 'select',
			'heading'    => __( 'Distribute', 'magicpi' ),
			'responsive' => true,
			'default'    => 'start',
			'options'    => array(
				'start'   => __( 'Start', 'magicpi' ),
				'center'  => __( 'Center', 'magicpi' ),
				'end'     => __( 'End', 'magicpi' ),
				'between' => __( 'Space between', 'magicpi' ),
				'around'  => __( 'Space around', 'magicpi' ),
			),
		),
		'align'            => array(
			'type'       => 'select',
			'heading'    => __( 'Align', 'magicpi' ),
			'responsive' => true,
			'default'    => 'stretch',
			'options'    => array(
				'stretch'  => __( 'Stretch', 'magicpi' ),
				'start'    => __( 'Start', 'magicpi' ),
				'center'   => __( 'Center', 'magicpi' ),
				'end'      => __( 'End', 'magicpi' ),
				'baseline' => __( 'Baseline', 'magicpi' ),
			),
		),
		'gap'              => array(
			'type'       => 'slider',
			'heading'    => __( 'Gap', 'magicpi' ),
			'responsive' => true,
			'default'    => '0',
			'unit'       => 'rem',
			'max'        => '16',
			'min'        => '0',
			'step'       => '0.25',
		),
		'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
	),
) );
