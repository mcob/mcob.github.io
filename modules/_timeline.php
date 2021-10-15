<div class="container">
  <h2 ><?php echo get_sub_field('timeline_title'); ?></h2>
  <div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php while (have_rows('timeline_events')) : the_row(); ?>
          <div class="swiper-slide" style="background-image: url('<?php echo wp_get_attachment_image_src(get_sub_field('event_image'), 'blockquote-full')[0]; ?>');" data-year="<?php echo get_sub_field('event_date'); ?>">
            <div class="swiper-slide-content">
              <span class="timeline-year"><?php echo get_sub_field('event_date'); ?> </span>
              <h4 class="timeline-title"><?php echo get_sub_field('event_title'); ?></h4>
              <div class="timeline-text">
                <?php echo get_sub_field('event_description'); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-white"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-scrollbar"></div>
    </div>
  </div>
</div>




				
