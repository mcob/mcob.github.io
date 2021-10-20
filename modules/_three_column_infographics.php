<div class="block">
  <div class="grid">
  	<?php while (have_rows('items')) : the_row(); ?>
	    <div class="three-column-infographic">
	    	<?php $img = get_sub_field('image'); ?>
			<?php if ( $img ) : ?>
				<?php echo wp_get_attachment_image($img, 'program-small', "", array( "class" => "inline-block" )); ?>
			<?php endif; ?>
			<hr class="vertical-orange">
			<?php the_sub_field('content'); ?>
	    </div>
    <?php endwhile; ?>
  </div>
</div>