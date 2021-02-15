<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package WP_Bootstrap_Starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themeslug_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function wp_bootstrap_starter_customize_register( $wp_customize ) {

    //Style Preset
    $wp_customize->add_section(
        'typography',
        array(
            'title' => __( 'Preset Styles', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the typography', 'wp-bootstrap-starter' ),
            'priority' => 20,
        )
    );

    //Theme Option
    $wp_customize->add_setting( 'theme_option_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'theme_option_setting', array(
        'label' => __( 'Theme Option', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'theme_option_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'cerulean' => 'Cerulean',
            'cosmo' => 'Cosmo',
            'cyborg' => 'Cyborg',
            'darkly' => 'Darkly',
            'flatly' => 'Flatly',
            'journal' => 'Journal',
            'litera' => 'Litera',
            'lumen' => 'Lumen',
            'lux' => 'Lux',
            'materia' => 'Materia',
            'minty' => 'Minty',
            'pulse' => 'Pulse',
            'sandstone' => 'Sandstone',
            'simplex' => 'Simplex',
            'sketchy' => 'Sketchy',
            'slate' => 'Slate',
            'solar' => 'Solar',
            'spacelab' => 'Spacelab',
            'superhero' => 'Superhero',
            'united' => 'United',
            'yeti' => 'Yeti',
        )
    ) ) );

    $wp_customize->add_setting( 'preset_style_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_style_setting', array(
        'label' => __( 'Typography', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'preset_style_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'arbutusslab-opensans' => 'Arbutus Slab / Opensans',
            'montserrat-merriweather' => 'Montserrat / Merriweather',
            'montserrat-opensans' => 'Montserrat / Opensans',
            'oswald-muli' => 'Oswald / Muli',
            'poppins-lora' => 'Poppins / Lora',
            'poppins-poppins' => 'Poppins / Poppins',
            'roboto-roboto' => 'Roboto / Roboto',
            'robotoslab-roboto' => 'Roboto Slab / Roboto',
        )
    ) ) );

    //Site Name Text Color
   $wp_customize->add_section(
        'site_name_text_color',
        array(
            'title' => __( 'Other Customizations', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 40,
        )
    );
    $wp_customize->add_section(
        'colors',
        array(
            'title' => __( 'Background Color', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 50,
            'panel' => 'styling_option_panel',
        )
    );
    $wp_customize->add_section(
        'background_image',
        array(
            'title' => __( 'Background Image', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 60,
            'panel' => 'styling_option_panel',
        )
    );

    // Bootstrap and Fontawesome Option
    $wp_customize->add_setting( 'cdn_assets_setting', array(
        'default' => __( 'no','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( 
        'cdn_assets',
        array(
            'label' => __( 'Use CDN for Assets', 'wp-bootstrap-starter' ),
            'description' => __( 'All Bootstrap Assets and FontAwesome will be loaded in CDN.', 'wp-bootstrap-starter' ),
            'section' => 'site_name_text_color',
            'settings' => 'cdn_assets_setting',
	        'type'    => 'select',
	        'choices' => array(
	            'yes' => __( 'Yes', 'wp-bootstrap-starter' ),
	            'no' => __( 'No', 'wp-bootstrap-starter' ),
        	)
        )
    );


    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
    $wp_customize->get_control( 'header_textcolor'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_image'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_color'  )->section = 'site_name_text_color';

    // Add control for logo uploader
    $wp_customize->add_setting( 'wp_bootstrap_starter_logo', array(
        //'default' => __( '', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_bootstrap_starter_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'wp-bootstrap-starter' ),
        'section'  => 'title_tagline',
        'settings' => 'wp_bootstrap_starter_logo',
    ) ) );

}
add_action( 'customize_register', 'wp_bootstrap_starter_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_bootstrap_starter_customize_preview_js() {
    wp_enqueue_script( 'wp_bootstrap_starter_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_bootstrap_starter_customize_preview_js' );
