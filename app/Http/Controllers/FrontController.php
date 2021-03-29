<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        if($user && $user->email == 'manuel@manuel.it'){
            $breweries = Brewery::orderBy('id' , 'desc')->get();

        }else {
            $breweries = Brewery::where('visible' , true)
            ->orderBy('id' , 'desc')->get();
        }
        
        return view('breweries',compact('breweries'));
    }

    public function approved($id)
    {   
        $user = Auth::user();
        if($user && $user->email == 'manuel@manuel.it'){
            $brewery = Brewery::find($id);
            $brewery->visible = true;
            $brewery->save();
        }

        return redirect(route('breweries'));
    }

    public function team()
    {
        return view('team');
    }
}
