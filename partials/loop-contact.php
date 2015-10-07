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

            <span itemprop="name"><?php bloginfo('name'); ?></span>

            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress"><?php echo esc_html (get_field('street_address')); ?></span>
                <span itemprop="streetAddress"><?php echo esc_html (get_field('street_address_2')); ?></span>
                <span itemprop="addressLocality"><?php echo esc_html (get_field('town')); ?></span>

                <span itemprop="postalCode"><?php echo esc_html (get_field('post_code')); ?></span>
            </span>
            <p><span itemprop="telephone" content="<?php echo esc_html (get_field('mobile')); ?>"><?php echo esc_html (get_field('mobile')); ?></span>
            <span itemprop="telephone" content="<?php echo esc_html (get_field('landline')); ?>"><?php echo esc_html (get_field('landline')); ?></span></p>
            <p><a title="Email Michael Roper" href="mailto:<?php echo esc_url (get_field('email')); ?>" target="_blank" itemprop="email">Email Michael</a></p>

            </div>

		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->

	</article> <!-- end article -->

<?php endwhile; endif; ?>

