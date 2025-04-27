<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link  https://moyshan.netlify.app
 * @since 1.0.0
 *
 * @package    GoFood
 * @subpackage GoFood/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    GoFood
 * @subpackage GoFood/admin
 * @author     Shahin Moyshan <shahin.moyshan2@gmail.com>
 */
class GoFood_Admin {

	/**
	 * The ID of this theme.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $theme_name    The ID of this theme.
	 */
	private $theme_name;

	/**
	 * The version of this theme.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $version    The current version of this theme.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param string $theme_name The name of this theme.
	 * @param string $version     The version of this theme.
	 */
	public function __construct( $theme_name, $version ) {

		$this->theme_name = $theme_name;
		$this->version    = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in GoFood_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The GoFood_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->theme_name, get_template_directory_uri() . '/admin/css/gofood-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in GoFood_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The GoFood_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->theme_name, get_template_directory_uri() . '/admin/js/gofood-admin.js', array( 'jquery' ), $this->version, false );
	}
}
