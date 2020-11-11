<?php
/**
 * Handles magicpi option upgrades
 *
 * @author     UX Themes
 * @category   Class
 * @package    Magicpi/Classes
 * @since      3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Magicpi_Upgrade
 */
class Magicpi_Upgrade {

	/**
	 * Holds magicpi DB version
	 *
	 * @var string
	 */
	private $db_version;

	/**
	 * Holds magicpi current running parent theme version
	 *
	 * @var string
	 */
	private $running_version;

	/**
	 * Holds is upgrade completed
	 *
	 * @var bool
	 */
	private $is_upgrade_completed = false;

	/**
	 * Holds update callback that need to be run per version
	 *
	 * @var array
	 */
	private $updates = array(
		'3.4.0' => array(
			'update_340',
		),
		'3.6.0' => array(
			'update_360',
		),
		'3.9.0' => array(
			'update_390',
		),
	);

	/**
	 * Magicpi_Upgrade Class constructor
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'check_version' ), 5, 0 );
	}

	/**
	 * Check Magicpi version and run the updater if required.
	 */
	public function check_version() {

		$theme = wp_get_theme( get_template() );
		$this->db_version = get_theme_mod( 'magicpi_db_version', '3.0.0' );
		$this->running_version = $theme->version;

		// If current version is new and current version has any update run it.
		if ( version_compare( $this->db_version, $this->running_version, '<' ) && version_compare( $this->db_version, max( array_keys( $this->updates ) ), '<' ) ) {
			$this->update();
			if ( $this->is_upgrade_completed ) {
				$this->update_db_version();
			}
		}
	}

	/**
	 * Push all needed updates
	 */
	private function update() {

		foreach ( $this->updates as $version => $update_callbacks ) {
			if ( version_compare( $this->db_version, $version, '<' ) ) {

				// Run all callbacks.
				foreach ( $update_callbacks as $update_callback ) {
					if ( method_exists( $this, $update_callback ) ) {
						$this->$update_callback();
					} elseif ( function_exists( $update_callback ) ) {
						$update_callback();
					}
				}
			}
		}
		$this->is_upgrade_completed = true;
	}

	/**
	 * Performs upgrades to Magicpi 3.4.0
	 */
	private function update_340() {
		$portfolio_archive_filter = get_theme_mod( 'portfolio_archive_filter' );
		if ( empty( $portfolio_archive_filter ) ) {
			set_theme_mod( 'portfolio_archive_filter', 'left' );
		}
	}

	/**
	 * Performs upgrades to Magicpi 3.6.0
	 */
	private function update_360() {

		// Set cart layout as checkout layout if its set.
		if ( get_theme_mod( 'checkout_layout' ) ) {
			set_theme_mod( 'cart_layout', get_theme_mod( 'checkout_layout' ) );
		}

		// Fixes old headlines.
		$fonts = array(
			'type_headings' => array(
				'font-family' => 'Lato',
				'variant'     => '700',
			),
			'type_texts'    => array(
				'font-family' => 'Lato',
				'variant'     => '400',
			),
			'type_nav'      => array(
				'font-family' => 'Lato',
				'variant'     => '700',
			),
			'type_alt'      => array(
				'font-family' => 'Dancing Script',
				'variant'     => '400',
			),
		);

		// Reset font to default if it contains an empty array.
		foreach ( $fonts as $font => $default ) {
			$setting = get_theme_mod( $font );
			if ( ! $setting ) {
				set_theme_mod( $font, $default );
			}
		}
	}

	/**
	 * Performs upgrades to Magicpi 3.9.0
	 */
	private function update_390() {
		remove_theme_mod( 'follow_google' );
		remove_theme_mod( 'lazy_load_google_fonts' );
		remove_theme_mod( 'lazy_load_icons' );

		set_theme_mod( 'pages_template', 'default' );
	}

	/**
	 * Set the DB version to the current running version.
	 * Should only be called when all upgrades are performed.
	 */
	private function update_db_version() {
		set_theme_mod( 'magicpi_db_version', $this->running_version );
	}
}

new Magicpi_Upgrade();
