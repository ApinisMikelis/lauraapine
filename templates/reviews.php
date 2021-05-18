<?php

$args = array(  
    'post_type' => 'reviews',
);   

$loop = new WP_Query( $args ); ?>


<div id="reviews" class="section gray-section">

    <div class="container">

        <h2 class="section-title"><?php echo __( 'Reviews', 'wp-bootstrap-starter' ); ?></h2>

        <div id="review-slider" class="carousel slide carousel-fade bootstrap-slider" data-ride="carousel">

            <div class="carousel-inner">

                <?php $index = 0; while ( $loop->have_posts() ) : $loop->the_post() ?>

                    <div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">

                        <div class="review-grid">
                            <div class="review-content">
                                <div class="review-box">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="review-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    </div>
                    
                <?php $index++; endwhile; ?>

            </div>

            <div class="slider-controls">

                <a class="control-next" href="#review-slider" role="button" data-slide="next">
                    <?php get_template_part('inc/assets/svg/arrow-right'); ?>
                </a>

            </div>
        </div>

    </div>

</div>