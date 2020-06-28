<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       mednoor.blogspot.com
 * @since      1.0.0
 *
 * @package    Youcodeplugin
 * @subpackage Youcodeplugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Youcodeplugin
 * @subpackage Youcodeplugin/includes
 * @author     Mohamed Oubouhia <oubouhiam@gmail.com>
 */
class Youcodeplugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'youcodeplugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
