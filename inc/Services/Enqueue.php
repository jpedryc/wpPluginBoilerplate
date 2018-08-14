<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services;

class Enqueue implements ServiceInterface
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, 'enqueueBasic' ]);
    }

    public function enqueueBasic()
    {
        wp_enqueue_style('janpedStyle', PLUGIN_URL . 'assets/style.css');
        wp_enqueue_script('janpedScript', PLUGIN_URL . 'assets/script.js');
    }
}