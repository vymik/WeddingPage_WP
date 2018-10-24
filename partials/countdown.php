<section id="timer">
	<div class="section-centered">
		<div class="heading">
			<h2><?php the_field('countdown_title'); ?></h2>
		</div>
		<div id="clock" class="timer-container">
		<script>			
				var weddingDate = "<?php the_field('countdown_date'); ?>";
		</script>
			<!-- Here HTML comes from jquery custom.js -->
		</div>
	</div>
</section>