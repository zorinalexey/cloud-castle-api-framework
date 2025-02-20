<?php

return [
    'status' => filter_var(env('HISTORY_ENABLED', false), FILTER_VALIDATE_BOOLEAN),
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
        'group_shard_delete' => [
        ],
        'restore' => [
        ],
        'group_restore' => [
        ]
    ],
];