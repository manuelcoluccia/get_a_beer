<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
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

    public function about()
    {
        return view('about');
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

    public function notify(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
    }
}
