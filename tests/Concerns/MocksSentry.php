<?php

namespace Esign\SaloonSentry\Tests\Concerns;

use Mockery;
use Mockery\MockInterface;
use Sentry\SentrySdk;

trait MocksSentry
{
    protected function mockSentryHub(): MockInterface
    {
        $hub = SentrySdk::getCurrentHub();
        $mockedHub = Mockery::spy($hub);
        SentrySdk::setCurrentHub($mockedHub);

        return $mockedHub;
    }
}
