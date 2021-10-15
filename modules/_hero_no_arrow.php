<?php $img = get_field('hero_image'); ?>
<?php if ($img) : ?>
  <div class="hero">
    <div class="hero__image--alt">

    <?php echo wp_get_attachment_image($img, 'hero-desktop', false); ?>

    <?php $hero_arrow = get_field('hero_arrow'); ?>
			<?php if ( $hero_arrow ) : ?>
        <div class="hero__arrow"></div>
      <?php endif; ?>
      <div class="hero__content">
        <?php if(strlen(get_field('hero_video_url')) > 0): ?>
          <a href="<?php the_field('hero_video_url'); ?>" class="media__btn" data-minimodal>
            <span class="media__btn__circle"></span>
            <?php echo svgstore('play-alt', '', 'media__btn__icon') ?>
          </a>
        <?php endif; ?>
        <?php if(strlen(get_field('overlay_text')) > 0): ?>
          <h2 class="text-white"><?php the_field('overlay_text'); ?></h2>
        <?php endif ?>
      </div>
      
    </div>
  </div>

<?php endif; ?>