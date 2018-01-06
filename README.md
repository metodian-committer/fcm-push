## Msg91Helper

# Installation

Require this package in your `composer.json` and update composer. This will download the package and PHPExcel of PHPOffice.

```php
composer require "asab/msg91-helper:~1.1"
```


After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
Sab94\Msg91Helper\Msg91HelperServiceProvider::class
```

You can use the facade for shorter code; if using Laravel 5.4 or lower, add this to your aliases:

```php
'Msg91' => Sab94\Msg91Helper\Msg91HelperFacade::class,
```

To publish the config settings in Laravel 5 use:

```php
php artisan vendor:publish
```

This will add an `msg91.php` config file to your config folder.

# Usage
This package offers a an `msg91.php` config file to your config folder.

You can add your Msg91 AuthKey there. You can find your AuthKet at your Msg91 Dashboard

To use it in your code simply import 
```php
use Sab94\Msg91Helper\Msg91Helper;
```
and to sent sms call this function
```php
Msg91Helper::sendSMS('My first sms','YOUR_PHONE_NUMBER');
```
For more configurations please refer to the `msg91.php` file

# Support

Support only through Github. Please don't mail us about issues, make a Github issue instead.

# License

This package is licensed under MIT. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!
