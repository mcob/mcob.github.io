<div class="block">
  <?php while (have_rows('items')) : the_row(); ?>
  <div class="block">
    <?php if( get_row_index() % 2 == 0 ) : ?>
      <div class="block__split block__split--swap">
    <?php else : ?>
      <div class="block__split">
    <?php endif; ?>
    <?php if(strlen(get_sub_field('video')) > 0): ?>
      <div class="block__split__image block__split__image--bg">
        <?php $img = get_sub_field('image'); ?>
        <?php echo wp_get_attachment_image($img, 'program-highlight', false); ?>
        <div class="media__btn__container">
          <a href="<?php the_sub_field('video'); ?>" class="media__btn" data-minimodal>
            <span class="media__btn__circle"></span>
            <?php echo svgstore('play-alt', '', 'media__btn__icon') ?>
          </a>
        </div>
      </div>
    <?php else : ?>
      <div class="block__split__image">
        <?php $img = get_sub_field('image'); ?>
        <?php echo wp_get_attachment_image($img, 'program-highlight', false); ?>
      </div>
    <?php endif; ?>
      <div class="block__split__content zero">
        <h3><?php the_sub_field('heading'); ?></h3>
        <p>
          <?php the_sub_field('content'); ?>
        </p>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</div>