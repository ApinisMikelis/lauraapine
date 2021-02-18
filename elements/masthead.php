<?php $header_class = $args['slider-header'] == true ? 'slider-header' : ''; ?>

<header id="masthead" class="<?php  echo $header_class;?> site-header navbar-static-top   <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

    <div id="logo">

        <?php get_template_part('inc/assets/svg/lauraapine'); ?>

    </div>

    <div id="main-menu">

        <?php wp_nav_menu(array(
            'theme_location'    => 'primary',
            'container'       => '',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 3,
            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
            'walker'          => new wp_bootstrap_navwalker()
        )); ?>

    </div>

</header>
