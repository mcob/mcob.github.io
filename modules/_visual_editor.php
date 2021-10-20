<?php if(get_sub_field('column_type') == 'slim'): ?>
	<div class="block">
		<div class="container container--slim">
			<?php the_sub_field('content'); ?>
			
			<?php if(strlen(get_sub_field('collapsed_content')) > 0): ?>
				<a href="#" class="plus__button uncollapse">
					<?php echo svgstore('plus-circle', '', 'plus__button__icon') ?>
			        <span class="plus__button__text">
			          <span class="button__link">Read More</span>
			        </span>
			    </a>
			    <div class="collapse">
				    <div class="collapse__interior">
				    	<?php the_sub_field('collapsed_content'); ?>
				    </div>
				</div>
			<?php endif ?>
		      
		</div>
	</div>
<?php elseif(get_sub_field('column_type') == 'none'): ?>
	<?php the_sub_field('content'); ?>
	
	<?php if(strlen(get_sub_field('collapsed_content')) > 0): ?>
		<a href="#" class="plus__button uncollapse">
			<?php echo svgstore('plus-circle', '', 'plus__button__icon') ?>
	        <span class="plus__button__text">
	          <span class="button__link">Read More</span>
	        </span>
	    </a>
	    <div class="collapse">
		    <div class="collapse__interior">
		    	<?php the_sub_field('collapsed_content'); ?>
		    </div>
		</div>
	<?php endif ?>
<?php else : ?>
	<div class="block">
		<?php the_sub_field('content'); ?>

		<?php if(strlen(get_sub_field('collapsed_content')) > 0): ?>
			<a href="#" class="plus__button uncollapse">
				<?php echo svgstore('plus-circle', '', 'plus__button__icon') ?>
		        <span class="plus__button__text">
		          <span class="button__link">Read More</span>
		        </span>
		    </a>
		    <div class="collapse">
			    <div class="collapse__interior">
			    	<?php the_sub_field('collapsed_content'); ?>
			    </div>
			</div>
		<?php endif ?>
	</div>
<?php endif ?>