<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services;

use Inc\Base\PluginController;

class Admin extends PluginController implements ServiceInterface
{
    public function register() {
        add_action('admin_menu', [ $this, 'addAdminPages' ]);
    }

    public function addAdminPages() {
        add_menu_page(
            'Janped Plugin',
            'Janped',
            'manage_options',
            'janped_plugin',
            [
                $this,
                'adminIndex'
            ],
            'dashicons-store',
            110
        );
    }

    public function adminIndex() {
        require_once $this->pluginPath . 'templates/admin.php';
    }
}