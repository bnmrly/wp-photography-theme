<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bianco_nero
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bianco_nero' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bianco_nero' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<!-- BM CHANGE Remove .entry-footer -->

	<!--<footer class="entry-footer">
	 <?php bianco_nero_entry_footer(); ?>
 </footer>  .entry-footer -->
</article><!-- #post-## -->
