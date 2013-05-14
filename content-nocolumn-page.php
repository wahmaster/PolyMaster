<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <header class="article-header">
	
	    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
  		<p class="byline vcard"><?php
			printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'polymaster'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'polymaster')), poly_get_the_author_posts_link());
  		?></p>


    </header> <!-- end article header -->

    <section class="entry-content clearfix" itemprop="articleBody">
	    <?php the_content(); ?>
	</section> <!-- end article section -->

    <footer class="article-footer">
  		<?php the_tags('<span class="tags">' . __('Tags:', 'polymaster') . '</span> ', ', ', ''); ?>
    </footer> <!-- end article footer -->

</article> <!-- end article -->
