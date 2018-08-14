<?php

/**
 * @package JanpedPlugin
 */

namespace Inc;

final class Init
{
    public static function getServices()
    {
        return [
            Services\Admin::class,
            Services\Enqueue::class,
            Services\Links::class
        ];
    }

    public static function registerHooks($pluginFile)
    {
        register_activation_hook($pluginFile, [ 'Inc\\Base\\Activate', 'activate' ]);
        register_deactivation_hook($pluginFile, [ 'Inc\\Base\\Deactivate', 'deactivate' ]);
    }

    public static function registerServices()
    {
        foreach (self::getServices() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    private static function instantiate($className)
    {
        return new $className();
    }
}