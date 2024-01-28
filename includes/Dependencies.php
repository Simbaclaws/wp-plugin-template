<?php
/** The namespace of the plugin */
namespace CompanyName\ClientName\PluginName;

/**
 * Define the plugin dependencies that should be installed in WordPress
 *
 * Checks whether plugin dependencies exist, and if not, prompt the user to install them.
 * Uses the tgmpa composer package.
 *
 * @link       https://company-name.com
 * @since      1.0.0
 *
 * @package    PluginName
 * @subpackage PluginName/Dependencies
 */

/**
 * Define the plugin dependencies
 *
 * Checks whether plugin dependencies exist, and if not, prompt the user to install them.
 * Uses the tgmpa composer package.
 *
 * @since      1.0.0
 * @package    PluginName
 * @subpackage PluginName/Dependencies
 * @author     Author Name <author-name@company-name.com>
 */
class Dependencies {

    /**
     * Constructor for loading the action for tgmpa
     */
    public function __construct() {
        add_action( 'tgmpa_register' , [ $this, 'register_required_plugins' ] );
    }

    /**
     * Register the required plugins that need to be loaded in order to use this plugin.
     * @return void
     */
    public function register_required_plugins() {
        if ( ! class_exists( 'CompanyName\ClientName\DependentPluginName' ) ) {
            $plugins = [
                [
                    'name' => 'Dependent Plugin Name',
                    'slug' => 'dependent-plugin-slug',
                    'required' => true,
                ]
            ];
        }

        $config = [
            'id' => 'company-name-client-name-plugin-name',
            'menu' => 'company-name-client-name-plugin-name-install-plugins',
            'parent_slug' => 'plugins.php',
            'capability' => 'manage_options',
            'has_notices' => true,
            'dismissable' => false,
            'is_automatic' => true,
            'message' => 'These plugins are required for this plugin to work, please install them.'
        ];

        tgmpa( $plugins, $config );
    }

}