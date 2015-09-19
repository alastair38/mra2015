<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->

        <hr>

        <div id="fpImg" class="large-9 medium-9 small-12 columns" role="image">

			<?php the_post_thumbnail(''); ?>

        </div>

	    <section class="large-3 medium-3 small-12 columns entry-content" itemprop="articleBody">

		    <div class="address" itemscope itemtype="http://schema.org/LocalBusiness">

            <span itemprop="name">Michael Roper Architect</span>

            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">1 Lauderside</span>
                <span itemprop="streetAddress">Lauder Place</span>
                <span itemprop="addressLocality">East Linton</span>

                <span itemprop="postalCode">EH40 3DB</span>
            </span>
            <p><span itemprop="telephone" content="07966897326">07966897326</span>
            <span itemprop="telephone" content="01620 860729">01620 861737</span></p>
            <p><a title="Email Michael Roper" href="mailto:mike.roper@mac.com" target="_blank" itemprop="email">Email Michael</a></p>

            </div>

		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->

	</article> <!-- end article -->

<?php endwhile; endif; ?>

