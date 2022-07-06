@extends('dasboard')
@section('contenido')
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">INFORMACION DE CITAS</h4>
                         <a button type="button" class="btn btn-success btn-sm" href="{{ route('excel')}}">EXCEL</button></a>


                        <a button type="button" class="btn btn-success btn-sm" href="{{route('altacitas')}}">AGREGAR CITA</button></a>
                   
                    
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">FECHA DE REGISTRO</th>
                                    <th scope="col">HORA DE CITA</th>
                                    <th scope="col">CITA</th>
                                    <th scope="col">NOMBRE DEL PACIENTE</th>
                                    <th scope="col">ASUNTO</th>
                                    <th scope="col">DOCTOR</th>
                                    <th scope="col" colspan=4>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($citas as $cita)
                                <tr>
                                    <td class="table-primary">{{$cita->updated_at}}</td>
                                    <td class="table-primary">{{$cita->hora_cita}}</td>
                                    <td class="table-primary">{{$cita->cita}}</td>
                                    @foreach($usuarios as $usuario)
                                        @if($cita->id_usuario == $usuario->id)
                                            <td class="table-primary">{{$usuario->name}}</td>
                                        @endif
                                    @endforeach    
                                    <td class="table-primary">{{$cita->asunto}}</td>
                                    @foreach($doctores as $doctor)
                                        @if($cita->id_doctor == $doctor->id)
                                            <td class="table-primary">{{$doctor->nombre}}</td>
                                        @endif
                                    @endforeach     
                                    <td class="table-primary"><a button type="button" class="btn btn-success btn-sm" href="{{route('crearhistorial',['id'=>$cita->id])}}">HISTORIAL</button></a></td>   
                                    <td class="table-primary"><a button type="button" class="btn btn-info btn-sm" href="{{route('detalle1',['id'=>$cita->id])}}">DETALLE</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-warning btn-sm" href="{{route('editar1',['id'=>$cita->id])}}">EDITAR</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-danger btn-sm" href="{{route('borrar1',['id'=>$cita->id])}}">ELIMINAR</button></a></td>
                                    @endforeach
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection