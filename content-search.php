<?php
/**
 * @package Graphy
 */
?>

	<article id="search-<?php the_ID(); ?>" class="search_item">
		<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" class="search_anc">
			<div class="search-thumbnail">
				<?php the_post_thumbnail( 'graphy-post-thumbnail-medium' ); ?>
			</div>
			<p class="search_text"><?php echo graphy_shorten_text( get_the_excerpt(), 160 ); ?></p>
		</a>
		<?php endif; ?>
	</article>