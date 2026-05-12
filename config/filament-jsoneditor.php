<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default JSON Editor Options
    |--------------------------------------------------------------------------
    |
    | Here you can define the default options for the JSON Editor.
    | These options will be applied to all instances of the JSON Editor
    | unless overridden in the field definition.
    |
    */

    'height' => 300,

    'modes' => ['code', 'form', 'text', 'tree', 'view', 'preview'],

    /**
     * Extra options to pass to the JSON Editor.
     * See https://github.com/josdejong/jsoneditor/blob/master/docs/api.md#configuration-options
     */
    'options' => [
        'mainMenuBar' => true,
        'navigationBar' => true,
        'statusBar' => true,
    ],
];
