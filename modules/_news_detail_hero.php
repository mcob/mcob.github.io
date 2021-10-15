<div class="hero">
  <ul class="button-group button-group--4 block-spacing">
    <?php while (have_rows('header_buttons', 'options')) : the_row(); ?>
      <?php 
      $link = array();
      $link = get_sub_field('link'); ?>
      <li class="button-group__item">
        <a href="<?php echo $link['url']; ?>" <?php link_target($link) ?> class="button-group__link button-clear"><?php echo $link['title']?>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>
</div>
