<?php $link = get_field('subscribe_link'); ?>
<?php if ($link) : ?>
  <div class="container block-spacing">
    <div class="grid grid--2">
      <div>
        
        <?php $img = get_field('subscribe_image'); ?>
        <?php if ( $img ) : ?>
            <?php echo wp_get_attachment_image($img, 'home-feature', false); ?>
        <?php endif; ?>

      </div>
      <div>
        <h2><?php the_field('subscribe_heading'); ?></h2>
        <p><?php the_field('subscribe_subheading'); ?></p>
        <br>
          <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button-alt"><?php echo $link['title']; ?></a>
      </div>
    </div>
  </div>
<?php endif; ?>