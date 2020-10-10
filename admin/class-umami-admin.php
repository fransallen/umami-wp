<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://twitter.com/fransallen
 * @since      1.0.0
 *
 * @package    Umami
 * @subpackage Umami/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Umami
 * @subpackage Umami/admin
 * @author     Frans Allen
 */
class Umami_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Umami_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Umami_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/umami-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Umami_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Umami_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/umami-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the display for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function add_settings_page() {
        $page = add_options_page(
            'Umami Analytics',
            'Umami Analytics',
            'manage_options',
            'umami',
            [
                __CLASS__,
                'settings_page',
            ]
        );
	}
	
	/**
     * Display the admin page
     *
     * @since    0.0.1
     */
    public function settings_page() {
        $options = Umami::get_options();

        include UMAMI_DIR . '/admin/partials/umami-admin-display.php';
	}
	
	/**
     * Register settings
     *
     * @since     1.0.0
     */
    public function register_settings() {
        register_setting(
            'umami',
            'umami',
            [
                __CLASS__,
                'validate_settings',
            ]
        );
	}
	
	/**
     * Validation of settings
     *
     * @since     1.0.0
     *
     * @param array $data array with form data
     * @return array array with validated values
     */
    public function validate_settings( $data ) {
		return [
			'url' => esc_url( $data['url'] ),
			'id'  => esc_attr( $data['id'] ),
		];
	}

}
