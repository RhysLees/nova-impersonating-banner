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

## Displaying the component
Add the following livewire component to your layouts `app.blade.php` and `guest.blade.php` above the deader

```html
@livewire('nova-impersonating-banner')
```

### App Layout `app.blade.php`

```html
<body class="font-sans antialiased">
  <x-jet-banner />
    <div class="min-h-screen bg-gray-100">
      @livewire('nova-impersonating-banner')

      @livewire('navigation-menu')

...
```

### Guest Layout `guest.blade.php`
For this to work on your guest layout, you will need to add `@livewireStyles` into the head of your guest layout and `@livewireScripts` just above the closing tag of your body

```html
<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

...
```

```html
...

        @livewireScripts

    </body>
</html>
```
Then you can add the component into the `guest.blade.php`
```html
<body>
  <div class="font-sans text-gray-900 antialiased">
     @livewire('nova-impersonating-banner')
    
    {{ $slot }}
    
...
```




## Customisation

The user you are impersonating is passed into the livewire component as `$impersonating` so you can select what information you wish to show to the user

```html
<div class="flex-grow">
  <p class="text-sm">{{ $impersonating->id }} - {{ $impersonating->name }}</p>
  <p class="text-sm">{{ $impersonating->email }}</p>
</div>
```
