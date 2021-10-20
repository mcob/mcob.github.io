<aside class="main__sidebar">
	<?php if(strlen(get_field('sidebar_navigation')) > 0): ?>
		<nav class="subnav subnav--vertical" aria-label="navigation">
			<button class="subnav__toggle">
		      <span class="subnav__toggle__text">
		        In this Section
		      </span>
		      <?php echo svgstore('arrow', '', 'subnav__toggle__icon') ?>
		    </button>
			<?php the_field('sidebar_navigation'); ?>
		</nav>
	<?php endif; ?>
	<?php while (have_rows('sidebar_modules_top')) : the_row(); ?>
    	<?php get_template_part('modules/_' . get_row_layout()); ?>
    <?php endwhile; ?>
</aside>