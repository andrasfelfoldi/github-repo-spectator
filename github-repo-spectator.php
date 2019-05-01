<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://andrasfelfoldi.github.io/
 * @since             1.0.0
 * @package           Github_Repo_Spectator
 *
 * @wordpress-plugin
 * Plugin Name:       Github Repo Spectator
 * Plugin URI:        https://github.com/andrasfelfoldi/github-repo-spectator
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Felföldi András
 * Author URI:        https://andrasfelfoldi.github.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       github-repo-spectator
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
define( 'GITHUB_REPO_SPECTATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-github-repo-spectator-activator.php
 */
function activate_github_repo_spectator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-github-repo-spectator-activator.php';
	Github_Repo_Spectator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-github-repo-spectator-deactivator.php
 */
function deactivate_github_repo_spectator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-github-repo-spectator-deactivator.php';
	Github_Repo_Spectator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_github_repo_spectator' );
register_deactivation_hook( __FILE__, 'deactivate_github_repo_spectator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-github-repo-spectator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_github_repo_spectator() {

	$plugin = new Github_Repo_Spectator();
	$plugin->run();

}
run_github_repo_spectator();
