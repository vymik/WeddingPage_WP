<!-- about us section START -->
<section id="about-us" class="about-us">
	<div class="about-us-container">
		<div class="heading">
			<h2>OUR <span>love</span> STORY</h2>
			<p><span><?php the_field('title_description'); ?></span></p>
		</div>
		<div class="she-he">
			<?php 
			// check if the repeater field has rows of data
			if( have_rows('about_us_columns') ):
			 	// loop through the rows of data
			    while ( have_rows('about_us_columns') ) : the_row();
			        // display a sub field value
			        ?>
					<div class="about-column">
						<div class="about-pic">
							<?php 
							$image = get_sub_field('picture_frame');
							?>
							<img class="pic-frame" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php bloginfo('name'); ?>">
							<div class="inner-round-border">
								<?php 
								$image2 = get_sub_field('picture');
								?>
								<img class="round-pic" src="<?php echo $image2['sizes']['kvadratish']; ?>" alt="<?php bloginfo('name'); ?>">
							</div>
						</div>
						<h3><?php the_sub_field('name'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<div class="socials">
							<?php 
							if( have_rows('social_links') ):
								// Loop in loop for social icons
							 	// loop through the rows of data
							    while ( have_rows('social_links') ) : the_row();
							    	$link = get_sub_field('link');
							    	$image3 = get_sub_field('icon');
							        if($link['target']=="_blank"){
							        	$target = ' target="_blank"';
							        } else{
							        	$target = '';
							        }
							        ?>
							        <a href="<?php echo $link['url']; ?>"<?php echo $target; ?>>
										<img src="<?php echo $image3['sizes']['thumbnail']; ?>" alt="<?php bloginfo('name'); ?>">
									</a>
							        <?php
							    endwhile;
							endif;
							?>
						</div>
					</div>
			        <?php 
			    endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<!-- about us END -->