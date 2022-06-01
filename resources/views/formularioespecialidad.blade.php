@extends('dasboard')

@section('contenido')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <title>Nuevas Especialidades</title>
</head>
<body>
    <center>
        <h1>Agregar una Nueva Especialidad</h1>
    <br>
    <form action="{{route('salvarespecialidad')}}" method="POST">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ESPECIALIDAD</span>
              <input type="text" class="form-control" placeholder="ESPECIALIDAD" aria-label="ESPECIALIDAD"
              aria-describedby="basic-addon1" name="especialidad" id="especialidad">
        </div>
         <input class="btn btn-primary" type="submit" value="Agregar Especialidad">
    </form>
    </center>
</body>
<script>
        const $especialidad = document.querySelector("#especialidad");
    const patronespecialidad = /[a-zA-Z/]+/;
console.log($especialidad);
    $especialidad.addEventListener("keydown", event => {
        if (patronespecialidad.test(event.key)) {
            document.getElementById('especialidad').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
</script>
</html>

@endsection

