<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://andrasfelfoldi.github.io/
 * @since      1.0.0
 *
 * @package    Github_Repo_Spectator
 * @subpackage Github_Repo_Spectator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Github_Repo_Spectator
 * @subpackage Github_Repo_Spectator/includes
 * @author     Felföldi András <andras.felfoldi@gmail.com>
 */
class Github_Repo_Spectator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'github-repo-spectator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
