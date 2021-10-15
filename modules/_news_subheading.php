<!--This is for news detail-->
<p class="p-intro container--narrow">
  <?php the_field('intro_text'); ?>
</p>
<?php 
$author = (get_field('author_name') != '' ? get_field('author_name') : get_the_author_meta( 'display_name', $post->post_author )); ?>
<p class="p-tert-headline">
  <strong>Published:</strong> <?php echo get_the_time('F j, Y'); ?> 
  <?php if ($author) : ?> / <strong>Author:</strong> <?php echo $author; ?>
  <?php endif ?>
</p>
<br>
<hr>