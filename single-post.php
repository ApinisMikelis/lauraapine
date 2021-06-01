<?php get_header(); ?>

<div class="site-main container-fluid" role="main">

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content-single-post' );

            the_post_navigation();

    endwhile;
    ?>

</div>

<?php get_footer();
