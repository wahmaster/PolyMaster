<?php
/**
 * The template for displaying posts in the Audio post format.
 *
 * @package WordPress
 * @subpackage PolyMaster
 * @since PolyMaster 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
	<header class="article-header">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'polymaster' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .article-header -->

	<div class="entry-media">
		<div class="audio-content">
			<?php the_post_format_audio(); ?>
		</div><!-- .audio-content -->
	</div><!-- .entry-media -->

	<section class="entry-content">
		<?php the_remaining_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'polymaster' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'polymaster' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</section><!-- .entry-content -->

	<footer class="article-footer">
		<div class="entry-meta">
			<?php poly_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'polymaster' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->		
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
