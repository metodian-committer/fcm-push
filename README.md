## FCMPush

# Installation

Run this command from the root of your project folder. This will download the package.

```php
composer require "asab/fcm-push"
```


After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
Sab94\FCMPush\FCMPushServiceProvider::class
```

You can use the facade for shorter code; if using Laravel 5.4 or lower, add this to your aliases:

```php
'FCMPush' => Sab94\FCMPush\FCMPushFacade::class
```

To publish the config settings in Laravel 5 use:

```php
php artisan vendor:publish
```

This will add an `push.php` config file to your config folder.

# Usage
This package offers a an `push.php` config file to your config folder.

You can add your FCM Authorization Key there. You can find your AuthKet at your Firebase Dashboard

To use it in your code simply import 
```php
use Sab94\FCMPush\FCMPush;
```
and to sent sms call this function
```php
FCMPush::sendPush($tokens,'My first Push Notification');
```
P.S. `$tokens` must be an array of fcm tokens

For more configurations please refer to the `push.php` file

# Support

Support only through Github. Please don't mail about issues, make a Github issue instead.

# License

This package is licensed under MIT. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!
