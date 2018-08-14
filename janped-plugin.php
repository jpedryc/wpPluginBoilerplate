<?php

/**
 * @package JanpedPlugin
 */
/*
Plugin Name: Janped Plugin
Plugin URI: http://jan-pedryc.com
Description: This is my first attempt on writing a custom plugin.
Version: 1.0.0
Author: Jan Pedryc
Author URI: http://jan-pedryc.com
License: GPLv2 or later
Text Domain: janped-plugin
 */

defined('ABSPATH') or die;
function_exists('add_action') or die;

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_FILE', __FILE__);
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_NAME', plugin_basename(__FILE__));

if (class_exists('Inc\\Init')) {
    Inc\Init::registerHooks();
    Inc\Init::registerServices();
}
