<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PruebaMail;

class MailController extends Controller {
     public $subject ="Informacion de contacto";


    public function formEmail(){
        return view('plantilla.welcome1');
    }
    
    public function sendEmail(Request $request){
        $request -> validate([
        'nombre'=>'required',
        'email'=>'required',
        'asunto'=>'required',
        'mensaje'=>'required'
        ]);
        
        $details = [
            'title2' => $request->get('nombre'),
            'title3' => $request->get('email'),
            'title' => $request->get('asunto'),
            'body' => $request->get('mensaje')
        ];
        

       
        Mail::to($request->get('email'))->send(new PruebaMail($details));
        return redirect()->to('login/')->with('estatus', 'Se envió el correo corectamente');


        //return  view('welcome1');
       //// return "Correo Electronico Enviado Exitosamente";//
       
    }
}
