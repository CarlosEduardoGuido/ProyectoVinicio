@extends('dasboard')
@section('contenido')
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">INFORMACION DE LAS ESPECIALIDADES</h4>
                        <a button type="button" class="btn btn-success btn-sm" href="{{route('altaespecialidad')}}">AGREGAR ESPECIALIDAD</button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">ESPECIALIDAD</th>
                                    <th scope="col" colspan="3">ACCIONES</th>
                                </tr>
                            </thead>
                            <thead>
                            <tbody>
                               @foreach($especialidades as $especialidad)
                                <tr>
                                    <td class="table-primary">{{$especialidad ->especialidad}}</td>
                                    <td class="table-primary"><a button type="button" class="btn btn-info btn-sm" href="{{route('detalle3',['id'=>$especialidad->id])}}">DETALLE</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-warning btn-sm" href="{{route('editar3',['id'=>$especialidad->id])}}">EDITAR</button></a></td>
                                    <td class="table-primary"><a button type="button" class="btn btn-danger btn-sm" href="{{route('borrar3',['id'=>$especialidad->id])}}">ELIMINAR</button></a></td>
                                  @endforeach
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection