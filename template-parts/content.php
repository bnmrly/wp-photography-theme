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

	<!-- BM CHANGE Remove entry-header -->

	<!-- <header class="entry-header">
		<?php
			 if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			 } else {
				 the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		 if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		 	<?php bianco_nero_posted_on(); ?> -->
		 <!-- </div> --> <!-- .entry-meta -->
		 <!-- <?php
	 endif; ?> -->
	 <!-- </header> --> <!-- .entry-header -->

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
