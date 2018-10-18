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

 ?>
<?php get_footer(); ?>