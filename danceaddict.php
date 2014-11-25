<?php
/**
 * DanceAddict
 *
 * extends Dance Addicts site
 *
 * @package   danceaddict
 * @author    Accrue <churchill.c.j@gmail.com>
 * @license   GPL-2.0+
 * @link      http://buildawebdoctor.com
 * @copyright 11-25-2014 BAWD
 *
 * @wordpress-plugin
 * Plugin Name: DanceAddict
 * Plugin URI:  http://buildawebdoctor.com
 * Description: extends Dance Addicts site
 * Version:     1.0.0
 * Author:      Accrue
 * Author URI:  http://buildawebdoctor.com
 * Text Domain: danceaddict-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

require_once(plugin_dir_path(__FILE__) . "DanceAddict.php");

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook(__FILE__, array("DanceAddict", "activate"));
register_deactivation_hook(__FILE__, array("DanceAddict", "deactivate"));

DanceAddict::get_instance();