<?php
/**
 * The template for displaying search results pages.
 *
 * @package Graphy
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'graphy' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="search_list">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php
			the_posts_pagination( array(
				'prev_text' => esc_html__( '&laquo; Previous', 'graphy' ),
				'next_text' => esc_html__( 'Next &raquo;', 'graphy' ),
			) );
			?>

		<?php else : ?>
			</div>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
