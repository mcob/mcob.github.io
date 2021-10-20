<div class="accordion-group">
  <?php while (have_rows('items')) : the_row(); ?>
    <div class="accordion">
      <button class="h4 accordion__toggle">
        <?php the_sub_field('heading'); ?></button>
      <div class="accordion__content">
        <div class="accordion__interior zero">
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
