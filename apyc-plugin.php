<?php
/**
 * Plugin Name:     Apyc Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     apyc-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Apyc_Plugin
 */

// use ApycPlugin\Activator;
// use ApycPlugin\Deactivator;
use ApycPlugin\Test;

// Your code starts here.

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '0.1.0' );

/**
 * The code that runs during plugin activation.
 */
function apyc_activate_plugin_name() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-apyc-plugin-activator.php';
	ApycPlugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function apyc_deactivate_plugin_name() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-apyc-plugin-deactivator.php';
	ApycPlugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'apyc_activate_plugin_name' );
register_deactivation_hook( __FILE__, 'apyc_deactivate_plugin_name' );

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-apyc-plugin.php';

function apyc_run() 
{
	$plugin = new ApycPlugin();
	$plugin->run();

	$test = new Test();
}
add_action('plugins_loaded', 'apyc_run');