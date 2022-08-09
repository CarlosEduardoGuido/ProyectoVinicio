<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Citas;
use App\Models\Doctores;
use App\Models\Historial;
use App\Exports\CitasExport;
use Illuminate\Http\Request;
use App\Models\Especialidades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;


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

    public function salvarhistorial(Citas $id , Request $request ){

        $request->validate([
            'descripcion' => 'required|min:10|max:255',
            'prescripciones' => 'required|min:10|max:255',
            'observaciones' => 'required|min:10|max:255',
            'receta' => 'required|mimes:pdf',
            'condicion' => 'required|min:10|max:255',
            ]);

        if($request->hasFile('receta')){
            $file = $request->file('receta');
            //$file->move(public_path().'/archivos',$file->getClientOriginalName());
            //$receta2=$file->getClientOriginalName();
            $receta = $file->getClientOriginalName();
            //$receta = $request->file('receta')->getClientOriginalName();
            $ldate = date('Ymd_His_');
            $receta2 = $ldate . $receta;
            Storage::disk('local')->put($receta2, File::get($file));

            /*$receta2= time() . '_' . $request->file('receta')->getClientOriginalName();
            $request->file('receta')->storeAs('recetas',$receta2);*/
        }else{ $receta2 = $request->receta2;}
        $al = Historial::create(array(
            'id_cita'=>$request->input('id_cita'),
            'descripcion'=>$request->input('descripcion'), 
            'prescripciones'=>$request->input('prescripciones'), 
            'observaciones'=>$request->input('observaciones'), 
            'receta'=>$receta2,
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
        $request->validate([
            'descripcion' => 'required|min:10|max:255',
            'prescripciones' => 'required|min:10|max:255',
            'observaciones' => 'required|min:10|max:255',
            'receta' => 'required|mimes:pdf',
            'condicion' => 'required|min:10|max:255',
            ]);
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

    public function descargareceta($receta){
        $filepath = public_path('recetas/').$receta;
        return response()->download($filepath);
    }
    public function productos () {
        $productos = Product::all();
        return view ('productos')-> with(['productos' => $productos]);
    }
    public function detalleP($id){
        $producto = Product::find($id);
        return view('detalleP')
            ->with(['producto'=>$producto]);
    }
    public function editarP(Product $id){
       return view("editarP")
       ->with(['producto'=>$id]);
     }
     public function salvarP(Product $id, Request $request){
        $request -> validate([
            'name'=>'required',
            'slug'=>'required',
            'price'=>'required',
                  ]);
        $query = Product::find($id->id);
        if($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $destinationPath =('images');
            $filename =time().'-'.$file->getClientOriginalName();
            $uploadSuccess= $request->file('image_path')->move($destinationPath,$filename);
            $query->image_path= $filename;
        }
        $query->name = $request->name;
        $query->slug = $request->slug;
        $query->price = $request->price;
 
      $query -> save();
      return redirect()->route("detalleP",['id'=>$id->id]);
    }
    public function borrarP(Product $id){
        $id->delete();
        return redirect()->route('productos');
    }   
    public function altaproductos (){
        return view('formularioP');
    }
   
    public function salvarProductos(Request $request){
        $request -> validate([
            'name'=>'required',
            'slug'=>'required',
            'price'=>'required',
            'image_path'=>'required'
            ]);
        if($request->hasfile('image_path')){
            $image_path = $request->file('image_path');
            $destinationPath =('images');
            $filename =time().'-'.$image_path->getClientOriginalName();
            $uploadSuccess= $request->file('image_path')->move($destinationPath,$filename);
        }

          $al = Product::create(array(
            'image_path' => $filename,
            'name' => $request->input('name'),
            'slug'=>$request->input('slug'),
            'price'=> $request->input('price'),
       ));
                return redirect()->route('productos');
       }

}
