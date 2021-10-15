<div class="block">
  <?php if(get_sub_field('style') != 'alt'): ?>
    <hr>
  <?php endif; ?>
  <h2><?php the_sub_field('heading'); ?></h2>
  <?php the_sub_field('intro_text'); ?>
  <div class="grid grid--2 grid--no-margin">
    <?php while (have_rows('link')) : the_row(); ?>
      <div class="icon__arrow">
        <?php echo svgstore('circle-arrow', 'Mendoza School of Business', 'icon__arrow__svg') ?>
        <div>
          <?php $link = get_sub_field('link'); ?>
          <?php if ($link) : ?>
            <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link"><?php echo $link['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>