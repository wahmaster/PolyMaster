<?php
/**
 * The template for displaying Author archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Polymaster
 * @since Polymaster 1.0
 */

get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
		    <div id="main" class="eightcol first clearfix" role="main">
				<?php if ( have_posts() ) : ?>
		
					<?php
						/* Queue the first post, that way we know
						 * what author we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop
						 * properly with a call to rewind_posts().
						 */
						the_post();
					?>
		
					<header class="archive-header">
						<h1 class="archive-title"><?php printf( __( 'All posts by %s', 'polymaster' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
					</header><!-- .archive-header -->
		
					<?php
						/* Since we called the_post() above, we need to
						 * rewind the loop back to the beginning that way
						 * we can run the loop properly, in full.
						 */
						rewind_posts();
					?>
				
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
		
					<?php // twentythirteen_paging_nav(); ?>
		
			        <?php if (function_exists('poly_page_navi')) { ?>
			            <?php poly_page_navi(); ?>
			        <?php } else { ?>
			            <nav class="wp-prev-next">
			                <ul class="clearfix">
			        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "polymaster")) ?></li>
			        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "polymaster")) ?></li>
			                </ul>
			            </nav>
			        <?php } ?>				
		
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</div> <!-- end #main -->
				<div id="sidebar1" class="sidebar fourcol last dropme clearfix" role="complementary">
					<?php if ( get_the_author_meta( 'description' ) ) : ?>
						<?php get_template_part( 'author-bio' ); ?>
					<?php endif; ?>
				</div>
			<?php //get_sidebar(); ?>
    	</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>