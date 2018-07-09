<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'email'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Numele este  obligatoriu',
            'name.max' => 'Numele nu poate avea mai mult de 20 de caractere',
            'email.required'=> 'Email-ul este  obligatoriu'
        ]; 
    }
}
