<?php

namespace Esign\SaloonSentry\Tests;

use Esign\SaloonSentry\SaloonSentryServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [SaloonSentryServiceProvider::class];
    }
}
