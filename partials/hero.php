<?php 
$bck_image = get_field('hero_background_image');
?>
<section id="home" class="hero" style="background:linear-gradient(0deg,rgba(0,0,0,0.5),
		rgba(0,0,0,0.5)), url(<?php echo $bck_image['sizes']['hero'] ?>); background-size: cover; background-position: center;">
	<div class="container">		
		<!-- centrinis kvadratas pradzia-->
		<div class="hero-content">
			<h2><?php the_field('hh_hero_title'); ?></h2>
			<div>
				<h1><?php the_field('bride_name'); ?> & <?php the_field('groom_name'); ?></h1>
				<?php 
				$image = get_field('hero_title_frame');
				?>
				<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php bloginfo('name'); ?>">
			</div>	
			<p><?php the_field('hero_date'); ?></p>
		</div>
		<!-- centrinis kvadratas pabaiga -->
		<a href="#about-us"><?php the_field('jumping_arrow'); ?></a> 
	</div>	
</section>