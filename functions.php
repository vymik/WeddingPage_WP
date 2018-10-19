<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {
    	// <script src="assets/scripts/jquery.js"></script>
		// <script src="assets/scripts/owl.carousel.min.js"></script>
		// <script src="assets/scripts/jquery.countdown.js"></script>
		// <script src="assets/scripts/custom.js"></script>

        wp_deregister_script('jquery');


        wp_register_script('jquery', ASSETS_URL . '/assets/scripts/jquery.js', false, false, true);
		wp_register_script('owlcar', ASSETS_URL . '/assets/scripts/owl.carousel.min.js', false, false, true);
		wp_register_script('jcountdown', ASSETS_URL . '/assets/scripts/jquery.countdown.js', array('jquery'), false, true);
		wp_register_script('custom', ASSETS_URL . '/assets/scripts/custom.js', array('jquery'), false, true);
				

        // wp_register_script('js_main', ASSETS_URL . '/assets/js/main.js', array('jquery'), '1.0', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('owlcar');
        wp_enqueue_script('jcountdown');
        wp_enqueue_script('custom');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/main.css';

	if( $styles_path ) {
		// <link href="https://fonts.googleapis.com/css?family=Clicker+Script|Dancing+Script:400,700|Raleway:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
		// <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		// <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		// <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		// <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		wp_register_style('gfonts', "https://fonts.googleapis.com/css?family=Clicker+Script|Dancing+Script:400,700|Raleway:400,400i,700,700i&amp;subset=latin-ext", array(), false, 'all');
		wp_register_style('fontawesome', "https://use.fontawesome.com/releases/v5.3.1/css/all.css", array('gfonts'), false, 'all');
		wp_register_style('style', ASSETS_URL . '/assets/css/style.css', array('fontawesome'), false, 'all');
		wp_register_style('owlcar', ASSETS_URL . '/assets/css/owl.carousel.min.css', array('style'), false, 'all');
		wp_register_style('owltheme', ASSETS_URL . '/assets/css/owl.theme.default.min.css', array('owlcar'), false, 'all');	
	
		wp_enqueue_style('gfonts');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('style');
		wp_enqueue_style('owlcar');
		wp_enqueue_style('owltheme');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ),

    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;
 
	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {
			
			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}
function dump($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>