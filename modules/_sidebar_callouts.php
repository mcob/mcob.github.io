<div class="sidebar__panel">
	<?php while (have_rows('sidebar_callouts')) : the_row(); ?>
		<?php $link = get_sub_field('link'); ?>
		<?php if ($link) : ?>
			<a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button-alt"><?php echo $link['title']; ?></a>
		<?php endif; ?>
	<?php endwhile; ?>
</div>

