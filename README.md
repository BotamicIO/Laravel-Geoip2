# Laravel GeoIp22

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-geoip2
```

And then include the service provider within `config/app.php`.

``` php
BrianFaust\GeoIp2\GeoIp2ServiceProvider::class
```

And, for convenience, add facades aliases to this same file at the bottom:
``` php
'aliases' => [
    'GeoIp2' => BrianFaust\GeoIp2\Facades\GeoIp2::class
```

At last, to publish the configuration you need to run:

```bash
php artisan vendor:publish --provider="BrianFaust\GeoIp2\GeoIp2ServiceProvider"
```

## Usage

``` php
...
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
