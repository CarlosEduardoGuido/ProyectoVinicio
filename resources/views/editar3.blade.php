@extends('dasboard')

@section('contenido')
                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h1 class="mb-4">INFORMACION DE LAS ESPECIALIDADES</h1>
                            <form action="{{route('salvar3',['id'=> $especialidades->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{@method_field('PUT')}}
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ESPECIALIDAD</span>
                                <input type="text" class="form-control"  placeholder="ESPECIALIDAD" aria-label=ESPECIALIDAD
                                    aria-describedby="basic-addon1" name="especialidad" id="especialidad"  value="{{ $especialidades->especialidad }}">
                            </div>
                            @error('especialidad')
                        <small>*{{$message}}</small>
                        @enderror
                        <br>
                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </form>
                        </div>
                    </div>
                <a href="{{route('especialidades')}}">
                    <button class="btn btn-primary">Regresar</button>
                </a><br>
    </center>
</body>
<script >
	const $especialidad =document.querySelector("#especialidad");
	const patronespecialidad = /[a-zA-Z]+/;
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