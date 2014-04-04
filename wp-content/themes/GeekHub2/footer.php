		<div id="footer">
			<ul class="partner-box">
			<?php if ( !dynamic_sidebar('Footer widgets')): ?>
				<li><img src="<?php bloginfo('template_url') ?>/img/fb.jpg" alt="facebook" /></li>
				<li class="sertificates"><a href="#" title="sertificates"><img src="<?php bloginfo('template_url') ?>/img/certificates.png" alt="sertificates" /></a></li>
				<li class="sponsors">
					<h5>Наші Спонсори</h5>
					<ul>
						<li class="de"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/sponsor1.png" alt="de" /></a></li>
						<li class="moc"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/sponsor2.png" alt="moc" /></a></li>
						<li class="sergium"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/sponsor3.png" alt="sergium" /></a></li>
						<li class="yothog"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/sponsor4.png" alt="yothog" /></a></li>
						<li class="sponsor5"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/sponsor5.png" alt="sponsor5" /></a></li>
					</ul>
				</li>
			<?php endif; ?>
				<li class="sponsors">
					<h5>Наші Спонсори</h5>
					<ul>
						<?php $sponsors = new WP_Query(array('post_type' => 'sponsors', 'order'=> 'ASC' )); ?>
						<?php if ( $sponsors->have_posts() ) : while ( $sponsors->have_posts() ) : $sponsors->the_post(); ?>

						<li id="post-<?php the_ID(); ?>">
							<a href="#"><?php the_post_thumbnail(); ?></a>
						</li>

						<?php endwhile; ?>
						<?php else: ?>
							<p>post area</p>
						<?php endif;  wp_reset_query(); ?>
					</ul>
				</li>
			</ul>
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