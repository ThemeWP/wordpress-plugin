<?php

use WordpressPlugin\Core\Activator;
use WordpressPlugin\Core\Deactivator;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/faizalmy/wordpress-plugin
 * @since             1.0.0
 * @package           WordpressPlugin
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress Plugin
 * Plugin URI:        https://github.com/faizalmy/wordpress-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Faizal
 * Author URI:        https://github.com/faizalmy/wordpress-plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress_plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Heart of the system
 */
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function activate_wordpress_plugin() {
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function deactivate_wordpress_plugin() {
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress_plugin' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run() {

	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	$plugin = new Application;
	$plugin->run();

}

run();
