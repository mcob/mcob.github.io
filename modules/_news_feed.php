<?php

$feed_style = get_sub_field('feed_style');
$term_id = get_sub_field('categories');
$news = get_posts([
  'post_type' => 'news',
  'numberposts' => 4,
  'has_password' => FALSE,
  'tax_query' => array( 
      array( 
          'taxonomy' => 'news_categories', //or tag or custom taxonomy
          'field' => 'id', 
          'terms' => $term_id
      ) 
  ) 
]);

?>

    <div class="block">
      <div class="heading-inline">
        <h2><?php the_sub_field('heading'); ?></h2>
        <?php $link = get_sub_field('more_link'); ?>
        <?php if ($link) : ?>
          <div>
            <a href="<?php echo $link['url']; ?>" <?php link_target($link); ?> class="button__link"><?php echo $link['title']; ?></a>
          </div>
        <?php endif; ?>
      </div>
      <div class="grid grid--4 feed__grid">
        <?php foreach ($news as $post) : setup_postdata($post); ?>
          <div>
          <div class="feed__item<?php echo ($feed_style=='blue') ? ' feed__item--blue' : ''; ?>">
            <?php $img = get_field('listing_image'); ?>
            <?php if ( $img ) : ?>
              <div class="feed__image">
                <?php echo wp_get_attachment_image($img, 'profile-feature', false); ?>
              </div>
            <?php endif; ?>
            <div class="feed__content">
              <?php 
              $term = get_primary_term('news_categories', $post->ID);
              if($term) {
                echo "<div class=\"feed__tag\">";
                echo $term->name ;
                echo "</div>";
              }?>
              <?php 
              //redirect if this is an external article
              $redirect = get_field('redirect_link');
              $link = $redirect ? $redirect : get_the_permalink();
              $target = $redirect ? 'target="_blank"' : '';
              $class = $redirect ? ' external' : '';
              ?>

              <a class="feed__link<?php echo $class; ?>" href="<?php echo $link; ?>" <?php echo $target; ?> ><?php the_title(); ?><div class="icon__external" aria-hidden="true">
                <?php echo svgstore('icon-external', '', 'icon-external') ?>
              </div>
              </a>
              
            </div>
          </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>