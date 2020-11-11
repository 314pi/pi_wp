<?php get_template_part('template-parts/portfolio/portfolio-title', magicpi_option('portfolio_title')); ?>

<div class="portfolio-top">
	<div class="row">

	<div class="large-3 col">
	<div class="portfolio-summary entry-summary">
		<?php get_template_part('template-parts/portfolio/portfolio-summary'); ?>
	</div>

	</div>

	<div id="portfolio-content" class="large-9 col col-first col-divided"  role="main">
		<div class="portfolio-inner">
			<?php get_template_part('template-parts/portfolio/portfolio-content'); ?>
		</div>
	</div>

	</div>
</div>

<div class="portfolio-bottom">
	<?php get_template_part('template-parts/portfolio/portfolio-next-prev'); ?>
	<?php get_template_part('template-parts/portfolio/portfolio-related'); ?>
</div>