<?php /** Template Name: Custom template */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
    
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; ?>

		</div>

	</section>

<?php
get_sidebar();
get_footer();
