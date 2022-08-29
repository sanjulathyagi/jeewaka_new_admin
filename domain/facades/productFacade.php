<?php

namespace domain\Facades\ProductFacades;

use domain\Services\ProductService\ProductService;
use Illuminate\Support\Facades\Facade;

class ProductFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ProductService::class;
    }

}

