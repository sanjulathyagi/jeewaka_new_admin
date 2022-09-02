<?php

namespace infrastructure\Facades\ImageFacade;


use Illuminate\Support\Facades\Facade;
use infrastructure\Services\ImageService;

class ImageFacade extends Facade
 {
    protected static function getFacadeAccessor()
    {
        return ImageService::class;
    }
}
