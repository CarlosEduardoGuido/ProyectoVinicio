<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller{
    public function create(){

        return view('auth.register');
    }

    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'numero' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' =>'required',

        ]);

        $user = User::create(request(['name','numero','direccion','email','password','avisodeprivacidad']));
        auth()->login($user);
        return redirect()->to('/');
    }

    public function aviso (){
        return view('avisodepriv');
    }
    
}
