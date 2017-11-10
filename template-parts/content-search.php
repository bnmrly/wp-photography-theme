<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bianco_nero
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- BM CHANGE Remove .entry-header -->

	<!-- <header class="entry-header">
		 <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( // get_permalink() ) ), '</a></h2>' ); ?>

		 <?php if ( 'post' === get_post_type() ) : ?>
		 <div class="entry-meta">
			<?php bianco_nero_posted_on(); ?> -->
		</div>< <!-- .entry-meta -->
		<?php endif; ?>
	</header> <!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

<!-- BM CHANGE Remove .entry-footer -->

	<!-- <footer class="entry-footer">
		<?php bianco_nero_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-## -->
