@extends('dasboard')

@section('contenido')
                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h1 class="mb-4">EDITAR PRODUCTOS</h1>
                            <form action="{{route('salvarP',['id'=> $producto->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{@method_field('PUT')}}
                        
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">NOMBRE</span>
                                <input type="text" class="form-control"  aria-describedby="basic-addon1" name="name" id="name" value="{{ $producto->name }}">
                            </div>
                             @error('name')
                            <small>*{{$message}}</small>
                            @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">DESCRIPCION</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="slug"  id="slug" value="{{ $producto->slug }}">
                            </div>
                            @error('slug')
                            <small>*{{$message}}</small>
                            @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">PRECIO</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="price"  id="price" value="{{ $producto->price }}">
                            </div>
                            @error('price')
                            <small>*{{$message}}</small>
                            @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Imagen</span>
                                <input type="file" class="form-control" aria-describedby="basic-addon1"  name="image_path"  onchange="return fileValidation()"id="image_path" value="{{ $producto->image_path }}">
                            </div>                          
                             <button type="submit" class="btn btn-primary">GUARDAR</button>
                                <br>
                            </form>
                            <br>
                            <a href="{{route('productos')}}"><button class="btn btn-primary">REGRESAR</button></a><br>
                        </div>
                    </div>
    </center>
</body>
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
	
		const $slug =document.querySelector("#slug");
		const patronslug = /[a-zA-Z]+/;
	
		$slug.addEventListener("keydown", event => {
			if (patronslug.test(event.key)) {
				document.getElementById('slug').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $price =document.querySelector("#price");
		const patronprice = /[/^\d*\.?\d*$/]+/;
	
		$price.addEventListener("keydown", event => {
			if (patronprice.test(event.key)) {
				document.getElementById('price').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
        
        function fileValidation() {
            var fileInput =
                document.getElementById('image_path');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Formato invalido');
                fileInput.value = '';
                return false;
           
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        
	</script>
</html>

@endsection