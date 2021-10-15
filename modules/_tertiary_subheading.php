<!--This is for blogs-->
<?php if(strlen(get_field('intro_text')) > 0): ?>
	<p class="p-intro container--narrow">
	  <?php the_field('intro_text'); ?>
	</p>
<?php endif; ?>
<!-- <p class="p-tert-headline">
  <strong>Published:</strong> June 19, 2018 / <strong>Author:</strong> Nick Swisher
</p> -->
<hr>