<?php
/**
 * Create A Simple Theme Options Panel
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Custom_Theme_Settings' ) ) {

	class Custom_Theme_Settings {

		public function __construct() {

			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'Custom_Theme_Settings', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'Custom_Theme_Settings', 'register_settings' ) );
			}

		}

		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}

		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}

		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'BaseTheme', 'custom-options' ),
				esc_html__( 'Theme Settings', 'custom-options' ),
				'manage_options',
				'theme-settings',
				array( 'Custom_Theme_Settings', 'create_admin_page' )
			);
		}

		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'Custom_Theme_Settings', 'sanitize' ) );
		}

		public static function sanitize( $options ) {

			if ( $options ) {

				if ( ! empty( $options['phone'] ) ) {
					$options['phone'] = sanitize_text_field( $options['phone'] );
				} else {
					unset( $options['phone'] );
                }

				if ( ! empty( $options['email'] ) ) {
					$options['email'] = sanitize_text_field( $options['email'] );
				} else {
					unset( $options['email'] );
                }

				if ( ! empty( $options['instagram'] ) ) {
					$options['instagram'] = sanitize_text_field( $options['instagram'] );
				} else {
					unset( $options['instagram'] );
                }

				if ( ! empty( $options['facebook'] ) ) {
					$options['facebook'] = sanitize_text_field( $options['facebook'] );
				} else {
					unset( $options['facebook'] );
                }

				if ( ! empty( $options['pinterest'] ) ) {
					$options['pinterest'] = sanitize_text_field( $options['pinterest'] );
				} else {
					unset( $options['pinterest'] );
                }
				 
			}

			return $options;

		}

		public static function create_admin_page() { ?>

			<div class="wrap">

				<h1><?php esc_html_e( 'Theme Options', 'custom-options' ); ?></h1>

				<form method="post" action="options.php">

					<?php settings_fields( 'theme_options' ); ?>

                    <h2>Your settings</h2>
					<table class="form-table ui celled table">

						<tr valign="top">
							<th scope="row">
                                <?php esc_html_e( 'Telefons', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'phone' ); ?>
								<input type="text" name="theme_options[phone]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

						<tr valign="top">
							<th scope="row">
                                <?php esc_html_e( 'Epasts', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'email' ); ?>
								<input type="text" name="theme_options[email]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

						<tr valign="top">
							<th scope="row">
                                <?php esc_html_e( 'Instagram', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'instagram' ); ?>
								<input type="text" name="theme_options[instagram]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

						<tr valign="top">
							<th scope="row">
                                <?php esc_html_e( 'Facebook', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'facebook' ); ?>
								<input type="text" name="theme_options[facebook]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

						<tr valign="top">
							<th scope="row">
                                <?php esc_html_e( 'Pinterest', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'pinterest' ); ?>
								<input type="text" name="theme_options[pinterest]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

					</table>



					<?php submit_button(); ?>

				</form>

			</div>
		<?php }

	}
}
new Custom_Theme_Settings();

function get_custom_theme_option( $id = '' ) {
	return Custom_Theme_Settings::get_theme_option( $id );
}