<?php

namespace domain\Services\Settings;

use App\Models\Setting;


class SettingService
{

    protected $setting;

    public function __construct()
    {
        $this->setting = new Setting();
    }


}
