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
            'description' => 'required | max:1000',
            'img' => 'required | image',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Il nome e obbligatorio',
        'name.max' => 'Il nome non puo superare i 100 caratteri',
        'description.required' => 'La descrizione e obbligatoria',
        'description.max' => 'La descrizione non puo superare i 1000 caratteri',
        'img.required' => 'L immagine e obbligatoria',
        'img.img' => 'Solo file .jpg',

    ];
}
}
