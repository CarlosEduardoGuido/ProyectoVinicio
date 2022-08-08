<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Citas;
use App\Models\Doctores;
use App\Models\User;
use App\Models\Especialidades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class consultorio extends Controller
{
  public function agendarCita(){
    $id_usuario = auth()->user()->id;
    $doctores = Doctores::all();
    return view('consultas')
    ->with(['doctores' => $doctores])
    ->with(['id_usuario' => $id_usuario]);
  }
    public function admin () {
            $usuarios = User::all();
            $citas = Citas::all();
            $doctores = Doctores::all();
            $especialidades=Especialidades::all();
        return view ('welcome') -> with(['usuarios' => $usuarios]) 
                                -> with(['citas' => $citas])
                                -> with(['doctores' => $doctores])
                                -> with(['especialidades' => $especialidades]);
    }
    
    //------------DETALLE/USUARIO---------

    public function detalle($id){
        $usuario = User::find($id);
         return view('detalle')
          ->with(['usuario'=>$usuario]);
       }

    //----------EDITAR/USUARIO------------

    public function editar(User $id){
        return view("editar")
        ->with(['usuario'=>$id]);
      }
    
    //---------SALVAR/USUARIO-------------
    public function salvar(User $id, Request $request){
      $request -> validate([
        'name'=>'required',
        'numero'=>'required',
        'direccion'=>'required',
        ]);
        $query = User::find($id->id);
        $query->name = $request->name;
        $query->numero = $request->numero;
        $query->direccion = $request->direccion;
      $query -> save();
      return redirect()->route("detalle",['id'=>$id->id]);
    }

    //-----------GUARDAR/USUARIO--------

    public function salvarusuario(Request $request){
      
        $request->validate([
          'name' => 'required|min:10|max:50',
          'numero' => 'required|numeric',
          'direccion' => 'required|min:8|max:80',
          'email' => 'required|string|email|max:255',
          'password' => 'required|min:10|max:30',
          ]);
        $al = User::create(array(
          'name'=>$request->input('name'), 
          'numero'=>$request->input('numero'), 
          'direccion'=>$request->input('direccion'),
          'email'=>$request->input('email'),
          'password'=>$request->input('password'),
          'avisodeprivacidad'=>$request->input('avisodeprivacidad'),
          'role'=>$request->input('role'),
           ));
         return redirect()->route('admin');
       }   
    
    public function altausuario (){
        return view('formulariousuario');
    }

    //---------BORRAR/USUARIO----------
    public function borrar(User $id){
        $id->delete();
        return redirect()->route('admin');
    }
    
    //-------------------------------------------------------------------------------------------------//

    public function salvarcitas(Request $request){
        
        $al = Citas::create(array(
          'hora_cita'=>$request->input('hora_cita'), 
          'cita'=>$request->input('cita'), 
          'id_usuario'=>$request->input('id_usuario'), 
          'asunto'=>$request->input('asunto'),
          'id_doctor'=>$request->input('id_doctor'),
           ));
         return redirect()->route('admin');
       }   

    
    public function altacitas (){
        $usuarios= User::all();
        $doctores= Doctores::all();

        return view('formulariocita')
        -> with(['usuarios' => $usuarios])
        -> with(['doctores' => $doctores]);
    }

    //---------DETALLE/CITA------------

    public function detalle1 ($id){
        $citas = Citas::find($id);
         return view('detalle1')
          ->with(['cita'=>$citas]);
       }

    //----------EDITAR1/CITA------------

    public function editar1(Citas $id){
      $usuarios=User::all();
      $doctores=Doctores::all();  
      return view("editar1")
        ->with(['cita'=>$id])
        ->with(['usuarios' => $usuarios])
        ->with(['doctores' => $doctores]);
      }
    
    //---------SALVAR1/CITA-------------
    public function salvar1(Citas $id, Request $request){
      $request -> validate([
        'hora_cita'=>'required',
        'cita'=>'required',
        'nombre'=>'required',
        'asunto'=>'required',
        'doctor'=>'required',
        ]);      
        $query = Citas::find($id->id);
        $query->hora_cita = $request->hora_cita;
        $query->cita = $request->cita;
        $query->nombre = $request->nombre;
        $query->asunto = $request->asunto;
        $query->doctor = $request->doctor;
      $query -> save();
      return redirect()->route("detalle1",['id'=>$id->id]);
    }

    //--------CONSULTA----------------

    public function consulta (){
     //if $doctor=hora_cita
        
    }


    //-----------BORRAR/CITA------------

    public function borrar1(Citas $id){
        $id->delete();
        return redirect()->route('admin');
    }
    
    //------------GUARDAR/DOCTORES-------------

    public function salvardoctores(Request $request){
      $request -> validate([
        'nombre'=>'required',
        'numero'=>'required',
        'especialidad'=>'required',
        ]);
      $al = Doctores::create(array(
        'nombre'=>$request->input('nombre'), 
        'numero'=>$request->input('numero'), 
        'id_especialidad'=>$request->input('id_especialidad'),
         ));
       return redirect()->route('admin');
     }   
  
  public function altadoctores (){    
      $especialidades=Especialidades::all();
      return view('formulariodoctores')
        -> with(['especialidades' => $especialidades]) ;
  }
  //-------------DETALE/DOCTORES-------------------

  public function detalle2($id){
    $doctores = Doctores::find($id);
     return view('detalle2')
      ->with(['doctor'=>$doctores]);
   }

   //------------EDITAR2/DOCTORES----------------------
   
   public function editar2(Doctores $id){
     $especialidades=Especialidades::all();
    return view("editar2")
    ->with(['doctor'=>$id])
    ->with(['especialidades'=>$especialidades]);
  }

//----------------SALVAR2/DOCTORE-------------

public function salvar2(Doctores $id, Request $request){
  $request -> validate([
    'nombre'=>'required',
    'numero'=>'required',
    'especialidad'=>'required',
    ]);
    $query = Doctores::find($id->id);
    $query->nombre = $request->nombre;
    $query->numero = $request->numero;
    $query->id_especialidad = $request->id_especialidad;
  $query -> save();
  return redirect()->route("detalle2",['id'=>$id->id]);
}

//---------------BORRAR2/DOCTORES----------
public function borrar2(Doctores $id){
  $id->delete();
  return redirect()->route('admin');
}

//--------------AGENDAR CITAS---------------

public function agendarc(Request $request ){
  $existe = Citas::where('hora_cita',$request->input('hora_cita'))
  ->where('cita',$request->input('cita'))
  ->where('id_doctor',$request->input('id_doctor'))->first();
  if($existe){
    
    return back()->with('message-danger', "Horarios Ocupados");
  }else{
    $cita  = Citas::create(array(
      'hora_cita' => $request->input('hora_cita'),
      'cita' => $request->input('cita'),
      'id_usuario' => Auth::user()->id,
      'asunto' => $request->input('asunto'),
      'id_doctor' => $request->input('id_doctor'),
    ));
    return back()->with('message-info', "Cita Agregada");
  }
  
}

public function detalle3($id){
  $especialidades = Especialidades::find($id);
   return view('detalle3')
    ->with(['especialidades'=>$especialidades]);
 }

 //------------EDITAR2/DOCTORES----------------------
 
 public function editar3(Especialidades $id){
   $especialidades=Especialidades::all();
  return view("editar3")
  ->with(['especialidades'=>$especialidades])
  ->with(['especialidades'=>$id]);
}

//----------------SALVAR2/DOCTORE-------------

public function salvar3(Especialidades $id, Request $request){
  $request -> validate([
    'especialidad'=>'required',
        ]);
  $query = Especialidades::find($id->id);
  $query->especialidad = $request->especialidad;
  
$query -> save();
return redirect()->route("detalle3",['id'=>$id->id]);
}

//---------------BORRAR2/DOCTORES----------
public function borrar3(Especialidades $id){
$id->delete();
return redirect()->route('admin');
}

public function altaespecialidad (){
  return view('formularioespecialidad');
}

public function salvarespecialidad(Request $request){
  $request -> validate([
    'especialidad'=>'required',
        ]);
  $al = Especialidades::create(array(
    'especialidad'=>$request->input('especialidad'),
     ));
   return redirect()->route('admin');
 } 
    
    


    
}
