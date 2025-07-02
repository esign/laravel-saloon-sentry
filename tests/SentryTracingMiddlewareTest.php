<?php

namespace Esign\SaloonSentry\Tests;

use Esign\SaloonSentry\Tests\Support\TestRequest;
use PHPUnit\Framework\Attributes\Test;
use Saloon\Http\Connectors\NullConnector;

final class SentryTracingMiddlewareTest extends TestCase
{
    #[Test]
    public function it_adds_sentry_tracing_middleware_by_default(): void
    {
        // Arrange
        $connector = new NullConnector;
        $request = new TestRequest;

        // Act
        $pendingRequest = $connector->createPendingRequest($request);

        // Assert
        $requestPipes = collect($pendingRequest->middleware()->getRequestPipeline()->getPipes());
        $this->assertTrue(
            $requestPipes->contains(fn ($pipe) => $pipe->name === 'sentryTracing')
        );
    }
}
