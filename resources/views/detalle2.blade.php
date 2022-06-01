@extends('dasboard')
@section('contenido')

    <center>
    <h1>Detalle del Doctor</h1>
    <table class="table text-center align-middle table-bordered table-hover mb-0">
        @csrf
        <tr >
            <td class="table-primary">NOMBRE:</td>
            <td class="table-primary">{{$doctor->nombre}}</td>
        </tr>   
        
        <tr>
            <td class="table-primary">NUMERO:</td>
            <td class="table-primary">{{$doctor->numero}}</td>
        </tr>  
        <tr>
            <td class="table-primary">ESPECIALIDADES:</td>
            <td class="table-primary">{{$doctor ->id_especialidad}}</td>
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