# Changelog

All notable changes to `filament-jsoneditor` will be documented in this file.

## 6.0.0 - 2026-05-12

### Added
- Full support for Filament v4.
- Support for Laravel 12 and 13.
- PHP 8.2 is now the minimum required version.
- Adoption of new Filament v4 patterns (Schema architecture, dynamic field wrapper).

### Changed
- Updated state binding to use `$wire.$entangle`.
- Improved internal type hinting and compatibility.

## 5.0.0 - 2026-05-12

### Added
- Support for Laravel 11 and 12.
- Support for Filament v3.
- Lazy load assets for improved performance.
- Follow Filament plugin pattern for asset registration.

### Fixed
- Removed accidental console logs.

## Fix preview mode - 2022-09-08

The modes is forced to ['preview'] when field is disabled

## 0.4.5 - 2022-08-31

### What's Changed

- Support json formatted data by @tanthammar in https://github.com/happones/filament-jsoneditor/pull/10

### New Contributors

- @tanthammar made their first contribution in https://github.com/happones/filament-jsoneditor/pull/10

**Full Changelog**: https://github.com/happones/filament-jsoneditor/compare/0.4.4...0.4.5

## Remove accidental inner if - 2022-06-16

[Remove accidental inner if](https://github.com/happones/filament-jsoneditor/pull/5/commits/0463aab7fb3e60eca1b873cb5e1adc6a00969ffe)

## 0.4.1 - 2022-04-02

Remove Interface

## 0.3 - 2022-03-31

**Full Changelog**: https://github.com/happones/filament-jsoneditor/compare/0.2...0.3

## 0.2 - 2022-03-31

Add Closure for input

## First version - 2022-03-29

First version running. Needs to adapt CSS to finalement design.
