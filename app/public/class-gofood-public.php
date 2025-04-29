<?php
/**
 * The public-facing functionality of the theme.
 *
 * @link  https://moyshan.netlify.app
 * @since 1.0.0
 *
 * @package    GoFood
 * @subpackage GoFood/public
 */

/**
 * The public-facing functionality of the theme.
 *
 * Defines the theme name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    GoFood
 * @subpackage GoFood/public
 * @author     Shahin Moyshan <shahin.moyshan2@gmail.com>
 */
class GoFood_Public {

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
	 * @param string $theme_name The name of the theme.
	 * @param string $version     The version of this theme.
	 */
	public function __construct( $theme_name, $version ) {

		$this->theme_name = $theme_name;
		$this->version    = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/all.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->theme_name, get_template_directory_uri() . '/app/public/css/gofood.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.bundle.min.js', array(), $this->version, false );
		wp_enqueue_script( $this->theme_name, get_template_directory_uri() . '/app/public/js/gofood.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Add custom query vars to the public query variables.
	 *
	 * @since 1.0.0
	 * @param array $query_vars Existing query variables.
	 */
	public function add_query_vars( $query_vars ) {
		$query_vars[] = 'auth_active_tab';
		$query_vars[] = 'ma_active_tab';
		return $query_vars;
	}
}
