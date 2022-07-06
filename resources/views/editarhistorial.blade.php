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
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">PRESCRIPCIONES</span>
              <input type="text" class="form-control" placeholder="PRESCRIPCIONES" aria-label="PRESCRIPCIONES"
              aria-describedby="basic-addon1" name="prescripciones" required minlength="10" maxlength="255" value="{{$historial->prescripciones}}">
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">OBSERVACIONES</span>
              <input type="text" class="form-control" placeholder="OBSERVACIONES" aria-label="OBSERVACIONES"
              aria-describedby="basic-addon1" name="observaciones" required minlength="10" maxlength="255" value="{{$historial->observaciones}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">RECETA</span>
            <input class="form-control" type="file" id="receta" name="receta" value="{{$historial->receta}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">CONDICION</span>
            <input type="text" class="form-control" placeholder="CONDICION" aria-label="CONDICION"
            aria-describedby="basic-addon1" name="condicion" required value="{{$historial->condicion}}">
        </div>
        <input class="btn btn-primary" type="submit" value="Agregar">
    </form>
    <br>
    <a href="{{route('admin')}}">
     <button class="btn btn-primary">Regresar</button>
    </a><br>
    </center>
</body>
</html>

@endsection

