<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services;

use Inc\Base\PluginController;

class Links extends PluginController implements ServiceInterface
{
    public function register()
    {
        add_filter('plugin_action_links_' . $this->pluginName, [ $this, 'settingsLink' ]);
    }

    public function settingsLink($links) {
        $settingsLink = '<a href="admin.php?page=janped_plugin">Settings</a>';
        array_push($links, $settingsLink);
        return $links;
    }
}