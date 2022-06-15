@extends('dasboard')
@section('contenido')
    <center>
    <h1>Detalle del historial</h1>
    <table class="table text-center align-middle table-bordered table-hover mb-0">
        @csrf
        <tr >
            <td class="table-primary">Descripcion:</td>
            <td class="table-primary">{{$historial->descripcion}}</td>
        </tr>   
        
        <tr>
            <td class="table-primary">Prescripciones:</td>
            <td class="table-primary">{{$historial->prescripciones}}</td>
        </tr>  
        <tr>
            <td class="table-primary">Observaciones:</td>
            <td class="table-primary">{{$historial->observaciones}}</td>
        </tr>
        <tr>
            <td class="table-primary">Receta:</td>
            <td class="table-primary">{{$historial->receta}}</td>
        </tr> 
        <tr>
            <td class="table-primary">Condicion:</td>
            <td class="table-primary">{{$historial->condicion}}</td>
        </tr>
        
        <tr>
            <td colspan="2">
                <a class="btn btn-primary" href="{{route('historial')}}">
                    <center><button class="btn btn-primary">Regresar</button></center>
                </a><br>
            </td>
        </tr>
    </table>
    </center>
@endsection