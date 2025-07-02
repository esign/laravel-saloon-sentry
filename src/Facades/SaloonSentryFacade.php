<?php

namespace Esign\SaloonSentry\Facades;

use Illuminate\Support\Facades\Facade;

class SaloonSentryFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'saloon-sentry';
    }
}
