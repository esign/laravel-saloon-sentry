<?php

namespace Esign\SaloonSentry;

use Illuminate\Support\ServiceProvider;
use Saloon\Config;

class SaloonSentryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Config::globalMiddleware()->onRequest(new SentryTracingMiddleware, 'sentryTracing');
    }
}
