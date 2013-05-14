<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol first clearfix" role="main">
						<h1 class="archive-title"><span><?php _e('Search Results for:', 'polymaster'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>	
					
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
    			
    			    <?php get_sidebar(); ?>
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
