<?php

declare(strict_types=1);

namespace Webmonks\Support\Routing\Concerns;

/**
 * Trait     RegistersRouteClasses
 *
 * @author   Webmonks <webmonks.in@gmail.com>
 */
trait RegistersRouteClasses
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Map route classes.
     *
     * @param  iterable  $routes
     */
    protected static function mapRouteClasses(iterable $routes): void
    {
        foreach ($routes as $route) {
            if (method_exists($route, 'map')) {
                app()->call("{$route}@map");
            }
        }
    }

    /**
     * Bind route classes.
     *
     * @param  iterable  $routes
     */
    protected static function bindRouteClasses(iterable $routes): void
    {
        foreach ($routes as $route) {
            if (method_exists($route, 'bindings')) {
                app()->call("{$route}@bindings");
            }
        }
    }
}
