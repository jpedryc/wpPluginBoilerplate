<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services\Base;

class Deactivate
{
    public static function deactivate() {
        flush_rewrite_rules();
    }
}