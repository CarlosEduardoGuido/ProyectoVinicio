@extends('dasboard')

@section('contenido')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <center>
        <h1>Agregar un Nuevo Paciente</h1>
    <br>
    <form action="{{route('salvarusuario')}}" method="POST">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">NOMBRE</span>
              <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
              aria-describedby="basic-addon1" name="name" id="nombreu">
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">NUMERO</span>
              <input type="text" class="form-control" placeholder="NUMERO" aria-label="NUMERO"
              aria-describedby="basic-addon1" name="numero" required minlength="10" maxlength="10" >
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">DIRECCION</span>
              <input type="text" class="form-control" placeholder="DIRECCION" aria-label="DIRECCION"
              aria-describedby="basic-addon1" name="direccion" required minlength="10" maxlength="40" >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CORREO</span>
            <input type="text" class="form-control" placeholder="CORREO" aria-label="CORREO"
            aria-describedby="basic-addon1" name="email" required minlength="10" maxlength="40" >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CONTRASEÑA</span>
            <input type="text" class="form-control" placeholder="CONTRASEÑA" aria-label="CONTRASEÑA"
            aria-describedby="basic-addon1" name="password" required minlength="10" maxlength="40" >
        </div>
        <div class="input-group mb-3">
            <select class="form-select mb-3" aria-label="TIPO DE USUARIO" name="role">
                <option selected>SELECCIONA EL TIPO DE USUARIO</option>
                <option value="admin">ADMINISTRADOR</option>
                <option value="">PACIENTE</option>
            </select>
        </div>
        <input type="hidden" value="Correcto" name="avisodeprivacidad">
         <input class="btn btn-primary" type="submit" value="Agregar">
    </form>

    </center>
</body>
<script>
    const $nombreu = document.querySelector("#nombreu");
    const patronusuario = /[a-zA-Z/]+/;
    console.log($nombreu);
    $nombreu.addEventListener("keydown", event => {
        if (patronusuario.test(event.key)) {
            document.getElementById('nombreu').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
</script>
</html>

@endsection

