<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $contact = [$name, $surname, $email, $message];
        dd($contact);

        return redirect(route('contact.thankyou'));
    }

    public function thankyou()
    {
        return view('contact.thankyou');
    }
}
