<?php

$extensions_url = get_template_directory() . '/inc/extensions';
$extensions_uri = get_template_directory_uri() . '/inc/extensions';

// Shortcode Inserter
if(is_admin()){ require $extensions_url.'/magicpi-shortcode-insert/tinymce.php'; }

// Lazy load
if((!is_admin() && !is_customize_preview() ) && get_theme_mod('lazy_load_images')){ require $extensions_url.'/magicpi-lazy-load/magicpi-lazy-load.php'; }

if ( get_theme_mod( 'perf_instant_page', 0 ) ) {
  require $extensions_url.'/magicpi-instant-page/magicpi-instant-page.php';
}

if(get_theme_mod('live_search', 1)){
  require $extensions_url.'/magicpi-live-search/magicpi-live-search.php';
}

if ( get_theme_mod( 'cookie_notice' ) || is_customize_preview() ) {
	require $extensions_url . '/magicpi-cookie-notice/magicpi-cookie-notice.php';
}

if(is_woocommerce_activated()){
	if(!get_theme_mod('disable_quick_view', 0)){
		require $extensions_url.'/magicpi-wc-quick-view/magicpi-quick-view.php';
	}
	if ( get_theme_mod( 'magicpi_infinite_scroll' ) ) {
		require $extensions_url . '/magicpi-infinite-scroll/class-magicpi-infinite-scroll.php';
	}
	if ( get_theme_mod( 'cart_auto_refresh' ) ) {
		require $extensions_url . '/magicpi-cart-refresh/magicpi-cart-refresh.php';
	}
}
