<?php

namespace domain\Facades;

use domain\Services\CategoryService;


class CategoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ::class;
    }

}

