<?php

/**
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://company-name.com
 * @since             1.0.0
 * @package           Plugin Name
 *
 * @wordpress-plugin
 * Plugin Name:       Client Name - Plugin Name
 * Plugin URI:        https://company-name.com
 * Description:       A Plugin Name plugin for Client Name
 * Version:           1.0.0
 * Author:            Author Name
 * Author URI:        https://company-name.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       client-name-plugin-name
 * Domain Path:       /languages
 */

namespace CompanyName\ClientName\PluginName;

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Autoload classes
 */
if ( file_exists( __DIR__ ) . '/vendor/autoload.php' ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CONTENT_VERSION', '1.0.0' );

/**
 * Use the current namespace
 */
use CompanyName\ClientName\PluginName;

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/Loader
 */
function activate_content() {
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/Loader.php
 */
function deactivate_content() {
	Deactivator::deactivate();
}

\register_activation_hook( __FILE__, 'activate_content' );
\register_deactivation_hook( __FILE__, 'deactivate_content' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_content() {

	$plugin = new Plugin();
	$plugin->run();

}

run_content();
