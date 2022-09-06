<?php

namespace domain\Services\Settings;

use App\Models\Setting;
use infrastructure\Facades\ImageFacade\ImageFacade;

class SettingService
{

    protected $category;

    public function __construct()
    {
        $this->category = new Setting();
    }


}
