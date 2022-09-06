<?php

namespace domain\Facades;

use domain\Services\RequestService\RequestService;
use Illuminate\Support\Facades\Facade;

class RequestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RequestService::class;
    }

}

