<?php 
$obj = get_queried_object();
if ($obj->taxonomy == 'news_categories' || $obj->name == 'news' || $obj->post_type =='news') {
	$postLink = 'news';
} elseif ($obj->taxonomy == 'mark_categories' || $obj->name == 'mark') {
	$postLink = 'mark';
}

if ($postLink == 'news') {
	$terms = get_terms('news_categories');
	$term_id = get_queried_object_id();
	$is_taxonomy = is_tax( 'news_categories' );
} elseif ($postLink == 'mark') {
	$terms = get_terms('mark_categories');
	$term_id = get_queried_object_id();
	$is_taxonomy = is_tax( 'mark_categories' );
}

?>

<aside class="main__sidebar">
	<?php if (!get_field('hide_subnav')) : ?>
		<nav class="subnav subnav--vertical" aria-label="navigation">
			<button class="subnav__toggle">
		      <span class="subnav__toggle__text">
		        In this Section
		      </span>
		      <?php echo svgstore('arrow', '', 'subnav__toggle__icon') ?>
		    </button>
			<ul class="subnav__list">
				<?php if ($is_taxonomy){
					echo '<li class="subnav__item"><a href="/'. $postLink . '" class="subnav__link">All</a></li>';
				}
				else
				{
					echo '<li class="subnav__item"><a href="/'. $postLink . '" class="subnav__link active">All</a></li>';
				}
				//echo print_r($terms);
				if (!empty($terms) && ! is_wp_error($terms)){
				  foreach ($terms as $term) {
				  	if (!get_field('exclude_from_navigation', 'category_'.$term->term_id)){
				  		if($term_id == $term->term_id) {
					  		echo '<li class="subnav__item"><a href="'. esc_url(get_term_link($term)) .'" class="subnav__link active">' . $term->name . '</a></li>';
					  	}
					  	else {
					  		echo '<li class="subnav__item"><a href="'. esc_url(get_term_link($term)) .'" class="subnav__link">' . $term->name . '</a></li>';
					  	}

				  	}
				    
				  }
				} 
				?>
			</ul>
		</nav>
	<?php endif; ?>
	<?php while (have_rows('sidebar_modules_top')) : the_row(); ?>
    	<?php get_template_part('modules/_' . get_row_layout()); ?>
    <?php endwhile; ?>
</aside>
