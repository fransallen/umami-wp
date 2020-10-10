<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://twitter.com/fransallen
 * @since             1.0.0
 * @package           Umami
 *
 * @wordpress-plugin
 * Plugin Name:       Umami Analytics
 * Plugin URI:        https://github.com/fransallen/umami-wp
 * Description:       Easily add Umami Analytics to your WordPress.
 * Version:           1.0.0
 * Author:            Frans Allen
 * Author URI:        https://twitter.com/fransallen
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       umami
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'UMAMI_VERSION', '1.0.0' );
define( 'UMAMI_DIR', dirname( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-umami-activator.php
 */
function activate_umami() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-umami-activator.php';
	Umami_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-umami-deactivator.php
 */
function deactivate_umami() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-umami-deactivator.php';
	Umami_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_umami' );
register_deactivation_hook( __FILE__, 'deactivate_umami' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-umami.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_umami() {

	$plugin = new Umami();
	$plugin->run();

}
run_umami();
