<?php

/**
 * @package JanpedPlugin
 */

namespace Inc\Services\Base;

class Activate
{
    public static function activate() {
        flush_rewrite_rules();
    }
}