<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{   

    public function index()
    {
        $mytime = Carbon::now();
        $time = $mytime->toDayDateTimeString();
        return view('index', ['time' => $time ]);
    }

    public function breweries()
    {
        return view('breweries');
    }

    
    public function team()
    {
        return view('team');
    }
}
