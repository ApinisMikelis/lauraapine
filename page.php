<?php get_header(); ?>

<div class="post-thumbnail">

	<?php the_post_thumbnail(); ?>
	
</div>

<div class="heading-container">

    <h1><?php the_title(); ?></h1>

</div>

<main class="container">

	<?php while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; ?>

</main>

<?php get_template_part('template-parts/view-more'); ?>

<?php get_footer(); ?> 
