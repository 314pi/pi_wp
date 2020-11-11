<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php magicpi_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php magicpi_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php magicpi_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'magicpi_after_body_open' ); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'magicpi' ); ?></a>

<div id="wrapper">

	<?php do_action( 'magicpi_before_header' ); ?>

	<header id="header" class="header <?php magicpi_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'magicpi_after_header' ); ?>

	<main id="main" class="<?php magicpi_main_classes(); ?>">
