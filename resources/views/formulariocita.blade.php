@extends('dasboard')

@section('contenido')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <title>Nuevas Citas</title>
</head>
<body>
    <center>
        <h1>Agregar una Nueva Cita</h1>
    <br>
    <form action="{{route('salvarcitas')}}" method="POST">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">HORA DE LA CITA</span>
              <input type="time" class="form-control" placeholder="HORA DE LA CITA" aria-label="HORA DE LA CITA"
              aria-describedby="basic-addon1" name="hora_cita"  minlength="6" maxlength="6">
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">CITA</span>
              <input type="date" class="form-control" placeholder="CITA" aria-label="CITA"
              aria-describedby="basic-addon1" name="cita"  minlength="6" maxlength="6">
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ASUNTO</span>
              <input type="text" class="form-control" placeholder="ASUNTO" aria-label="ASUNTO"
              aria-describedby="basic-addon1" name="asunto"  id="asuntoc">
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
         <input class="btn btn-primary" type="submit" value="Agregar">
    </form>
    </center>
</body>
<script>
      const $asuntoc = document.querySelector("#asuntoc");
    const patronasuntoc = /[a-zA-Z/]+/;
console.log($asuntoc);
    $asuntoc.addEventListener("keydown", event => {
        if (patronasuntoc.test(event.key)) {
            document.getElementById('asuntoc').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
</script>
</html>

@endsection

