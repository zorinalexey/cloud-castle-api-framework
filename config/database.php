<?php

return [
    'default' => [
        'db_type' => env('DEFAULT_DATABASE_TYPE', 'pgsql'),
        'connect_params' => [
            'dsn' => 'pgsql:host=' . env('DEFAULT_DATABASE_HOST', 'localhost') .
                ';port=' . env('DEFAULT_DATABASE_PORT', 5432) .
                ';dbname=' . env('DEFAULT_DATABASE_NAME', 'test'),
            'username' => env('DEFAULT_DATABASE_USERNAME', 'test'),
            'password' => env('DEFAULT_DATABASE_PASSWORD', 'test'),
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]
        ]
    ],
];