@extends('dasboard')

@section('contenido')
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">INFORMACION DEL USUARIO</h6>
                            <form action="{{route('salvar',['id'=> $usuario->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{@method_field('PUT')}}
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                                <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
                                    aria-describedby="basic-addon1" name="nombre" required minlength="4" maxlength="40"  value="{{ $usuario->name }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NUMERO</span>
                                <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
                                    aria-describedby="basic-addon1" name="numero"required minlength="10" maxlength="10"  value="{{ $usuario->numero }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">DIRECCION</span>
                                <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
                                    aria-describedby="basic-addon1" name="direccion" required minlength="10" maxlength="50"  value="{{ $usuario->direccion }}">
                            </div>

                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </form>
                        </div>
                    </div>
                <a href="{{route('admin')}}">
                    <button class="btn btn-primary">Regresar</button>
                </a><br>
    </center>

@endsection