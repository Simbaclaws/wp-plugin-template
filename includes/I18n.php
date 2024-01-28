<?php
/** The namespace of the plugin */
namespace CompanyName\ClientName\PluginName;

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://inner-join.nl
 * @since      1.0.0
 *
 * @package    CompanyName/ClientName
 * @subpackage PluginName/I18n
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    CompanyName/ClientName
 * @subpackage PluginName/I18n
 * @author     Author Name <author-name@company-name.com>
 */
class I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		\load_plugin_textdomain(
			'content',
			false,
			dirname( dirname( \plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
