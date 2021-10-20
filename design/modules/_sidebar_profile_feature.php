<div class="sidebar__spacing">
	<div class="faculty__item">
		<?php $img = get_sub_field('image'); ?>
		<?php if ( $img ) : ?>
			<div class="faculty__image">
				<?php echo wp_get_attachment_image($img, 'profile-feature', false); ?>
			</div>
		<?php endif; ?>
		<?php $link = get_sub_field('link'); ?>
		<?php if ($link) : ?>
			<div class="faculty__link">
				<a href="<?php echo $link['url']; ?>" <?php link_target($link); ?>"><?php echo $link['title']; ?></a>
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
</div>