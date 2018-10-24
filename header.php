<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $favi = get_field('fav_icon', 'option'); ?>
		<link rel="shortcut icon" href="<?php echo $favi['sizes']['favicon'] ?>" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>

	<body>
		<!-- top navigation start -->
		<header class="top-menu">
			<div class="burger">
				<div id="nav-icon3">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<!-- Navigacijos menu -->
			<?php 
			$args = [
				'menu_class' => 'nav',
				'container' => false,
				'theme_location' => 'primary-navigation'
				];
			wp_nav_menu($args);
			?>
		</header>