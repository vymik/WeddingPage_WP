<section id="carousel" class="carousel-section">
	<div class="section-centered">
		<div class="heading">
			<h2><?php the_field('c_first_title_part'); ?><span><?php the_field('c_middle_title_part'); ?></span><?php the_field('c_last_title_part'); ?></h2>
			<p><span><?php the_field('carousel_heading_description'); ?></span></p>
		</div>
		<div class="owl-carousel owl-theme">
			<?php 
			if( have_rows('brides_and_grooms_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('brides_and_grooms_repeater') ) : the_row();
			    	?>
			    	<div class="carousel-column">
						<div class="about-pic">
							<?php 
							$image = get_field('carousel_picture_frame');
							$image2 = get_sub_field('picture');
							?>
							<img class="pic-frame" src="<?php echo $image['sizes']['medium'] ?>" alt="<?php echo $image['name']; ?>">
							<div class="inner-round-border">
								<img class="round-pic" src="<?php echo $image2['sizes']['kvadratish'] ?>" alt="<?php echo $image2['name']; ?>">
							</div>
						</div>
						<h3><?php the_sub_field('name'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
					</div>
			    	<?php
			        // display a sub field value
			        // the_sub_field('sub_field_name');
			    endwhile;
			endif;
			?>
		</div>
	</div>
</section>