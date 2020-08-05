<?php

namespace Fabriziomachado\Demo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fabriziomachado\Demo\Skeleton\SkeletonClass
 */
class DemoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'demo';
    }
}
