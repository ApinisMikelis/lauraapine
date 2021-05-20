<?php

$instance = $args['instance'];
$widget_args = $args['widget_args'];
$footer_contacts_widget_args = $args['footer_contacts_widget_args'];

$phone = get_custom_theme_option('phone');
$email = get_custom_theme_option('email');
$instagram = get_custom_theme_option('instagram');
$facebook = get_custom_theme_option('facebook');
$pinterest = get_custom_theme_option('pinterest');



?>

<section class="widget footer-contacts-widget">

    <?php

        $title = apply_filters( 'widget_title', $instance['title'] );

        if ( ! empty ( $title ) )
            echo $widget_args['before_title'] . $title . $widget_args['after_title'];

    ?>
    
    <a href="tel:<?php echo $phone; ?>">
        <i class="fas fa-mobile-alt"></i>
        <?php echo $phone; ?>

    </a>

    <a href="mailto:<?php echo $email; ?>">
        <i class="far fa-paper-plane"></i>
        <?php echo $email; ?>
    </a>

    <div class="social-media">

        <a href="<?php echo $instagram; ?>" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    
        <a href="<?php echo $pinterest; ?>" target="_blank">
            <i class="fab fa-pinterest-p"></i>
        </a>
    
        <a href="<?php echo $facebook; ?>" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>

    </div>

</section>
