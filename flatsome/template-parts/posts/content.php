<div class="entry-content">
	<?php if ( magicpi_option('blog_show_excerpt') || is_search())  { ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<div class="text-<?php echo get_theme_mod( 'blog_posts_title_align', 'center' );?>">
			<a class="more-link button primary is-outline is-smaller" href="<?php echo get_the_permalink(); ?>"><?php _e('Continue reading <span class="meta-nav">&rarr;</span>', 'magicpi'); ?></a>
		</div>
	</div>
	<?php } else { ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'magicpi' ) ); ?>
	<?php
		wp_link_pages();
	?>
<?php }; ?>

</div>