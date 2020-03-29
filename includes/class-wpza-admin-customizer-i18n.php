<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpza.co.za
 * @since      1.0.0
 *
 * @package    Wpza_Admin_Customizer
 * @subpackage Wpza_Admin_Customizer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpza_Admin_Customizer
 * @subpackage Wpza_Admin_Customizer/includes
 * @author     Donovan Maidens <info@wpza.co.za>
 */
class Wpza_Admin_Customizer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpza-admin-customizer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
