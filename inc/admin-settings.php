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

				if ( ! empty( $options['your-setting-name'] ) ) {
					$options['your-setting-name'] = sanitize_text_field( $options['your-setting-name'] );
				} else {
					unset( $options['your-setting-name'] );
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
                                <?php esc_html_e( 'Your setting label', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'your-setting-name' ); ?>
								<input type="text" name="theme_options[your-setting-name]" value="<?php echo esc_attr( $value ); ?>">
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