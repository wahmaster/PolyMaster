<?php
/**
 * The template for displaying Author bios.
 *
 * @package WordPress
 * @subpackage Polymaster
 * @since Polymaster 1.0
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'poly_author_bio_avatar_size', 74 ) ); ?>
	</div><!-- .author-avatar -->
	<div class="author-description">
		<h2><?php printf( __( 'About %s', 'polymaster' ), get_the_author() ); ?></h2>
		<p>
			<?php the_author_meta( 'description' ); ?>
			<br/>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'polymaster' ), get_the_author() ); ?>
			</a>
		</p>
	</div><!-- .author-description -->
</div><!-- .author-info -->