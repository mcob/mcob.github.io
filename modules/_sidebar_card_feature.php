<div class="sidebar__spacing">
  <div class="feed__item">
    <?php $img = get_sub_field('image'); ?>
    <?php if ( $img ) : ?>
      <div class="feed__image">
        <?php echo wp_get_attachment_image($img, 'home-campus', false); ?>
      </div>
    <?php endif; ?>
    <div class="feed__content">
      <?php if(strlen(get_sub_field('eyebrow_text')) > 0): ?>
        <div class="feed__tag">
          <?php the_sub_field('eyebrow_text'); ?>
        </div>
      <?php endif; ?>

      <?php $link = get_sub_field('link'); ?>
      <?php if ($link) : ?>
        <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="feed__link"><?php echo $link['title']; ?></a>
      <?php endif; ?>
      <?php if(strlen(get_sub_field('content')) > 0): ?>
        <p class="p-small">
          <?php the_sub_field('content'); ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</div>