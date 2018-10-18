<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
		<!-- kad pakilti i virsu vienu katalogu i virsu naudoti "../assets/css/style.css" -->
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