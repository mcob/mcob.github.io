<div class="blockquote__image">
  <?php $img = get_sub_field('image'); ?>
  <?php echo wp_get_attachment_image($img, 'home-quote', false); ?>
  <div class="blockquote__svg">
    <?php echo svgstore('quote', '', 'blockquote__svg__icon') ?>
  </div>
</div>
<div class="blockquote__content">
  <?php if ($slide_count > 1) : ?>
    <div class="blockquote__nav">
      <button class="blockquote__nav__btn blockquote__nav__btn--prev">
        <?php echo svgstore('arrow', '', 'arrow--prev') ?>
      </button>
      <button class="blockquote__nav__btn blockquote__nav__btn--next">
        <?php echo svgstore('arrow', '', 'arrow--next') ?>
      </button>
    </div>
  <?php endif; ?>
  <p><?php the_sub_field('quote'); ?></p>
  
  <?php if (get_sub_field('sub_quote_link_url') != null) { ?>
  <p>
    <a href="<?php echo get_sub_field('sub_quote_link_url'); ?>">
      <?php the_sub_field('sub_quote'); ?>
    </a>
  </p>
  <?php }else{?>
  <p> <?php the_sub_field('sub_quote'); ?> </p>
  <?php
        }
  ?>
  
  <div class="blockquote__link__contain">
  <?php if (get_sub_field('video_link_url') != null) { ?>
    <a href="<?php echo get_sub_field('video_link_url'); ?>" class="blockquote__link" data-minimodal>
      <?php echo svgstore('play', '', 'media__link') ?>
      <span>
        <span class="blockquote__link__text button__link"><?php the_sub_field('video_link_text'); ?></span>
      </span>
    </a>
  <?php
        }
  ?>
  
  </div>
</div>
