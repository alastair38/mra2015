<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

                    <?php get_template_part( 'partials/loop', 'home' ); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
