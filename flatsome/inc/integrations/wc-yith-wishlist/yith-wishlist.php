<?php
/**
 * YITH wishlist integration
 *
 * @author      UX Themes
 * @package     Magicpi/Integrations
 */

if ( ! function_exists( 'magicpi_wishlist_integrations_scripts' ) ) {
	/**
	 * Enqueues wishlist integrations scripts
	 */
	function magicpi_wishlist_integrations_scripts() {
		global $integrations_uri;

		wp_dequeue_style( 'yith-wcwl-main' );
		wp_deregister_style( 'yith-wcwl-main' );
		wp_dequeue_style( 'yith-wcwl-font-awesome' );
		wp_deregister_style( 'yith-wcwl-font-awesome' );

		// TODO 4.0 Move and apply on AJAX search plugin.
		wp_dequeue_style( 'yith_wcas_frontend' );
		wp_deregister_style( 'yith_wcas_frontend' );

		wp_enqueue_script( 'magicpi-woocommerce-wishlist',  $integrations_uri . '/wc-yith-wishlist/wishlist.js', array( 'jquery', 'magicpi-js' ), '3.10.2', true );
		wp_enqueue_style( 'magicpi-woocommerce-wishlist', $integrations_uri . '/wc-yith-wishlist/wishlist.css', 'magicpi-woocommerce-style', '3.10.2' );
	}
}
add_action( 'wp_enqueue_scripts', 'magicpi_wishlist_integrations_scripts' );

if ( ! function_exists( 'magicpi_wishlist_account_item' ) ) {
	/**
	 * Add wishlist button to my account dropdown
	 */
	function magicpi_wishlist_account_item() {
		$page_id = get_option( 'yith_wcwl_wishlist_page_id' );
		if ( ! $page_id ) {
			return;
		}

		$wishlist_page = yith_wcwl_object_id( $page_id );
		?>
		<li class="wishlist-account-element <?php if ( is_page( $wishlist_page ) ) echo 'active'; ?>">
			<a href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>"><?php echo get_the_title( $wishlist_page ); ?></a>
		</li>
		<?php
	}
}
add_action( 'magicpi_account_links', 'magicpi_wishlist_account_item' );


if ( ! function_exists( 'magicpi_product_wishlist_button' ) ) {
	/**
	 * Add wishlist Button to Product Image
	 */
	function magicpi_product_wishlist_button() {
		$icon = get_theme_mod( 'wishlist_icon', 'heart' );
		if ( ! $icon ) $icon = 'heart';
		?>
		<div class="wishlist-icon">
			<button class="wishlist-button button is-outline circle icon" aria-label="<?php echo __( 'Wishlist', 'magicpi' ); ?>">
				<?php echo get_magicpi_icon( 'icon-' . $icon ); ?>
			</button>
			<div class="wishlist-popup dark">
				<?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ); ?>
			</div>
		</div>
		<?php
	}
}
add_action( 'magicpi_product_image_tools_top', 'magicpi_product_wishlist_button', 2 );
add_action( 'magicpi_product_box_tools_top', 'magicpi_product_wishlist_button', 2 );

if ( ! function_exists( 'magicpi_header_wishlist' ) ) {
	/**
	 * Header Wishlist element
	 *
	 * @param $elements
	 * @return mixed
	 */
	function magicpi_header_wishlist( $elements ) {
		$elements['wishlist'] = __( 'Wishlist', 'magicpi' );

		return $elements;
	}
}
add_filter( 'magicpi_header_element', 'magicpi_header_wishlist' );

if ( ! function_exists( 'magicpi_update_wishlist_count' ) ) {
	/**
	 * Update Wishlist Count
	 */
	function magicpi_update_wishlist_count() {
		wp_send_json( YITH_WCWL()->count_products() );
	}
}
add_action( 'wp_ajax_magicpi_update_wishlist_count', 'magicpi_update_wishlist_count' );
add_action( 'wp_ajax_nopriv_magicpi_update_wishlist_count', 'magicpi_update_wishlist_count' );
