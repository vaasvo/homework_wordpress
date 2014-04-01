<ul class="partner-box">
<?php if(!dynamic_sidebar('Footer widgets')): ?>
	<li>
		<img src="<?php bloginfo('template_url') ?>/img/fb.jpg" alt="facebook" />
	</li>
<?php endif; ?>
	</ul>
<!--<?php $sponsors = new WP_Query(array('post_type' => 'sponsors',
									'order'=> 'ASC'
									)); ?>
<?php if ( $sponsors->have_posts() ) : while ( $sponsors->have_posts() ) : $sponsors->the_post(); ?>

		<li id="post-<?php the_ID(); ?>">
<?php the_post_thumbnail(); ?>

		</li>
<?php endwhile; ?>
<?php else: ?>
		<p>post area</p>
<?php endif; ?>
	</ul>
</ul>
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
	</li>-->
