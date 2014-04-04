<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
		<div id="header-wrap">
			<div id="header">
				<h1><a href="<?php echo home_url(); ?>">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="GeekHub" />GeekHub</a></h1>
				<?php wp_nav_menu(array(
					'theme_location' => 'navigation', 
					'container' => false,
					'menu_class' => false,
					'menu_id' => 'nav'
				)); ?>

				<ul id="social-nav">
					<?php if(get_theme_mod('facebook_link') ) { ?>
					<li class="fb"><a href="https://www.facebook.com/<?php echo get_theme_mod('facebook_link'); ?>">Facebook</a></li>
					<?php } ?>
					<?php if(get_theme_mod('vkontakte_link') ) { ?>
					<li class="vk"><a href="https://www.vk.com/<?php echo get_theme_mod('vkontakte_link'); ?>">Vkontakte</a></li>
					<?php } ?>
					<?php if(get_theme_mod('twitter_link') ) { ?>
					<li class="tw"><a href="https://www.twitter.com/<?php echo get_theme_mod('twitter_link'); ?>">Twitter</a></li>
					<?php } ?>
					<?php if(get_theme_mod('youtube_link') ) { ?>
					<li class="yt"><a href="https://www.youtube.com/<?php echo get_theme_mod('youtube_link'); ?>">Youtube</a></li>
					<?php } ?>
					<?php if(get_theme_mod('vimeo_link') ) { ?>
					<li class="vim"><a href="https://www.vimeo.com/<?php echo get_theme_mod('vimeo_link'); ?>">Vimeo</a></li>
					<?php } ?>
				</ul>

				<h2><?php bloginfo( 'description' ); ?></h2>
				<a class="reg" href="#">Зареєструватися</a>
			</div>
		</div>