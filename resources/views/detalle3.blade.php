@extends('dasboard')
@section('contenido')

    <center>
    <h1>Detalle de la Especialidad</h1>
    <table class="table text-center align-middle table-bordered table-hover mb-0">
        @csrf
        <tr >
            <td class="table-primary">Especialidad:</td>
            <td class="table-primary">{{$especialidades->especialidad}}</td>
        </tr>   
            <td colspan="2">
                <a class="btn btn-primary" href="{{route('admin')}}">
                    <center><button class="btn btn-primary">Regresar</button></center>
                </a><br>
            </td>
        </tr>
    </table>
    </center>
@endsection