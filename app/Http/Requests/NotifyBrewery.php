<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotifyBrewery extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'name' => 'required | max:100',
            'city' => 'required | max:100',
            'address' => 'required | max:100',
            'description' => 'required | max:1000',
            'beers'=> 'required',
            'img' => 'required | image',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Il nome è obbligatorio',
        'name.max' => 'Il nome non puo superare i 100 caratteri',
        'city.required' => 'La città è obbligatoria',
        'address.required' => "L 'indirizzo è obbligatorio",
        'description.required' => 'La descrizione è obbligatoria',
        'description.max' => 'La descrizione non puo superare i 1000 caratteri',
        'img.required' => 'L immagine è obbligatoria',
        'img.img' => 'Solo file .jpg',

    ];
}
}
