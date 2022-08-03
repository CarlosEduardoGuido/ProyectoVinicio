@extends('dasboard')
@section('contenido')

    <div class="container-fluid px-1 px-sm-3 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="row card0">
            <div class="card1 col-lg-6 col-md-2">
            <center>
            <h3>Detalle del Producto</h3>
            </center>
                <div class="text-center">
                <img src="{{ asset('images/'.$producto->image_path) }}" 
                class="card-img-top mx-auto"
                style="height: 250px; width: 250px;display: block;"
                alt="{{ $producto->image_path }}">
                </div>
            </div>
            <div class="card2 col-lg-4 col-md-5"><table class="table">
                    <thead>
                        <tr>
                        <th scope="col">NOMBRE:</th>
                        <th scope="col">{{$producto->name}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">DESCRIPCION:</th>
                        <td>{{$producto->slug}}</td>
                        </tr>
                        <tr>
                        <th scope="row">PRECIO:</th>
                        <td>${{$producto->price}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="{{route('productos')}}"><button class="btn btn-primary">Regresar</button></a>
                 </div>
            </div>
        </div>
    </div>
</div>    
@endsection