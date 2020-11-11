<?php

add_action( 'wc_cpdf_init', 'wc_custom_product_data_fields', 10, 0 );

if ( ! function_exists( 'wc_custom_product_data_fields' ) ) {
	/**
	 * Custom WooCommerce product fields
	 *
	 * @return array
	 */
	function wc_custom_product_data_fields() {

		$custom_product_data_fields = array();

		$custom_product_data_fields['ux_product_layout_tab'] = array(
			array(
				'tab_name' => __( 'Product layout', 'magicpi' ),
			),
			array(
				'id'          => '_product_block',
				'type'        => 'select',
				'label'       => __( 'Custom product layout', 'magicpi' ) . ' (NEW)',
				'style'       => 'width:100%;height:140px;',
				'description' => __( 'Choose a custom product block layout for this product.', 'magicpi' ),
				'desc_tip'    => true,
				'options'     => magicpi_get_block_list_by_id( array( 'option_none' => '-- None --' ) ),
			),
			array(
				'id'          => '_top_content',
				'type'        => 'textarea',
				'label'       => __( 'Top Content', 'magicpi' ),
				'style'       => 'width:100%;height:140px;',
				'description' => __( 'Enter content that will show after the header and before the product. Shortcodes are allowed', 'magicpi' ),
			),
			array(
				'id'          => '_bottom_content',
				'type'        => 'textarea',
				'label'       => __( 'Bottom Content', 'magicpi' ),
				'style'       => 'width:100%;height:140px;',
				'description' => __( 'Enter content that will show after the product info. Shortcodes are allowed', 'magicpi' ),
			),
		);

		$custom_product_data_fields['ux_extra_tab'] = array(
			array(
				'tab_name' => __( 'Extra', 'magicpi' ),
			),
			array(
				'id'          => '_bubble_new',
				'type'        => 'select',
				'label'       => __( 'Custom Bubble', 'magicpi-admin' ),
				'description' => __( 'Enable a custom bubble on this product.', 'magicpi' ),
				'desc_tip'    => true,
				'options'     => array(
					''      => 'Disabled',
					'"yes"' => 'Enabled',
				),
			),
			array(
				'id'          => '_bubble_text',
				'type'        => 'text',
				'label'       => __( 'Custom Bubble Title', 'magicpi-admin' ),
				'placeholder' => __( 'NEW', 'magicpi-admin' ),
				'class'       => 'large',
				'description' => __( 'Field description.', 'magicpi-admin' ),
				'desc_tip'    => true,
			),
			array(
				'type' => 'divider',
			),
			array(
				'id'          => '_custom_tab_title',
				'type'        => 'text',
				'label'       => __( 'Custom Tab Title', 'magicpi-admin' ),
				'class'       => 'large',
				'description' => __( 'Field description.', 'magicpi-admin' ),
				'desc_tip'    => true,
			),
			array(
				'id'          => '_custom_tab',
				'type'        => 'textarea',
				'label'       => __( 'Custom Tab Content', 'magicpi' ),
				'style'       => 'width:100%;height:140px;',
				'description' => __( 'Enter content for custom product tab here. Shortcodes are allowed', 'magicpi' ),
			),
			array(
				'type' => 'divider',
			),
			array(
				'id'          => '_product_video',
				'type'        => 'text',
				'placeholder' => 'https://www.youtube.com/watch?v=Ra_iiSIn4OI',
				'label'       => __( 'Product Video', 'magicpi' ),
				'style'       => 'width:100%;',
				'description' => __( 'Enter a Youtube or Vimeo Url of the product video here. We recommend uploading your video to Youtube.', 'magicpi' ),
			),
			array(
				'id'          => '_product_video_size',
				'type'        => 'text',
				'label'       => __( 'Product Video Size', 'magicpi-admin' ),
				'placeholder' => __( '900x900', 'magicpi-admin' ),
				'class'       => 'large',
				'description' => __( 'Set Product Video Size.. Default is 900x900. (Width X Height)', 'magicpi-admin' ),
				'desc_tip'    => true,
			),
			array(
				'id'          => '_product_video_placement',
				'type'        => 'select',
				'label'       => __( 'Product Video Placement', 'magicpi-admin' ),
				'description' => __( 'Select where you want to display product video.', 'magicpi' ),
				'desc_tip'    => true,
				'options'     => array(
					''    => 'Lightbox (Default)',
					'tab' => 'New Tab',
				),
			),
		);

		return $custom_product_data_fields;
	}
}
