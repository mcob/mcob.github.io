<div class="full-width">
	<div class="container">
		<div class="block">
			<div class="block__outline__grid__wrap">
				<div class="block__outline__grid block__outline__grid--<?php echo count(get_sub_field('outline_slide')); ?>">

				<?php while (have_rows('outline_slide')) : the_row(); ?>
					<div>
						<div class="block__outline">

						<?php the_sub_field('slide_content'); ?>

						</div>
					</div>

				<?php endwhile; ?>	

				</div>
			</div>
		</div>
	</div>
</div>