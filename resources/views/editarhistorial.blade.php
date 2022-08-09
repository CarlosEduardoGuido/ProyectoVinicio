@extends('dasboard')

@section('contenido')
    <center>
        <h1>Editar Historial</h1>
    <br>
    <form action="{{route('guardarhistorial',['id'=> $historial->id])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{@method_field('PUT')}}
        <input name="id_cita" type="hidden" value="{{ $historial->id_cita }}">
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">DESCRIPCION</span>
              <input type="text" class="form-control" placeholder="DESCRIPCION" aria-label="DESCRIPCION"
              aria-describedby="basic-addon1" name="descripcion" id="descripcion" value="{{$historial->descripcion}}">
        </div>
        <p id="span1"></p>
        <br>
        @error('descripcion')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">PRESCRIPCIONES</span>
              <input type="text" class="form-control" placeholder="PRESCRIPCIONES" aria-label="PRESCRIPCIONES"
              aria-describedby="basic-addon1" name="prescripciones" id="prescrip" value="{{$historial->prescripciones}}">
        </div>
        <p id="span2"></p>
        <br>
        @error('prescripciones')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">OBSERVACIONES</span>
              <input type="text" class="form-control" placeholder="OBSERVACIONES" aria-label="OBSERVACIONES"
              aria-describedby="basic-addon1" name="observaciones" id="obser"  value="{{$historial->observaciones}}">
        </div>
        <p id="span3"></p>
        <br>
        @error('observaciones')
            <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">RECETA</span>
            <input class="form-control" type="file" id="receta" name="receta" accept="application/pdf" value="{{$historial->receta}}">
        </div>
        @error('receta')
        <small>*{{ $message }}</small>    
        @enderror
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CONDICION</span>
            <input type="text" class="form-control" placeholder="CONDICION" aria-label="CONDICION"
            aria-describedby="basic-addon1" name="condicion" id="cond" value="{{$historial->condicion}}">
        </div>
        <p id="span4"></p>
        <br>
        @error('condicion')
            <small>*{{ $message }}</small> 
            <br>   
        @enderror
        <input class="btn btn-primary" type="submit" value="Agregar">
    </form>
    <br>
    <a href="{{route('admin')}}">
     <button class="btn btn-primary">Regresar</button>
    </a><br>
    </center>
</body>
<script>
    const $descripcion = document.querySelector("#descripcion");
    const $span1 = document.querySelector("#span1");
    const $prescrip = document.querySelector("#prescrip");
    const $obser = document.querySelector("#obser");
    const $cond = document.querySelector("#cond");
    const patronletras = /[a-zA-Z/]+/;
    const patronnum = /[0-9]+/;
    const patronpre = /[a-zA-Z0-9]+/;

    $descripcion.addEventListener("keydown", event => {
            if (patronletras.test(event.key)) {
                document.getElementById('descripcion').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('descripcion').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span1').innerHTML='Solo se admiten letras';
                }
            }
        });

    $prescrip.addEventListener("keydown", event => {
            if (patronpre.test(event.key)) {
                document.getElementById('prescrip').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('prescrip').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span2').innerHTML='Solo se admiten letras y numeros';
                }
            }
        });
    $obser.addEventListener("keydown", event => {
            if (patronletras.test(event.key)) {
                document.getElementById('obser').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('obser').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span3').innerHTML='Solo se admiten letras';
                }
            }
        });
    $cond.addEventListener("keydown", event => {
            if (patronletras.test(event.key)) {
                document.getElementById('cond').style.border = "1px solid #00cc00";
            } else {
                if (event.keyCode == 8 || event.keyCode == 32) {} else {
                    document.getElementById('cond').style.border = "1px solid #ff0000 ";
                    event.preventDefault();
                    document.getElementById('span4').innerHTML='Solo se admiten letras';
                }
            }
        });

</script>
</html>

@endsection

