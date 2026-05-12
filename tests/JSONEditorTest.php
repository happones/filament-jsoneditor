<?php

use Happones\FilamentJsoneditor\Forms\JSONEditor;
use Filament\Forms\ComponentContainer;
use Happones\FilamentJsoneditor\Tests\TestCase;
use Illuminate\Support\Str;

it('has default values', function () {
    $field = JSONEditor::make('editor');

    expect($field->getHeight())->toBe(300)
        ->and($field->getModes())->toBe(json_encode(['code', 'form', 'text', 'tree', 'view', 'preview']));
});

it('can set height', function () {
    $field = JSONEditor::make('editor')
        ->height(500);

    expect($field->getHeight())->toBe(500);
});

it('can set height using closure', function () {
    $field = JSONEditor::make('editor')
        ->height(fn () => 400);

    expect($field->getHeight())->toBe(400);
});

it('can set modes', function () {
    $field = JSONEditor::make('editor')
        ->modes(['code', 'tree']);

    expect($field->getModes())->toBe(json_encode(['code', 'tree']));
});

it('restricts modes when disabled', function () {
    $field = JSONEditor::make('editor')
        ->disabled();

    expect($field->getModes())->toBe(json_encode(['preview']));
});

it('has the correct view', function () {
    $field = JSONEditor::make('editor');

    expect($field->getView())->toBe('filament-jsoneditor::json-editor');
});
