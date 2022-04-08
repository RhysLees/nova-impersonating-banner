# Nova Impersonating Banner

## Installation

Require this package with composer.

```shell
composer require rhyslees/nova-impersonating-banner
```

```shell
php artisan vendor:publish --provider="RhysLees\NovaImpersonatingBanner\NovaImpersonatingBannerServiceProvider" --tag="views"
```

```shell
npm install && npm run development
```


## Customisation

The user you are impersonating is passed into the livewire component as `$impersonating` so you can select what information you wish to show to the user

```html
<div class="flex-grow">
  <p class="text-sm">{{ $impersonating->id }} - {{ $impersonating->name }}</p>
  <p class="text-sm">{{ $impersonating->email }}</p>
</div>
```
