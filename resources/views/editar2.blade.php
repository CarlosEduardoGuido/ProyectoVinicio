@extends('dasboard')

@section('contenido')
                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h1 class="mb-4">INFORMACION DE LOS DOCTORES</h1>
                            <form action="{{route('salvar2',['id'=> $doctor->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{@method_field('PUT')}}
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                                <input type="text" class="form-control" placeholder="NOMBRE" aria-label=NOMBRE
                                    aria-describedby="basic-addon1" name=" nombre" required minlength="6" maxlength="6" value="{{ $doctor->nombre }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                                <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
                                    aria-describedby="basic-addon1" name="numero" required minlength="10" maxlength="10" value="{{ $doctor->numero }}">
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select mb-3" aria-label="Especialidad" name="id_especialidad" id="id_especialidad">
                                    <option value="0">SELECCIONA UNA ESPECIALIDAD</option>
                                    @foreach($especialidades as $especialidad)
                                    <option value="{{$especialidad->id}}">{{$especialidad->especialidad}}</option>
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