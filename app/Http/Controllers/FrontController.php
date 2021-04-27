<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyBreweryUpdate;
use App\Models\Brewery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{   

    public function index()
    {
       $breweries = Brewery::where('visible',true)
       ->orderBy('id' , 'desc')
       ->take(4)
       ->get();
        return view('index', compact('breweries'));
    }

    public function breweries()
    {   
        $user = Auth::user();

        if($user && $user->is_Admin){
            $breweries = Brewery::orderBy('id' , 'desc')->get();

        }else {
            $breweries = Brewery::where('visible' , true)
            ->orderBy('id' , 'desc')->get();
        }
        
        return view('brewery.breweries',compact('breweries'));
    }


    public function team()
    {
        return view('team');
    }
}
