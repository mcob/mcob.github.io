<div class="image__slider">
	<?php while (have_rows('image_slide')) : the_row(); ?>
		<?php $img = get_sub_field('image'); ?>
		<?php if ( $img ) : ?>
			<div class="image">
				<div class="image-box">
				<?php echo wp_get_attachment_image($img, 'tertiary-feature', false); ?>
				</div>
			    <?php if(strlen(get_sub_field('image_caption')) > 0): ?>
					<p class="feature__caption"><?php the_sub_field('image_caption'); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>	
</div>


				
