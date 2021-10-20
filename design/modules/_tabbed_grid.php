
  <div class="container container--clear">
    <div class="block-top">



    <?php if(get_sub_field('color') == 'blue'): ?>
      <div class="tabbed tabbed--alt tabbed--alt-teal">
    <?php else: ?>
      <div class="tabbed tabbed--alt">
    <?php endif; ?>
      
        <div class="tabbed__nav">
          <ul class="tabbed__nav__list">
            <?php while (have_rows('items')) : the_row(); ?>
              <li class="tabbed__nav__item">
                <button class="tabbed__nav__button"><?php the_sub_field('heading'); ?></button>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <div class="tabbed__content">
          <div class="tabbed__main">
            <?php while (have_rows('items')) : the_row(); ?>
              <button class="accordion__toggle tabbed__toggle"><?php the_sub_field('heading'); ?></button>
              <div class="tabbed__content__item">
                <div class="tabbed__content__interior">
                  <div class="tab__grid">
                    <div class="grid grid--4">
                      <?php while (have_rows('columns')) : the_row(); ?>
                        <div>
                          <p><strong><?php the_sub_field('heading'); ?></strong><br>
                            <span class="tab__text"><?php the_sub_field('subheading'); ?></span>
                          </p>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>


    </div>
  </div>