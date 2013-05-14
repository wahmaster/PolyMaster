<?php
/**
 * The template for displaying posts in the Link post format.
 *
 * @package WordPress
 * @subpackage PolyMaster
 * @since PolyMaster 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<header class="article-header">
		<h1 class="h2 entry-title">
			<a href="<?php echo esc_url( poly_get_link_url() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h1>

		<div class="entry-meta">
			<?php poly_entry_date(); ?>
			<?php edit_post_link( __( 'Edit', 'polymaster' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<section class="entry-content clearfix">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'polymaster' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'polymaster' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</section><!-- .entry-content -->

	
	<?php if ( is_single() ) : ?>
	<footer class="entry-meta article-footer">
		<?php poly_entry_meta(); ?>
		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
	<?php endif; // is_single() ?>       
	
</article><!-- #post -->
