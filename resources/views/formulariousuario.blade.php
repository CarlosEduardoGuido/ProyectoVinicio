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
              aria-describedby="basic-addon1" name="name" id="nombreu" value="{{ old('name') }}">
        </div>
        <p id="span1"></p>
        <br>
        @error('name')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">NUMERO</span>
              <input type="text" class="form-control" placeholder="NUMERO" aria-label="NUMERO"
              aria-describedby="basic-addon1" name="numero" id="num" value="{{ old('numero') }}">
        </div>
        <p id="span2"></p>
        <br>
        @error('numero')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">DIRECCION</span>
              <input type="text" class="form-control" placeholder="DIRECCION" aria-label="DIRECCION"
              aria-describedby="basic-addon1" name="direccion" id="dir" value="{{ old('direccion') }}">
        </div>
        <p id="span3"></p>
        <br>
        @error('direccion')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CORREO</span>
            <input type="text" class="form-control" placeholder="CORREO" aria-label="CORREO"
            aria-describedby="basic-addon1" name="email" id="cor" value="{{ old('email') }}">
        </div>
        <br>
        @error('email')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CONTRASEÑA</span>
            <input type="text" class="form-control" placeholder="CONTRASEÑA" aria-label="CONTRASEÑA"
            aria-describedby="basic-addon1" name="password" id="pass" value="{{ old('password') }}">
        </div>
        <br>
        @error('password')
            <small>*{{ $message }}</small>  
            <br>  
        @enderror
        <input type="hidden" value="Correcto" name="avisodeprivacidad">
         <input class="btn btn-primary" type="submit" value="Agregar">
    </form>

    </center>
</body>
<script>
    const $nombreu = document.querySelector("#nombreu");
    const $span1 = document.querySelector("#span1");
    const $num = document.querySelector("#num");
    const $dir = document.querySelector("#dir");
    const patronusuario = /[a-zA-Z/]+/;
    const patronnum = /[0-9]+/;
    const patrondir = /[a-zA-Z0-9]+/;

    $nombreu.addEventListener("keydown", event => {
            if (patronusuario.test(event.key)) {
                document.getElementById('nombreu').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('nombreu').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span1').innerHTML='Solo se admiten letras';
                }
            }
        });

    $num.addEventListener("keydown", event => {
            if (patronnum.test(event.key)) {
                document.getElementById('num').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('num').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span2').innerHTML='Solo se admiten numeros';
                }
            }
        });
    $dir.addEventListener("keydown", event => {
            if (patrondir.test(event.key)) {
                document.getElementById('dir').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('dir').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span3').innerHTML='Solo se admiten letras y numeros';
                }
            }
        });

</script>
</html>

@endsection

