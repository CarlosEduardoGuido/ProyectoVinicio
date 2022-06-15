@extends('dasboard')
@section('contenido')
     <!-- Recent Sales Start -->
            <!-- Recent Sales End -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">INFORMACION DE LOS DOCTORES</h4>
                        <a button type="button" class="btn btn-success btn-sm" href="{{route('altadoctores')}}">AGREGAR DOCTOR</button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">NUMERO</th>
                                    <th scope="col">ESPECIALIDADES</th>
                                    <th scope="col" colspan=3>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($doctores as $doctor)
                                <tr>
                                    <td class="table-primary">{{$doctor -> nombre}}</td>
                                    <td class="table-primary">{{$doctor -> numero}}</td>
                                    @foreach($especialidades as $especialidad)
                                        @if($doctor->id_especialidad == $especialidad->id)
                                        <td class="table-primary">{{$especialidad ->especialidad}}</td>
                                        @endif
                                    @endforeach    
                                    <td class="table-primary"><a button type="button" class="btn btn-info btn-sm" href="{{route('detalle2',['id'=>$doctor->id])}}">DETALLE</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-warning btn-sm" href="{{route('editar2',['id'=>$doctor->id])}}">EDITAR</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-danger btn-sm" href="{{route('borrar2',['id'=>$doctor->id])}}">ELIMINAR</button></a></td>
                                  @endforeach
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection