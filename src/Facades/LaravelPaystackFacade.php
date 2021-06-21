<?php

namespace PipeDev\LaravelPaystack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelPaystackFacade
 * @package pipeDev\laravelPaystack
 */
class LaravelPaystackFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel paystack';
    }
}