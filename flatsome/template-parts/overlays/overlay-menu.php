<?php
/**
 * The overlay menu.
 *
 * @package magicpi
 */

$magicpi_mobile_overlay         = get_theme_mod( 'mobile_overlay' );
$magicpi_mobile_sidebar_classes = array( 'mobile-sidebar', 'no-scrollbar', 'mfp-hide' );
$magicpi_nav_classes            = array( 'nav', 'nav-sidebar', 'nav-vertical', 'nav-uppercase' );
$magicpi_levels                 = 0;

if ( 'center' == $magicpi_mobile_overlay ) {
	$magicpi_nav_classes[] = 'nav-anim';
}

if (
	'center' != $magicpi_mobile_overlay &&
	'slide' == get_theme_mod( 'mobile_submenu_effect' )
) {
	$magicpi_levels = (int) get_theme_mod( 'mobile_submenu_levels', '1' );

	$magicpi_mobile_sidebar_classes[] = 'mobile-sidebar-slide';
	$magicpi_nav_classes[]            = 'nav-slide';

	for ( $level = 1; $level <= $magicpi_levels; $level++ ) {
		$magicpi_mobile_sidebar_classes[] = "mobile-sidebar-levels-{$level}";
	}
}
?>
<div id="main-menu" class="<?php echo esc_attr( implode( ' ', $magicpi_mobile_sidebar_classes ) ); ?>"<?php echo $magicpi_levels ? ' data-levels="' . esc_attr( $magicpi_levels ) . '"' : ''; ?>>
	<div class="sidebar-menu no-scrollbar <?php if ( $magicpi_mobile_overlay == 'center') echo 'text-center'; ?>">
		<ul class="<?php echo esc_attr( implode( ' ', $magicpi_nav_classes ) ); ?>">
			<?php magicpi_header_elements( 'mobile_sidebar', 'sidebar' ); ?>
		</ul>
	</div>
</div>
