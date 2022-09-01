<?php

namespace infrastructure\Facades;


use Illuminate\Support\Facades\Facade;
use infrastructure\Services\FileService;

class FileFacade extends Facade
 {
    protected static function getFacadeAccessor()
    {
        return FileService::class;
    }

}
