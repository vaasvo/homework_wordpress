<?php

load_theme_textdomain('geekhub', get_template_directory() . '/languages');

function load_style_script(){
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'load_style_script' );

add_theme_support('post-thumbnails' );

register_nav_menu( 'navigation', 'nav');

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
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
		)
	);
	register_post_type( 'team',
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
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
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
	    'default' => get_template_directory_uri() . '/img/geekhub.png',
	    'transport'     => 'refresh',
) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'link_header_image', array(
		'label'    => __( 'Upload a logo', 'geekhub' ),
		'section'  => 'Geekhub_test',
		'settings' => 'header_image',
) ) );
	$wp_customize->add_section( 'Social_link' , array(
	    'title'    => __( 'Social link', 'geekhub_test' ),
	    'priority' => 31,
) );
	$wp_customize->add_setting( 'facebook_link' , array(
	    'default'   => '',
	    'transport' => 'postMessage',
) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_link_text', array(
		'label'    => __( 'Facebook', 'geekhub' ),
		'section'  => 'Social_link',
		'settings' => 'facebook_link',
) ) );
	$wp_customize->add_setting( 'vkontakte_link' , array(
	    'default'   => '',
	    'transport' => 'postMessage',
) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vkontakte_link_text', array(
		'label'    => __( 'VKontakte', 'geekhub' ),
		'section'  => 'Social_link',
		'settings' => 'vkontakte_link',
) ) );
	$wp_customize->add_setting( 'twitter_link' , array(
	    'default'   => '',
	    'transport' => 'postMessage',
) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_link_text', array(
		'label'    => __( 'Twitter', 'geekhub' ),
		'section'  => 'Social_link',
		'settings' => 'twitter_link',
) ) );
	$wp_customize->add_setting( 'youtube_link' , array(
	    'default'   => '',
	    'transport' => 'postMessage',
) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_link_text', array(
		'label'    => __( 'Youtube', 'geekhub' ),
		'section'  => 'Social_link',
		'settings' => 'youtube_link',
) ) );
	$wp_customize->add_setting( 'vimeo_link' , array(
	    'default'   => '',
	    'transport' => 'postMessage',
) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vimeo_link_text', array(
		'label'    => __( 'Vimeo', 'geekhub' ),
		'section'  => 'Social_link',
		'settings' => 'vimeo_link',
) ) );

}
add_action( 'customize_register', 'geekhub_customize_register' );

