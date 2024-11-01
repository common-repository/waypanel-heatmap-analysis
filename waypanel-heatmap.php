<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.waypanel.com
 * @since             1.0.0
 * @package           Waypanel_Heatmap
 *
 * @wordpress-plugin
 * Plugin Name:       WayPanel - Heatmap Analysis
 * Plugin URI:        https://www.waypanel.com
 * Description:       Heatmaps, Recordings, funnels and everything you will ever need to track your website and increase sales!
 * Version:           1.0.0
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       waypanel-heatmap
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
define( 'WAYPANEL_PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-waypanel-heatmap-activator.php
 */
function activate_waypanel_heatmap() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-waypanel-heatmap-activator.php';
	Waypanel_Heatmap_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-waypanel-heatmap-deactivator.php
 */
function deactivate_waypanel_heatmap() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-waypanel-heatmap-deactivator.php';
	Waypanel_Heatmap_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_waypanel_heatmap' );
register_deactivation_hook( __FILE__, 'deactivate_waypanel_heatmap' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-waypanel-heatmap.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_waypanel_heatmap() {

	$plugin = new Waypanel_Heatmap();
	$plugin->run();

}
run_waypanel_heatmap();
