<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div class="w-full"
         x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('happones-filament-jsoneditor', package: 'happones/jsoneditor'))]"
         x-load-js="[@js(\Filament\Support\Facades\FilamentAsset::getScriptSrc('happones-filament-jsoneditor', package: 'happones/jsoneditor'))]"
         data-dispatch="jsoneditor-loaded"
         x-on:jsoneditor-loaded-js.window="start"
         x-data="{
            state: $wire.$entangle('{{ $getStatePath() }}'),
            editor: null,
            destroy() {
                if (this.editor) {
                    this.editor.destroy();
                }
                this.editor = null;
            },
            start() {
                $nextTick(() => {
                    if (this.editor !== null) {
                        return;
                    }
                    const options = {
                        modes: {{ $getModes() }},
                        history: true,
                        onChangeJSON: (json) => {
                            this.state = JSON.stringify(json);
                        },
                        onChangeText: (jsonString) => {
                            this.state = jsonString;
                        },
                        onValidationError: (errors) => {
                            // Validation error handling
                        }
                    };
                    if (typeof JSONEditor !== 'undefined') {
                        this.editor = new JSONEditor($refs.editor, options);
                        Alpine.raw(this.editor).set(this.state);
                    }
                })
            }
        }"
         x-cloak
         wire:ignore>
        <div x-ref="editor" class="w-full ace_editor" style="min-height: 30vh;height:{{ $getHeight() }}px"></div>
    </div>
</x-dynamic-component>
