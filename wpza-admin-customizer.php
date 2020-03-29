<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpza.co.za
 * @since             1.0.0
 * @package           Wpza_Admin_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Admin Customizer
 * Plugin URI:        https://github.com/djm56/wpza-admin-customizer
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Donovan Maidens
 * Author URI:        https://wpza.co.za
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpza-admin-customizer
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
define( 'WPZA_ADMIN_CUSTOMIZER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpza-admin-customizer-activator.php
 */
function activate_wpza_admin_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpza-admin-customizer-activator.php';
	Wpza_Admin_Customizer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpza-admin-customizer-deactivator.php
 */
function deactivate_wpza_admin_customizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpza-admin-customizer-deactivator.php';
	Wpza_Admin_Customizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpza_admin_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_wpza_admin_customizer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpza-admin-customizer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpza_admin_customizer() {

	$plugin = new Wpza_Admin_Customizer();
	$plugin->run();

}
run_wpza_admin_customizer();
