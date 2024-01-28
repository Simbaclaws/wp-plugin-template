<?php
/** The namespace of the plugin */
namespace CompanyName\ClientName\PluginName;

/**
 * Register all block categories for the plugin
 *
 * @link       https://company-name.com
 * @since      1.0.0
 *
 * @package    PluginName
 * @subpackage PluginName/BlockCategories
 */

/**
 * Register all block categories for the plugin.
 *
 * Maintain a list of all block categories that should exist within
 * the plugin, and register them with WordPress.
 *
 * @package    PluginName
 * @subpackage PluginName/BlockCategories
 * @author     Author Name <author-name@company-name.com>
 */

class BlockCategories {
    public function create_categories($categories) {
        $category_slugs = array_column( $categories, 'slug' );

        // Check if the 'banners' category exists
        if ( ! in_array( 'client-name-plugin-name', $category_slugs ) ) {

            // Register a new category for this plugin, with media-document as dashicon for the category
            $new_category = array(
                'slug'  => 'client-name-plugin-name',
                'title' => __( 'Plugin Name', 'client-name-plugin-name' ),
                'icon'  => 'media-document',
            );

            array_unshift($categories, $new_category);
        }

        return $categories;
    }
}
