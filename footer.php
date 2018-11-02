<section id="rsvp" class="rsvp-section">
			<div class="section-centered">
				<div class="heading">
					<h2><?php the_field('f_first_title_part','option'); ?><span><?php the_field('f_middle_title_part','option'); ?></span><?php the_field('f_last_title_part','option'); ?></h2>
				</div>
				<div class="rsvp-link">
					<button>Rezervacija</button>
				</div>
				<!-- RSVP form apearing after RSVP NOW button click Start-->
				<div class="rsvp-form">
					<?php echo do_shortcode(get_field('rsvp_form_shortcode')); ?>
				</div>
				<!-- RSVP form apearing after RSVP NOW button click End-->
				<div class="social-links">
					<ul>
						<?php 
						if( have_rows('op_socials_links','option') ):
						 	// loop through the rows of data
						    while ( have_rows('op_socials_links','option') ) : the_row();
						    	$link = get_sub_field('link');						    	
						        if($link['target']=="_blank"){
						        	$target = ' target="_blank"';
						        } else{
						        	$target = '';
						        } 
						        ?>
						        <li><a href="<?php echo $link['url']; ?>" <?php echo $target; ?>><?php the_sub_field('socials_name') ?></a></li>
						        <?php
						    endwhile;
						endif;
						?>
					</ul>
				</div>
				<div class="footer-links">
					<ul>
						<li><a href="#">Wedding</a></li>
						<li><a href="#">Location</a></li>
						<li><a href="#">Gifts</a></li>
						<li><a href="#">Journal</a></li>
					</ul>
				</div>
				
			</div>		
		</section>
		<!-- RSVP section END -->
		<?php wp_footer(); ?>		
	</body>

</html>