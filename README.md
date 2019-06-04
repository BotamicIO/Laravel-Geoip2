# Laravel GeoIp2

[![Build Status](https://img.shields.io/travis/artisanry/GeoIp2/master.svg?style=flat-square)](https://travis-ci.org/artisanry/GeoIp2)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/geoip2.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/GeoIp2.svg?style=flat-square)](https://github.com/artisanry/GeoIp2/releases)
[![License](https://img.shields.io/packagist/l/artisanry/GeoIp2.svg?style=flat-square)](https://packagist.org/packages/artisanry/GeoIp2)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/geoip2
```

At last, to publish the configuration you need to run:

```bash
php artisan vendor:publish --provider="Artisanry\GeoIp2\GeoIp2ServiceProvider"
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
