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
                                    aria-describedby="basic-addon1" name="nombre" id="nombre"  value="{{ $doctor->nombre }}">
                            </div>
                            @error('nombre')
                            <small>*{{$message}}</small>
                            @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NUMERO</span>
                                <input type="text" class="form-control" placeholder="NUMERO" aria-label="NOMBRE"
                                    aria-describedby="basic-addon1" name="numero" id="numero"   value="{{ $doctor->numero }}">
                            </div>
                            @error('numero')
                            <small>*{{$message}}</small>
                            @enderror
                            <div class="input-group mb-3">
                                <select class="form-select mb-3" aria-label="Especialidad" name="id_especialidad" id="id_especialidad">
                                    <option value="0">SELECCIONA UNA ESPECIALIDAD</option>
                                    @foreach($especialidades as $especialidad)
                                    <option value="{{$especialidad->id}}">{{$especialidad->especialidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                                <br>
                            </form>
                            <br>
                            <a href="{{route('doctores')}}"><button class="btn btn-primary">REGRESAR</button></a><br>
                        </div>
                    </div>
    </center>
</body>
<script>
      const $nombre = document.querySelector("#nombre");
    const patronName = /[a-zA-Z/]+/;
console.log($nombre);
    $nombre.addEventListener("keydown", event => {
        if (patronName.test(event.key)) {
            document.getElementById('nombre').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    const $numero = document.querySelector("#numero");
    const patronnumero = /[0-9]+/;
console.log($numero);
    $numero.addEventListener("keydown", event => {
        if (patronnumero.test(event.key)) {
            document.getElementById('numero').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    
</script>
</html>

@endsection