<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos; 
use App\Models\Doctors; 
use App\Models\Specialities; 
use App\Models\Inicio; 

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Productos::all();
        return response()->json($productos);
    }

    public function index2()
    {
        $doctores=Doctors::all();
        return response()->json($doctores);
    }

    public function index3()
    {
        $especialidades=Specialities::all();
        return response()->json($especialidades);
    }

    public function index4(){
        $titulos=Inicio::all();
        return response()->json($titulos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Productos();
        $producto->nombre = $request->nombre;
        $producto->detalles = $request->detalle;
        $producto->precio = $request->precio;
        $producto->imagen = $request->imagen;
        $producto->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
