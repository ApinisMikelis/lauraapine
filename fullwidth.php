<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; ?>

		</div>
	</section>

<?php
get_footer();
