<section id="location" class="location-section">
	<div class="section-centered">
		<div class="heading">
			<h2><?php the_field('l_first_title_part'); ?><span><?php the_field('l_middle_title_part'); ?></span><?php the_field('l_last_title_part'); ?></h2>
			<p><span><?php the_field('location_description'); ?></span></p>
		</div>
		<div class="location-icon">
			<?php the_field('location_icon'); ?>
		</div>
		<div class="maps-container">
			<?php 
			if( have_rows('location_maps_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('location_maps_repeater') ) : the_row();
			        ?>
			        <div class="map-column">
						<h3><?php the_sub_field('map_title'); ?></h3>
						<?php			
						if(get_sub_field('map_icon_type')):
							// jei image
							$image = get_sub_field('icon_type_image');	
							?>
							<img src="<?php echo $image['sizes']['icon'] ?>" alt="<?php $image['name']; ?>">
							<?php 
						else:
							// jei fontawesome icon
							the_sub_field('icon_type_fontawesome');
						endif; 
						?>
						<div id="map" class="map">
							<iframe src="<?php the_sub_field('place_in_map'); ?>" width="100%" height="300px" frameborder="0" style="border:5px solid white" allowfullscreen></iframe>
						</div>
					</div>   
			        <?php
			    endwhile;
			endif;
			?>
		</div>
	</div>			
</section>