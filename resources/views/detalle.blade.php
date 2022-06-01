@extends('dasboard')
@section('contenido')
    <center>
    <h1>Detalle del Usuario</h1>
    <table class="table text-center align-middle table-bordered table-hover mb-0">
        @csrf
        <tr >
            <td class="table-primary">Nombre:</td>
            <td class="table-primary">{{$usuario->name}}</td>
        </tr>   
        
        <tr>
            <td class="table-primary">Numero:</td>
            <td class="table-primary">{{$usuario->numero}}</td>
        </tr>  
        <tr>
            <td class="table-primary">Dirección:</td>
            <td class="table-primary">{{$usuario->direccion}}</td>
        </tr> 
        
        <tr>
            <td colspan="2">
                <a class="btn btn-primary" href="{{route('admin')}}">
                    <center><button class="btn btn-primary">Regresar</button></center>
                </a><br>
            </td>
        </tr>
    </table>
    </center>
@endsection