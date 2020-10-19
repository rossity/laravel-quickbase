<?php

namespace Rossity\LaravelQuickbase\Facades;

use Illuminate\Support\Facades\Facade;

class Quickbase extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'quickbase';
    }
}
