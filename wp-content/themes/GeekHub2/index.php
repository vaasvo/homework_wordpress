<?php get_header(); ?>
		<div id="content">
			<ul>
				<?php query_posts(array('orderby' => 'ID', 'order'=> 'ASC' )); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<li id="post-<?php the_ID(); ?>">
					<h4><?php the_title(); ?></h4>
					<?php the_content();?>
				</li>
				<?php endwhile; ?>
				<?php else: ?>
				<p>post area</p>
				<?php endif; ?>
			</ul>
		</div>
<?php get_footer(); ?>