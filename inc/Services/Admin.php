<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services;

class Admin implements ServiceInterface
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
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
}