<?php

$images = acf_photo_gallery('slider-images', $post->ID);
$interval = get_field('interval', $post->ID);

?>

<div id="slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="<?php echo $interval; ?>">

    <?php get_template_part('elements/masthead', '', array('slider-header' => true)); ?>

    <div class="carousel-inner">

        <?php foreach($images as $key => $image) : ?>

            <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                <img class="d-block w-100" src="<?php echo $image['full_image_url']?>" alt="<?php echo $image['title']; ?>">
            </div>

        <?php endforeach; ?>

    </div>

    <div class="slider-controls">

        <a class="control-prev" href="#slider" role="button" data-slide="prev">
            <?php get_template_part('inc/assets/svg/arrow-left'); ?>
        </a>

        <span class="indicator">
            <span class="current">1</span>
            <span class="last"><?php echo count($images); ?></span>
        </span>

        <a class="control-next" href="#slider" role="button" data-slide="next">
            <?php get_template_part('inc/assets/svg/arrow-right'); ?>
        </a>

    </div>
</div>
