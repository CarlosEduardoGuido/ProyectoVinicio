@extends('dasboard')
@section('contenido')
     <!-- Recent Sales Start -->
     <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">INFORMACION DE USUARIOS</h4>
                        <a button type="button" class="btn btn-success btn-sm" href="{{route('altausuario')}}">AGREGAR USUARIO</button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">NOMBRE DEL PACIENTE</th>
                                    <th scope="col">NUMERO DE TELEFONO</th>
                                    <th scope="col">DIRECCION</th>
                                    <th scope="col">CORREO</th>
                                    <th scope="col" colspan=3>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                   @foreach($usuarios as $usuario)
                                   <tr>
                                       <td  class="table-primary">{{$usuario -> name}}</td>
                                       <td  class="table-primary">{{$usuario -> numero}}</td>
                                       <td  class="table-primary">{{$usuario -> direccion}}</td> 
                                       <td  class="table-primary">{{$usuario -> email}}</td>               
                                       <td  class="table-primary"><a button type="button" class="btn btn-info btn-sm" href="{{route('detalle',['id'=>$usuario->id])}}">DETALLE</button></a></td>
                                       <td  class="table-primary"><a button type="button" class="btn btn-warning btn-sm" href="{{route('editar',['id'=>$usuario->id])}}">EDITAR</button></a></td>
                                       <td  class="table-primary"><a button type="button" class="btn btn-danger btn-sm" href="{{route('borrar',['id'=>$usuario->id])}}">ELIMINAR</button></a></td>
                                        @endforeach
                                    </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection