<?php
/**
* Downloadable style and script
**/
function load_style_script(){
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js');
	wp_enqueue_script('myscript', get_template_directory_uri() . '/js/myscript.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/**
* load style and script
**/
add_action('wp_enqueue_scripts', 'load_style_script' );

/**
* post-thumbnails
**/
add_theme_support('post-thumbnails' );

/**
* menu
**/
register_nav_menu( 'menu', 'nav');

/**
* social-menu
**/
register_nav_menu( 'socialmenu', 'social_nav');

/**
* footer-partners
**/
register_sidebar(array(
	'name' => 'footer vidgets',
	'id' => 'partners-box',
	'description' => 'vidgets admin'
	) );

?>