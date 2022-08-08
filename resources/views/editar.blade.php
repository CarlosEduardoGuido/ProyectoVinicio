@extends('dasboard')

@section('contenido')
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">INFORMACION DEL USUARIO</h6>
                            <form action="{{route('salvar',['id'=> $usuario->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{@method_field('PUT')}}
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                                <input type="text" class="form-control" placeholder="NOMBRE" aria-label="NOMBRE"
                                    aria-describedby="basic-addon1" name="name" id="name"  minlength="4" maxlength="40"  value="{{ $usuario->name }}">
                            </div>
                            @error('name')
                        <small>*{{$message}}</small>
                        @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NUMERO</span>
                                <input type="number" class="form-control" placeholder="NUMERO" aria-label="NUMERO"
                                    aria-describedby="basic-addon1" name="numero" id="numero"  minlength="10" maxlength="10"  value="{{ $usuario->numero }}">
                            </div>
                            @error('numero')
                        <small>*{{$message}}</small>
                        @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">DIRECCION</span>
                                <input type="text" class="form-control" placeholder="DIRECCION" aria-label="DIRECCION"
                                    aria-describedby="basic-addon1" name="direccion" id="direccion"  minlength="10" maxlength="50"  value="{{ $usuario->direccion }}">
                            </div>
                            @error('direccion')
                        <small>*{{$message}}</small>
                        @enderror
                        <br>
                                 <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </form>
                        </div>
                    </div>
                <a href="{{route('usuarios')}}">
                    <button class="btn btn-primary">Regresar</button>
                </a><br>
    </center>

    <script >
	const $name =document.querySelector("#name");
	const patronName = /[a-zA-Z]+/;
		$name.addEventListener("keydown", event => {
			if (patronName.test(event.key)) {
				document.getElementById('name').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});

        const $numero =document.querySelector("#numero");
	const patronnumero = /[0-9]+/;
		$numero.addEventListener("keydown", event => {
			if (patronnumero.test(event.key)) {
				document.getElementById('numero').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
	
		const $direccion =document.querySelector("#direccion");
		const patrondireccion = /[a-zA-Z]+/;
	
		$direccion.addEventListener("keydown", event => {
			if (patrondireccion.test(event.key)) {
				document.getElementById('direccion').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
        
	</script>
@endsection