<?php
/**
 * Magicpi Cookie notice extension
 *
 * @author     UX Themes
 * @category   Extension
 * @package    Magicpi/Extensions
 * @since      3.12.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue extensions scripts.
 */
function magicpi_cookie_notice_scripts() {
	global $extensions_uri;

	wp_enqueue_script( 'magicpi-cookie-notice', $extensions_uri . '/magicpi-cookie-notice/magicpi-cookie-notice.js', array( 'jquery', 'magicpi-js' ), '3.12.0', true );
}

add_action( 'wp_enqueue_scripts', 'magicpi_cookie_notice_scripts' );

/**
 * Html template for cookie notice.
 */
function magicpi_cookie_notice_template() {
	if ( ! get_theme_mod( 'cookie_notice' ) ) {
		return;
	}

	$classes = array();
	if ( get_theme_mod( 'cookie_notice_text_color' ) === 'dark' ) {
		$classes[] = 'dark';
	}
	$text = get_theme_mod( 'cookie_notice_text' );
	$id   = get_theme_mod( 'privacy_policy_page' );
	$page = $id ? get_post( $id ) : false;
	$text = $text ? $text : __( 'This site uses cookies to improve your browse experience. By browsing this website, you agree to our use of cookies.', 'magicpi' );
	?>
	<div class="magicpi-cookies <?php echo esc_attr( implode( ' ', $classes ) ); ?>">
		<div class="magicpi-cookies__inner">
			<div class="magicpi-cookies__text">
				<?php echo do_shortcode( $text ); ?>
			</div>
			<div class="magicpi-cookies__buttons">
				<?php
				if ( $page ) {
					echo magicpi_apply_shortcode( 'button', array(
						'text'  => _x( 'More info', 'cookie notice', 'magicpi' ),
						'style' => get_theme_mod( 'cookie_notice_button_style', '' ),
						'link'  => get_permalink( $page->ID ),
						'color' => 'secondary',
						'class' => 'magicpi-cookies__more-btn',
					) );
				}
				?>
				<?php
				echo magicpi_apply_shortcode( 'button', array(
					'text'  => _x( 'Accept', 'cookie notice', 'magicpi' ),
					'style' => get_theme_mod( 'cookie_notice_button_style', '' ),
					'color' => 'primary',
					'class' => 'magicpi-cookies__accept-btn',
				) );
				?>
			</div>
		</div>
	</div>
	<?php
}

add_action( 'wp_footer', 'magicpi_cookie_notice_template' );
