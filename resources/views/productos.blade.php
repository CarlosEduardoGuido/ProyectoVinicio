@extends('dasboard')
@section('contenido')
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">PRODUCTOS</h4>
                        <a button type="button" class="btn btn-success btn-sm" href="{{route('altaproductos')}}">AGREGAR PRODUCTOS</button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">DESCRIPCION</th>
                                    <th scope="col">PRECIO</th>
                                    <th scope="col">IMAGEN</th>
                                    <th scope="col" colspan=3>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                   @foreach($productos as $producto)
                                   <tr>
                                       <td  class="table-primary">{{$producto -> name}}</td>                                       
                                       <td  class="table-primary">{{$producto -> slug}}</td>    
                                       <td  class="table-primary">{{$producto -> price}}</td>
                                       <td  class="table-primary"> <img src="images/{{ $producto->image_path }}" 
                                       class="card-img-top mx-auto"
                                       style="height: 100px; width: 100px;display: block;"
                                       alt="{{ $producto->image_path }}"></td>           
                                       <td  class="table-primary"><a button type="button" class="btn btn-info btn-sm" href="{{route('detalleP',['id'=>$producto->id])}}">DETALLE</button></a></td>
                                       <td  class="table-primary"><a button type="button" class="btn btn-warning btn-sm" href="{{route('editarP',['id'=>$producto->id])}}">EDITAR</button></a></td>
                                       <td  class="table-primary"><a button type="button" class="btn btn-danger btn-sm" href="{{route('borrarP',['id'=>$producto->id])}}">ELIMINAR</button></a></td>
                                        @endforeach
                                    </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection