<?php 

$posts = get_field('latest-adventures', $post->ID);
$slides = array_chunk($posts, 3);

?>

<div id="latest-adventures" class="section pink-section bootstrap-slider">

    <div class="container ">

        <h2 class="section-title"><?php echo __( 'Latest adventures', 'wp-bootstrap-starter' ); ?></h2>

        <div class="post-list">

        <?php foreach($posts as $post) : ?>

            <div class="post-listing">

                <a href="<?php echo get_permalink($post); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="<?php echo $post->post_title; ?>" />
                    <h3><?php echo $post->post_title; ?></h3>
                </a>

            </div>

        <?php endforeach; ?>
        
        </div>

    </div>

</div>
