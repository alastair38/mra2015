<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->

        <hr>

        <div id="fpImg" class="large-2 medium-2 small-12 columns" role="image">

			<?php the_post_thumbnail(''); ?>

        </div>

	    <section class="large-10 medium-10 small-12 columns entry-content" itemprop="articleBody">
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->

	</article> <!-- end article -->

<?php endwhile; endif; ?>

