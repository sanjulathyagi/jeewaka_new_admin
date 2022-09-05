<?php

namespace infrastructure\Facades\FileFacade;


use Illuminate\Support\Facades\Facade;
use infrastructure\Services\FileService\FileService;

class FileFacade extends Facade
 {
    protected static function getFacadeAccessor()
    {
        return FileService::class;
    }

}
