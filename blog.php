<?php /* Template Name: Blogs */ get_header(); ?>

<div class="heading-container">

    <h1><?php the_title(); ?></h1>

</div>

<div class="blog-post-list post-list">

    <?php 
    
    $args = array(  
        'post_type' => 'post',
        'posts_per_page' => '100',
        'category_name' => 'blog',
        'order' => 'DESC'
    );
                
    $loop = new WP_Query( $args );
    
    while ( $loop->have_posts() ) : $loop->the_post();

        get_template_part( 'template-parts/post-listing' );

    endwhile;
    
    ?>

</div>

<?php get_template_part('template-parts/view-more'); ?>

<?php get_footer(); ?> 
