<?php

$instance = $args['instance'];
$widget_args = $args['widget_args'];
$footer_contacts_widget_args = $args['footer_contacts_widget_args'];

$phone = get_custom_theme_option('phone');
$email = get_custom_theme_option('email');

?>

<section class="widget footer-contacts-widget">

    <?php

        $title = apply_filters( 'widget_title', $instance['title'] );

        if ( ! empty ( $title ) )
            echo $widget_args['before_title'] . $title . $widget_args['after_title'];

    ?>
    
    <a href="tel:<?php echo $phone; ?>">

        <?php echo $phone; ?>

    </a>

    <a href="mailto:<?php echo $email; ?>">

        <?php echo $email; ?>
        
    </a>

    <?php get_template_part('template-parts/social'); ?>

</section>
