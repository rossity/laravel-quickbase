# Laravel Quickbase
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

A wrapper around [rossity/php-quickbase](https://github.com/rossity/php-quickbase) that makes it easy to consume the Quick Base REST API in your Laravel application.

Intended for use with Laravel 8+

## Installation

Via Composer

``` bash
$ composer require rossity/laravel-quickbase
```

The Service Provider and Facade will automatically be registered.

## Usage
In your `.env` file, define the following:
```
QUICKBASE_DEFAULT_REALM={your quickbase realm i.e. 'demo' in 'demo.quickbase.com'}
QUICKBASE_DEFAULT_USER_TOKEN={your user token that you assign inside QuickBase}
```

You are now able to do things such as:
```php
// Get QuickBase table info
Quickbase::tables()->getTable('q1w2e3r4', 'w2e3r4t5');

// Insert or update a QuickBase record
Quickbase::records()->upsert([
    'to' => 'q1w2e3r4',
    'data' => [
        [
            '10' => [
                'value' => 'A string',
            ],
        ],
    ],
]);
```

You have access to the following:
```php
Quickbase::apps();
Quickbase::fields();
Quickbase::files();
Quickbase::records();
Quickbase::reports();
Quickbase::tables();
```

For more information on the API and methods available, see the documentation for [rossity/php-quickbase](https://github.com/rossity/php-quickbase) and the [Quick Base REST API](https://developer.quickbase.com/) developer docs.

## Security

If you discover any security related issues, please email w.ross.ball@gmail.com instead of using the issue tracker.

## Credits

- [Ross Ball][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/rossity/laravel-quickbase.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/rossity/laravel-quickbase.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/rossity/laravel-quickbase
[link-downloads]: https://packagist.org/packages/rossity/laravel-quickbase
[link-travis]: https://travis-ci.org/rossity/laravel-quickbase
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/rossity
[link-contributors]: ../../contributors
