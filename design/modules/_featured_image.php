<?php $img = get_field('image'); ?>
<?php if ( $img ) : ?>
  <div class="image">
    <div class="image__wrap">
      <?php echo wp_get_attachment_image($img, 'tertiary-feature', false); ?>

      <div class="image__arrow"></div>

      <div class="image__content">
        <?php if(strlen(get_field('video_url')) > 0): ?>
          <a href="<?php the_field('video_url'); ?>" class="media__btn" data-minimodal>
            <span class="media__btn__circle"></span>
            <?php echo svgstore('play-alt', '', 'media__btn__icon') ?>
          </a>
        <?php endif; ?>
        <?php if(strlen(get_field('overlay_text')) > 0): ?>
          <h2 class="text-white"><?php the_field('overlay_text'); ?></h2>
        <?php endif ?>
      </div>

    </div>
    <?php if(strlen(get_field('caption_text')) > 0): ?>
      <p class="feature__caption"><?php the_field('caption_text'); ?></p>
    <?php endif ?>
  </div>
<?php endif ?>