<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head(); ?>	
	</head>
	<body>
		<div id="header-wrap">
			<div id="header">
				<h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/img/geekhub.png" alt="geekhub" />GeekHub</a></h1>
<?php wp_nav_menu(array('theme_location' => 'nav', 
						'container' => false,
						'menu_class' => 'nav'
						)); ?>
				
				<ul id="social-nav">
					<li class="fb"><a href="#">Facebook</a></li>
					<li class="vk"><a href="#">Vkontakte</a></li>
					<li class="tw"><a href="#">Twitter</a></li>
					<li class="yt"><a href="#">Youtube</a></li>
					<li class="vim"><a href="#">Vimeo</a></li>
				</ul>
				<h2>Реєстрація на другий сезон відкрита!</h2>
				<a class="reg" href="#">Зареєструватися</a>
			</div>
		</div>