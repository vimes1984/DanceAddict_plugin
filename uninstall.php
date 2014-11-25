<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   danceaddict
 * @author    Accrue <churchill.c.j@gmail.com>
 * @license   GPL-2.0+
 * @link      http://buildawebdoctor.com
 * @copyright 11-25-2014 BAWD
 */

// If uninstall, not called from WordPress, then exit
if (!defined("WP_UNINSTALL_PLUGIN")) {
	exit;
}

// TODO: Define uninstall functionality here