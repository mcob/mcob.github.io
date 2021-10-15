<?php if (get_sub_field('image_alignment') == 'right'): ?>

<div class="block">
  <div class="grid grid--3-2 grid--reverse">
    <div class="text-center">
      <?php $img = get_sub_field('image'); ?>
      <?php if ( $img ) : ?>
        <?php echo wp_get_attachment_image($img, 'program-small', "", array( "class" => "inline-block" )); ?>
      <?php endif; ?>
      <hr class="vertical-orange--left">
    </div>
    <div>
      <p>
        <?php the_sub_field('content'); ?>
      </p>
    </div>
  </div>
</div>

<?php else : ?>

<div class="block">
  <div class="grid grid--3-2">
    <div class="text-center">
      <?php $img = get_sub_field('image'); ?>
      <?php if ( $img ) : ?>
        <?php echo wp_get_attachment_image($img, 'program-small', "", array( "class" => "inline-block" )); ?>
      <?php endif; ?>
      <hr class="vertical-orange">
    </div>
    <div>
      <p>
        <?php the_sub_field('content'); ?>
      </p>
    </div>
  </div>
</div>

<?php endif; ?>