<?php
/**
 * The template for displaying posts in the Aside post format.
 *
 * @package WordPress
 * @subpackage PolyMaster
 * @since PolyMaster 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(clearfix); ?> role="article">
	<section class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'polymaster' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'polymaster' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</section><!-- .entry-content -->

	<?php if ( is_single() ) : ?>
	<footer class="entry-meta article-footer">
		<?php poly_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'polymaster' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->

	<?php else : ?>
		<footer class="article-footer">
			<?php edit_post_link( __( 'Edit', 'polymaster' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer><!-- .entry-meta -->' ); ?>
		</footer><!-- .entry-meta -->
	<?php endif; // is_single() ?>
</article><!-- #post -->
