<?php

namespace Esign\SaloonSentry;

use Illuminate\Support\ServiceProvider;
use Saloon\Config;

class SaloonSentryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('saloon-sentry.php')], 'config');
        }

        Config::globalMiddleware()->onRequest(new SentryTracingMiddleware, 'sentryTracing');
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'saloon-sentry');

        $this->app->singleton('saloon-sentry', function () {
            return new SaloonSentry;
        });
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/saloon-sentry.php';
    }
}
