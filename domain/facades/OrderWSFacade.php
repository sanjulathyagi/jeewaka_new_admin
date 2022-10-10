<?php

namespace domain\Facades;

use domain\Services\OrderService\OrderService;
use Illuminate\Support\Facades\Facade;

class OrderWSFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OrderService::class;
    }

}
