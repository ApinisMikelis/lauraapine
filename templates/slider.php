<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">

    <?php get_template_part('elements/masthead', '', array('slider-header' => true)); ?>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo bloginfo('stylesheet_directory');?>/inc/assets/img/slider.jpg" alt="First slide">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo bloginfo('stylesheet_directory');?>/inc/assets/img/slider2.jpg" alt="Second slide">
        </div>
    

    </div>

    <div class="slider-controls">

        <a class="control-prev" href="#slider" role="button" data-slide="prev">
            <?php get_template_part('inc/assets/svg/arrow-left'); ?>
        </a>

        <span class="indicator">
            <span>1</span>
            <span>2</span>
        </span>

        <a class="control-next" href="#slider" role="button" data-slide="next">
            <?php get_template_part('inc/assets/svg/arrow-right'); ?>
        </a>

    </div>
</div>
