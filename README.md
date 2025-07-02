# Adds Sentry tracing support to HTTP requests made with Saloon.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-saloon-sentry.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-saloon-sentry)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-saloon-sentry.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-saloon-sentry)
![GitHub Actions](https://github.com/esign/laravel-saloon-sentry/actions/workflows/main.yml/badge.svg)

A short intro about the package.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-saloon-sentry
```

The package will automatically register a service provider.

Next up, you can publish the configuration file:
```bash
php artisan vendor:publish --provider="Esign\SaloonSentry\SaloonSentryServiceProvider" --tag="config"
```

## Usage

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
