<?php get_header(); ?>
		<div id="content">
			<p><strong>GeekHub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <a href="#">зареєструватися</a> слухачем!</p>
			<h3>Наші курси</h3>
			<ul>

<?php
	$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
	$postslist = get_posts( $args );

	 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<li id="post-<?php the_ID(); ?>">
<?php the_post_thumbnail(); ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<?php the_content();?>
				</li>


<?php endwhile; ?>

<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
			</ul>
		</div>

<?php get_footer(); ?>