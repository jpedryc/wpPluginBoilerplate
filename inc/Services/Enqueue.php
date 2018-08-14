<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services;

use Inc\Base\PluginController;

class Enqueue extends PluginController implements ServiceInterface
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, 'enqueueBasic' ]);
    }

    public function enqueueBasic()
    {
        wp_enqueue_style('janpedStyle', $this->pluginUrl . 'assets/style.css');
        wp_enqueue_script('janpedScript', $this->pluginUrl . 'assets/script.js');
    }
}