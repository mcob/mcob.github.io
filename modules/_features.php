<?php while (have_rows('features')) : the_row(); ?>
  <div class="block">
    <?php if(get_sub_field('color') == 'orange'): ?>
      <div class="feature feature--orange animate-feature">
    <?php else: ?>
      <div class="feature animate-feature">
    <?php endif; ?>
      <?php if(get_sub_field('image_placement') == 'right'): ?>
          <div class="feature__item feature__item--swap">
        <?php else: ?>
          <div class="feature__item">
        <?php endif; ?>
        <div class="feature__media">
          <div class="feature__image feature__shadow ">
            <span></span>
            <?php $img = get_sub_field('image'); ?>
          <?php echo wp_get_attachment_image($img, 'home-feature', false); ?>
          <?php if(strlen(get_sub_field('video_url')) > 0): ?>
            <div class="media__btn__container__feature">
              <a href="<?php the_sub_field('video_url'); ?>" class="media__btn" data-minimodal>
                <span class="media__btn__circle media__btn__icon__feature__bg"></span>
                <?php echo svgstore('play-alt', '', 'media__btn__icon__feature media__btn__icon__feature__bg') ?>
              </a>
            </div>
          <?php endif; ?>
          </div>
          <?php if(strlen(get_sub_field('image_caption')) > 0): ?>
            <p class="feature__caption"><?php the_sub_field('image_caption'); ?></p>
          <?php endif; ?>
        </div>
        <div class="feature__content">
          <div class="feature__tag"><?php the_sub_field('feature_tag'); ?></div>
          <div class="feature__title"><?php the_sub_field('sub_heading'); ?></div>
          <p class="feature__paragraph"><?php the_sub_field('teaser'); ?></p>

          <?php $link = get_sub_field('link'); ?>
          <?php if ($link) : ?>
            <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link feature__link"><?php echo $link['title']; ?></a>
          <?php endif; ?>

          
          <?php $link = get_sub_field('video_url'); ?>
          <?php if ($link) : ?>
            <div class="blockquote__link__contain">
            <a href="<?php the_sub_field('video_url'); ?>" class="blockquote__link" data-minimodal>
              
              <?php if(get_sub_field('image_placement') == 'right'): ?>
                <?php echo svgstore('play', '', 'media__link ') ?>
                <span class="blockquote__link__text button__link "><?php the_sub_field('video_url_text'); ?></span>
              <?php else: ?>
                <?php echo svgstore('play', '', 'media__link') ?>
                <span class="blockquote__link__text feature__link button__link"><?php the_sub_field('video_url_text'); ?></span>
              <?php endif; ?>
             
            </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>