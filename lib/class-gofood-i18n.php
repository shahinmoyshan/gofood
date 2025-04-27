<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link  https://moyshan.netlify.app
 * @since 1.0.0
 *
 * @package    GoFood
 * @subpackage GoFood/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    GoFood
 * @subpackage GoFood/includes
 * @author     Shahin Moyshan <shahin.moyshan2@gmail.com>
 */
class GoFood_I18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 1.0.0
	 */
	public function load_theme_textdomain() {
		load_theme_textdomain( 'gofood', get_template_directory() . '/languages' );
	}
}
