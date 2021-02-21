<?php 

$posts = get_field('latest-adventures', $post->ID);
$slides = array_chunk($posts, 3);

?>

<div id="latest-adventures" class="section pink-section bootstrap-slider">

    <h2 class="section-title"><?php echo __( 'Latest adventures', 'wp-bootstrap-starter' ); ?></h2>

    <div id="latest-adventures-slider" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            <?php foreach($slides as $key => $slide) : ?>

                    <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">

                        <div class="adventure-grid">

                        <?php foreach($slide as $post) : ?>

                            <div class="adventure">

                                <a href="<?php echo get_permalink($post); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="<?php echo $post->post_title; ?>" />
                                    <h3><?php echo $post->post_title; ?></h3>
                                </a>

                            </div>

                        <?php endforeach; ?>
                        
                        </div>

                    </div>

            <?php endforeach; ?>

        </div>

        <div class="slider-controls">
            
            <a class="control-prev" href="#latest-adventures-slider" role="button" data-slide="prev">
                <?php get_template_part('inc/assets/svg/arrow-left'); ?>
            </a>

            <a class="control-next" href="#latest-adventures-slider" role="button" data-slide="next">
                <?php get_template_part('inc/assets/svg/arrow-right'); ?>
            </a>

        </div>
    </div>

</div>
