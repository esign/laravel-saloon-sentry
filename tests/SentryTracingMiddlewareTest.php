<?php

namespace Esign\SaloonSentry\Tests;

use Esign\SaloonSentry\Tests\Concerns\MocksSentry;
use Esign\SaloonSentry\Tests\Support\TestRequest;
use PHPUnit\Framework\Attributes\Test;
use Saloon\Http\Connectors\NullConnector;

final class SentryTracingMiddlewareTest extends TestCase
{
    use MocksSentry;

    #[Test]
    public function it_adds_sentry_tracing_middleware_by_default(): void
    {
        // Arrange
        $connector = new NullConnector;
        $request = new TestRequest;

        // Act
        $response = $connector->send($request);

        // Assert
        $pendingRequest = $response->getPendingRequest();
        $requestPipes = collect($pendingRequest->middleware()->getRequestPipeline()->getPipes());
        $this->assertTrue(
            $requestPipes->contains(fn ($pipe) => $pipe->name === 'sentryTracing')
        );
    }

    #[Test]
    public function it_can_add_sentry_breadcrumbs_when_a_request_is_sent(): void
    {
        // Arrange
        $sentryHub = $this->mockSentryHub();
        $connector = new NullConnector;
        $request = new TestRequest;

        // Act
        $connector->send($request);

        // Assert
        $sentryHub->shouldHaveReceived('addBreadcrumb')->once();
    }
}
