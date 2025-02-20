<?php

namespace App\Http\Controllers;

use App\Services\Service;

abstract class Controller
{
    
    protected Service $service;
}