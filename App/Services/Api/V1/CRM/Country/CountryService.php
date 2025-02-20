<?php

namespace App\Services\Api\V1\CRM\Country;

use App\Filters\Api\V1\CRM\CountryFilter;
use App\Services\Service;

final class CountryService extends Service
{
    protected string|null $table = 'countries';
    protected $filter = CountryFilter::class;
    
}