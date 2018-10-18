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
					<form method="POST">
						<h3>SELECT THE EVENT(S) YOU WILL BE ATTENDING:</h3>
						<div class="checkbox-container">
							<div class="checkbox-column">
								<input type="checkbox" id="c1" name="c1" value="Wedding Ceremony">
								<label for="c1">Wedding Ceremony <span>(at 10.08.2018)</span></label>
							</div>
							<div class="checkbox-column"> 
								<input type="checkbox" id="c2" name="c2" value="Restaurant Party">
								<label for="c2">Restaurant Party <span>(at 10.08.2018)</span></label>
							</div>
							<div class="checkbox-column">
								<input type="checkbox" id="c3" name="c3" value="After Party">

								<label for="c3">After Party <span>(at 11.08.2018)</span></label>
							</div>
						</div>
						<h3 class="form_subtitle">PLEASE SELECT A MEAL CHOICE</h3>
						<div class="select-form-container">
							<div class="select-column">
								<label>MAIN</label>
								<div class="select-container">
									<select class="form-select" name="mainmeal">
										<option value="Chicken">Chicken</option>
					                    <option value="Beef">Beef</option>
					                    <option value="Fish">Fish</option>
					                    <option value="Vegetarian">Vegetarian</option>
									</select>
								</div>
							</div>
							<div class="select-column">
								<label>Second</label>
								<div class="select-container">
									<select class="form-select" name="secondmeal">
							            <option value="Chicken">Chicken</option>
					                    <option value="Beef">Beef</option>
					                    <option value="Fish">Fish</option>
					                    <option value="Vegetarian">Vegetarian</option>
									</select>
								</div>
							</div>
							<div class="select-column">
								<label>DESERT</label>
								<div class="select-container">
									<select class="form-select" name="desertmeal">
										<option value="Chocolate Cake">Chocolate Cake</option>
					                    <option value="Cup Cookies">Cup Cookies</option>
					                    <option value="Pumpkin Cheesecake">Pumpkin Cheesecake</option>
					                    <option value="Raspberry Cheesecake">Raspberry Cheesecake</option>
									</select>
								</div>
							</div>
						</div>
						<div>
							<input type="submit" name="submit" class="form_submit_contact" id="submit" value="SEND RSVP" />
						</div>
					</form>
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