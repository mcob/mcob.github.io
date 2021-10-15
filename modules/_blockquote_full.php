<div class="blockquote__full" style="background-image: url('<?php echo wp_get_attachment_image_src(get_sub_field('image'), 'blockquote-full')[0]; ?>');">
  <div class="container container--narrow container--clear">
    <div class="blockquote__full__content">
    <?php if(get_sub_field('double_quote')): ?>
        <div class="blockquote__svg">
          <?php echo svgstore('quote', '', 'blockquote__svg__icon') ?>
        </div>
       <?php endif; ?>      

      <p class="blockquote__full__text">
        <?php the_sub_field('quote'); ?>
      </p>

      <p class="blockquote__full__author">
        <?php if(strlen(get_sub_field('author')) > 0): ?>
          <span class="text-gold"><?php the_sub_field('author'); ?>,</span> 
        <?php endif; ?>
        <?php if(strlen(get_sub_field('author_title')) > 0): ?>
          <?php the_sub_field('author_title'); ?>
        <?php endif; ?>
      </p>
    </div>
  </div>
</div>