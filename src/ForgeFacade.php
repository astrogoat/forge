<?php

namespace Astrogoat\Forge;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Forge\Forge
 */
class ForgeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'forge';
    }
}
