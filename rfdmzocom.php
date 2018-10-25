<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.rfdmsolutions.com
 * @since             1.0.0
 * @package           Rfdmzocom
 *
 * @wordpress-plugin
 * Plugin Name:       RFDM-ZoCom
 * Plugin URI:        www.rfdmsolutions.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Cathleen Melendez
 * Author URI:        www.rfdmsolutions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rfdmzocom
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rfdmzocom-activator.php
 */
function activate_rfdmzocom() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rfdmzocom-activator.php';
	Rfdmzocom_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rfdmzocom-deactivator.php
 */
function deactivate_rfdmzocom() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rfdmzocom-deactivator.php';
	Rfdmzocom_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rfdmzocom' );
register_deactivation_hook( __FILE__, 'deactivate_rfdmzocom' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rfdmzocom.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rfdmzocom() {

	$plugin = new Rfdmzocom();
	$plugin->run();

}
run_rfdmzocom();
