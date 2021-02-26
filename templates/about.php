<?php

    $heading = get_field('about-heading', $args['post_id']);
    $content = get_field('about-text', $args['post_id']);
    $greeting = get_field('greeting', $args['post_id']);
    $link = get_field('about-link', $args['post_id']);
    $link_text = get_field('about-link-text', $args['post_id']);
    $image = get_field('about-image', $args['post_id']);

?>

<div id="about" class="section">


    <div class="container">

        <h2 class="section-title"><?php echo $heading; ?></h2>

        <div class="about-grid">

            <div class="text">

                <?php echo $content; ?>

                <a class="btn btn-primary" href="<?php echo $link; ?>">
                    <?php echo $link_text; ?>
                </a>

            </div>

            <div class="image"> 
                <div class="hello"><?php echo $greeting; ?></div>
                <img src="<?php echo $image; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" />
            </div>
        </div>

    </div>

</div>