<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */

    'driver' => 'gd',
    'upload_path' => env('IMAGE_UPLOAD_PATH', '/uploads'),
    'access_path' => env('IMG_PATH', 'http://jk-admin.ast/uploads'),


        1 => ['width' => 35, 'height' => 35],
        2 => ['width' => 480, 'height' => 635],
        3 => ['width' => 1920, 'height' => 700],
        4 => ['width' => 960, 'height' => 960],
        5 => ['width' => 105, 'height' => 140],


];
