<?php

declare(strict_types=1);

namespace Webmonks\Support\Providers;

use Webmonks\Support\Routing\Concerns\RegistersRouteClasses;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as IlluminateServiceProvider;

/**
 * Class     RouteServiceProvider
 *
 * @author   Webmonks <webmonks.in@gmail.com>
 */
abstract class RouteServiceProvider extends IlluminateServiceProvider
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use RegistersRouteClasses;
}
