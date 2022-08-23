<?php
namespace domain\facades;
use domain\services\productService;

use Illuminate\Support\facades\Facade;

class categoryFacade extends facade
{
    protected static function getFacadeAccessor()
    {
        return productService::class;
    }
}

