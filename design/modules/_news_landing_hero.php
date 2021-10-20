<?php 
$post_id_1 = get_field('featured_story_1');
$post_id_2 = get_field('featured_story_2');
$post_id_3 = get_field('featured_story_3');

//redirect if this is an external article
$redirect_1 = get_field('redirect_link', $post_id_1);
$link_1 = $redirect_1 ? $redirect_1 : get_the_permalink($post_id_1);
$target_1 = $redirect_1 ? 'target="_blank"' : '';

//redirect if this is an external article
$redirect_2 = get_field('redirect_link', $post_id_2);
$link_2 = $redirect_2 ? $redirect_2 : get_the_permalink($post_id_2);
$target_2 = $redirect_2 ? 'target="_blank"' : '';

//redirect if this is an external article
$redirect_3 = get_field('redirect_link', $post_id_3);
$link_3 = $redirect_3 ? $redirect_3 : get_the_permalink($post_id_3);
$target_3 = $redirect_3 ? 'target="_blank"' : '';

$img = get_field('hero_image');
if ($img) : ?>
  <div class="hero">
  
    <ul class="button-group block-spacing">
      <?php while (have_rows('header_buttons', 'options')) : the_row(); ?>
        <?php
         $link = get_sub_field('link'); ?>
        <li class="button-group__item">
          <a href="<?php echo $link['url']; ?>" <?php link_target($link) ?> class="button-group__link button-clear"><?php echo $link['title']?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
    
    <div class="hero__image--news">

    <?php echo wp_get_attachment_image($img, 'hero-desktop', false); ?>

      <div class="hero__arrow"></div>
      
      <div class="featured__news__content">
      <?php if( $post_id_1 ): ?>
        <?php 
          $term = get_primary_term('news_categories', $post_id_1);
          if($term) {
            echo "<div class=\"featured__news__category\">";
            echo $term->name ;
            echo "</div>";
          }?>
        <a class="featured__news__link" href="<?php echo $link_1; ?>" <?php echo $target_1; ?> ><?php echo get_the_title($post_id_1); ?></a>
        <div class="featured__news__headline">
          <?php echo wp_strip_all_tags( get_the_excerpt($post_id_1) ); ?>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class = "block-bottom">
  <div class="grid grid--2 feed__grid">
  <?php if( $post_id_2 ): ?>
    <div class="news__secondary__item">
      <?php $img = get_field('listing_image', $post_id_2); ?>
      <?php if ( $img ) : ?>
        <div class="feed__image">
          <?php echo wp_get_attachment_image($img, 'home-campus', false); ?>
        </div>
      <?php endif; ?>
      <div class="feed__content">
        <?php 
        $term = get_primary_term('news_categories', $post_id_2);
        if($term) {
          echo "<div class=\"feed__tag\">";
          echo $term->name ;
          echo "</div>";
        }?>
        <a class="featured__news__link" href="<?php echo $link_2; ?>" <?php echo $target_2; ?> ><?php echo get_the_title($post_id_2); ?></a>
      </div>
    </div>
  <?php endif; ?>
  <?php if( $post_id_3 ): ?>
    <div class="news__secondary__item">
      <?php $img = get_field('listing_image', $post_id_3); ?>
      <?php if ( $img ) : ?>
        <div class="feed__image">
          <?php echo wp_get_attachment_image($img, 'home-campus', false); ?>
        </div>
      <?php endif; ?>
      <div class="feed__content">
        <?php 
        $term = get_primary_term('news_categories', $post_id_3);
        if($term) {
          echo "<div class=\"feed__tag\">";
          echo $term->name ;
          echo "</div>";
        }?>
        <a class="featured__news__link" href="<?php echo $link_3; ?>" <?php echo $target_3; ?> ><?php echo get_the_title($post_id_3); ?></a>
      </div>
    </div>
  <?php endif; ?>
  </div>
</div>
