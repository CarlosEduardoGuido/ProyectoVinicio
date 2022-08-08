@extends('dasboard')

@section('contenido')

                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h1 class="mb-4">INFORMACION DE LA CITA</h1>
                            <form action="{{route('salvar1',['id'=> $cita->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{@method_field('PUT')}}
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">HORA DE LA CITA</span>
                                <input type="text" class="form-control" placeholder="HORA DE LA CITA" aria-label="HORA DE LA CITA"
                                    aria-describedby="basic-addon1" name=" hora_cita" id=" hora_cita"   value="{{ $cita->hora_cita }}">
                            </div>
                            @error('hora_cita')
                        <small>*{{$message}}</small>
                        @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">CITA</span>
                                <input type="text" class="form-control" placeholder="CITA" aria-label="CITA"
                                    aria-describedby="basic-addon1" name="cita" id="cita" value="{{ $cita->cita }}">
                            </div>
                            @error('cita')
                        <small>*{{$message}}</small>
                        @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ASUNTO</span>
                                <input type="text" class="form-control" placeholder="ASUNTO" aria-label="ASUNTO"
                                    aria-describedby="basic-addon1" name="asunto"  id="asunto"  value="{{ $cita->asunto }}">
                            </div>
                            @error('asunto')
                        <small>*{{$message}}</small>
                        @enderror
                            <div class="input-group mb-3">
                                <select class="form-select mb-3" aria-label="Especialidad" name="id_usuario" id="id_usuario">
                                    <option value="0">SELECCIONA UN USUARIO</option>
                                    @foreach($usuarios as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_usuario')
                        <small>*{{$message}}</small>
                        @enderror
                            <div class="input-group mb-3">
                                <select class="form-select mb-3" aria-label="Especialidad" name="id_doctor" id="id_doctor">
                                    <option value="0">SELECCIONA UN DOCTOR</option>
                                    @foreach($doctores as $doctores)
                                    <option value="{{$doctores->id}}">{{$doctores->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_doctor')
                        <small>*{{$message}}</small>
                        @enderror
                        <br>

                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </form>
                            <br>
                    <a href="{{route('citas')}}">
                                    <button class="btn btn-primary">Regresar</button>
                </a><br>
                        </div>
                    </div>
                   

</body>
</html>

@endsection