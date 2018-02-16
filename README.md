# Laravel GeoIp2

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-GeoIp2/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-GeoIp2)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-geoip2.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-GeoIp2.svg?style=flat-square)](https://github.com/faustbrian/Laravel-GeoIp2/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-GeoIp2.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-GeoIp2)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-geoip2
```

At last, to publish the configuration you need to run:

```bash
php artisan vendor:publish --provider="BrianFaust\GeoIp2\GeoIp2ServiceProvider"
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
