<div class="sidebar__spacing">
	<div class="text-center">
		<?php $img = get_sub_field('image'); ?>
		<?php if ( $img ) : ?>
	      <div class="rank__image">
	        <?php echo wp_get_attachment_image($img, 'home-ranking', false); ?>
	      </div>
	    <?php endif; ?>
		<?php if(strlen(get_sub_field('heading')) > 0): ?>
			<h3 class="rank__heading">
			  <?php the_sub_field('heading'); ?>
			</h3>
		<?php endif; ?>
		<?php if(strlen(get_sub_field('content')) > 0): ?>
			<p class="rank__text">
			  <?php the_sub_field('content'); ?>
			</p>
		<?php endif; ?>
	</div>
</div>