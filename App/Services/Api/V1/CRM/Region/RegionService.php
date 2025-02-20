<?php

namespace App\Services\Api\V1\CRM\Region;

use App\Filters\Api\V1\CRM\RegionFilter;
use App\Services\Service;

final class RegionService extends Service
{
    protected string|null $table = 'regions';
    
    protected string $tableAlias = 'rg';
    protected $filter = RegionFilter::class;
    
}