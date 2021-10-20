<div class="rank__item">
  <div class="rank__image">
    <?php $img = get_sub_field('image'); ?>
    <?php echo wp_get_attachment_image($img, 'home-ranking', false); ?>
  </div>
  <?php if(get_sub_field('big_text_color') == 'gold'): ?>
    <h3 class="rank__heading text-gold">
  <?php elseif(get_sub_field('big_text_color') == 'orange'): ?>
    <h3 class="rank__heading text-orange">
  <?php else: ?>
    <h3 class="rank__heading text-teal">
  <?php endif; ?>
    <?php the_sub_field('big_text'); ?>
  </h3>
  <p class="rank__text text-white"><?php the_sub_field('small_text'); ?></p>
</div>
