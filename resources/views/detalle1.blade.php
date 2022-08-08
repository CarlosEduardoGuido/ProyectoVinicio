@extends('dasboard')
@section('contenido')
    <center>
    <h1>Detalle del Paciente</h1>
    <table class="table text-center align-middle table-bordered table-hover mb-0">
        @csrf
        <tr >
            <td class="table-primary">HORA DE LA CITA:</td>
            <td class="table-primary">{{$cita->hora_cita}}</td>
        </tr>   
        
        <tr>
            <td class="table-primary">CITA:</td>
            <td class="table-primary">{{$cita->cita}}</td>
        </tr>  
        <tr>
            <td class="table-primary">NOMBRE:</td>
            <td class="table-primary">{{$cita->id_usuario}}</td>
        </tr> 
        <tr>
            <td class="table-primary">ASUNTO:</td>
            <td class="table-primary">{{$cita->asunto}}</td>
        </tr> 
        <tr>
            <td class="table-primary">DOCTOR:</td>
            <td class="table-primary">{{$cita->id_doctor}}</td>
        </tr> 
        <tr>
            <td colspan="2">
                <a class="btn btn-primary" href="{{route('citas')}}">
                    <center><button class="btn btn-primary">Regresar</button></center>
                </a><br>
            </td>
        </tr>
    </table>
    </center>
@endsection