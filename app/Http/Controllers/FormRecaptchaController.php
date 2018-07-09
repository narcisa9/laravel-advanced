<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormRecaptchaController extends Controller
{
    //
    public function index()
    {
        //
        return view('formRecaptcha');
    }
    public function create()
    {
        //
        return view('formRecaptcha');
    }
    public function store(Request $request)
    {
      return $request->all();
      $validatedData = $request->validate([
          'name' => 'required',
        'g-recaptcha-response' => 'required|captcha'
    ]); 
    }

}
