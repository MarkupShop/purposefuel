<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php /*<div class="top-image">
		<div class="filter"></div>
		<?php echo get_the_post_thumbnail(); ?>
	</div>*/
	?>

	<?php the_title(); ?>

	<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>