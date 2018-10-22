<section id="rsvp" class="rsvp-section">
			<div class="section-centered">
				<div class="heading">
					<h2>Monika <span>and</span> Vytautas</h2>
				</div>
				<div class="rsvp-link">
					<button>RSVP NOW</button>
				</div>
				<!-- RSVP form apearing after RSVP NOW button click Start-->
				<div class="rsvp-form">
					<?php echo do_shortcode(get_field('rsvp_form_shortcode')); ?>
				</div>
				<!-- RSVP form apearing after RSVP NOW button click End-->
				<div class="social-links">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Pinterest</a></li>
						<li><a href="#">Vimeo</a></li>
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