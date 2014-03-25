		<div id="footer">
<?php get_footer('partners'); ?>
<?php wp_nav_menu(array(
				'theme_location' => 'navigation',
				'container' => false,
				'menu_class' => 'footer-nav'
				)); ?>

			<p>&copy; Copyright <?php the_time('Y'); ?></p>
		</div>
<?php wp_footer(); ?>
	</body>
</html>