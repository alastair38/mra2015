<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">
			<h1 class="screen-reader-text"><?php the_title(); ?></h1>
		</header> <!-- end article header -->

         <hr class="show-for-large-up">

        <div id="fpImg" class="large-6 medium-6 small-12 columns first" role="image">
			<?php the_post_thumbnail('full'); ?>

        </div>

	    <section class="large-6 medium-6 small-12 columns entry-content" itemprop="articleBody">
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->

	</article> <!-- end article -->

<?php endwhile; endif; ?>

