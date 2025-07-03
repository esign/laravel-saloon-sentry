<?php

namespace Esign\SaloonSentry;

use Saloon\Contracts\RequestMiddleware;
use Saloon\Http\PendingRequest;
use Saloon\Http\Senders\GuzzleSender;
use Sentry\Tracing\GuzzleTracingMiddleware;

class SentryTracingMiddleware implements RequestMiddleware
{
    public function __invoke(PendingRequest $pendingRequest): void
    {
        $sender = $pendingRequest->getConnector()->sender();

        if (! $sender instanceof GuzzleSender) {
            return;
        }

        $sender->addMiddleware(GuzzleTracingMiddleware::trace(), 'sentryTracing');
    }
}
