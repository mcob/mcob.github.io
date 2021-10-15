<div class="block">
  <div class="heading-inline">
  <?php $logo = get_sub_field('logo'); ?> 
  <?php if ( $logo ) : ?>
    <div class="logo"><?php echo wp_get_attachment_image($logo, 'magazine-logo', false) ?></div>
  <?php else : ?>
    <h2><?php the_sub_field('heading'); ?></h2>
  <?php endif; ?>  
  <?php $link = get_sub_field('more_link'); ?>
  <?php if ($link) : ?>
    <div>
      <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link"><?php echo $link['title']; ?></a>
    </div>
  <?php endif; ?>
  </div>
  <div class="grid grid--4 feed__grid">
    <?php while (have_rows('items')) : the_row(); ?>
        <?php $img = get_sub_field('image'); ?> 
        <div>
          <div class="feed__item feed__item--blue">
            <?php if ( $img ) : ?>
              <div class="feed__image">
                <?php echo wp_get_attachment_image($img, 'profile-feature', false); ?>
              </div>
            <?php endif; ?>
            <div class="feed__content">
              <?php $link = get_sub_field('link'); ?>
              <?php if ($link) : ?>
                <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="feed__link"><?php echo $link['title']; ?></a>
              <?php endif; ?>
              <p class="p-small text-white"><?php the_sub_field('teaser'); ?></p>
            </div>
          </div>
        </div>
    <?php endwhile; ?>
  </div>
</div>



      
     