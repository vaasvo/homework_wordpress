<?php get_header(); ?>
	<div id="content">
		<?php the_title('<h3>', '</h3>'); ?>
		<ul>
			<?php query_posts(array('orderby' => 'ID', 'order'=> 'ASC')); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<li>
				<h4><span></span></h4>
				<?php the_post_thumbnail(); ?>
				<?php the_content();?>
			</li>

			<?php endwhile; ?>
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; wp_reset_query(); ?>
			</ul>
	</div>

<?php get_footer(); ?>