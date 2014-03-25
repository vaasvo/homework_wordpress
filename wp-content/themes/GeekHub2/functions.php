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
* style and script
**/
add_action('wp_enqueue_scripts', 'load_style_script' );

/**
* post-thumbnails
**/
add_theme_support('post-thumbnails' );

/**
* menu
**/
register_nav_menu( 'navigation', 'nav');

/**
* social-menu
**/
register_nav_menu( 'socialmenu', 'social_nav');

/**
* footer-partners
**/
register_sidebar(array(
	'name' => 'footer-widgets',
	'id' => 'partners',
	'description' => 'widgets admin',
	));

add_custom_background();

/**
* dynamic logo
**/
$args = array(
	'flex-width' => true,
    'width' => 167,
    'flex-height'    => true,
    'height' => 71,
    'uploads' => true,
    'default-image' => get_template_directory_uri() . '/img/geekhub.png'
    );
add_theme_support( 'custom-header', $args );


?>