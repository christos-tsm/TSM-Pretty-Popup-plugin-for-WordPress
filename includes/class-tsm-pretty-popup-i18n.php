<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://christostsm.com
 * @since      1.0.0
 *
 * @package    Tsm_Pretty_Popup
 * @subpackage Tsm_Pretty_Popup/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Tsm_Pretty_Popup
 * @subpackage Tsm_Pretty_Popup/includes
 * @author     Christos TSM <hello@christostsm.com>
 */
class Tsm_Pretty_Popup_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tsm-pretty-popup',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
