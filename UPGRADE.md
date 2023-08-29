# Nova Impersonating Banner

## Upgrading from 2.x to 3.x

Require this package with composer.

```shell
composer require rhyslees/nova-impersonating-banner "^3.0"
```

```shell
npm install && npm run build
```

## Configuration

Delete the `nova-impersonating-banner.php` file in `config` as we now use nova's config for impersonation.

```php
/*
|--------------------------------------------------------------------------
| Nova Impersonation Redirection URLs
|--------------------------------------------------------------------------
|
| This configuration option allows you to specify a URL where Nova should
| redirect an administrator after impersonating another user and a URL
| to redirect the administrator after stopping impersonating a user.
|
*/

'impersonation' => [
    'started' => '/',
    'stopped' => '/',
],
```
