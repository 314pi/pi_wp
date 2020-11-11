<?php
	$classes = array();
	$classes[] = 'is-'.get_theme_mod('breadcrumb_size', 'large');
?>
<div class="<?php echo implode(' ', $classes); ?>">
	<?php magicpi_breadcrumb(); ?>
</div>
