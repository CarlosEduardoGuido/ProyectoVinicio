@extends('dasboard')

@section('contenido')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <title>Nuevos Doctores</title>
</head>
<body>
    <center>
        <h1>Agregar un Nuevo Doctor</h1>
    <br>
    <form action="{{route('salvardoctores')}}" method="POST">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">NOMBRE</span>
              <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
              aria-describedby="basic-addon1" name="nombre" id="nombre" >
        </div>
        @error('nombre')
        <small>*{{$message}}</small>
         @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">NUMERO</span>
              <input type="text" class="form-control" placeholder="NUMERO" aria-label="NUMERO"
              aria-describedby="basic-addon1" name="numero" id="numero">
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
        @error('especialidad')
        <small>*{{$message}}</small>
         @enderror
         <br>
         <input class="btn btn-primary" type="submit" value="Agregar Doctor">
    </form>
    <br>
    <a href="{{route('doctores')}}">
     <button class="btn btn-primary">Regresar</button>
    </a><br>
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

