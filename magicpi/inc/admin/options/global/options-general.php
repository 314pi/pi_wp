<?php 

Magicpi_Option::add_section( 'advanced', array(
	'title'       => __( 'Reset Options', 'magicpi-admin' ),
	'priority' 	  => 999,
    'description' => __( 'Click the reset button to reset all options to default values.', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_advanced_reset',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'advanced',
    'default'     => '<div class="reset-options-container"><button name="Reset" id="magicpi-customizer-reset" class="button-primary button" title="Reset Theme Options">Reset Theme Options</button></div>',
) );