<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link  https://moyshan.netlify.app
 * @since 1.0.0
 *
 * @package    GoFood
 * @subpackage GoFood/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    GoFood
 * @subpackage GoFood/public
 * @author     Shahin Moyshan <shahin.moyshan2@gmail.com>
 */
class GoFood_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $plugin_name    The ID of this plugin.
	 */
	private $theme_name;

	/**
	 * The version of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param string $theme_name The name of the plugin.
	 * @param string $version     The version of this plugin.
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
		wp_enqueue_style( $this->theme_name, get_template_directory_uri() . '/public/css/gofood-public.css', array(), $this->version, 'all' );
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
		wp_enqueue_script( $this->theme_name, get_template_directory_uri() . '/public/js/gofood-public.js', array( 'jquery' ), $this->version, false );
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

	/**
	 * Register the custom post type for products.
	 *
	 * This function sets up the custom post type 'product' with various
	 * labels and arguments for use in the WordPress admin and front-end.
	 * It defines how products are displayed and managed, including support
	 * for features like title, editor, thumbnail, comments, and custom fields.
	 * The function also associates the post type with the 'product_category'
	 * taxonomy and determines its visibility and behavior in the WordPress
	 * interface and REST API.
	 *
	 * @since 1.0.0
	 */
	public function create_products_post_type() {
		$labels = array(
			'name'           => __( 'Products', 'gofood' ),
			'singular_name'  => __( 'Product', 'gofood' ),
			'menu_name'      => __( 'Food Products', 'gofood' ),
			'name_admin_bar' => __( 'Product', 'gofood' ),
			'all_items'      => __( 'All Products', 'gofood' ),
			'add_new_item'   => __( 'Add New Product', 'gofood' ),
			'add_new'        => __( 'Add New', 'gofood' ),
			'new_item'       => __( 'New Product', 'gofood' ),
			'edit_item'      => __( 'Edit Product', 'gofood' ),
		);

		$args = array(
			'labels'        => $labels,
			'public'        => true,
			'show_ui'       => true,
			'show_in_menu'  => true,
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-carrot',
			'supports'      => array( 'title', 'thumbnail' ),
			'rewrite'       => array( 'slug' => 'product' ),
			'show_in_rest'  => true,
		);

		register_post_type( 'product', $args );
	}

	/**
	 * Registers the custom taxonomy for product categories.
	 *
	 * This function creates a hierarchical taxonomy for organizing
	 * products into categories. It defines the labels, arguments, and
	 * behavior for the taxonomy in the WordPress admin and front-end.
	 *
	 * @since 1.0.0
	 */
	public function create_products_category_taxonomy() {

		$labels = array(
			'name'              => _x( 'Product Categories', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Product Category', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Product Categories', 'textdomain' ),
			'all_items'         => __( 'All Product Categories', 'textdomain' ),
			'parent_item'       => __( 'Parent Product Category', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Product Category:', 'textdomain' ),
			'edit_item'         => __( 'Edit Product Category', 'textdomain' ),
			'update_item'       => __( 'Update Product Category', 'textdomain' ),
			'add_new_item'      => __( 'Add New Product Category', 'textdomain' ),
			'new_item_name'     => __( 'New Product Category Name', 'textdomain' ),
			'menu_name'         => __( 'Product Categories', 'textdomain' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'product-category' ),
			'show_in_rest'      => true,
		);
		register_taxonomy( 'product_category', array( 'product' ), $args );
	}

	/**
	 * Adds a meta box to the product post type for product details.
	 *
	 * The meta box is titled "Product Details" and is displayed on the
	 * product post type edit screen. It is used to store additional
	 * product details such as price, weight, and nutritional information.
	 *
	 * @since 1.0.0
	 */
	public function add_product_meta_box() {
		add_meta_box(
			'product_details_meta_box',
			__( 'Product Details', 'textdomain' ),
			fn( $post ) => $this->custom_product_details_metabox( $post ),
			'product'
		);
	}

	/**
	 * Outputs the HTML for the custom product details meta box.
	 *
	 * This function is a callback for the add_meta_box() function and is used to
	 * render the custom meta box for the product post type. It provides fields for
	 * price, discounted price, and stock quantity.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Post $post The current post object.
	 */
	public function custom_product_details_metabox( $post ) {
		// Add nonce for security.
		wp_nonce_field( 'custom_product_details_nonce_action', 'custom_product_details_nonce' );

		// Retrieve existing values from the database.
		$price    = get_post_meta( $post->ID, '_product_price', true );
		$discount = get_post_meta( $post->ID, '_product_discount_price', true );
		$stock    = get_post_meta( $post->ID, '_product_stock_quantity', true );

		// Ensure values are set (fallback to empty).
		$price    = $price ? $price : '';
		$discount = $discount ? $discount : '';
		$stock    = $stock ? $stock : '';

		echo '<p><label for="product_price">' . __( 'Price:', 'textdomain' ) . '</label> ';
		echo '<input type="text" id="product_price" name="product_price" value="' . esc_attr( $price ) . '" size="25" /></p>';

		echo '<p><label for="product_discount_price">' . __( 'Discounted Price:', 'textdomain' ) . '</label> ';
		echo '<input type="text" id="product_discount_price" name="product_discount_price" value="' . esc_attr( $discount ) . '" size="25" /></p>';

		echo '<p><label for="product_stock_quantity">' . __( 'Stock Quantity:', 'textdomain' ) . '</label> ';
		echo '<input type="number" id="product_stock_quantity" name="product_stock_quantity" value="' . esc_attr( $stock ) . '" min="0" step="1" /></p>';
	}
}
