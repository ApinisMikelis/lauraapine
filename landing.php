<?php
/**
* Template Name: Landing page
 */

get_header(); ?>

<?php

    $video_url = get_field('video');
    $video_heading = get_field('video-heading');
    $video_text = get_field('video-text');
    $video_btn_text = get_field('video-btn-text');
    $video_btn_url = get_field('video-btn-link');
?>

<section class="hero">
    <video class="landing-video" autoplay loop width="100%">
        <source src="<?php echo $video_url; ?>" />
    </video>
    <div class="overlay">

        <div class="overlay-content">

            <h2><?php echo $video_heading; ?></h2>
            <p><?php echo $video_text; ?></p>
            
            <div class="actions">
                <a href="#services" class="btn btn-primary">
                    <?php echo $video_btn_text; ?>
                </a>

                <a href="#promo" class="btn btn-secondary icon-button">
                    <i class="far fa-play-circle"></i>
                    <?php echo __( "How this works?", "wp-bootstrap-starter" ); ?>
                </a>
            </div>

        </div>

    </div>
</section>

<?php get_template_part('templates/services'); ?>

<?php get_template_part('templates/promo'); ?>

<?php
get_footer();
