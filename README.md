# Laravel GeoIP2

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-geoip2
```

And then include the service provider within `config/app.php`.

``` php
'providers' => [
    BrianFaust\GeoIP\GeoIPServiceProvider::class
];
```

And, for convenience, add facades aliases to this same file at the bottom:
``` php
'aliases' => [
    'GeoIP' => BrianFaust\GeoIP\Facades\GeoIP::class,
];
```

At last, to publish the configuration you need to run:

```bash
php artisan vendor:publish --provider="BrianFaust\GeoIP\GeoIPServiceProvider"
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
