<div class="main__sidebar">
	<?php while (have_rows('sidebar_modules')) : the_row(); ?>
	    <?php get_template_part('modules/_' . get_row_layout()); ?>
	<?php endwhile; ?>
</div>