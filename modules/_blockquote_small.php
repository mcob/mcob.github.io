<blockquote class="blockquote">
	<q>
		<?php the_sub_field('content'); ?>
	</q>
	<?php if(strlen(get_sub_field('source_name')) > 0): ?>
	  <cite>
	    <span class="text-orange"><?php the_sub_field('source_name'); ?></span><?php if(strlen(get_sub_field('source_title')) > 0): ?>, <?php the_sub_field('source_title'); ?><?php endif; ?>
	  </cite>
	<?php endif; ?>
</blockquote>