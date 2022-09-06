<?php

namespace domain\Facades;

use domain\Services\ProfitService\ProfitService;
use Illuminate\Support\Facades\Facade;

class ProfitFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ProfitService::class;
    }

}

