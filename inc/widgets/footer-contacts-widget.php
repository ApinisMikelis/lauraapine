<?php

function register_custom_widgets() {
    register_widget( 'footer_contacts_widget' );
}
    
add_action( 'widgets_init', 'register_custom_widgets' );

class footer_contacts_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'footer_contacts_widget',
            __('Lauras kontaktinformācija', 'footer_contacts_widget'),
            array ( 'description' => __( 'Displays contact info and social', 'footer_contacts_widget' ) )
        );
    }

    public function widget( $args, $instance ) {

        $footer_contacts_widget_args = array(
            'before_title'    => '<h3 class="section-title">',
            'after_title'     => '</h3>',
        );

        $template_args = array(
            'instance' => $instance,
            'widget_args' => $args,
            'footer_contacts_widget_args' => $footer_contacts_widget_args
        );
        
        get_template_part('template-parts/footer-contacts-widget', '', $template_args);

    }

    public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
        else
            $title = __( 'Kontakti', 'footer_contacts_widget' );

        ?>
        
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        
        <?php
        
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

}

