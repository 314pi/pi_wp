<?php

if ( ! isset( $content_width ) ) {
	$content_width = 1020; // Pixels.
}


function magicpi_setup() {

	/* add woocommerce support */
	add_theme_support( 'woocommerce' );

	if ( get_theme_mod( 'wpseo_breadcrumb' ) ) {
		add_theme_support( 'yoast-seo-breadcrumbs' );
	}

	/* add title tag support */
	add_theme_support( 'title-tag' );

	/* Load child theme languages */
	load_theme_textdomain( 'magicpi', get_stylesheet_directory() . '/languages' );

	/* load theme languages */
	load_theme_textdomain( 'magicpi', get_template_directory() . '/languages' );

	/* Add default posts and comments RSS feed links to head */
	add_theme_support( 'automatic-feed-links' );

	/* Add excerpt to pages */
	add_post_type_support( 'page', 'excerpt' );

	/* Add support for post thumbnails */
	add_theme_support( 'post-thumbnails' );

	/* Add support for Selective Widget refresh */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/** Add sensei support */
	add_theme_support( 'sensei' );

	/* Add support for HTML5 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'widgets',
	) );

	/*  Register menus. */
	register_nav_menus( array(
		'primary'        => __( 'Main Menu', 'magicpi' ),
		'primary_mobile' => __( 'Main Menu - Mobile', 'magicpi' ),
		'footer'         => __( 'Footer Menu', 'magicpi' ),
		'top_bar_nav'    => __( 'Top Bar Menu', 'magicpi' ),
		'my_account'     => __( 'My Account Menu', 'magicpi' ),
	) );

	/*  Enable support for Post Formats */
	add_theme_support( 'post-formats', array( 'video' ) );
}

add_action( 'after_setup_theme', 'magicpi_setup' );


/**
 * Setup Theme Widgets
 */
function magicpi_widgets_init() {

	$title_before = '';
	$title_class  = '';
	$title_after  = '<div class="is-divider small"></div>';

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'magicpi' ),
		'id'            => 'sidebar-main',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => $title_before . '<span class="widget-title ' . $title_class . '"><span>',
		'after_title'   => '</span></span>' . $title_after,
	) );


	register_sidebar( array(
		'name'          => __( 'Footer 1', 'magicpi' ),
		'id'            => 'sidebar-footer-1',
		'before_widget' => '<div id="%1$s" class="col pb-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span><div class="is-divider small"></div>',
	) );


	register_sidebar( array(
		'name'          => __( 'Footer 2', 'magicpi' ),
		'id'            => 'sidebar-footer-2',
		'before_widget' => '<div id="%1$s" class="col pb-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span><div class="is-divider small"></div>',
	) );
}

add_action( 'widgets_init', 'magicpi_widgets_init' );


/**
 * Setup Magicpi Styles and Scripts
 */
function magicpi_scripts() {
	$uri     = get_template_directory_uri();
	$theme   = wp_get_theme( get_template() );
	$version = $theme->get( 'Version' );

	// Styles.
	if ( ! is_rtl() ) {
		wp_enqueue_style( 'magicpi-main', $uri . '/assets/css/magicpi.css', array(), $version, 'all' );
	} else {
		wp_enqueue_style( 'magicpi-main-rtl', $uri . '/assets/css/magicpi-rtl.css', array(), $version, 'all' );
	}

	if ( is_woocommerce_activated() && ! is_rtl() ) {
		wp_enqueue_style( 'magicpi-shop', $uri . '/assets/css/magicpi-shop.css', array(), $version, 'all' );
	} elseif ( is_woocommerce_activated() ) {
		wp_enqueue_style( 'magicpi-shop-rtl', $uri . '/assets/css/magicpi-shop-rtl.css', array(), $version, 'all' );
	}

	// Load current theme styles.css file.
	if ( ! get_theme_mod( 'magicpi_disable_style_css', 0 ) ) {
		wp_enqueue_style( 'magicpi-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), 'all' );
	}

	// Register styles (Loaded on request).
	wp_register_style( 'magicpi-effects', $uri . '/assets/css/effects.css', array(), $version, 'all' );

	// Register scripts (Loaded on request).
	wp_register_script( 'magicpi-masonry-js', $uri . '/assets/libs/packery.pkgd.min.js', array( 'jquery' ), $version, true );
	wp_register_script( 'magicpi-isotope-js', $uri . '/assets/libs/isotope.pkgd.min.js', array( 'jquery', 'magicpi-js' ), $version, true );

	// Google maps.
	$maps_api = trim( get_theme_mod( 'google_map_api' ) );
	if ( ! empty( $maps_api ) ) {
		wp_register_script( 'magicpi-maps', '//maps.googleapis.com/maps/api/js?key=' . $maps_api, array( 'jquery' ), $version, true );
	}

	// Enqueue theme scripts.
	wp_enqueue_script( 'magicpi-js', $uri . '/assets/js/magicpi.js', array(
		'jquery',
		'hoverIntent',
	), $version, true );

	$sticky_height = get_theme_mod( 'header_height_sticky', 70 );

	if ( is_admin_bar_showing() ) {
		$sticky_height = $sticky_height + 30;
	}

	$lightbox_close_markup = apply_filters('magicpi_lightbox_close_button', '<button title="%title%" type="button" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>');

	// Add variables to scripts.
	wp_localize_script( 'magicpi-js', 'magicpiVars', array(
		'ajaxurl'       => admin_url( 'admin-ajax.php' ),
		'rtl'           => is_rtl(),
		'sticky_height' => $sticky_height,
		'lightbox'      => array(
			'close_markup'     => $lightbox_close_markup,
			'close_btn_inside' => apply_filters( 'magicpi_lightbox_close_btn_inside', false ),
		),
		'user'          => array(
			'can_edit_pages' => current_user_can( 'edit_pages' ),
		),
		'i18n'          => array(
			'mainMenu' => __( 'Main Menu', 'magicpi' ),
		),
		'options'       => array(
			'cookie_notice_version' => get_theme_mod( 'cookie_notice_version', '1' ),
		),
	) );

	if ( is_woocommerce_activated() ) {
		wp_enqueue_script( 'magicpi-theme-woocommerce-js', $uri . '/assets/js/woocommerce.js', array( 'magicpi-js' ), $version, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Custom Properties polyfill for Internet Explorer.
	wp_register_script( 'css-vars-polyfill', 'https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.0.1/ie11CustomProperties.min.js', array(), '4.0.1', true );
	wp_script_add_data( 'css-vars-polyfill', 'conditional', 'IE' );
}

add_action( 'wp_enqueue_scripts', 'magicpi_scripts', 100 );

/**
 * Set up UX Builder.
 */
function magicpi_ux_builder_setup() {
	// Add Ux Builder to post types.
	add_ux_builder_post_type( 'blocks' );
	add_ux_builder_post_type( 'product' );
	add_ux_builder_post_type( 'featured_item' );
}

add_action( 'init', 'magicpi_ux_builder_setup', 10 );

/**
 * Enqueue UX Builder scripts.
 *
 * @param  string $context Context is «editor» or content.
 */
function magicpi_ux_builder_scripts( $context ) {
	$uri     = get_template_directory_uri();
	$theme   = wp_get_theme( get_template() );
	$version = $theme->get( 'Version' );

	// Add UxBuilder assets.
	if ( $context == 'editor' ) {
		wp_enqueue_script( 'ux-builder-magicpi', $uri . '/assets/js/builder/custom/editor.js', array( 'ux-builder-core' ), $version, true );
		wp_enqueue_style( 'ux-builder-magicpi', $uri . '/assets/css/builder/custom/builder.css', array( 'ux-builder-core' ), $version );
	}
	if ( $context == 'content' ) {
		wp_enqueue_style( 'ux-builder-magicpi', $uri . '/assets/css/builder/custom/builder.css', null, $version );
		wp_enqueue_script( 'ux-builder-magicpi', $uri . '/assets/js/builder/custom/content.js', array(
			'magicpi-js',
			'magicpi-masonry-js',
		), $version, true );
	}
}

add_action( 'ux_builder_enqueue_scripts', 'magicpi_ux_builder_scripts', 10 );


if ( ! is_admin() && get_theme_mod( 'lazy_load_backgrounds', 1 ) ) {
	/**
	 * Lazy load backgrounds
	 */
	function magicpi_lazy_load_backgrounds_css() {
		echo '<style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>';
	}

	add_filter( 'wp_head', 'magicpi_lazy_load_backgrounds_css' );
}

/**
 * Remove jQuery migrate.
 *
 * @param WP_Scripts $scripts WP_Scripts object.
 */
function magicpi_remove_jquery_migrate( $scripts ) {
	if ( ! get_theme_mod( 'jquery_migrate' ) ) return;
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];

		if ( $script->deps ) { // Check whether the script has any dependencies.
			$script->deps = array_diff( $script->deps, array(
				'jquery-migrate',
			) );
		}
	}
}

add_action( 'wp_default_scripts', 'magicpi_remove_jquery_migrate' );

// Disable emoji scripts
if ( ! is_admin() && get_theme_mod( 'disable_emoji', 0 ) ) {
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
}

function magicpi_deregister_block_styles() {
	if ( ! is_admin() && get_theme_mod( 'disable_blockcss', 0 ) ) {
    wp_dequeue_style( 'wp-block-library' );
  }
}
add_action( 'wp_print_styles', 'magicpi_deregister_block_styles', 100 );
