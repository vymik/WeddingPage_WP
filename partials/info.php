<section id="info">
	<div class="info-container">
		<?php 
		if( have_rows('homepage_info_repeater') ):
		 	// loop through the rows of data
		    while ( have_rows('homepage_info_repeater') ) : the_row();
		        // display a sub field value
		        // the_sub_field('sub_field_name');
		        ?>
		        <div class="info-column hideme">
					<h3><?php the_sub_field('title'); ?></h3>
					<?php
					$image = get_sub_field('icon');
					?>
					<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php bloginfo('name'); ?>">
					<?php the_sub_field('description'); ?>
				</div>
		        <?php
		    endwhile;
		endif;
		?>
	</div>
</section>