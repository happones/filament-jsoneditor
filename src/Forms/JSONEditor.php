<?php

namespace Happones\FilamentJsoneditor\Forms;

use Closure;
use Filament\Forms\Components\Field;
use Filament\Forms\Get;
use Filament\Forms\Set;

class JSONEditor extends Field
{
    protected string $view = 'filament-jsoneditor::json-editor';

    protected int | Closure | null $height = null;

    protected array | Closure | null $modes = null;

    protected array | Closure $options = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->height(config('filament-jsoneditor.height', 300));
        $this->modes(config('filament-jsoneditor.modes', ['code', 'form', 'text', 'tree', 'view', 'preview']));
    }

    public function modes(array | Closure | null $modes): static
    {
        $this->modes = $modes;

        return $this;
    }

    public function height(int | Closure | null $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function options(array | Closure $options): static
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @deprecated obsolete, kept for backward compatibility
     */
    public function isJson(bool $state = true): static
    {
        return $this;
    }

    public function getHeight(): ?int
    {
        return (int) $this->evaluate($this->height);
    }

    public function getModes(): string
    {
        if ($this->isDisabled()) {
            return json_encode(['preview']);
        }

        return json_encode($this->evaluate($this->modes) ?? []);
    }

    public function getOptions(): string
    {
        return json_encode(array_merge(
            config('filament-jsoneditor.options', []),
            $this->evaluate($this->options)
        ));
    }
}
