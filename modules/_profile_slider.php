<div class="container--gray">
	<div class="container container--relative container--clear">
		<div class="main__content--alt">
			<div class="block zero">
				<?php if(strlen(get_sub_field('heading')) > 0): ?>
					<h2>
						<?php the_sub_field('heading'); ?>
					</h2>
				<?php endif; ?>
				<?php if(strlen(get_sub_field('intro_text')) > 0): ?>
					<p class="faculty__slider__paragraph">
					<?php the_sub_field('intro_text'); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="main__content--alt faculty__slider--overflow">
			<div class="faculty__slider">
				<?php while (have_rows('items')) : the_row(); ?>
					<div class="faculty__item">
						<?php $img = get_sub_field('image'); ?>
						<?php if ( $img ) : ?>
							<div class="faculty__image">
								<?php echo wp_get_attachment_image($img, 'profile-feature', false); ?>
							</div>
						<?php endif; ?>
					  <?php $modal_video = get_sub_field('modal_video'); ?>
					  <?php $link = get_sub_field('link'); ?>
						<?php if ($link) : ?>
							<div class="faculty__link">
								 <?php if ($modal_video) : ?>
								 	<a href="<?php echo $link['url']; ?>" <?php link_target($link); ?>" data-minimodal><?php echo $link['title']; ?></a>
								 <?php else : ?>
								 	<a href="<?php echo $link['url']; ?>" <?php link_target($link); ?>"><?php echo $link['title']; ?></a>
								 <?php endif; ?>	
								
							</div>
						<?php endif; ?>
						<p>
							<?php if(strlen(get_sub_field('subheading')) > 0): ?>
						        <span class="faculty__title">
						          <?php the_sub_field('subheading'); ?>
						        </span>
						    <?php endif; ?>
							<?php if(strlen(get_sub_field('quote')) > 0): ?>
						        <span class="faculty__paragraph">
						          <?php the_sub_field('quote'); ?>
						        </span>
						    <?php endif; ?>
						</p>
					</div>
				<?php endwhile; ?>	             
			</div>
		</div>
	</div>
</div>


