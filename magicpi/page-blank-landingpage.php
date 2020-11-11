<?php
/*
Template name: Page - No Header / No Footer
*/
?>
<!DOCTYPE html>
<!--[if lte IE 9 ]><html class="ie lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('magicpi_before_page' ); ?>
<?php do_action('magicpi_after_header'); ?>
<div id="wrapper">

	<div id="main" class="<?php magicpi_main_classes();  ?>">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>

	</div>

</div>
<?php do_action( 'magicpi_after_page' ); ?>

<?php wp_footer(); ?>
</body>
</html>