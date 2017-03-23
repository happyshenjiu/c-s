<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clean_Corporate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
	  /**
	   * Hook - clean_corporate_single_image.
	   *
	   * @hooked clean_corporate_add_image_in_single_display -  10
	   */
//	注释文章页显示主题图片
//	  do_action( 'clean_corporate_single_image' );
	?>

	<div class="entry-content-wrapper">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clean-corporate' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .entry-content-wrapper -->

	<footer class="entry-footer">
		<?php clean_corporate_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
