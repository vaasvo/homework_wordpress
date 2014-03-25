<?php get_header(); ?>
		<div id="content">

			<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<li>
<?php the_post_thumbnail(); ?>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<?php the_content();?>
	</li>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
			</ul>
		</div>

<?php get_footer(); ?>