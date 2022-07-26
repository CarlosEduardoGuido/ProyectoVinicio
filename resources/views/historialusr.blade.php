@extends('plantilla.plantilla')

@section('contenido')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0">HISTORIAL CLINICO</h4>    
        </div>
        <div class="table-responsive">
            <h4 class="mb-0">CITA</h4>
            <table class="table text-center align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="table-info">
                        <th scope="col">FECHA DE REGISTRO</th>
                        <th scope="col">HORA DE CITA</th>
                        <th scope="col">CITA</th>
                        <th scope="col">ASUNTO</th>
                        <th scope="col">DOCTOR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                    <tr>
                        <td class="table-primary">{{$cita->updated_at}}</td>
                        <td class="table-primary">{{$cita->hora_cita}}</td>
                        <td class="table-primary">{{$cita->cita}}</td>     
                        <td class="table-primary">{{$cita->asunto}}</td>
                        @foreach($doctores as $doctor)
                            @if($cita->id_doctor == $doctor->id)
                                <td class="table-primary">{{$doctor->nombre}}</td>
                            @endif
                        @endforeach        
                        @endforeach
                    </tr>   
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="table-responsive">
            <h4 class="mb-0">OBSERVACIONES DE LA CITA</h4>
            <table class="table text-center align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="table-info">
                        <th scope="col">FECHA DE REGISTRO</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">PRESCRIPCIONES</th>
                        <th scope="col">OBSERVACIONES</th>
                        <th scope="col">RECETA</th>
                        <th scope="col">CONDICION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                    <tr>
                        <td class="table-primary">{{$cita->updated_at}}</td>
                        @foreach($historiales as $historial)
                            @if($cita->id == $historial->id_cita)
                                <td class="table-primary">{{$historial->descripcion}}</td>
                                <td class="table-primary">{{$historial->prescripciones}}</td>
                                <td class="table-primary">{{$historial->observaciones}}</td>
                                <td class="table-primary"><a href="{{route('descargareceta',$historial->receta)}}">{{$historial->receta}}</a></td>
                                <td class="table-primary">{{$historial->condicion}}</td>
                            @endif
                        @endforeach        
                        @endforeach
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
