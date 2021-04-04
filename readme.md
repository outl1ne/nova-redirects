# Nova Redirects

This [Laravel Nova](https://nova.laravel.com) package allows you to create and manage redirects.

## Installation

Install the package in a Laravel Nova project via Composer:

```
composer require optimistdigital/nova-redirects
```

Publish the database migration(s) and run migrate:

```
php artisan vendor:publish --provider="OptimistDigital\NovaRedirects\ToolServiceProvider" --tag="migrations"
php artisan migrate
```

If you'd like your application to redirect requests, add the following middleware to `App\Http\Kernel.php`:

```php
protected $middleware = [
    // ...
    \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    \OptimistDigital\NovaRedirects\Http\Middleware\RedirectToIntendedUrl::class,
];
```
