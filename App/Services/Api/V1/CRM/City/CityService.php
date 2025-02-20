<?php

namespace App\Services\Api\V1\CRM\City;

use App\Filters\Api\V1\CRM\CityFilter;
use App\Services\Service;

final class CityService extends Service
{
    protected string|null $table = 'cities';
    
    protected string $tableAlias = 'ct';
    protected $filter = CityFilter::class;
    
}