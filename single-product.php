<?php
/**
 * The template for displaying all pages.
 *
 * @package Graphy
 */

get_header(); ?>

	<div id="primary" class="content-area -sideDisplay">
		<main id="main" class="site-main">

		<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
