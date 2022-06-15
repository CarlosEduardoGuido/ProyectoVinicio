@extends('dasboard')
@section('contenido')
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">HISTORIAL CLINICO</h4>    
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">FECHA</th>
                                    <th scope="col">NOMBRE DEL PACIENTE</th>
                                    <th scope="col">DESCRIPCION</th>
                                    <th scope="col">PRESCRIPCIONES</th>
                                    <th scope="col">OBSERVACIONES</th>
                                    <th scope="col">RECETA</th>
                                    <th scope="col">CONDICION</th>
                                    <th scope="col" colspan=3>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($historiales as $historial)
                                <tr>
                                    <td class="table-primary">{{$historial->updated_at}}</td>
                                    @foreach($citas as $cita)
                                        @if($historial->id_cita == $cita->id)
                                            @foreach($usuarios as $usuario)
                                                @if($cita->id_usuario == $usuario->id)
                                                    <td class="table-primary">{{$usuario->name}}</td>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <td class="table-primary">{{$historial->descripcion}}</td>
                                    <td class="table-primary">{{$historial->prescripciones}}</td>     
                                    <td class="table-primary">{{$historial->observaciones}}</td>
                                    <td class="table-primary">{{$historial->receta}}</td> 
                                    <td class="table-primary">{{$historial->condicion}}</td>      
                                    <td class="table-primary"><a button type="button" class="btn btn-info btn-sm" href="{{route('detallehistorial',['id'=>$historial->id])}}">DETALLE</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-warning btn-sm" href="{{route('editarhistorial',['id'=>$historial->id])}}">EDITAR</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-danger btn-sm" href="{{route('borrarhistorial',['id'=>$historial->id])}}">BORRAR</button></a></td>
                                    @endforeach
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection