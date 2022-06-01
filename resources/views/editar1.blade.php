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
                                <input type="time" class="form-control" placeholder="HORA DE LA CITA" aria-label="HORA DE LA CITA"
                                    aria-describedby="basic-addon1" name=" hora_cita" required minlength="6" maxlength="6" value="{{ $cita->hora_cita }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">CITA</span>
                                <input type="date" class="form-control" placeholder="CITA" aria-label="CITA"
                                    aria-describedby="basic-addon1" name="cita" required minlength="6" maxlength="6" value="{{ $cita->cita }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ASUNTO</span>
                                <input type="text" class="form-control" placeholder="ASUNTO" aria-label="ASUNTO"
                                    aria-describedby="basic-addon1" name="asunto" required minlength="8" maxlength="40" value="{{ $cita->asunto }}">
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select mb-3" aria-label="Especialidad" name="id_usuario" id="id_usuario">
                                    <option value="0">SELECCIONA UN USUARIO</option>
                                    @foreach($usuarios as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select mb-3" aria-label="Especialidad" name="id_doctor" id="id_doctor">
                                    <option value="0">SELECCIONA UN DOCTOR</option>
                                    @foreach($doctores as $doctores)
                                    <option value="{{$doctores->id}}">{{$doctores->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>

                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </form>
                        </div>
                    </div>
    <a href="{{route('admin')}}">
                    <button class="btn btn-primary">Regresar</button>
                </a><br>
    </center>
</body>
</html>

@endsection