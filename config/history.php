<?php

return [
    'status' => filter_var(env('HISTORY_ENABLED', false), FILTER_VALIDATE_BOOLEAN),
    'actions' => [
        'view' => [
            'countries' => true
        ],
        'list' => [
            'countries' => true
        ],
        'create' => [
            'countries' => true
        ],
        'update' => [
            'countries' => true
        ],
        'soft_delete' => [
            'countries' => true
        ],
        'group_soft_delete' => [
            'countries' => true
        ],
        'hard_delete' => [
            'countries' => true
        ],
        'group_shard_delete' => [
            'countries' => true
        ],
        'restore' => [
            'countries' => true
        ],
        'group_restore' => [
            'countries' => true
        ]
    ],
];