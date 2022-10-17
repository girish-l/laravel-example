<?php

namespace Girishl\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Girishl\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Girishl\LaravelExample\LaravelExample::class;
    }
}
