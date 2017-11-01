# Genrate-Modules

`doop/generate-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 5.5.

This package is a re-published, re-organised and maintained version of [nwidart/laravelmodules](https://github.com/nwidart), which isn't maintained anymore. This package is used in [doopTech](https://www.devremote.com.br/dooptech).

## Install

To install through Composer, by run the following command:

``` bash
composer require doop/generate-modules
```

### Add Service Provider

Next add the following service provider in `config/app.php`.

``` php
'providers' => [
  DOOP\Modules\ModulesServiceProvider::class,
],
```

Next, add the following aliases to `aliases` array in the same file:

``` php
'aliases' => [
  'Module' => DOOP\Modules\Facades\Module::class,
],
```

Next publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider=DOOP\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "DOOP\\": "modules/"
    }
  }
}
```

## Documentation

You'll find installation instructions and full documentation on [https://nwidart.com/laravel-modules/](https://nwidart.com/laravel-modules/).

## Credits

- [Nicolas Widart](https://github.com/nwidart)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Nicolas Widart

Nicolas Widart is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://nicolaswidart.com/projects).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
