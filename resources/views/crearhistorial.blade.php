@extends('dasboard')

@section('contenido')
    <center>
        <h1>Agregar Nuevo Historial</h1>
    <br>
    <form action="{{route('salvarhistorial')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="id_cita" type="hidden" value="{{ $cita->id }}">
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">DESCRIPCION</span>
              <input type="text" class="form-control" placeholder="DESCRIPCION" aria-label="DESCRIPCION"
              aria-describedby="basic-addon1" name="descripcion" id="descripcion">
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">PRESCRIPCIONES</span>
              <input type="text" class="form-control" placeholder="PRESCRIPCIONES" aria-label="PRESCRIPCIONES"
              aria-describedby="basic-addon1" name="prescripciones" required minlength="10" maxlength="255" >
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">OBSERVACIONES</span>
              <input type="text" class="form-control" placeholder="OBSERVACIONES" aria-label="OBSERVACIONES"
              aria-describedby="basic-addon1" name="observaciones" required minlength="10" maxlength="255" >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">RECETA</span>
            <input class="form-control" type="file" id="receta" name="receta">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CONDICION</span>
            <input type="text" class="form-control" placeholder="CONDICION" aria-label="CONDICION"
            aria-describedby="basic-addon1" name="condicion" required >
        </div>
        <input class="btn btn-primary" type="submit" value="Agregar">
    </form>

    </center>
</body>
</html>

@endsection

