<?php

namespace domain\Facades;

use domain\Services\expenseService\expenseService;
use Illuminate\Support\Facades\Facade;

class expenseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return expenseService::class;
    }

}

