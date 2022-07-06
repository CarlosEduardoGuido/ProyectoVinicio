<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Doctores;
use App\Models\User;
use App\Models\Especialidades;
use App\Models\Historial;
use Illuminate\Support\Facades\DB;
use App\Exports\CitasExport;
use Maatwebsite\Excel\Facades\Excel;


class Administrador extends Controller{
    
    public function usuarios () {
        $usuarios = User::all();
        return view ('usuarios')-> with(['usuarios' => $usuarios]);
    }

    public function citas () {
        $usuarios = User::all();
        $citas = Citas::all();
        $doctores = Doctores::all();
        return view ('citas')-> with(['citas' => $citas])
                             -> with(['usuarios' => $usuarios])
                             -> with(['doctores' => $doctores]);
    }

    public function doctores () {
        $doctores = Doctores::all();
        $especialidades = Especialidades::all();
        return view ('doctores')-> with(['doctores' => $doctores])
                                -> with(['especialidades' => $especialidades]);
    }

    public function especialidades () {
        $especialidades = Especialidades::all();
        return view ('especialidades')-> with(['especialidades' => $especialidades]);
    }

    public function historial () {
        $historiales = Historial::all();
        $usuarios = User::all();
        $citas = Citas::all();
        $doctores = Doctores::all();
        return view ('historial')->with(['usuarios'=>$usuarios])
                                 ->with(['citas'=>$citas])
                                 ->with(['doctores'=>$doctores])
                                 ->with(['historiales'=>$historiales]);
    }
    public function export(Request $req){
        return Excel::download(new CitasExport ,'citas.xlsx');
        }
        

    public function crearhistorial(Citas $id){
        $usuarios=User::all();
        $doctores=Doctores::all();  
        return view("crearhistorial")
          ->with(['cita'=>$id])
          ->with(['usuarios' => $usuarios])
          ->with(['doctores' => $doctores]);
    }

    public function salvarhistorial(Citas $id , Request $request){
        $al = Historial::create(array(
            'id_cita'=>$request->input('id_cita'),
            'descripcion'=>$request->input('descripcion'), 
            'prescripciones'=>$request->input('prescripciones'), 
            'observaciones'=>$request->input('observaciones'), 
            'receta'=>$request->input('receta'),
            'condicion'=>$request->input('condicion'),
             ));
           return redirect()->route('admin');
    }

    public function historialusr(){
        $id_usuario= auth()->user()->id;
        $doctores = Doctores::all();
        $citas = Citas::all()->where('id_usuario',$id_usuario);
        $historiales = Historial::all();
        return view('historialusr')
            ->with(['citas'=> $citas])
            ->with(['doctores'=> $doctores])
            ->with(['historiales'=> $historiales]);
    }

    public function detallehistorial($id){
        $historial = Historial::find($id);
        return view('detallehistorial')
            ->with(['historial'=>$historial]);
    }

    public function borrarhistorial(Historial $id){
        $id->delete();
        return redirect()->route('historial');
    }

    public function editarhistorial(Historial $id){
        $historial= Historial::find($id->id);
        return view('editarhistorial')
                ->with(['historial'=> $historial]);
    }
    
    public function guardarhistorial(Historial $id, Request $request){
        $query = Historial::find($id->id);
        $query->id_cita = $request->id_cita;
        $query->descripcion = $request->descripcion;
        $query->prescripciones = $request->prescripciones;
        $query->observaciones = $request->observaciones;
        $query->receta = $request->receta;
        $query->condicion = $request->condicion;
        $query->save();
        return redirect()->route("detallehistorial",['id'=>$id->id]);
    }


}
