<?php $terms = get_terms('news_categories');?>
<div class="block-bottom">
  <?php if (get_sub_field('heading')) : ?>
    <h2 class="text-center"><?php the_sub_field('heading'); ?></h2>
  <?php endif; ?>
  <?php if (get_sub_field('intro_text')) : ?>
    <?php the_sub_field('intro_text'); ?>
  <?php endif; ?>
  <ul class="button-group button-group--4">
  <?php   if (!empty($terms) && ! is_wp_error($terms)){
      foreach ($terms as $term) {
        echo '<li class="button-group__item"><a href="'. esc_url(get_term_link($term)) .'" class="button-group__link button-clear">' . $term->name . '</a></li>';
      }
    } 
  ?>
  </ul>
</div>