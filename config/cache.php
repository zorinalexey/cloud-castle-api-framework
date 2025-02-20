<?php

return [
    'status' => filter_var(env('REDIS_CACHE_ENABLED', false), FILTER_VALIDATE_BOOLEAN),
    'connection_params' => [
        'host' => env('REDIS_CACHE_HOST', '127.0.0.1'),
        'port' => env('REDIS_CACHE_PORT', 6379),
        'database' => (int)env('REDIS_CACHE_DATABASE', 1),
        'password' => env('REDIS_CACHE_PASSWORD', ''),
        'username' => env('REDIS_CACHE_USERNAME', ''),
    ],
    'default_expires_time' => (int)env('REDIS_CACHE_EXPIRATION', 3600),
    'actions' => [
        'view' => [
        ],
        'list' => [
        ],
        'create' => [
        ],
        'update' => [
        ],
        'soft_delete' => [
        ],
        'group_soft_delete' => [
        ],
        'hard_delete' => [
        ],
        'group_hard_delete' => [
        ],
        'restore' => [
        ],
        'group_restore' => [
        ],
    ]
];