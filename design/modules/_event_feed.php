<?php
$terms = get_sub_field('category');
$count = get_sub_field('number');
$class = $count > 3 ? ' grid--4' : '';
if($terms){
  $events = tribe_get_events([
    'start_date' => date('Y-m-d H:i:s'),
    'posts_per_page' => $count,
    'tax_query' => array(
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'term_id',
        'terms'    => $terms,
      ),
    )
  ]);
}
else {
  $events = tribe_get_events([
    'start_date' => date('Y-m-d H:i:s'),
    'posts_per_page' => get_sub_field('number')
  ]);
}
?>

  <div class="block zero">
    <?php if (get_sub_field('display') == 'horizontal') : ?>
      <div class="heading-inline">
        <?php if (get_sub_field('heading')) : ?>
          <h2><?php the_sub_field('heading'); ?></h2>
        <?php endif; ?>
        <?php $link = get_sub_field('more_link'); ?>
        <?php if ($link) : ?>
          <div>
            <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link"><?php echo $link['title']; ?></a>
          </div>
        <?php endif; ?>
      </div>
      <?php if (get_sub_field('intro_text')) : ?>
        <?php the_sub_field('intro_text'); ?>
      <?php endif; ?>
      <div class="grid<?php echo $class; ?>">
    <?php else : ?>
      <?php if (get_sub_field('heading')) : ?>
        <h2><?php the_sub_field('heading'); ?></h2>
      <?php endif; ?>
      <?php if (get_sub_field('intro_text')) : ?>
        <?php the_sub_field('intro_text'); ?>
      <?php endif; ?>
    <?php endif ?>
    <?php if ($events) : ?>
      <?php foreach ($events as $post) : setup_postdata($post); ?>
        <?php $startdate = tribe_get_start_date($post, false, 'D M j'); ?>
        <?php $starttime = preg_replace( array( ' /am/', ' /pm/' ), array( ' a.m.', ' p.m.' ), tribe_get_start_date($post, false, 'g:i a')); ?>
        <?php $enddate = tribe_get_end_date($post, false, 'D M j'); ?>
        <?php $endtime = preg_replace( array( ' /am/', ' /pm/' ), array( ' a.m.', ' p.m.' ), tribe_get_end_date($post, false, 'g:i a')); ?>
        <?php $printdate = ''; ?>
        <?php
        if ($startdate !== $enddate){
          //$printdate = $startdate . " " . $starttime . " - " . $enddate . " " . $endtime;
          $printdate = $startdate . " - " . $enddate;
        }
        else {
          //$printdate = $startdate . " " . $starttime;
          $printdate = $startdate;
        }
        ?>
        <div class="block-small">
          <div class="feed__item">
            <div class="feed__content">
              <div class="feed__tag">
                <?php echo $printdate ?>
              </div>
              <div class="feed__name">
              </div>
              <a class="feed__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
      <?php $link = get_sub_field('more_link'); ?>
      <?php if ($link && get_sub_field('display') != 'horizontal') : ?>
        <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link"><?php echo $link['title']; ?></a>
      <?php endif; ?>
    <?php else : ?>
      <div class="block-small">There are currently no events to display.
      </div>
    <?php endif; ?>
    <?php if (get_sub_field('display') == 'horizontal') : ?>
      </div>
    <?php endif ?>
  </div>