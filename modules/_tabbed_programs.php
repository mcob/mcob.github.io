<div class="container container--clear">
  <div class="block">
    <hr>
    <h2><?php the_sub_field('heading'); ?></h2>
    <div class="tab__text">
      <?php the_sub_field('filter_by_text'); ?>
    </div>

    <div class="tabbed tabbed--filter tabbed--alt tabbed--<?php echo count(get_sub_field('tabs')); ?>">
      <div class="tabbed__nav">
        <ul class="tabbed__nav__list">
          <?php while (have_rows('tabs')) : the_row(); ?>
            <li class="tabbed__nav__item">
              <?php if(strlen(get_sub_field('tab_title')) > 0): ?>
                <button class="tabbed__nav__button"><?php the_sub_field('tab_title'); ?></button>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="tabbed__content">
        <div class="tabbed__main">
          <?php while (have_rows('tabs')) : the_row(); ?>
            <?php if(strlen(get_sub_field('tab_title')) > 0): ?>
              <button class="accordion__toggle tabbed__toggle"><?php the_sub_field('tab_title'); ?></button>
            <?php endif; ?>

            <?php if (get_sub_field('programs')) : ?>
              <div class="tabbed__content__item">
                <div class="tabbed__content__interior tabbed__content__interior-alt">
                  <?php foreach (get_sub_field('programs') as $post) : setup_postdata($post); ?>
                    <?php $link = get_field('link'); ?>
                    <?php $link_2 = get_field('link_2'); ?>
                    <?php $link_3 = get_field('link_3'); ?>
                    <?php $link_4 = get_field('link_4'); ?>
                    <div class="program__item">
                      <?php if ($link) : ?>
                        <a class="program__item--link" href="<?php echo $link['url']; ?>"<?php link_target($link); ?> >
                      <?php endif; ?>
                        <figure class="program__image">
                          <?php echo wp_get_attachment_image(get_field('image'), 'program'); ?>
                          <?php if(strlen(get_field('heading')) > 0): ?>
                            <figcaption class="program__caption"><?php the_field('heading'); ?></figcaption>
                          <?php endif; ?>
                        </figure>
                      <?php if ($link) : ?>
                        </a>
                      <?php endif; ?>
                      <div class="program__content">
                        <?php if(strlen(get_field('description')) > 0): ?>
                          <?php the_field('description'); ?>
                        <?php endif; ?>
                        <?php if ($link && !$link_2 && !$link_3 && !$link_4) : ?>
                          <a href="<?php echo $link['url']; ?>"<?php link_target($link); ?> class="button-alt"><?php echo $link['title']; ?></a>
                        <?php else : ?>
                          <ul class="button-group button-group--2">
                            <?php if ($link) : ?>
                            <li class="button-group__item">
                              <a href="<?php echo $link['url']; ?>"<?php link_target($link); ?> class="button-alt"><?php echo $link['title']; ?></a>
                            </li>
                            <?php endif; ?>
                            <?php if ($link_2) : ?>
                            <li class="button-group__item">
                              <a href="<?php echo $link_2['url']; ?>"<?php link_target($link_2); ?> class="button-alt"><?php echo $link_2['title']; ?></a>
                            </li>
                            <?php endif; ?>
                            <?php if ($link_3) : ?>
                            <li class="button-group__item">
                              <a href="<?php echo $link_3['url']; ?>"<?php link_target($link_3); ?> class="button-alt"><?php echo $link_3['title']; ?></a>
                            </li>
                            <?php endif; ?>
                            <?php if ($link_4) : ?>
                            <li class="button-group__item">
                              <a href="<?php echo $link_4['url']; ?>"<?php link_target($link_4); ?> class="button-alt"><?php echo $link_4['title']; ?></a>
                            </li>
                            <?php endif; ?>
                          </ul>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endforeach; wp_reset_postdata(); ?>
                </div>
              </div>
            <?php endif ?>
            

          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
</div>