<?php
namespace domain\facades;
use domain\services\categoryService;

use Illuminate\Support\facades\Facade;

class categoryFacade extends facade
{
    protected static function getFacadeAccessor()
    {
        return categoryService::class;
    }
}
