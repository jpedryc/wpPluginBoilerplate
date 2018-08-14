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

if (class_exists('Inc\\Init')) {
    Inc\Init::registerHooks(__FILE__);
    Inc\Init::registerServices();
}
