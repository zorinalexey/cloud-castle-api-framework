<?php

return [
    'path' => ROOT_PATH . DIRECTORY_SEPARATOR . trim(env('LOG_PATH', 'storage' . DIRECTORY_SEPARATOR . 'logs'), DIRECTORY_SEPARATOR),
];