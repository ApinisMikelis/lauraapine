<?php

$contact_form = get_field('contact-form-code');
$photo = get_field('photo');

?>

<div class="contact-cols">

    <div class="content-area">

        <?php the_content(); ?>
    
    </div>

    <div class="cols">

        <div class="contact-form">

            <?php echo do_shortcode($contact_form); ?>

        </div>

        <div class="content-area">

            <?php if ($photo) : ?>

                <div class="image">

                    <img src="<?php echo $photo; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">

                </div>

            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>

                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">

                    <?php dynamic_sidebar( 'footer-3' ); ?>

                </div>

            <?php endif; ?>

        </div>

    </div>
    
</div>
