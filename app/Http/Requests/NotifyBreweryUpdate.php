<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NotifyBreweryUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();
        return ($user && $user->is_Admin);
    }

    public function rules()
    {
        return [
            'name' => 'required | max:100',
            'description' => 'required | max:1000',
            'city' => ' | max:100',
            'address' => ' | max:100',
            'lat' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],             
            'lon' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
            'img' => 'image'
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Il nome e obbligatorio',
        'name.max' => 'Il nome non puo superare i 100 caratteri',
        'description.required' => 'La descrizione e obbligatoria',
        'description.max' => 'La descrizione non puo superare i 1000 caratteri',
        'img.img' => 'Solo file .jpg',

    ];
}
}
