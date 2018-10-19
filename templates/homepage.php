<?php

/* Template Name: Homepage */

get_header();

?>

<!-- Start Point -->
<!-- <h1>Esame homepage.php</h1> -->
<?php 
 // prijungiame dalinius failus is partials katalogo
get_template_part('partials/hero');
get_template_part('partials/about_us');
get_template_part('partials/countdown');
get_template_part('partials/info');
get_template_part('partials/gallery');
get_template_part('partials/carousel');

 ?>
<?php get_footer(); ?>