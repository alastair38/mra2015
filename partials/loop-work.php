<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">


         <hr class="show-for-large-up">

        <div id="workImg" class="large-6 medium-6 small-12 columns" role="image">
			<?php get_template_part( 'partials/loop', 'slider' ); ?>


        </div>

	    <section class="large-6 medium-6 small-12 columns first entry-content" itemprop="articleBody">
            <header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->

	</article> <!-- end article -->

<?php endwhile; endif; ?>

