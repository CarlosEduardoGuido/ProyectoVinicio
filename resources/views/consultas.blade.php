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
        @error('hora_cita')
        <small>*{{$message}}</small>
         @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">FECHA DE LA CITA</span>
              <input type="date" id="" class="form-control" name="cita" value=""  min="2022-01-01" max="2023-12-31">
        </div>
        @error('cita')
        <small>*{{$message}}</small>
         @enderror
        <input type="hidden" name="id_usuario" value="{{$id_usuario}}">
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ASUNTO</span>
              <input type="text" class="form-control"  placeholder="ASUNTO" aria-label="ASUNTO"
              aria-describedby="basic-addon1"name="asunto" id="asunto">
        </div>
        @error('asunto')
        <small>*{{$message}}</small>
         @enderror
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">DOCTOR</span>
              <select name="id_doctor" id="" class="form-control">
                  <option value="0">Selecciona un Doctor</option>
                  @foreach($doctores as $doctor)
                    <option value="{{$doctor->id}}">{{$doctor->nombre}}</option>
                  @endforeach
              </select>
        </div>
        @error('id_doctor')
        <small>*{{$message}}</small>
         @enderror
        
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>         
    </form>
    <script>

    
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
