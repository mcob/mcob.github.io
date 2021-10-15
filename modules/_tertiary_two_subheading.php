<!--This is for blogs-->
<?php get_template_part('modules/_hero_no_arrow'); ?>
<?php if(strlen(get_field('intro_text')) > 0): ?>
	<p class="p-intro">
	  <?php the_field('intro_text'); ?>
	</p>
<?php endif; ?>
<!-- <p class="p-tert-headline">
  <strong>Published:</strong> June 19, 2018 / <strong>Author:</strong> Nick Swisher
</p> -->
<hr>