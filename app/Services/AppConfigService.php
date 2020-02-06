<?php

namespace App\Services;

class AppConfigService
{
    private $_maxCaffeine;

    public function __construct()
    {
        // default is 500
        $this->_maxCaffeine = env('SAVE_CAFFEINE_AMOUNT', 500);
    }

    public function maxCaffeine()
    {
        return $this->_maxCaffeine;
    }
}
