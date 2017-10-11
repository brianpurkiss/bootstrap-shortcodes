<?php /*
  Plugin Name: Brian's Bootstrap Shortcodes
  Description: DO NOT DEACTIVATE. Add shortcodes for Bootstrap 4.
  Author: Brian Purkiss
  Author URI: http://brianpurkiss.com
  Version: 0.1.0
*/


require_once bss_get_plugin_directory('functions/card.php');


/**
 * Return file path relative to plugin base directory
 *
 * Note: This functions appears in this file to ensure that the plugin path is relative to the plugins base directory.
 *
 * @since 0.0.1
 *
 * @param string $path Optional. Concatenates path to the end of the base directory.
 * @return string Base path of the plugin
 */

function bss_get_plugin_directory($path='') {
  return plugin_dir_path( __FILE__ ) . $path;
}
