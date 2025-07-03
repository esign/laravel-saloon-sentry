<?php

namespace Esign\SaloonSentry;

use Illuminate\Support\ServiceProvider;
use Saloon\Config;

class SaloonSentryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (! SaloonSentry::$registeredMiddleware) {
            Config::globalMiddleware()->onRequest(new SentryTracingMiddleware, 'sentryTracing');
            SaloonSentry::$registeredMiddleware = true;
        }
    }
}
