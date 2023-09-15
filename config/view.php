<?php

return [
    'paths' => [
        resource_path('views'), // Specifies the directory path(s) where your view files are located.
    ],

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ), // Specifies the directory path where compiled view files are stored.
];
