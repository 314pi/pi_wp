<?php
	do_action('magicpi_before_blog');
?>

<?php if(!is_single() && magicpi_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-large <?php if(magicpi_option('blog_layout_divider')) echo 'row-divided ';?>">

	<div class="large-9 col">
	<?php if(!is_single() && magicpi_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(magicpi_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', magicpi_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', magicpi_option('blog_style') );
		}
	?>
	</div>
	<div class="post-sidebar large-3 col">
		<?php magicpi_sticky_column_open( 'blog_sticky_sidebar' ); ?>
		<?php get_sidebar(); ?>
		<?php magicpi_sticky_column_close( 'blog_sticky_sidebar' ); ?>
	</div>
</div>

<?php
	do_action('magicpi_after_blog');
?>
