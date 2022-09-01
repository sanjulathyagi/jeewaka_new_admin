<?php

namespace infrastructure\Facades;


use Illuminate\Support\Facades\Facade;
use infrastructure\Services\ImageService;

class ImagesFacade extends Facade
 {
    protected static function getFacadeAccessor()
    {
        return ImageService::class;
    }
}
