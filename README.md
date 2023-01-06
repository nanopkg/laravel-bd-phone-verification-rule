# laravel-bd-phone-verification-rule package.

laravel-bd-phone-verification-rule package is used to validate all mobile phone numbers in Bangladesh.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nanopkg/laravel-bd-phone-verification-rule.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-bd-phone-verification-rule)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nanopkg/laravel-bd-phone-verification-rule/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nanopkg/laravel-bd-phone-verification-rule/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nanopkg/laravel-bd-phone-verification-rule/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nanopkg/laravel-bd-phone-verification-rule/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nanopkg/laravel-bd-phone-verification-rule.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-bd-phone-verification-rule)

## Installation

You can install the package via composer:

```bash
composer require nanopkg/laravel-bd-phone-verification-rule
```

## Usage

```php
$request->validate([
    'phone' => 'required|numeric|bdPhone'
]);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [IQBAL HASAN](https://github.com/iqbalhasandev)
-   [RABIUL HASSAN](https://github.com/rabiulhassandev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
