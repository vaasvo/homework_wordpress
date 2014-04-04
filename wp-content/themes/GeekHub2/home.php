<?php get_header(); ?>
		<div id="content">
			<?php query_posts('page_id=2'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<h3>Наші курси</h3>
			<ul>
				<?php $courses = new WP_Query(array(
					'post_type' => 'courses',
					'orderby' => 'ID',
					'order'=> 'ASC'
				)); ?>
				<?php if ( $courses->have_posts() ) : while ( $courses->have_posts() ) : $courses->the_post(); ?>

				<li id="post-<?php the_ID(); ?>">
					<?php the_post_thumbnail(); ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php the_content(); ?>
				</li>
				<?php endwhile; ?>
				<?php else: ?>
				<p>post area</p>
				<?php endif; ?>
			</ul>
		</div>

<?php get_footer(); ?>