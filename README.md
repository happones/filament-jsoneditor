
# JSON Editor form's input for the great Filament package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/happones/filament-jsoneditor.svg?style=flat-square)](https://packagist.org/packages/happones/filament-jsoneditor)
[![GitHub Tests Action Status](https://github.com/happones/filament-jsoneditor/actions/workflows/run-tests.yml/badge.svg)](https://github.com/happones/filament-jsoneditor/actions/workflows/run-tests.yml)
[![GitHub Code Style Action Status](https://github.com/happones/filament-jsoneditor/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/happones/filament-jsoneditor/actions/workflows/php-cs-fixer.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/happones/filament-jsoneditor.svg?style=flat-square)](https://packagist.org/packages/happones/filament-jsoneditor)

If you need to have a JSON Editor field within your form. You have it !

<img width="1863" alt="image" src="https://user-images.githubusercontent.com/604907/160436321-9ff47bb8-28a2-45af-98fe-a57802236178.png">

## Installation

You can install the package via composer:

```bash
composer require happones/filament-jsoneditor
```

```bash
php artisan vendor:publish --tag=filament-jsoneditor-img
```

This command will publish the jsoneditor button's img

## Required format
The Eloquent Model data must be cast to array or json

Example:

```php
class MyModel extends Model
{
    protected $casts = [
        'my_field' => 'array',
        'another_field' => 'encrypted:json',
    ];
}
```

## Usage

```php
[
    \Happones\FilamentJsoneditor\Forms\JSONEditor::make('editor');
]
```
## Options
```php
[
    \Happones\FilamentJsoneditor\Forms\JSONEditor::make('editor')
        ->height(500) // Set height to 500px, default is 300
        ->modes(['code', 'form', 'text', 'tree', 'view', 'preview']) // default is ['code', 'form', 'text', 'tree', 'view', 'preview']
        ->options([
            'mainMenuBar' => true,
            'navigationBar' => true,
            'statusBar' => true,
        ]); // default options can be set in config/filament-jsoneditor.php
]
```

## Global Configuration

You can publish the config file to set global defaults:

```bash
php artisan vendor:publish --tag=filament-jsoneditor-config
```

The config file allows you to set default height, modes, and other JSONEditor options.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Omar Hernandez](https://github.com/happones)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
