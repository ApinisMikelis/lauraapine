<?php /*** Template Name: Custom post type loop */ get_header(); ?>

<?php
$args = array(  
    'post_type' => 'your-custom-post-type-slug',
    'posts_per_page' => '100',
    'meta_key' => 'order-by-custom-field-name',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);   

$loop = new WP_Query( $args ); ?>

<div role="main">

    <?php while ( $loop->have_posts() ) : $loop->the_post();

        get_template_part( 'template-parts/your-custom-post-type-listing' );

    endwhile; ?>

</div>

<?php

get_footer();
