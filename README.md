# Sentry tracing for Saloon HTTP requests

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-saloon-sentry.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-saloon-sentry)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-saloon-sentry.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-saloon-sentry)
![GitHub Actions](https://github.com/esign/laravel-saloon-sentry/actions/workflows/main.yml/badge.svg)

Out of the box Saloon HTTP requests are not traced by Sentry.
This package provides a middleware that automatically traces Saloon HTTP requests using Sentry's Guzzle tracing middleware.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-saloon-sentry
```

The package will automatically register a service provider.

## Usage
That's it! The package will automatically trace Saloon HTTP requests using Sentry.

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
