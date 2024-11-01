<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.waypanel.com
 * @since      1.0.0
 *
 * @package    Waypanel_Heatmap
 * @subpackage Waypanel_Heatmap/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Waypanel_Heatmap
 * @subpackage Waypanel_Heatmap/includes
 * @author     Waypanel.com <contact@waypanel.com>
 */
class Waypanel_Heatmap_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'waypanel-heatmap',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
