<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bianco_nero
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bianco_nero' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<!-- BM CHANGE Remove .entry-footer -->

			<!--  <footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'bianco_nero' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->
