<?php
/**
 * The template for displaying all single posts.
 *
 * @package Graphy
 */

get_header(); ?>

	<div id="primary" class="content-area	<?php
		$url = $_SERVER['REQUEST_URI'];
		if(strstr($url,'product')==true):
		?>-sideDisplay
	<?php endif; ?>">
	
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
		$url = $_SERVER['REQUEST_URI'];
		if(strstr($url,'product')==true):
		?>
    <?php get_sidebar(); ?>
	<?php endif; ?>
	
<?php get_footer(); ?>