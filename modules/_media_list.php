<div class="block">
    <div class="container">
      <h2><?php the_sub_field('heading'); ?></h2>
      <?php the_sub_field('intro_text'); ?>
      <div class="grid grid--4 feed__grid">
        <?php while (have_rows('media_item')) : the_row(); ?>
          <?php $post_id = get_sub_field('news_item');

            if( $post_id ): ?>
              <?php $img = get_field('listing_image', $post_id); ?> 
              <div>
                <div class="feed__item">
                  <?php if ( $img ) : ?>
                    <div class="feed__image">
                      <?php echo wp_get_attachment_image($img, 'profile-feature', false); ?>
                    </div>
                  <?php endif; ?>
                  <div class="feed__content">
                    <?php if(strlen(get_sub_field('subheading')) > 0): ?>
                      <div class="feed__tag">
                        <?php the_sub_field('subheading'); ?>
                      </div>
                    <?php endif; ?>
                    <?php if(strlen(get_sub_field('faculty_name')) > 0): ?>
                      <div class="feed__name">
                        <?php the_sub_field('faculty_name'); ?>
                      </div>
                    <?php endif; ?>
                    <?php 
                    //redirect if this is an external article
                    $redirect = get_field('redirect_link', $post_id);
                    $link = $redirect ? $redirect : get_the_permalink($post_id);
                    $target = $redirect ? 'target="_blank"' : '';
                    $class = $redirect ? ' external' : '';
                    ?>
                    <a class="feed__link<?php echo $class; ?>" href="<?php echo $link; ?>" <?php echo $target; ?> ><?php echo get_the_title($post_id); ?><div class="icon__external" aria-hidden="true">
                <?php echo svgstore('icon-external', '', 'icon-external') ?>
              </div></a>

                  </div>
                </div>
              </div>
            <?php endif; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>



      
     