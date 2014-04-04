<?php
/*
Template Name: team
*/
?>
<?php get_header(); ?>
	<div id="content">
		<h3><?php the_title(); ?></h3>
		<ul>
			<?php $team = new WP_Query(array(
				'post_type' => 'team',
				'orderby' => 'ID',
				'order'=> 'ASC'
			)); ?>
			<?php if ( $team->have_posts() ) : while ( $team->have_posts() ) : $team->the_post(); ?>

			<li>
				<h4><?php echo get_post_meta($post->ID, "nik", $single = true); ?><span><?php echo get_post_meta($post->ID, "work", $single = true); ?></span></h4>
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