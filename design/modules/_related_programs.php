<div class="block-small">
  <h3><?php the_sub_field('heading'); ?></h3>
  <?php the_sub_field('intro_text'); ?>
  <div class="icon__arrow">
  <?php echo svgstore('circle-arrow', 'Mendoza School of Business', 'icon__arrow__svg') ?>
    <div class="icon__arrow__group">
      <?php while (have_rows('link')) : the_row(); ?>
      <span>
        <?php $link = get_sub_field('link'); ?>
        <?php if ($link) : ?>
          <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link"><?php echo $link['title']; ?></a>
        <?php endif; ?>
      </span>
      <?php endwhile; ?>
    </div>
  </div>
</div>