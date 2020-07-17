<?php

return [
    /**
     * The vendor path
     */

    'vendor' => [
        'php' => base_path('vendor/caouecs/laravel-lang/src'),
        'json' => base_path('vendor/caouecs/laravel-lang/json'),
    ],

    /**
     * Supported locales
     *
     * If you want to limit your translations, set your supported locales list.
     */

    'locales' => ['es'],

    /**
     * Check Settings
     */

    'check' => [
        'ignore' => ['validation.custom', 'validation.attributes'],
    ],
];
