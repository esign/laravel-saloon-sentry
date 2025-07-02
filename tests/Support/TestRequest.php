<?php

namespace Esign\SaloonSentry\Tests\Support;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class TestRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return 'https://example.com';
    }
}
