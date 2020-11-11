<?php
/**
 * Magicpi Structure
 *
 * Page Structure.
 *
 * @package  Magicpi\Structures
 */

/**
 * Adds page excerpt to top if exists.
 *
 * @return void
 */
function magicpi_page_top_excerpt() {
	if ( get_theme_mod( 'page_top_excerpt', 1 ) && has_excerpt() ) { ?>
		<div class="page-header-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<?php
	}
}
add_action( 'magicpi_before_page', 'magicpi_page_top_excerpt', 20 );

/**
 * Adds opening wrappers to the password protection form if page is password protected.
 *
 * @return void
 */
function magicpi_page_passord_required_top() {
	if ( post_password_required() ) echo '<div class="page-title"></div><div class="container password-required">';
}
add_action( 'magicpi_before_page', 'magicpi_page_passord_required_top', -99 );

/**
 * Adds closing wrappers to the password protection form if page is password protected.
 *
 * @return void
 */
function magicpi_page_passord_required_bottom() {
	if ( post_password_required() ) echo '</div>';
}
add_action( 'magicpi_after_page', 'magicpi_page_passord_required_bottom', 99 );

/**
 * Adds classes to Pages.
 *
 * @param array $classes Classes.
 * @return array.
 */
function magicpi_page_header_options( $classes ) {

	// Header classes for pages.
	if ( is_page() ) {

		$page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );

		// Get default page template.
		if ( get_theme_mod( 'pages_template', 'default' ) !== 'blank' && $page_template == 'default' || empty( $page_template ) ) {
			$page_template = get_theme_mod( 'pages_template', 'default' );
		}

		// Set header classes.
		if ( ! empty( $page_template ) ) {

			if ( strpos( $page_template, 'transparent' ) !== false ) {
				$classes[] = 'transparent has-transparent';
			}

			if ( strpos( $page_template, 'header-on-scroll' ) !== false ) {
				$classes[] = 'show-on-scroll';
			}
		}
	}
	return $classes;
}
add_filter( 'magicpi_header_class', 'magicpi_page_header_options', 10 );

/**
 * Pages SubNav.
 *
 * @global object $post Post object (WP_Post).
 *
 * @param string $style Page style.
 * @param string $string HTML codes of SubNav.
 * @return void.
 */
function get_magicpi_subnav( $style = '', $string = '' ) {
	if ( is_page() ) {
		global $post;
		if ( is_page() && $post->post_parent )
		$childpages      = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
		else $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
		if ( $childpages ) {

			// Add active class.
			$childpages = str_replace( 'current_page_item', 'current_page_item active', $childpages );
			$string     = '<ul class="nav ' . $style . '">' . $childpages . '</ul>';
		}

		echo $string; // phpcs:ignore
	}
}

/**
 * Filters the HTML output of individual page number links.
 *
 * @param string $link The page number HTML output.
 * @param int    $i    Page number for paginated posts' page links.
 *
 * @return string Modified HTML output.
 */
function magicpi_wp_link_pages_link( $link, $i ) {
	return '<li>' . $link . '</li>';
}

add_filter( 'wp_link_pages_link', 'magicpi_wp_link_pages_link', 10, 2 );

/**
 * Filters the arguments used in retrieving page links for paginated posts.
 *
 * @param array $params An array of arguments for page links for paginated posts.
 *
 * @return array Modified parameters.
 */
function magicpi_wp_link_pages_args( $params ) {
	$params['before'] = '<div class="page-links"><ul class="page-numbers nav-pagination links text-center pb">';
	$params['after']  = '</ul></div>';

	return $params;
}

add_filter( 'wp_link_pages_args', 'magicpi_wp_link_pages_args' );

/**
 * The formatted output of a list of pages.
 * Displays page links for paginated pages with <!--nextpage-->
 */
function magicpi_wp_link_pages() {
	wp_link_pages();
}

add_action( 'magicpi_after_page', 'magicpi_wp_link_pages' );

