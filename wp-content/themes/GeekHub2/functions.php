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
	'name' => 'Footer widgets',
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
	));


add_action( 'init', 'create_posttype' );
function create_posttype() {
	register_post_type( 'courses',
		array(
			'labels' => array(
							'name' => __( 'Courses' ),
							'all_items' => 'All courses',
							'add_new' => 'Add new course',
							'add_new_item' => 'Add course',
							'menu_icon' => 'dashicons-welcome-learn-more'
							),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'courses'),
			'supports' => array('title', 'editor', 'thumbnail', 'revisions')
		)
	);
	register_post_type( 'our_team',
		array(
			'labels' => array(
							'name' => __( 'Team' ),
							'all_items' => 'All team members',
							'add_new' => 'Add new member',
							'add_new_item' => 'Add member'
							),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'team'),
			'supports' => array('title', 'editor', 'thumbnail', 'revisions')
		)
	);
	register_post_type( 'sponsors',
		array(
			'labels' => array(
							'name' => __( 'Sponsors' ),
							'all_items' => 'All sponsors',
							'add_new' => 'Add new sponsor',
							'add_new_item' => 'Add sponsor'
							),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sponsors'),
			'supports' => array('title', 'thumbnail')
		)
	);
}

function geekhub_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'Geekhub_test' , array(
    'title'    => __( 'Head Theme', 'geekhub_test' ),
    'priority' => 30,
) );
	$wp_customize->add_setting( 'header_image' , array(
    'transport'     => 'refresh',
) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'link_header_image', array(
	'label'    => __( 'Upload a logo', 'geekhub' ),
	'section'  => 'Geekhub_test',
	'settings' => 'header_image',
) ) );

	$wp_customize->add_setting( 'header_color' , array(
    'default'   => '#ff0000',
    'transport' => 'refresh',
) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'    => __( 'Header Color', 'geekhub' ),
	'section'  => 'Geekhub_test',
	'settings' => 'header_color',
) ) );



}
add_action( 'customize_register', 'geekhub_customize_register' );

