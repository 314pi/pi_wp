<?php
/**
 * Magicpi Admin Panel
 */
class Magicpi_Admin {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'magicpi_panel_register_menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'magicpi_panel_style' ) );
	
	} // end constructor


	/**
	 * Load welcome screen css
	 * @return void
	 * @since  1.4.4
	 */
	public function magicpi_panel_style() {
		global $magicpi_version;
		wp_enqueue_style( 'magicpi-panel-css', get_template_directory_uri() . '/inc/admin/panel/panel.css', $magicpi_version );
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 * @since 1.0.0
	 */
	public function magicpi_panel_register_menu() {
		$url = admin_url().'admin.php?page=magicpi-panel';

		add_menu_page( 'Welcome to Magicpi', 'Magicpi', 'manage_options', 'magicpi-panel', array( $this, 'magicpi_panel_welcome' ), get_template_directory_uri().'/assets/img/logo-icon.svg', '2');
		
		add_submenu_page('magicpi-panel', 'Theme License', 'Theme License', 'manage_options', 'admin.php?page=magicpi-panel' );

		//add_submenu_page('magicpi-panel', 'Getting Started', 'Getting Started', 'manage_options', 'magicpi-panel-getting-started', array( $this, 'magicpi_panel_getting_started') );

		//add_submenu_page('magicpi-panel', 'Tutorials', 'Tutorials', 'manage_options', 'magicpi-panel-tutorials', array( $this, 'magicpi_panel_tutorials') );

		add_submenu_page('magicpi-panel', 'Help & Guides', 'Help & Guides', 'manage_options', 'magicpi-panel-support', array( $this, 'magicpi_panel_support') );

		//add_submenu_page('magicpi-panel', 'Plugins', 'Plugins', 'manage_options', 'magicpi-panel-plugins', array( $this, 'magicpi_panel_plugins') );

		add_submenu_page('magicpi-panel', 'Change log', 'Change log', 'manage_options', 'magicpi-panel-changelog', array( $this, 'magicpi_panel_changelog') );

	    add_submenu_page('magicpi-panel', '', 'Theme Options', 'manage_options', 'customize.php' );
	}

	/**
	 * The welcome screen
	 * @since 1.0.0
	 */
	public function magicpi_panel_welcome() {
		?>
		<div class="magicpi-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-activate.php' ); ?>
			</div>
		</div>
		<?php
	}

	public function magicpi_panel_getting_started() {
		?>
		<div class="magicpi-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-guide.php' ); ?>
			</div>
		</div>
		<?php
	}

	public function magicpi_panel_tutorials() {
		?>
		<div class="magicpi-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-tutorials.php' ); ?>
			</div>
		</div>
		<?php
	}

	/*public function magicpi_panel_plugins() {
		?>
		<div class="magicpi-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-plugins.php' ); ?>
			</div>
		</div>
		<?php
	} */

	public function magicpi_panel_support() {
		?>
		<div class="magicpi-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-support.php' ); ?>
			</div>
		</div>
		<?php
	}

	public function magicpi_panel_changelog() {
		?>
		<div class="magicpi-panel">
			<div class="wrap about-wrap">
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/top.php' ); ?>
				<?php require_once( get_template_directory() . '/inc/admin/panel/sections/tab-changelog.php' ); ?>
			</div>
		</div>
		<?php
	}

}

$GLOBALS['Magicpi_Admin'] = new Magicpi_Admin();