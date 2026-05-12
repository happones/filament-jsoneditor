<?php

namespace Happones\FilamentJsoneditor;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJsoneditorServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-jsoneditor';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();

        $this->publishes([
            __DIR__ . '/../dist/jsoneditor/img/jsoneditor-icons.svg' => public_path('css/happones/jsoneditor/img/jsoneditor-icons.svg'),
        ], 'filament-jsoneditor-img');
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('happones-filament-jsoneditor', __DIR__ . '/../dist/jsoneditor/jsoneditor.min.css')->loadedOnRequest(),
            Js::make('happones-filament-jsoneditor', __DIR__ . '/../dist/jsoneditor/jsoneditor.min.js')->loadedOnRequest(),
        ], 'happones/jsoneditor');
    }
}
