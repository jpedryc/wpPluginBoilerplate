<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Base;

class PluginController
{
    public $pluginFile;
    public $pluginPath;
    public $pluginUrl;
    public $pluginName;

    public function __construct()
    {
        $file = dirname(__FILE__, 2);
        $this->pluginFile = $file;
        $this->pluginPath = plugin_dir_path($file);
        $this->pluginUrl = plugin_dir_url($file);
        $this->pluginName = plugin_basename(dirname(__FILE__, 3)) . '/janped-plugin.php';
    }
}