<section id="memories" class="memories-container">
	<div class="heading">
		<h2><?php the_field('m_first_title_part'); ?><span><?php the_field('m_middle_title_part'); ?></span><?php the_field('m_last_title_part'); ?></h2>
		<p><span><?php the_field('memories_heading_description'); ?></span></p>
	</div>
	<div class="gallery-container">
		<?php 
		if( have_rows('memories_image') ):
			 	// loop through the rows of data
			    while ( have_rows('memories_image') ) : the_row();
			        // display a sub field value
			        // the_sub_field('sub_field_name');
			        ?>
			        <div class="gallery-pic-container">
			        	<?php
			        	$image = get_sub_field('image');
			        	?>
						<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['name'] ?>">
						<h3><?php the_sub_field('image_title'); ?></h3>
					</div>
			        <?php
			    endwhile;
			endif;
		?>
	</div>
</section>