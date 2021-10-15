<?php
$current_id = get_the_ID();
$post_term = get_primary_term('news_categories', $current_id);
$post_category = $post_term->term_id;
$news = get_posts([
  'post_type' => 'news',
  'numberposts' => 4,
  'post__not_in' => array($current_id),
  'tax_query' => array( 
      array( 
          'taxonomy' => 'news_categories', //or tag or custom taxonomy
          'field' => 'id', 
          'terms' => array($post_category) 
      ) 
  ) 
]);
?>

<div class="container--gray block-spacing">
  <div class="container zero">
    <h2>Related Stories</h2>
    <div class="grid grid--4 feed__grid">
      <?php foreach ($news as $post) : setup_postdata($post); ?>
        <div>
          <div class="feed__item">
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
</div>
