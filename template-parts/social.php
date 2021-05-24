<?php

    $instagram = get_custom_theme_option('instagram');
    $facebook = get_custom_theme_option('facebook');
    $pinterest = get_custom_theme_option('pinterest');

?>

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