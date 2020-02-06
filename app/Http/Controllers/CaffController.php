<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Services\AppConfigService;

class CaffController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function getDrinks()
    {
        $data = [
            'drinks' => Drink::all()
        ];

        return view('ajax.drinks', $data);
    }


    public function defaults()
    {
        $appConfig = new AppConfigService();
        $data = [
            'maxCaff' => $appConfig->maxCaffeine(),
            'startCaff' => 0,
        ];
        return json_encode($data);
    }
}
