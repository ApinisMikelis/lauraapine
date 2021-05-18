<div id="instagram" class="section full-width-section">

    <h2 class="section-title"><?php echo __( 'Follow me on Instagram', 'wp-bootstrap-starter' ); ?></h2>

    <?php if ( is_active_sidebar( 'insta-widget' ) ) :
        dynamic_sidebar( 'insta-widget' );
    endif; ?>

</div>