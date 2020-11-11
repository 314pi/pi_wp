<?php

/*************
 * Header Main
 *************/

Magicpi_Option::add_section( 'header-layout', array(
	'title'       => __( 'Elements', 'magicpi-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'magicpi-admin' ),
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'magicpi_version',
	'label'       => __( 'Magicpi Version', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'topbar_elements_left',
	'label'       => __( '← Left Elements', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_topbar_elements_left(),
	'transport' => $transport,
	'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'topbar_elements_center',
	'label'       => __( 'Center Elements', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => array(),
	'transport' => $transport,
	'choices'     => $nav_elements
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'topbar_elements_right',
	'label'       => __( 'Right Elements →', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'transport' => $transport,
	'default'     => magicpi_topbar_elements_right(),
	'choices'     => $nav_elements
));


Magicpi_Option::add_field( '', array(
    'type'        => 'custom',
    'settings' => 'custom_title_header_layout_main',
    'label'       => __( '', 'magicpi-admin' ),
	'section'     => 'header-layout',
    'default'     => '<div class="options-title-divider">Main Header</div>',
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_elements_left',
	'label'       => __( 'Left Elements', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'transport' => 'postMessage',
	'multiple' => 5,
	'default'     => magicpi_header_elements_left(),
	'choices'     => $nav_elements
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_elements_right',
	'label'       => __( 'Right Elements', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'transport' => 'postMessage',
	'multiple' => 5,
	'default'     => magicpi_header_elements_right(),
	'choices'     => $nav_elements
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_elements_bottom_left',
	'label'       => __( 'Left Elements', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_header_elements_bottom_left(),
	'transport' => $transport,
	'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_elements_bottom_center',
	'label'       => __( 'Left Elements', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_header_elements_bottom_center(),
	'transport' => $transport,
	'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_elements_bottom_right',
	'label'       => __( 'Right Elements', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_header_elements_bottom_right(),
	'transport' => $transport,
	'choices'     => $nav_elements
));



Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_mobile_elements_top',
	'label'       => __( 'Mobile Top', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_header_mobile_elements_top(),
	'transport' => $transport,
	'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_mobile_elements_left',
	'label'       => __( 'Left Elements', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_header_mobile_elements_left(),
	'transport' => $transport,
	'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_mobile_elements_right',
	'label'       => __( 'Left Elements', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => magicpi_header_mobile_elements_right(),
	'transport' => $transport,
	'choices'     => $nav_elements
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'select',
	'settings'     => 'header_mobile_elements_bottom',
	'label'       => __( 'Left Elements', 'magicpi-admin' ),
	//'description' => __( 'This is the control description', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'header-layout',
	'multiple'    => 5,
	'default'     => array(),
	'transport' => $transport,
	'choices'     => $nav_elements
));