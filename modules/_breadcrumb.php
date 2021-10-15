<?php if (!get_field('hide_breadcrumbs')) { ?>
  <?php
      if (is_page_template(array('page--home--two.php','page--program.php') ) && !is_page( 13466 ) ) {
        ?>
  <nav class="breadcrumb__banner" aria-label="breadcrumb">

   <?php } else {

      ?>

    <nav class="breadcrumb" aria-label="breadcrumb">
    <?php  }
   ?>
  	<?php if (is_singular('tribe_events')) : ?>
        <a href="<?php echo home_url(); ?>" class="breadcrumb__link">Home</a>
        <span class="breadcrumb__separator">/</span>
        <a href="<?php echo home_url("events/"); ?>" class="breadcrumb__link">Events</a>
        <span class="breadcrumb__separator">/</span>
        <span class="breadcrumb__current"><?php echo get_the_title(get_queried_object_id()); ?></span>
     <?php elseif (tribe_is_month() || tribe_is_day() || tribe_is_list_view()) : ?>
     	<a href="<?php echo home_url(); ?>" class="breadcrumb__link">Home</a>
        <span class="breadcrumb__separator">/</span>
        <span class="breadcrumb__current">Events</span>
     <?php else: ?>
      <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	<?php endif ?>
  </nav>
<?php 
   } else {?>
<div class="breadcrumb">
   </div>
   <?php } ?>