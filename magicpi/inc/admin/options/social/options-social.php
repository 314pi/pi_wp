<?php

/**
 * Add our controls.
 */


function magicpi_social_panels_sections( $wp_customize ) {


	$wp_customize->add_section( 'share', array(
		'title'       => __( 'Share', 'magicpi-admin' ),
		'description' => __( 'This is the default settings for the [share] shortcode and various share icons on the website.', 'magicpi-admin' ),
	) );

	$wp_customize->add_section( 'follow', array(
		'title'       => __( 'Follow Icons', 'magicpi-admin' ),
		'panel'       => 'header',
		'description' => __( 'This is the default settings for the [follow] shortcode and Social Icons header element.', 'magicpi-admin' ),
	) );
}
add_action( 'customize_register', 'magicpi_social_panels_sections' );


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'social_icons_style',
	'label'       => __( 'Share Icons Style', 'magicpi-admin' ),
	'section'     => 'share',
	'default'     => 'outline',
	'transport' => $transport,
	'choices'     => array(
		'small' => $image_url . 'icon-plain.svg',
		'outline' => $image_url . 'icon-outline.svg',
		'fill' => $image_url . 'icon-fill.svg',
		'fill-round' => $image_url . 'icon-fill-round.svg',
		'outline-round' => $image_url . 'icon-outline-round.svg',
	),
));


Magicpi_Option::add_field( 'option',  array(
		'type'        => 'multicheck',
		'settings'     => 'social_icons',
		'label'       => __( 'Share Icons', 'magicpi-admin' ),
		//'description' => __( 'This is the control description', 'magicpi-admin' ),
		//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
		'section'     => 'share',
		'transport' => $transport,
		'default'     => array(
			'facebook',
			'twitter',
			'email',
			'pinterest',
			'whatsapp',
			'tumblr'
		),
		'choices'     => array(
			"facebook" => "Facebook",
			"linkedin" => "LinkedIn",
			"twitter" => "Twitter",
			"email" => "Email",
			"pinterest" => "Pinterest",
			"vk" => "VKontakte",
			"tumblr" => "Tumblr",
			"whatsapp" => "WhatsApp (Only for Mobile)",
		),
	)
);

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'textarea',
	'settings'     => 'custom_share_icons',
	'label'       => __( 'Share Replace', 'magicpi-admin' ),
	'description'       => __( 'Replace Share Icons with Custom Scripts etc.', 'magicpi-admin' ),
	'section'     => 'share',
	'default'     => '',
));



/*************
 * Social Icons
 *************/

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'radio-image',
	'settings'     => 'follow_style',
	'label'       => __( 'Icons Style', 'magicpi-admin' ),
	'section'     => 'follow',
	'default'     => 'small',
	'transport' => $transport,
	'choices'     => array(
		'small' => $image_url . 'icon-plain.svg',
		'outline' => $image_url . 'icon-outline.svg',
		'fill' => $image_url . 'icon-fill.svg',
		'fill-round' => $image_url . 'icon-fill-round.svg',
		'outline-round' => $image_url . 'icon-outline-round.svg',
	),
));


Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_facebook',
	'label'       => __( 'Facebook', 'magicpi-admin' ),
	'transport' => $transport,
	//'description' => __( 'Add Any HTML or Shortcode here...', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'follow',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_twitter',
	'label'       => __( 'Twitter', 'magicpi-admin' ),
	'transport' => $transport,
	//'description' => __( 'Add Any HTML or Shortcode here...', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'follow',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_pinterest',
	'label'       => __( 'Pinterest', 'magicpi-admin' ),
	'transport' => $transport,
	'section'     => 'follow',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_instagram',
	'label'       => __( 'Instagram', 'magicpi-admin' ),
	'transport' => $transport,
	//'description' => __( 'Add Any HTML or Shortcode here...', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'follow',
	'default'     => '',
));

Magicpi_Option::add_field( 'option', array(
	'type'      => 'text',
	'settings'  => 'follow_tiktok',
	'label'     => __( 'TikTok', 'magicpi-admin' ),
	'transport' => $transport,
	'section'   => 'follow',
	'default'   => '',
) );

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_linkedin',
	'label'       => __( 'LinkedIn', 'magicpi-admin' ),
	'transport' => $transport,
	//'description' => __( 'Add Any HTML or Shortcode here...', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'follow',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_youtube',
	'label'       => __( 'YouTube', 'magicpi-admin' ),
	'transport' => $transport,
	//'description' => __( 'Add Any HTML or Shortcode here...', 'magicpi-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'magicpi-admin' ),
	'section'     => 'follow',
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_vk',
	'label'       => __( 'VKontakte', 'magicpi-admin' ),
	'section'     => 'follow',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_flickr',
	'label'       => __( 'Flickr', 'magicpi-admin' ),
	'section'     => 'follow',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_email',
	'label'       => __( 'E-mail', 'magicpi-admin' ),
	'section'     => 'follow',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_phone',
	'label'       => __( 'Phone', 'magicpi-admin' ),
	'section'     => 'follow',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_rss',
	'label'       => __( 'RSS', 'magicpi-admin' ),
	'section'     => 'follow',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'text',
	'settings'     => 'follow_500px',
	'label'       => __( '500px', 'magicpi-admin' ),
	'section'     => 'follow',
	'transport' => $transport,
	'default'     => '',
));

Magicpi_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'follow_snapchat',
	'label'       => __( 'SnapChat', 'magicpi-admin' ),
	'description' => 'Upload a Snapcode image here. You can generate it here: https://accounts.snapchat.com/accounts/snapcodes',
	'section'     => 'follow',
	'transport' => $transport,
));

function magicpi_refresh_social( WP_Customize_Manager $wp_customize ) {

  // Abort if selective refresh is not available.
  if ( ! isset( $wp_customize->selective_refresh ) ) {
      return;
  }

	  $wp_customize->selective_refresh->add_partial( 'follow_icons', array(
	    'selector' => '.follow-icons',
	    'settings' => array('follow_linkedin','follow_flickr','follow_email','follow_phone','follow_style','follow_facebook','follow_twitter','follow_instagram','follow_tiktok','follow_rss','follow_vk','follow_youtube','follow_pinterest','follow_snapchat','follow_500px'),
	    'container_inclusive' => true,
	    'render_callback' => function() {
	        return do_shortcode('[follow defaults="true" style="'.magicpi_option('follow_style').'"]');
	    },
	) );

	$wp_customize->selective_refresh->add_partial( 'social_icons', array(
	    'selector' => '.share-icons',
	    'settings' => array('social_icons','social_icons_style'),
	    'container_inclusive' => true,
	    'render_callback' => function() {
	        return do_shortcode('[share]');
	    },
	) );

}
add_action( 'customize_register', 'magicpi_refresh_social' );
