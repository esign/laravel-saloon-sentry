<?php

namespace Esign\SaloonSentry\Tests;

use Esign\SaloonSentry\SaloonSentryServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Saloon\Config;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [SaloonSentryServiceProvider::class];
    }

    protected function tearDown(): void
    {
        Config::clearGlobalMiddleware();

        parent::tearDown();
    }
} 