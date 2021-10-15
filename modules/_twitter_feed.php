<?php $twitter_heading = get_field('twitter_heading'); ?>
<?php if ($twitter_heading) : ?>
  <div class="container--blue-transparent block-spacing">
    <div class="container">
      <div class="text-center">
        <h2>
          <?php echo svgstore('twitter', '', 'twitter-icon'); ?>
          <?php echo $twitter_heading; ?>
        </h2>
      </div>
      <div class="grid block social__twitter__feed">
        <script type="text/template" class="social__twitter__template">
          <div class="twitter__block">
            <div class="h6">{date_full}</div>
            <p>
              {message}
            </p>
          </div>
        </script>
      </div>
    </div>
  </div>
<?php endif; ?>