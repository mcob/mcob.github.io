<?php if(get_sub_field('embed_display') == 'float'): ?>
	<div class="form--float">
	  <?php the_sub_field('embed_code'); ?>
	</div>
<?php else : ?>
	<?php the_sub_field('embed_code'); ?>
<?php endif ?>
