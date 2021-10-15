<div class="image image--full" style="background-image: url('<?php echo wp_get_attachment_image_src(get_sub_field('image'), 'blockquote-full')[0]; ?>');">
  <div class="container container--clear">
    <div class="main__content--alt--fullwidth">
      <div class="image__container zero">
        <?php the_sub_field('content'); ?>
      </div>
    </div>
  </div>
</div>