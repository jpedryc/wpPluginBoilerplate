<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services;

class Links implements ServiceInterface
{
    public function register()
    {
        add_filter('plugin_action_links_' . PLUGIN_NAME, [ $this, 'settingsLink' ]);
    }

    public function settingsLink($links) {
        $settingsLink = '<a href="admin.php?page=janped_plugin">Settings</a>';
        array_push($links, $settingsLink);
        return $links;
    }
}