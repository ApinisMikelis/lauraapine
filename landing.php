<?php /*** Template Name: Landing */

$post_id = $post->ID;

get_header();

get_template_part('templates/slider');

get_template_part('templates/latest-adventures');

get_template_part('templates/about', '', array('post_id' => $post_id));

get_template_part('templates/reviews');

get_template_part('templates/instagram');

get_footer();
