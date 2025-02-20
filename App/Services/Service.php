<?php

namespace App\Services;

use CloudCastle\Core\Api\Common\DB\PdoConnect;
use CloudCastle\Core\Api\Common\Services\AbstractService;

abstract class Service extends AbstractService
{
    protected function di (): array
    {
        return [
        ];
    }
}