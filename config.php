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
            'items' => function ($config) {
                $events = require_once './data/events.php';
                return collect($events)->map(function ($event) {
                    return [
                        'extends' => '_layouts.event',
                        'title' => $event['name'],
                        'datetime' => $event['datetime'],
                        'desc' => $event['desc'],
                        'filename' => $event['slug'],
                        'location' => $event['location'],
                        'topics' => $event['topics'],
                    ];
                });
            },
        ]
    ],
];
