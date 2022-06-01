<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller{
    
    public function create(){

        return view('auth.login');
    }

    public function store(){

        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o la contraseña es incorrecta, por favor intenta de nuevo'
            ]);
        } else{
            
            if(auth()->user()->role == 'admin'){
                return redirect()->to('admin/');
            } else{
                return view('welcome1');
            }
        }
    }

    public function destroy(){

        auth()->logout();

        return view('welcome1');
    }
}
