<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Doctores;
use App\Models\User;
use App\Models\Especialidades;
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
        return view ('historial');
    }
    public function export(Request $req){
        return Excel::download(new CitasExport ,'citas.xlsx');
        }
        

}
