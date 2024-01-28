<?php
/** The namespace of the plugin */
namespace CompanyName\ClientName\PluginName;

/**
 * Register all blocks for the plugin
 *
 * @link       https://company-name.com
 * @since      1.0.0
 *
 * @package    PluginName
 * @subpackage PluginName/Blocks
 */

/**
 * Register all blocks for the plugin.
 *
 * Maintain a list of all blocks that exist within the build folder of
 * the plugin, and register them with WordPress.
 *
 * @package    PluginName
 * @subpackage PluginName/Blocks
 * @author     Author Name <author-name@company-name.com>
 */

class Blocks {

    /**
     * Register all the blocks within the build folder.
     *
     * For each block, give it the name of the directory as well as which dependencies it needs.
     *
     * @return void
     */
    public function register_blocks() {
        $this->register_block('example-block-one', array( 'wp-blocks', 'wp-block-editor', 'wp-components', 'wp-data', 'wp-element', 'wp-i18n' ) );
    }

    /**
     *
     * Register a single block, give it the name of the directory and the dependencies it needs in an array.
     *
     * @param $name
     * @param $dependencies
     * @return void
     */
    public function register_block($name, $dependencies) {
        $handle = "plugin-name-$name";
        $domain = "client-name";

        \wp_register_script(
            $handle,
            \plugins_url("/plugin-name/build/$name/index.js"),
            $dependencies,
            filemtime( \WP_PLUGIN_DIR . "/plugin-name/build/$name/index.js" ),
            true
        );

        $block = $domain . '/' . $name;

        \register_block_type(
            \WP_PLUGIN_DIR . '/plugin-name/build/' . $name,
            array(
            'editor_script' => $handle
            )
        );

        \wp_set_script_translations( $handle, $domain, \plugin_dir_path( __FILE__ ) . '/languages/' );
    }
}
