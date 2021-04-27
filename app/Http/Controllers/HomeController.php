<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyBrewery;
use App\Mail\ContactReceived;
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
        return view('report');
    }

    public function notify(NotifyBrewery $request)
    {
        $name = $request->input('name');
        $city = $request->input('city');
        $address = $request->input('address');
        $description = $request->input('description');
        $img = $request->file('img')->store('public/img');
        Brewery::create(compact('name', 'description' , 'img'));

        return redirect(route('brewery.thankyou'));
        
    }

    public function thanks()
    {
        return view('brewery.thankyou');
    }

}
