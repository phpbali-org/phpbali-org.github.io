<?php

return [
    'production' => false,
    'baseUrl' => '',
    'viteUrl' => env('VITE_URL', 'http://localhost:5173'),
    'viteClientUrl' => env('VITE_URL', 'http://localhost:5173').'/@vite/client',
    'title' => 'PHPBali',
    'description' => 'Komunitas pemrograman PHP di Bali.',
    'collections' => [
        'events' => [
            'path' => 'events/{filename}',
        ]
    ],
];
