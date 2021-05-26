<?php /*** Template Name: Contact */ get_header(); ?>

<?php get_header(); ?>

<div class="heading-container">

    <h1><?php the_title(); ?></h1>

</div>

<main class="container">

	<?php while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'contact' );

	endwhile; ?>

</main>

<?php get_template_part('template-parts/view-more'); ?>

<?php get_footer(); ?> 
