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
            <!-- Recent Sales End -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">INFORMACION DE CITAS</h4>
                        <a button type="button" class="btn btn-success btn-sm" href="{{route('altacitas')}}">AGREGAR CITA</button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">HORA DE CITA</th>
                                    <th scope="col">CITA</th>
                                    <th scope="col">NOMBRE DEL PACIENTE</th>
                                    <th scope="col">ASUNTO</th>
                                    <th scope="col">DOCTOR</th>
                                    <th scope="col" colspan=3>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($citas as $cita)
                                <tr>
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