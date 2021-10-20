<div class="block-small">
  <div class="grid">
    <?php while (have_rows('items')) : the_row(); ?>
    <div>
      <hr class="hr-teal">
      <p class="text-center">
        <span class="h4 text-blue"><?php the_sub_field('heading'); ?></span><br>
        <span class="p-small"><?php the_sub_field('content', false, false); ?></span>
      </p>
      <hr class="hr-teal">
    </div>
    <?php endwhile; ?>
</div>