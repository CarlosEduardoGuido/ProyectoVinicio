@extends('plantilla.plantilla')

@section('contenido')
<hr>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<form action="{{route('agendarc')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">HORA DE LA CITA</span>
              <select name="hora_cita" id="" class="form-control">
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
              </select>
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">FECHA DE LA CITA</span>
              <select name="cita" id="" class="form-control">
                  <option value="Lunes">Lunes</option>
                  <option value="Martes">Martes</option>
                  <option value="Miercoles">Miercoles</option>
                  <option value="Jueves">Jueves</option>
                  <option value="Viernes">Viernes</option>
              </select>
        </div>
        <input type="hidden" name="id_usuario" value="{{$id_usuario}}">
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ASUNTO</span>
              <input type="text" class="form-control"  placeholder="ASUNTO" aria-label="ASUNTO"
              aria-describedby="basic-addon1"name="asunto" id="asunto">
        </div>
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">DOCTOR</span>
              <select name="id_doctor" id="" class="form-control">
                  <option value="0">Selecciona un Doctor</option>
                  @foreach($doctores as $doctor)
                    <option value="{{$doctor->id}}">{{$doctor->nombre}}</option>
                  @endforeach
              </select>
        </div>
        
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>         
    </form>
    <script>

      const $nombreCompleto = document.querySelector("#nombreCompleto");
      const patronName = /[a-zA-Z/]+/;
      console.log($nombreCompleto);
      $nombreCompleto.addEventListener("keydown", event => {
        if (patronName.test(event.key)) {
            document.getElementById('nombreCompleto').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    const $asunto = document.querySelector("#asunto");
    const patronAsunto = /[a-zA-Z/]+/;
    console.log($asunto);
    $asunto.addEventListener("keydown", event => {
        if (patronAsunto.test(event.key)) {
            document.getElementById('asunto').style.border = "1px solid #00cc00";
        } else {
            if (event.keyCode == 8 || event.keyCode == 32) {} else {
                event.preventDefault();
            }
        }
    });
    </script>
    @endsection
