<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyBrewery;
use App\Mail\ContactReceived;
use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact.contacts');
    }

    public function submit(Request $request)
    {   
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $message = $request->input('message');
        
        $bag = compact('name', 'surname', 'email', 'message');
        $contactMail = new ContactReceived($bag);
        Mail::to('manuel@manuel.it')->send($contactMail);
        return redirect(route('contact.thankyou'));
    }

    public function thankyou()
    {
        return view('contact.thankyou');
    }

    public function report()
    {   
        $beers = Beer::all();
        return view('report', compact('beers'));
    }

    public function notify(NotifyBrewery $request)
    {   
        $new_brewery = Brewery::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'address'=>$request->address,
            'description'=>$request->description,
            'img'=>$request->file('img')->store('public/img')
        ]);
        
        $selected_beers= $request->beers;
        $new_brewery->beers()->attach($selected_beers);
        
      

        return redirect(route('brewery.thankyou'));
        
    }

    public function thanks()
    {
        return view('brewery.thankyou');
    }

}
