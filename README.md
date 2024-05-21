# Reproduction repository for the Spatie Translatable filament plugin issue 

This repository is a minimum setup with laravel + filament + spatie translatable plugin to reproduce the [issue](https://github.com/filamentphp/filament/issues/12827).

## Installation

1. Clone the repository
2. Run `composer install`
3. Run `php artisan migrate:fresh --seed`
4. Run `php artisan serve`

## Laravel Sail

If you want to use Laravel Sail, you can run the following commands:

1. Run `composer install`
2. Run `./vendor/bin/sail up`
3. Run `./vendor/bin/sail artisan migrate:fresh --seed`

## Steps to reproduce

1. Visit `http://localhost/admin`
2. Login with `test@example.com` and `password`
3. Visit `http://localhost/admin/products/1/edit`
4. Use the locale switcher to switch between languages a few times
5. Refresh the page and see the error

## Note

Please note, that the error won't always occur at the first try. Be patient and play around a little bit with the locale switcher and the page refreshes.

