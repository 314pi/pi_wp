<?php

add_ux_builder_shortcode( 'block', array(
  'name' => __( 'Block', 'magicpi' ),
  'category' => __( 'Layout', 'magicpi' ),
  'compile' => false,
  'thumbnail' =>  magicpi_ux_builder_thumbnail( 'block' ),
  'template_shortcode' => "[{tag}{options}]\n\n",
  'external' => true,

  'options' => array(
    'id' => array(
      'type' => 'select',
      'heading' => __( 'Block', 'magicpi' ),
      'full_width' => true,
      'config' => array(
        'placeholder' => __( 'Select', 'magicpi' ),
        'postSelect' => array(
          'post_type' => array( 'blocks' )
        ),
      )
    ),
  ),
) );
